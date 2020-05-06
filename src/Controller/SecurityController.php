<?php

namespace App\Controller;


use App\Aweber\MyApp;
use App\Encoders\SaltMaker;
use App\Entity\Bonus;
use App\Entity\BonusValue;
use App\Entity\CountryList;
use App\Entity\GamesList;
use App\Entity\MainPage;
use App\Entity\SoftwaresList;
use App\Entity\Subscription;
use App\Form\UserupdateType;
use App\Mailer\Mailer;
use App\RegisterLogin\FacebookSignIn;
use App\RegisterLogin\GoogleSignIn;
use App\RegisterLogin\TwitterSignIn;
use App\RegisterLogin\UserRegister;
use App\SocialRegister\SocialRegister;
use App\Utils\Locator;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Ramsey\Uuid\Uuid;




class SecurityController extends Controller
{

    private $fb_app_id;
    private $fb_app_secret;
    private $fb_redirect_uri;

    public function __construct($facebookAppId,$facebookAppSecret,$facebookRedirectUri)
    {
        $this->fb_app_id=$facebookAppId;
        $this->fb_app_secret=$facebookAppSecret;
        $this->fb_redirect_uri=$facebookRedirectUri;
    }


    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
        return new JsonResponse('Ok');

    }


    /**
     * @Route(path="/logout",name="security_logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }



    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request, UserRegister $userRegister)
    {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $first=json_decode($request->getContent(),true)['plainPassword']['first'];
        $second=json_decode($request->getContent(),true)['plainPassword']['second'];
        if(empty($first))
        {
            return new JsonResponse(json_encode('Password should not be empty'));
        }
        elseif($first!==$second)
        {
            return new JsonResponse(json_encode('Password does not match!'));
        }

        $form->submit(json_decode($request->getContent(), true));

        if ($form->isSubmitted() && $form->isValid()) {
            $userRegister->setUser($user);
            return new JsonResponse(json_encode($userRegister->register()));
        } else {

            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors []= $error->getMessage();
            }

            return new JsonResponse(json_encode($errors));
        }


    }


    /**
     * @Route(path="/googlesignin",name="googlesignin")
     */
    public function googleSignIn(Request $request,GoogleSignIn $googleSignIn)
    {


      $id=$request->request->get("id");
      $name=$request->request->get("name");
      $email=$request->request->get("email");

      $response=new JsonResponse();

      if(empty($id)||empty($email)){
          $response->setStatusCode(400);
          return $response;
      }


          $googleSignIn->setUserGoogleId($id);
          $googleSignIn->setUserGoogleEmail($email);
          $googleSignIn->setUserGoogleName($name);
          $user=$googleSignIn->authenticate();
          if(!$user instanceof User) return $this->redirectToRoute("index");
          $token=new UsernamePasswordToken($user,null,'main',$user->getRoles());
          $this->get('security.token_storage')->setToken($token);
          $this->get('session')->set('_security_main', serialize($token));
          $event = new InteractiveLoginEvent($request, $token);
          $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

        $response->setStatusCode(200);
        return $response;
    }


    /**
     * @Route(path="/facebooklogin",name="facebooklogin")
     */
    public function facebooklogin(Request $request,FacebookSignIn $facebookSignIn)
    {
        $user=$facebookSignIn->authenticate();
        if($user instanceof User) {
            $token=new UsernamePasswordToken($user,null,'main',$user->getRoles());
            $this->get('security.token_storage')->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));
            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
        }
        return $this->redirectToRoute('index');
    }


    /**
     * @Route(path="/twitterlogin",name="twitterlogin")
     */
    public function twitterlogin(Request $request,TwitterSignIn $twitterSignIn)
    {
        $twitterSignIn->setRequest($request);
        $user=$twitterSignIn->authenticate();
        if(!$user instanceof User) return $this->redirectToRoute('index');

        $token=new UsernamePasswordToken($user,null,'main',$user->getRoles());
        $this->get('security.token_storage')->setToken($token);
        $this->get('session')->set('_security_main', serialize($token));
        $event = new InteractiveLoginEvent($request, $token);
        $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
        return $this->redirectToRoute('index');
    }





    /**
     * @Route(path="/accountconfirmation",name="accountconfirmation")
     */
    public function accountConfirmation(Request $request,EntityManagerInterface $em, Locator $locator,SocialRegister $socialRegister,MyApp $myApp)
    {
        $username=$request->query->get('username');
        $token=$request->query->get('token');

        $user=$em->getRepository(User::class)->findOneBy(['username'=>$username,'token'=>$token]);

        if($user instanceof User)
        {
            $user->setIsActive(true);
            $user->setToken(null);
            $em->merge($user);
            $em->flush();

            if($user->getNewsletter() && !$myApp->findSubscriber($user->getEmail()))
            {
                $list = $myApp->findList($myApp->getSubscribersList());

                $subscriber = array(
                    'email' => $user->getEmail(),
                    'name'  => $user->getUsername()
                );

                $myApp->addSubscriber($subscriber, $list);
            }

            return $this->render('register_confirmation.html.twig', [
                'bodyclass' => '',
                'countrylist' => $em->getRepository(CountryList::class)->findAll(),
                'gameslist' => $em->getRepository(GamesList::class)->findAll(),
                'latestbonuses' => $em->getRepository(Bonus::class)->getLatestBonuses($locator->getCountry($request->getClientIp())),
                'socialregister' => $socialRegister,
                'softwareslist' => $em->getRepository(SoftwaresList::class)->findAll(),
                'bonusesbyvalue' =>$bonusesByValue=$em->getRepository(BonusValue::class)->findAll(),
                'page' => $em->getRepository(MainPage::class)->findOneBy(['code'=>'Index']),
            ]);
        }

        throw $this->createNotFoundException();
    }



    /**
     * @Route(path="/bodyregister",name="testmail")
     */
    public function mail(Request $request,SocialRegister $socialRegister)
    {
        $data=json_decode($request->getContent(),1);
        $name=$data['name'];
        $email=$data['email'];
        $socialRegister->createLinks();
        return new Response($this->renderView('User/register_form.html.twig',[
            'name'=>$name,
            'email'=>$email,
            'facebook'=> $socialRegister->getLoginUrl(),
            'google'=>$socialRegister->getAuthUrl(),
            'twitter'=>$socialRegister->getUrl()
        ]));
    }




    /**
     * @Route(path="/userinformationinitiate",name="userinformationinitiate")
     */
    public function userInformationInitiate(AuthorizationCheckerInterface $authorizationChecker)
    {


        if($authorizationChecker->isGranted('ROLE_USER') || $authorizationChecker->isGranted('ROLE_ADMIN'))
        {
            $user=$this->getUser();
            $updateForm=$this->renderView('User/update_form.html.twig',['user'=>$user]);
            return new Response($updateForm);
        }

    }


    /**
     * @Route(path="/updateuser")
     */
    public function updateuser(Request $request,ValidatorInterface $validator,EntityManagerInterface $em,Mailer $mail)
    {

        $username=$request->request->get("reg_username");

        $email=$request->request->get('reg_email');

        $image=$request->files->get('userimage');

        $gender=$request->request->get('gender');

        $gender=($gender=='Male')? true : false ;


        $newsletter=$request->request->get('reg_newsletter_update');

        $newsletter=($newsletter)? true : false ;





        $user= $this->getUser();

        $oldUser = clone $user;

        if($user instanceof User && $image instanceof UploadedFile)
        {
            if(filesize($image) > 204800 || filesize($image)===false){
                return new JsonResponse(json_encode(["Uploaded photo should not be bigger than 200 kb","uploads/user/".$user->getId()."/".$user->getImage()]));
             }
            $user->setImagefile($image);
            $imgrsp=true;
        }

        $form=$this->createForm(UserupdateType::class,$user);
        $form->submit(['email'=>$email,'username'=>$username,'newsletter'=>$newsletter,'male'=>$gender]);

        if($form->isSubmitted() && $form->isValid())
        {
            if($oldUser->getEmail()!=$email)
            {

                $token=Uuid::uuid4()->toString();
                $user->setToken($token);
                $user->setIsActive(false);
                $mail->sendEmailChangeEmail($user);
                $changed_mail=true;
            }

            $em->merge($user);
            $em->flush();
            if(isset($changed_mail)) {
                return new JsonResponse(json_encode(["Succesfully updated profile, please confirm your new email.","uploads/user/".$user->getId()."/".$user->getImage()]));
            }
            $response=(isset($imgrsp))?["Succesfully updated profile image.","uploads/user/".$user->getId()."/".$user->getImage()]:["Succesfully updated profile.",false];
            return new JsonResponse(json_encode($response));
        }
        else {
            $errors = [];
            $ers=$validator->validate($user);
            foreach ($ers as $error) {

                $errors []= $error->getMessage();

            }
            $user->setUsername($oldUser->getUsername());
            $user->setEmail($oldUser->getEmail());

            return new JsonResponse(json_encode($errors));
        }


    }


    /**
     * @Route(path="/subscriptiononly", name="subscription only")
     */
    public function subscriptionOnly(Request $request,EntityManagerInterface $em,ValidatorInterface $validator,Mailer $mailer,MyApp $awebber)
    {
        $email=$request->request->get('email');

        $user=$em->getRepository(User::class)->findOneBy(['email'=>$email]);

        if($user instanceof User && $user->getNewsletter())
        {
            return new JsonResponse("You've already subscribed for newsletter.");
        }

        if($user instanceof User and !$user->getNewsletter())
        {
            $user->setNewsletter(true);
            $em->flush();
            return new JsonResponse("<span class='success'>Sucessfully subscribed</span>");

        }

        $subscription= new Subscription();
        $subscription->setEmail($email);
        $errors=$validator->validate($subscription);
        if(count($errors)>0)
        {
            $error_list=[];
            foreach ($errors as $error)
            {
                $error_list[]=$error->getMessage();
            }

            return new JsonResponse($error_list);

        }
        $token=Uuid::uuid4()->toString();
        $subscription->setToken($token);
        $em->persist($subscription);
        $em->flush();
        $mailer->sendSubscriptionEmail($subscription);
        return new JsonResponse("<span class='success'>Congratulations, check your inbox to confirm newsletter subscription</span>");



    }



    /**
     * @Route(path="/subscriptionconfirmation", name="subscription confirmation")
     */
    public function subscriptionConfirmation(Request $request,EntityManagerInterface $em, Locator $locator, SocialRegister $socialRegister,MyApp $awebber)
    {
        $token=$request->get('token');
        $subscription=$em->getRepository(Subscription::class)->findOneBy(['token'=>$token]);
        if ($subscription instanceof Subscription)
        {
            $subscription->setActive(true);
            $subscription->setToken(null);
            $em->merge($subscription);
            $em->flush();

            $subscriber = array(
                'email' => $subscription->getEmail(),
                'name'  => $subscription->getEmail()
            );
            $list =$awebber->findList($awebber->getSubscribersList());
            $awebber->addSubscriber($subscriber, $list);


            return $this->render('subscribe_confirmation.html.twig', [
                'bodyclass' => '',
                'countrylist' => $em->getRepository(CountryList::class)->findAll(),
                'gameslist' => $em->getRepository(GamesList::class)->findAll(),
                'latestbonuses' => $em->getRepository(Bonus::class)->getLatestBonuses($locator->getCountry($request->getClientIp())),
                'socialregister' => $socialRegister,
                'softwareslist' => $em->getRepository(SoftwaresList::class)->findAll(),
                'page' => $em->getRepository(MainPage::class)->findOneBy(['code'=>'Index']),
            ]);
        }
        throw $this->createNotFoundException();
    }



    /**
     * @Route(path="/adminlogin",name="adminlogin")
     */
    public function adminLogin(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/adminlogin.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }



    /**
     * @Route(path="/resetpasswordform",name="reset_password_form")
     */
    public function resetPasswordForm()
    {
        return new JsonResponse($this->renderView('reset_password_form.html.twig'));
    }


    /**
     * @Route(path="/resetpassword",name="reset_password")
     */
    public function resetPassword(Request $request,EntityManagerInterface $entityManager,Mailer $mailer)
    {
        $email=$request->get("email");
        $user=$entityManager->getRepository(User::class)->findOneBy(['email'=>$email]);
        if($user instanceof User)
        {
            $user->setResetPasswordToken(Uuid::uuid4()->toString());
            $entityManager->flush();
            $mailer->sendEmailResetPassword($user);
            return new JsonResponse("Reset password mail sent. Please check your e-mail.");
        }

        return new JsonResponse("This e-mail cannot be associated with any account");
    }


    /**
     * @Route(path="/resetpasswordconfirmation",name="reset_pasword_confirmation")
     */
    public function resetPasswordConfirmation(Request $request,EntityManagerInterface $entityManager)
    {
        $resetPasswordToken=$request->get("token");
        $user=$entityManager->getRepository(User::class)->findOneBy(['resetPasswordToken'=>$resetPasswordToken]);
        if(!$user instanceof User) return $this->redirectToRoute('index');
        return $this->render('emails/resetpasswordlanding.html.twig',['user'=>$user]);
    }

    /**
     * @Route(path="/resetpasswordfinal",name="reset_pasword_final")
     */
    public function resetPasswordFinal(Request $request,EntityManagerInterface $entityManager,ValidatorInterface $validator,UserPasswordEncoderInterface $userPasswordEncoder,SaltMaker $saltMaker)
    {
        $resetPasswordToken=$request->request->get("resetPasswordToken");
        $resetPasswordFirst=$request->request->get("resetPasswordFirst");
        $resetPasswordSecond=$request->request->get("resetPasswordSecond");
        if($resetPasswordFirst!==$resetPasswordSecond) return new JsonResponse("Passwords must match.");

        $user=$entityManager->getRepository(User::class)->findOneBy(['resetPasswordToken'=>$resetPasswordToken]);
        if($user instanceof User)
        {
            $user->setPlainPassword($resetPasswordFirst);
            $errors=$validator->validate($user);
            if(count($errors)>0)
            {

                return new JsonResponse($errors[0]->getMessage());

            }
            $salt=$saltMaker->makeSalt();
            $user->setSalt($salt);
            $user->setPassword($userPasswordEncoder->encodePassword($user, $user->getPlainPassword().'NDCkjubyt754hjkgffdsgghasfhjdsfl'.$salt,$salt));
            $user->setResetPasswordToken(null);
            $entityManager->flush();
            return new JsonResponse("Successfully changed password.");
        }
        return new JsonResponse("User does not exists.");
    }

    /**
     * @Route(path="/unsubscribe",name="unsubscribe_newsletter")
     */
    public function unsubscribe(RequestStack $requestStack,EntityManagerInterface $entityManager)
    {
        $id=$requestStack->getCurrentRequest()->get('user_token');
        $userWhoWishesToUnsubscribe=$entityManager->getRepository(User::class)->find($id);
        if($this->getUser()!==$userWhoWishesToUnsubscribe) {
            echo "Please login to usubscribe.";
            die();
        }
        $userWhoWishesToUnsubscribe->setNewsletter(0);
        $entityManager->flush();
        return $this->redirectToRoute('index');

    }



}

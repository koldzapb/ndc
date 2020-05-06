<?php

namespace App\Controller;

use App\Entity\Bonus;
use App\Entity\Casino;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\LikeAndPostType;
use App\Entity\Reply;
use App\Entity\User;
use App\Entity\UserToUserPost;
use App\SocialRegister\SocialRegister;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class PostController extends Controller
{


    private $entityManager;
    private $socialRegister;


    public function __construct(EntityManagerInterface $entityManager,SocialRegister $socialRegister)
    {
        $this->entityManager=$entityManager;
        $this->socialRegister=$socialRegister;
        $this->socialRegister->createLinks();
    }


    /**
     * @Route(path="/post",name="post")
     */
    public function post(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {
        if($authorizationChecker->isGranted("ROLE_USER")!==false ||$authorizationChecker->isGranted("ROLE_ADMIN")!==false)
        {
            $casinoid=$request->query->get('casinoid');
            try {
                $casino = $this->entityManager->getReference(Casino::class, $casinoid);
            } catch (ORMException $e) {
            }
            return new Response($this->renderView('Post/postform.html.twig',['casino'=>$casino]));
        }
         return new Response(false,400);

    }



    /**
     * @Route(path="/adminremovepost",name="admin_remove_post")
     */
    public function adminRemovePost(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {
        $postId = $request->request->get('id');
        $userId = $request->request->get('userid');
        $userEntity=$this->getUser();

        if(!$authorizationChecker->isGranted("ROLE_ADMIN")&&$userEntity->getId()!=$userId) return new JsonResponse("Not Admin!");

        try {
            $userPost = $this->entityManager->getReference(CasinoAndBonusLikesAndPosts::class, $postId);
        } catch (ORMException $e) {
        }

        $this->entityManager->remove($userPost);
        $this->entityManager->flush();
        return new JsonResponse("Succesfully removed comment", 200);

    }



    /**
     * @Route(path="/unlikepost",name="unlike")
     */
    public function unlike(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {
        $postId=$request->request->get("postId");
        $userId=$request->request->get("userId");
        /**
         * @var $userEntity User
         */
        $userEntity=$this->getUser();
        if(!$authorizationChecker->isGranted("ROLE_USER")&&!$authorizationChecker->isGranted("ROLE_ADMIN")) return new JsonResponse("This should never be reached",400);

        try {
            /*** @var $postEntity CasinoAndBonusLikesAndPosts */
            $postEntity = $this->entityManager->getReference(CasinoAndBonusLikesAndPosts::class, $postId);
        } catch (ORMException $e) {
        }
        if($userEntity->getId()!=$userId)  return new JsonResponse("ok");

        $userEntity->removePostLiked($postEntity);
        $postEntity->removeUserWhoLikedPost($userEntity);

        $this->entityManager->merge($postEntity);
        $this->entityManager->merge($userEntity);
        $this->entityManager->flush();
        return new JsonResponse("<strong>Unliked</strong> </br>Your Unlike Has Been Saved");
    }




    /**
     * @Route(path="/like",name="like")
     */
    public function like(AuthorizationCheckerInterface $authorizationChecker, Request $request)
    {
        if ($authorizationChecker->isGranted("ROLE_USER") === false && $authorizationChecker->isGranted("ROLE_ADMIN") === false) return new JsonResponse("<strong> Register/login to like. </strong>");

        $casinoId = $request->query->get("casinoId");
        try {
            /**
             * @var $casino Casino
             */
            $casino = $this->entityManager->getReference(Casino::class, $casinoId);
        } catch (ORMException $e) {
        }
        $user = $this->getUser();

        $alreadyLikedCheck=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->checkIfLikeExists($casino,$user);
        if($alreadyLikedCheck instanceof CasinoAndBonusLikesAndPosts) return new JsonResponse("<strong> Already Liked! </strong>");
        $likeType=$this->entityManager->getRepository(LikeAndPostType::class)->findOneBy(['name'=>'Casino Like']);
        $casinoLike=new CasinoAndBonusLikesAndPosts();
        $casinoLike->setCasinoLiked($casino);
        $casinoLike->setUserAdded($user);
        $casinoLike->setType($likeType);
        $this->entityManager->persist($casinoLike);
        $this->entityManager->flush();
        return new JsonResponse("<strong>Liked</strong> </br> Your Like Has Been Saved");

    }

    /**
     * @Route(path="bonuslike",name="bonuslike")
     */
    public function bonusLike(AuthorizationCheckerInterface $authorizationChecker,Request $request)
    {
        if ($authorizationChecker->isGranted("ROLE_USER") === false && $authorizationChecker->isGranted("ROLE_ADMIN") === false) return new JsonResponse("<strong> Register/login to like. </strong>");

        $bonusId=$request->get('bonusId');
        $bonus=$this->entityManager->getRepository(Bonus::class)->find($bonusId);

        if(!$bonus instanceof Bonus) return new JsonResponse('Nonexistant Bonus');

        $user=$this->getUser();
        $alreadyLikedCheck=$this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->findOneBy(['likedBonus'=>$bonus,'userAdded'=>$user]);

        if($alreadyLikedCheck instanceof CasinoAndBonusLikesAndPosts) return new JsonResponse("Already Liked");

        $bonusLike=new CasinoAndBonusLikesAndPosts();
        $bonusLike->setUserAdded($user);
        $likeType=$this->entityManager->getRepository(LikeAndPostType::class)->findOneBy(['name'=>'Bonus Like']);
        $bonusLike->setType($likeType);
        $bonusLike->setLikedBonus($bonus);
        $this->entityManager->persist($bonusLike);

        $this->entityManager->flush();
        return new JsonResponse("Your like has been saved.");
    }




    /**
     * @Route(path="/postadd",name="postadd")
     */
    public function postadd(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {
        if($authorizationChecker->isGranted("ROLE_USER")===false&&$authorizationChecker->isGranted("ROLE_ADMIN")===false) return new JsonResponse("This should never be reached",400);

            $casinoid=$request->request->get('casinoid');
            try {
                $casino = $this->entityManager->getReference(Casino::class, $casinoid);
            } catch (ORMException $e) {
            }
            $content=$request->request->get('content');
            $user=$this->getUser();
            $postType=$this->entityManager->getRepository(LikeAndPostType::class)->findOneBy(['name'=>'Casino Post']);
            $getSimilarPreviousPost = $this->entityManager->getRepository(CasinoAndBonusLikesAndPosts::class)->findOneBy(['userAdded' => $user->getId(), 'postText' => $content]);
            if ($getSimilarPreviousPost) {
                return new Response(json_encode("Similar post already exist"));
            }
            $post=new CasinoAndBonusLikesAndPosts();
            $post->setType($postType);
            $post->setPostToCasino($casino);
            $post->setUserAdded($user);
            $post->setPostText($content);
            $this->entityManager->persist($post);
            $this->entityManager->flush();

            return new Response(json_encode("Sucessfully added comment"));

    }



    /**
     * @Route(path="/usercomment",name="usercomment")
     */
    public function usercomment(AuthorizationCheckerInterface $authorizationChecker,Request $request)
    {
        if($authorizationChecker->isGranted('ROLE_USER')===false && $authorizationChecker->isGranted('ROLE_ADMIN')===false)
        {
            throw new NotFoundHttpException();
        }
        else{

            $userreceiverid=$request->query->get('userid');
            $userreceiver=$this->entityManager->getRepository(User::class)->findOneBy(['id'=>$userreceiverid]);
            return new Response($this->renderView('Post/usercommentform.html.twig',[
                'userreceiver'=>$userreceiver
            ]));

        }
    }





    /**
     * @Route(path="/commentadd",name="usercommentadd")
     */
    public function usercommentadd(Request $request)
    {
        $userreceiverid=$request->request->get('userid');
        $userposting=$this->getUser();
        $content=$request->request->get('content');
        $post=new UserToUserPost();
        try {
            $userreceiver = $this->entityManager->getReference(User::class, $userreceiverid);
        } catch (ORMException $e) {
        }
        $post->setContent($content);
        $post->setTimeadded(new \DateTime());
        $post->setUserwhoposts($userposting);
        $post->setUserwhoreceives($userreceiver);
        $userposting->addPostedComments($post);
        $userreceiver->addCommentReceived($post);
        $this->entityManager->persist($post);
        $this->entityManager->merge($userposting);
        $this->entityManager->merge($userreceiver);
        $this->entityManager->flush();

        return new JsonResponse("Ok");


    }




    /**
     * @Route(path="/removeusercomment")
     */
    public function removeusercomment(Request $request)
    {
        $commentId=$request->request->get('commentid');
        try {
            $usercomment = $this->entityManager->getReference(UserToUserPost::class, $commentId);
        } catch (ORMException $e) {
        }

        $this->entityManager->remove($usercomment);
        $this->entityManager->flush();
        return new JsonResponse('Ok',200);
    }





    /**
     * @Route(path="/userlikespost")
     */
    public function userLikesPost(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {
        if(!$authorizationChecker->isGranted("ROLE_USER")&&!$authorizationChecker->isGranted("ROLE_ADMIN"))  return new JsonResponse('<strong>Register/login to like.</strong>',400);

        $postId=$request->request->get('id');
        try {
            /*** @var $postEntity CasinoAndBonusLikesAndPosts */
            $postEntity = $this->entityManager->getReference(CasinoAndBonusLikesAndPosts::class, $postId);
        } catch (ORMException $e) {
        }
        /*** @var $user User */
        $user=$this->getUser();

        if($postEntity->getUsersWhoLikedPost()->contains($user)) return new JsonResponse("<strong>Already Liked!</strong>",200);

        $postEntity->addUserWhoLikedPost($user);
        $user->addPostsLike($postEntity);
        $this->entityManager->merge($postEntity);
        $this->entityManager->merge($user);
        $this->entityManager->flush();
        return new JsonResponse("<strong>Liked </strong> </br> Your Like Has Been Saved",200);
    }




    /**
     * @Route(path="/reply",name="reply")
     */
    public function reply(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {

        if($authorizationChecker->isGranted("ROLE_USER")||$authorizationChecker->isGranted("ROLE_ADMIN")) {
            $user = $this->getUser();
            $content = $request->request->get('content');
            if(!isset($content)||empty($content)) return new JsonResponse("Empty replies are not allowed!",406);
            $postid = $request->request->get('commentid');
            try {
                $post = $this->entityManager->getReference(UserToUserPost::class, $postid);
            } catch (ORMException $e) {
            }
            $reply = new Reply();
            $reply->setPost($post);
            $reply->setContent($content);
            $reply->setTimeadded(new \DateTime());
            $reply->setUser($user);

            $user->addReply($reply);
            $post->addReply($reply);
            $this->entityManager->merge($post);
            $this->entityManager->merge($user);
            $this->entityManager->persist($reply);

            $this->entityManager->flush();
            return new JsonResponse("Ok", 200);
        }
        else{
            return new JsonResponse("<strong>Register/login to like.</strong>",401);
        }


    }

    /**
     * @Route(path="/removereply",name="removereply")
     */
    public function removeReply(Request $request,AuthorizationCheckerInterface $authorizationChecker)
    {
        $replyId=$request->request->get("replyid");
        try {
            $reply = $this->entityManager->getReference(Reply::class, $replyId);
        } catch (ORMException $e) {
        }
        if($authorizationChecker->isGranted("ROLE_USER")||$authorizationChecker->isGranted("ROLE_ADMIN"))
        {
            if($this->getUser()->getId()==$reply->getUser()->getId())
            {
                $this->entityManager->remove($reply);
                $this->entityManager->flush();
                return new JsonResponse("Deleted",200);

            }
        }
        return new JsonResponse("This shoul never be reached",400);
    }







}

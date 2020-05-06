<?php



namespace App\EntityListener;



use App\Aweber\MyApp;
use App\Entity\User;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UserListener
{
    private $userImageUploadPath;
    private $userImageWebPath;
    private $fs;
    private $awebber;


    public function __construct($userImageUploadPath,$userImageWebPath,Filesystem $fs,MyApp $awebber)
    {
        $this->userImageUploadPath=$userImageUploadPath;
        $this->userImageWebPath=$userImageWebPath;
        $this->fs=$fs;
        if(!$fs->exists($this->userImageUploadPath))
        {
            $fs->mkdir($this->userImageUploadPath);
        }
        $this->awebber=$awebber;
    }


    public function preFlush(User $user)
    {
        $imagefile=$user->getImagefile();
        if($imagefile instanceof UploadedFile) {
            $user->setImage($this->upload($imagefile, $user->getId()));
        }
    }


    public function postLoad(User $user)
    {
        $user->setImagelocation(($user->getImage()==null)?"/img/user.png":$this->userImageWebPath.$user->getId()."/".$user->getImage());

    }


    public function preUpdate(User $user,PreUpdateEventArgs $eventArgs)
    {
        if($eventArgs->hasChangedField('newsletter') ) {


            $subscriber=$this->awebber->findSubscriber($user->getEmail());

            if($user->getNewsletter() && $user->getisActive() && !$subscriber )
            {
                $subscriber = array(
                    'email' => $user->getEmail(),
                    'name'  => $user->getUsername()
                );
                $list = $this->awebber->findList($this->awebber->getSubscribersList());
                $this->awebber->addSubscriber($subscriber, $list);
            }
            elseif (!$user->getNewsletter() && $user->getisActive() && $subscriber )
            {
                $this->awebber->deleteSubscriber($subscriber);
            }


        }
    }



    public function upload(?UploadedFile $file,$userid)
    {
        if (!($file instanceof UploadedFile)) {
            return null;
        }

        $name = sprintf("%s.%s", Uuid::uuid4()->toString(), $file->guessExtension());
        if(!$this->fs->exists($this->userImageUploadPath.$userid))
        {
            $this->fs->mkdir($this->userImageUploadPath.$userid);
        }

        $file->move($this->userImageUploadPath.$userid, $name);

        $imagine=new Imagine();
        $image = $imagine->open($this->userImageUploadPath.$userid."/".$name);
        $image->resize(new Box(130, 130));
        $image->save($this->userImageUploadPath.$userid."/".$name);

        return $name;
    }

}
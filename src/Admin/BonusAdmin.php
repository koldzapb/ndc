<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 27.3.19.
 * Time: 10.47
 */

namespace App\Admin;


use App\Entity\Bonus;
use App\Entity\BonusType;
use App\Entity\Casino;
use App\Entity\Country;
use App\Entity\CustomBonus;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BonusAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
            ->add('extraintable',CKEditorType::class,['label'=>'Extra Intable:'])
            ->add('bonuspercent',TextType::class,['label'=>'Bonus Percent:','required'=>false])
            ->add('maxbonus',TextType::class,['label'=>'Max Bonus:'])
            ->add('code',TextType::class,['label'=>'Code:','required'=>false])
            ->add('symbol',TextType::class,['label'=>'Currency Symbol:'])
            ->add('bonusurl',TextType::class,['label'=>'Bonus Url:'])
            ->add('forumthread',TextType::class,['label'=>'Forum Thread:','required'=>false])
            ->add('tcurl',TextType::class,['label'=>'T&C Url:','required'=>false])
            ->add('bonustype', ModelType::class, [
                'label'=>'Bonus Type:',
                'class' => BonusType::class,
                'placeholder'=>'choose',
                'property' => 'name',

            ])
            ->add('casino', ModelType::class, [
                'label'=>'Casino:',
                'class' => Casino::class,
                'placeholder'=>'choose',
                'property' => 'casinoname',

            ])
            ->add('cashable',ChoiceType::class,[
                'label'=>'Cashable:',
                'placeholder'=>'choose',
                'choices'=>[
                    'no'=>false,
                    'yes'=>true
                ]
            ])
            ->add('exclusive',ChoiceType::class,[
                'label'=>'Exclusive:',
                'placeholder'=>'choose',
                'choices'=>[
                    'no'=>false,
                    'yes'=>true
                ]
            ])
            ->add('bonusgiven',ChoiceType::class,[
                'label'=>'Bonus Given:',
                'placeholder'=>'choose',
                'choices'=>[
                    'after'=>false,
                    'before'=>true
                ]
            ])
            ->end()
            ->with('Restricted Countries')
            ->add('restrictedcountries', EntityType::class, [
                'required'=>false,
                'class'     => Country::class,
                'choice_label' => 'name',
                'label'     => 'Restricted Countries',
                'multiple'  => true,
                'attr'        => [
                    'class'       => 'restricted-countries-select',
                ],
            ])
            ->end()
            ->with('Classic Blackjack:')
            ->add('classicblackjack',TextType::class,['label'=>'Classic Blackjack:','required'=>false])
            ->add('classicblackjackb',CheckboxType::class,['label'=>'Classic Blackjack B:','required'=>false])
            ->add('classicblackjackd',CheckboxType::class,['label'=>'Classic Blackjack D:','required'=>false])
            ->end()
            ->with('Other Blackjack:')
            ->add('otherblackjack',TextType::class,['label'=>'Other Blackjack:','required'=>false])
            ->add('otherblackjackb',CheckboxType::class,['label'=>'Other Blackjack B:','required'=>false])
            ->add('otherblackjackd',CheckboxType::class,['label'=>'Other Blackjack D:','required'=>false])
            ->end()
            ->with('Video Poker:')
            ->add('videopoker',TextType::class,['label'=>'Video Poker:','required'=>false])
            ->add('videopokerb',CheckboxType::class,['label'=>'Video Poker B:','required'=>false])
            ->add('videopokerd',CheckboxType::class,['label'=>'Video Poker D:','required'=>false])
            ->end()
            ->with('Craps:')
            ->add('craps',TextType::class,['label'=>'Craps:','required'=>false])
            ->add('crapsb',CheckboxType::class,['label'=>'Craps B:','required'=>false])
            ->add('crapsd',CheckboxType::class,['label'=>'Craps D:','required'=>false])
            ->end()
            ->with('Baccarat:')
            ->add('baccarat',TextType::class,['label'=>'Baccarat:','required'=>false])
            ->add('baccaratb',CheckboxType::class,['label'=>'Baccarat B:','required'=>false])
            ->add('baccaratd',CheckboxType::class,['label'=>'Baccarat D:','required'=>false])
            ->end()
            ->with('Poker Games:')
            ->add('pokergames',TextType::class,['label'=>'Poker Games:','required'=>false])
            ->add('pokergamesb',CheckboxType::class,['label'=>'Poker Games B:','required'=>false])
            ->add('pokergamesd',CheckboxType::class,['label'=>'Poker Games D:','required'=>false])
            ->end()
            ->with('Casino War:')
            ->add('casinowar',TextType::class,['label'=>'Casino War:','required'=>false])
            ->add('casinowarb',CheckboxType::class,['label'=>'Casino War B:','required'=>false])
            ->add('casinoward',CheckboxType::class,['label'=>'Casino War D:','required'=>false])
            ->end()
            ->with('Sicbo:')
            ->add('sicbo',TextType::class,['label'=>'Sicbo:','required'=>false])
            ->add('sicbob',CheckboxType::class,['label'=>'Sicbo B:','required'=>false])
            ->add('sicbod',CheckboxType::class,['label'=>'Sicbo D:','required'=>false])
            ->end()
            ->with('American Roulette:')
            ->add('americanroulette',TextType::class,['label'=>'American Roulette','required'=>false])
            ->add('americanrouletteb',CheckboxType::class,['label'=>'American Roulette B:','required'=>false])
            ->add('americanrouletted',CheckboxType::class,['label'=>'American Roulette D:','required'=>false])
            ->end()
            ->with('Slots:')
            ->add('slots',TextType::class,['label'=>'Slots','required'=>false])
            ->add('slotsb',CheckboxType::class,['label'=>'Slots B:','required'=>false])
            ->add('slotsd',CheckboxType::class,['label'=>'Slots D:','required'=>false])
            ->end()
            ->with('Parlor Games:')
            ->add('parlorgames',TextType::class,['label'=>'Parlor Games','required'=>false])
            ->add('parlorgamesb',CheckboxType::class,['label'=>'Parlor Games B:','required'=>false])
            ->add('parlorgamesd',CheckboxType::class,['label'=>'Parlor Games D:','required'=>false])
            ->end()
        ;



    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('maxbonus');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('casino.casinoname')
            ->add('exclusive')
            ->add('maxbonusshow')
            ->add('code');

        ;
    }



    public function toString($object)
    {
        return $object instanceof Bonus
            ? $object->getId()
            : 'Bonus'; // shown in the breadcrumb on the create view
    }

    public function createQuery($context = 'list')
    {
         $query=parent::createQuery($context);
         $query->andWhere(
             $query->expr()->isNull($query->getRootAliases()[0].'.lcbId')
         );
         return $query;
    }
}

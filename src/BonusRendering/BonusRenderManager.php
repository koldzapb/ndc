<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 6.2.19.
 * Time: 08.47
 */

namespace App\BonusRendering;


class BonusRenderManager
{
    private $bonusRenderers;

    public function __construct($bonusRenderers)
    {
        $this->bonusRenderers=$bonusRenderers;
    }

    public function getBonuses($page)
    {

        foreach ($this->bonusRenderers as $renderer){
            /**
             * @var $renderer BonusRenderingInterface
             */
            if($renderer->supports($page)){
                return $renderer->bonuses();
            }
        }
    }


}
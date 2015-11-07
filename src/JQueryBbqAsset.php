<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-9-17
 * Time: 上午10:42
 */

namespace yiier\widgets;


use yii\web\AssetBundle ;
use yii\web\View ;

class JQueryBbqAsset extends AssetBundle
{

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $jsOptions = [
        'position' => View::POS_END,
    ];


    public function init(){
        $this->sourcePath = __DIR__ . '/assets/jquery-bbq' ;
        if(YII_DEBUG){
            $this->js = [
                'jquery.ba-bbq.js',
            ];

        }else{
            $this->js = [
                'jquery.ba-bbq.min.js',
            ];
        }
        parent::init();
    }
} 
<?php
/**
 * User: yiqing
 * Date: 14-9-17
 * Time: 上午10:17
 */

namespace yiier\widgets;

use yii\web\AssetBundle ;
// use yiier\base\AssetBundle;
use yii\web\View;


class ExSelectAsset  extends AssetBundle
{
    // public $sourcePath = '@yiier/widgets/assets/exSelect';


    public $depends = [
        'yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
        'yiier\widgets\JQueryBbqAsset',
    ];

    public $jsOptions = [
        'position' => View::POS_END,
    ];

    public $js = [
        'jquery.exSelect.js',
    ];

    /**
     * @var array
     */
    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];

    public function init(){
        $this->sourcePath = __DIR__ . '/assets/exSelect';
       /*
        if(YII_DEBUG){
            $this->js = [
                'cropper.min.js',
            ];
            $this->css = [
                'cropper.min.css',
            ];
        }else{
            $this->js = [
                'cropper.js',
            ];
            $this->css = [
                'cropper.css',
            ];
        }
       */

        parent::init();
    }
} 
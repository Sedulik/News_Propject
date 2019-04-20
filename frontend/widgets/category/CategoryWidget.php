<?php
/**
 * Created by PhpStorm.
 * User: ghost
 * Date: 24/02/19
 * Time: 17:21
 */

namespace frontend\widgets\category;

use common\models\Categories;
use yii\bootstrap\Widget;

class CategoryWidget extends Widget
{

    public function run (){

        $categories = Categories::find()->all();
        return $this->render('index',['categories' => $categories]);
    }

}
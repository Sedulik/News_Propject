<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="<?= yii\helpers\Url::to(['/site/login']) ?>">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?= yii\helpers\Url::to(['/site/signup'])  ?>" class="active">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'id'=>"username" ,'tabindex'=>"1" ,'class'=>"form-control", 'placeholder'=>"Username"])->label(false) ?>

                                <?= $form->field($model, 'email')->textInput(['id'=>"email" ,'tabindex'=>"1", 'class'=>"form-control", 'placeholder'=>"Email Address"])->label(false) ?>

                                <?= $form->field($model, 'password')->passwordInput(['id'=>"password" ,'tabindex'=>"2", 'class'=>"form-control", 'placeholder'=>"Password"])->label(false) ?>

                                <div class="form-group">
                                    <?= Html::submitButton('Register Now', ['id'=>"register-submit" ,'tabindex'=>"4", 'class'=>"form-control btn btn-register", 'value'=>"Register Now"]) ?>
                                </div>

                                <?php ActiveForm::end(); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

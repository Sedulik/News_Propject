<?php
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
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="<?= yii\helpers\Url::to(['/site/signup']) ?>">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true ,'id'=>'username','tabindex'=>"1", 'class'=>"form-control", 'placeholder'=>"Username"])->label(false) ?>

                            <?= $form->field($model, 'password')->passwordInput(['tabindex'=>"2", 'id'=>'username', 'class'=>"form-control", 'placeholder'=>"Password"])->label(false) ?>

                            <div class="form-group text-center">
                            <?= $form->field($model, 'rememberMe')->checkbox(['tabindex'=>"3", 'id'=>"remember",'class'=>"", 'name'=>"remember"]) ?>
                            </div>

                            <div style="color:#999;margin:1em 0" class="text-center">
                                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Login', ['id'=>"login-submit" ,'tabindex'=>"4", 'class'=>"form-control btn btn-login", 'value'=>"Log In", 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
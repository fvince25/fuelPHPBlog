<?php

use Fuel\Core\Asset;
use Fuel\Core\Form;
use Fuel\Core\Session;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <?= Asset::css('bootstrap.css') ?>
    <?= Asset::css('style.css') ?>
    <?= Asset::css('style_login.css') ?>
</head>
<body>
    <div class="container">
        <?php if($error = Session::get_flash('error')) :  ?>
            <div class="alert alert-warning"><?= $error; ?></div>
        <?php endif; ?>
        <?= Form::open( array("action" => "auth/register/", "class" => "form-horizontal")); ?>
            <fieldset>
                <div id="legend">
                    <legend class="">Register</legend>
                </div>
                <div class="control-group">
                    <!-- Username -->

                    <div class="controls">
                        <?= Form::input("username", $username , array('class' => 'input-xlarge', 'type' => 'text', 'placeholder'=>'Username')) ?>
                    </div>
                </div>

                <div class="control-group">
                    <!-- E-mail -->

                    <div class="controls">
                        <?= Form::input("email", $email , array('class' => 'input-xlarge', 'type' => 'email', 'placeholder'=>'Email')) ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <?= Form::input("password", $password , array('class' => 'input-xlarge', 'type' => 'password', 'placeholder'=>'Password')) ?>
                    </div>
                </div>

                <div class="control-group">
                    <!-- Password -->
                    <div class="controls">
                        <?= Form::input("password_confirm", $password_confirm , array('class' => 'input-xlarge', 'type' => 'password', 'placeholder'=>'Retapez votre password')) ?>

                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <?= Form::submit("submit", "Créer le compte") ?>
                    </div>
                </div>
            </fieldset>
        <?= Form::close() ?>

    </div>
</body>
</html>



<?php

use Fuel\Core\Asset;
use Fuel\Core\Form;
use Fuel\Core\Session;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <?= Asset::css('bootstrap.css') ?>
    <?= Asset::css('style.css') ?>
    <?= Asset::css('style_login.css') ?>
</head>
<body>


    <div class="wrapper fadeInDown">
        <div id="formContent">

            <h1>Se connecter</h1>

            <?php if($error = Session::get_flash('error')) :  ?>
                <div class="alert alert-warning"><?= $error; ?></div>
            <?php endif; ?>

            <?= Form::open( array("action" => "auth/login/")); ?>

                <?= Form::input("username", $username , array('class' => 'fadeIn second', 'type' => 'text', 'placeholder' => 'login')) ?>
                <?= Form::input("password", $password , array('class' => 'fadeIn third', 'type' => 'password', 'placeholder' => 'password')) ?>
                <?= Form::submit("submit", "Se connecter", array('class' => 'fadeIn fourth')) ?>

            <?= Form::close() ?>
            <a class="btn btn-outline-info" href="/auth/register">Créer un compte</a>


            <!-- Remind Passowrd -->
<!--            <div id="formFooter">-->
<!--                <a class="underlineHover" href="#">Forgot Password?</a>-->
<!--            </div>-->

        </div>
    </div>
</body>
</html>



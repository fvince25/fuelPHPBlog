<?php

use Auth\Auth;
use Auth\SimpleUserUpdateException;
use Fuel\Core\Config;
use Fuel\Core\Controller;
use Fuel\Core\Fieldset;
use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\Session;
use Fuel\Core\View;

class Controller_Auth extends Controller
{

    public function action_register()
    {


        if (Input::post('submit')) {

            $data = array(
                "username" => Input::post('username'),
                "password" => Input::post('password'),
                "password_confirm" => Input::post('password_confirm'),
                "email" => Input::post('email'),
            );

            if (!Input::post('username')) {

                Session::set_flash('error', 'username non renseigné');

            } elseif (!Input::post('password')) {

                Session::set_flash('error', 'password non renseigné');

            } elseif (!Input::post('password_confirm')) {

                Session::set_flash('error', 'password de confirmation non renseigné');

            } elseif (!Input::post('email')) {

                Session::set_flash('error', 'Email non rensigné');

            } elseif (Input::post('password') !== Input::post('password_confirm')) {

                Session::set_flash('error', 'Les deux mots de passe ne coïncident pas');

            } else {

                $hasher = Auth::instance()->hash_password(Input::post('password'));

                $User = new Model_User();

                $User->username = Input::post('username');
                $User->email = Input::post('email');
                $User->password = $hasher;

                $User->save();

                $id = $User->id;
                Session::set('user_id', $id);
                Session::set('username', $User->username);
                Response::redirect('articles/');

            }


        } else {
            $data = array(
                "username" => "",
                "password"=> "",
                "password_confirm" => "",
                "email" => "");
        }

        return Response::forge(View::forge('auth/registration', $data));

        // pass the fieldset to the form, and display the new user registration view

    }


    public function action_login()
    {


        if (Input::post('submit')) {

            $data = array(
                "username" => Input::post('username'),
                "password" => Input::post('password')
            );

            if (!Input::post('username')) {

                Session::set_flash('error', 'username non renseigné');

            } elseif (!Input::post('password')) {

                Session::set_flash('error', 'password non renseigné');

            } else {

                $hasher = Auth::instance()->hash_password(Input::post('password'));
                $User = Model_User::query()->where('username', '=', Input::post('username'))->get_one();

                if ($User) {

                    if ($User->password === $hasher) {

                        Session::set('user_id', $User->id);
                        Session::set('username', $User->username);
                        Response::redirect('articles/');

                    } else {

                        Session::set_flash('error', 'Le password est erronné');

                    }
                } else {

                    Session::set_flash('error', 'User incconnu');

                }

            }

        } else {
            $data = array(
                "username" => "",
                "password"=> ""
            );
        }

        return Response::forge(View::forge('auth/login', $data));

    }

    public function action_logout() {

        Session::delete("username");
        Session::delete("user_id");
        Response::redirect('auth/login');

    }

}


?>
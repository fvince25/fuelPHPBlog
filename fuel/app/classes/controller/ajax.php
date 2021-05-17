<?php


use Fuel\Core\Controller;
use Fuel\Core\Input;

class Controller_Ajax extends Controller
{

    public function action_ajax()
    {
        echo json_encode(array("result" => true, "method" => Input::method()));
    }


}


?>
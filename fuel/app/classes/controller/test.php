<?php

use Fuel\Core\Controller_Rest;
use Fuel\Core\Input;

class Controller_Test extends Controller_Rest {


    public function get_list()
    {

        $this->response(array(
            'foo' => Input::get('dodo'),
            'lolo' => Input::get('lolo'),
        ));
    }


}


?>
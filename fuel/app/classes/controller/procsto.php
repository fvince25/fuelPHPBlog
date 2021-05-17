<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

use Fuel\Core\Controller;
use Fuel\Core\Controller_Template;
use Fuel\Core\Database_Connection;
use Fuel\Core\DB;
use Fuel\Core\Input;
use Fuel\Core\Presenter;
use Fuel\Core\Response;
use Fuel\Core\Session;
use Fuel\Core\View;

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Procsto extends Controller
{


    /**
     * La liste complète des articles
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {

        $strQuery = "CALL findUser(:username)";

        // Récupération de la connexion à la base.
        $db = Database_Connection::instance()->connection();

        // Préparation de la requête.
        $statement = $db->prepare($strQuery);

        // Binding des paramètres
        $statement->bindParam(':username', 'momo');

        // Exécution de la requête et récupération des résultats
        $result = $statement->execute();


        // Fermeture de la connexion.
        Database_Connection::instance()->disconnect();
        // $result = $queryRun->execute();

        var_dump($result);



    }



    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_404()
    {
        return Response::forge(Presenter::forge('article/404'), 404);
    }
}

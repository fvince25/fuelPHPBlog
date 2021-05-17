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

use Fuel\Core\Controller_Template;
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
class Controller_Articles extends Controller_Template
{


    public function before() {

        parent::before();

        if (!Session::get('username')) {
            Response::redirect('auth/login/');
        }

    }

    /**
     * La liste complète des articles
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {

        $articles = Model_Article::find('all');
        $data = array('articles' => $articles);
        $this->template->title = 'Liste des Articles';
        $this->template->content = View::forge('article/index', $data, false);

    }



    /**
     * La liste complète des articles
     *
     * @access  public
     * @return  Response
     */
    public function action_view($id)
    {

        $article = Model_Article::find($id);
        $data = array('article' => $article);
        $this->template->title = $article->title;
        $this->template->content = View::forge('article/view', $data, false);

    }


    /**
     * La liste complète des articles
     *
     * @access  public
     * @return  Response
     */
    public function action_ajax()
    {

        echo json_encode(array("result" => true));

    }
    /**
     * L'édition d'un article, saisie + submit
     *
     * @access  public
     * @return  Response
     */
    public function action_edit($id)
    {


        $Article = Model_Article::find($id);
        if (Input::post('submit')) {

            $Article->title = Input::post('title');
            $Article->content = Input::post('content');
            $Article->save();

            Session::set_flash('success', 'Article enregistré');
            Response::redirect('articles/view/' . $id);

        } else {


            $data = array('article' => $Article);
            $this->template->title = $Article->title;
            $this->template->content = View::forge('article/edit', $data, false);
        }

    }

    /**
     * L'édition d'un article, saisie + submit
     *
     * @access  public
     * @return  Response
     */
    public function action_new()
    {

        if (Input::post('submit')) {

            $User = Model_User::find(Session::get('user_id'));

            $Article = new Model_Article();
            $Article->title = Input::post('title');
            $Article->content = addslashes(Input::post('content'));
            $Article->user = $User;
            $Article->save();

            $id = $Article->id;

            Session::set_flash('success', 'Article crée');
            Response::redirect('articles/view/' . $id);

        } else {

            $data = array();
            $this->template->title = "Nouvel article";
            $this->template->content = View::forge('article/new', $data, false);
        }

    }


    /**
     * L'édition d'un article, saisie + submit
     *
     * @access  public
     * @return  Response
     */
    public function action_addComment($id)
    {

        $Article = Model_Article::find($id);
        $User = Model_User::find(Session::get('user_id'));
        $Comment = new Model_Comment();
        $Comment->content = Input::post('content');
        $Comment->user = $User;
        $Comment->article = $Article;
        $Comment->save();
        Response::redirect('articles/view/' . $id);

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

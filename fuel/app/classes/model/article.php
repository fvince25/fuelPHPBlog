<?php
class Model_Article extends Orm\Model{

    protected static $_properties = array(
        'id',
        'title',
        'content',
        'user_id',
        'created_at',
    );

    protected static $_belongs_to = array(
        'user' => array(
            'key_from' => 'user_id',
            'model_to' => 'Model_User',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );


    protected static $_has_many = array(
        'comments' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Comment',
            'key_to' => 'article_id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
}
?>
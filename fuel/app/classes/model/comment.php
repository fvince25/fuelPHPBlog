<?php
class Model_Comment extends Orm\Model{

    protected static $_properties = array(
        'id',
        'content',
        'user_id',
        'article_id',
        'created_at'
    );

    protected static $_belongs_to = array(
        'article' => array(
            'key_from' => 'article_id',
            'model_to' => 'Model_Article',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        ),
        'user' => array(
            'key_from' => 'user_id',
            'model_to' => 'Model_User',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
}
?>
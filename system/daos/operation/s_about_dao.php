<?php
 /**
 * 关于网站信息
 *
 * @author      madesheng
 * @date        2017-02-17
 * @copyright   Copyright(c) 2017
 * @version     $Id$
 */
class S_about_dao extends CI_Dao
{
    protected $_db_write = array('cluster' => 1, 'mode' => 'write');
    protected $_db_read  = array('cluster' => 1, 'mode' => 'read');

    protected $_table    = 'about';

    public    $_fields   = '`about_id`, `domain_name`, `website_create`, `version`, `servicer`, `program`, `master_describe`, `nickname`, `real_name`, `sex`, `birthday`, `live_address`, `register_address`, `job`, `contact`, `like_books`, `like_musics`, `is_deleted`, `create_user_id`, `create_user_name`, `create_time`, `update_user_id`, `update_user_name`, `update_time`';
}
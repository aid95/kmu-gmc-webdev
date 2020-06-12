<?php

    include_once('mysql.php');

    class Member {
        static private $user_id;
        static private $user_name;
        static private $mysql;
        
        function __construct() {
            self::$mysql = new MySQL('host', 'user', 'password', 'database');
        }

        function __destruct() {
            unset(self::$mysql);
        }
        
        public function login_check($id, $pw) {
            $user_info = self::$mysql->where(array('user_id' => $id, 'user_pw' => $pw))->get('account', array('id', 'name'));
            print_r($user_info);
        }
    }

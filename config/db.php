<?php
    class DataBase
    {
        public static function connect()
        {
            $db = new mysqli('localhost', 'root', '#Madeleine0304', 'hipnoterapia');
            $db->query("SET NAMES 'utf8'");
            return $db;
        }
    }

<?php

class M_Db
{
    const HOST = 'localhost';
    const LOGIN = 'root';
    const PASSWORD = '';
    const DB = 'catalog';
    const CHARSET = "UTF8";

    protected static $instance = null;

    public function __construct(){}
    private function __clone(){}

    private static function instance() {
        if (self::$instance === null) {
            $opt = array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES => TRUE,
            );
            $dsn = 'mysql:host=' . self::HOST . ';dbname=' . self::DB . ';charset=' . self::CHARSET;
            self::$instance = new \PDO($dsn, self::LOGIN, self::PASSWORD, $opt);
        }
        return self::$instance;
    }

    private static function sql($sql, $args = []) {
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    public static function select($sql, $args = []) {
        return self::sql($sql, $args);
    }

    public static function getRow($sql, $args = []) {
        return self::sql($sql, $args);
    }

    public static function insert($sql, $args = []) {
        self::sql($sql, $args);
        return self::instance()->lastInsertId();
    }

    public static function update($sql, $args = []) {
        $stmt = self::sql($sql, $args);
        return $stmt->rowCount();
    }

    public static function delete($sql, $args = []) {
        $stmt = self::sql($sql, $args);
        return $stmt->rowCount();
    }

}

<?php

namespace arcadia\model;

use PDO;

class BaseModel {
    protected $config;
    protected $query;

    private static $_BASEROOT = "";

    public function __construct() {
        $this->config = parse_ini_file(__DIR__ . '/../config.ini', true);
        $this->query = parse_ini_file(__DIR__ . '/../query.ini', true);
    }

    public static function GET_BASE_ROOT(){
        return self::$_BASEROOT;
    }

    /**
     * @return PDO
     */
    public function connect(){
        $conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
            $this->config['database']['host'],
            $this->config['database']['port'],
            $this->config['database']['database'],
            $this->config['database']['user'],
            $this->config['database']['password']);
        $pdo = new PDO($conStr);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}


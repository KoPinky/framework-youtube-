<?php   

namespace application\lib;
use PDO;


class Db{
    protected $db;
    function __construct(){
        $config = require 'application/config/db.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['name'];
        $this->db = new PDO($dsn, $config['user'], $config['password']);
    }

    public function query($sql, $params =[]){
        $stmt = $this->db->prepare($sql);
        if(!empty($params)){
            foreach ($params as $key => $value){
                $stmt->bindValue(':'.$key, $value);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function Row($sql, $params =[]){
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function Colomn($sql, $params =[]){
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

}
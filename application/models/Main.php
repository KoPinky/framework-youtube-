<?php
namespace application\models;

use application\core\Model;
use application\lib\Db;

class Main extends Model
{
    
    
    public function getNews(){
        $result = $this->db->Row('SELECT name, text FROM news');
        return $result;
    }
    
}
<?php

class db_articles extends db_pdo
{
    
    public function GetAllArticles()
    {
        $table_name = "articles";
        $columns = "*";
        $where = array();
        
        $result = $this->DBSelectAll($table_name, $columns, $where);
        
        return $result;
    }
    
    public function GetUser($userID)
    {
        $table_name = "users";
        $columns = "*";
        $where = array();
        $where[] = array("column" => "ID", "value" => $userID, "symbol" => "=");
        
        $result = $this->DBSelectOne($table_name, $columns, $where);
        
        return $result;
    }
    
    public function GetScore($scoreID)
    {
        $table_name = "score";
        $columns = "*";
        $where = array();
        $where[] = array("column" => "ID", "value" => $scoreID, "symbol" => "=");
        
        $result = $this->DBSelectOne($table_name, $columns, $where);
        
        return $result;
    }
    
    public function GetOverallScore($scoreID)
    {
        $score = $this->GetScore($scoreID);
        
        $result = $score["score1a"] + $score["score1b"] + $score["score1c"] + $score["score2a"] + $score["score2b"] + $score["score2c"] + $score["score3a"] + $score["score3b"] + $score["score3c"];
        
        return $result;
    }
    
}

?>
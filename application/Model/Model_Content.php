<?php

class Model_Content extends Model
{
	
    public function getPortfolioList($table)
    {
        $result = [];
        try {
            $data = $this->connect()->query("SELECT id, title, content, url FROM  $table");
            if ($data) {
                $i = 0;
                $count = $data->num_rows - 1;
                while ($i <= $count) {
                    $result[] = mysqli_fetch_assoc($data);
                    $i++;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $result;
    }
    
    public function getContent($table, $url)
    {
        $result_one = null;
        try {
            $data = $this->connect()->query("SELECT id, title, content, url FROM $table WHERE url='$url'");
            if ($data) {
                $result_one = mysqli_fetch_assoc($data);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $result_one;
    }
    
    public function readGet($get) 
    {
        $mykey = key($_GET);
        $fulUrl = explode('/', $mykey);
        
        return $fulUrl;
    }

}

<?php

class Model_Content extends Model
{
	
    public function getPortfolioList($table)
    {	
        try {
            $data = $this->connect()->query("SELECT id, title, content, url FROM  $table");
            $result=[];
            $i=0;
            $count = $data->num_rows - 1;
            while ($i<=$count){
                $result[]=mysqli_fetch_assoc($data);
                $i++;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $result;
    }
    
    public function getContent($table, $url)
    {
        try {
            $data = $this->connect()->query("SELECT id, title, content, url FROM $table WHERE url='$url'");
            $result_one = mysqli_fetch_assoc($data);
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

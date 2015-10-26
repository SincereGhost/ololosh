<?php

class Model_Main extends Model
{
    
    public function getContent()
    {
        try {
            $data = $this->connect()->query("SELECT id, title, content, url FROM page WHERE url='glavnaya'");
            $result_one = mysqli_fetch_assoc($data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $result_one;
    }
}
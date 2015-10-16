<?php

class Model_Contacts extends Model
{
    
    public function getData()
    {
        $data = $this->connect()->query("SELECT id, title, content, url FROM  page WHERE url='contacts'");
        $result_one = mysqli_fetch_assoc($data);
        return $result_one;
    }
}
<?php

class Model_Services extends Model
{

    public function getData()
    {
        $data = $this->connect()->query("SELECT * FROM  page WHERE url='uslugi'");
        if ($data) {
            $result_one = mysqli_fetch_assoc($data);
            return $result_one;
        }
        return null;
    }
}
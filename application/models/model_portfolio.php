<?php

class Model_Portfolio extends Model
{

    public function get_data()
    {
        $result = [];
        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  portfolio");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        if ($data) {
            $i = 0;
            $count = $data->num_rows - 1;
            while ($i <= $count) {
                $result[] = mysqli_fetch_assoc($data);
                $i++;
            }

            return $result;
        }

        return null;
    }

}

<?php

class Model_Admin extends Model
{
    public function getArticles()
    {
        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  posts");

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        if ($data) {
            $result = [];
            while ($result[] = mysqli_fetch_assoc($data)) {
            }

            return $result;
        }

        return $data;
    }

    public function getArticleById($id)
    {
        $result_one = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  posts WHERE id='$id'");
            if ($data) {
                $result_one = mysqli_fetch_assoc($data);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        return $result_one;
    }

    public function updateArticle($data)
    {

    }
}


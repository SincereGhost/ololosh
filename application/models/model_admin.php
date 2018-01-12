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
        $url = $data['title'];
        $this->parserUrl($url);
        $url = $this->parserUrl($url);
        $url = $this->testUrl($url);

        $title = $data['title'];
        $content = $data['content'];
        $id = $data['id'];
        //$data = null;
        try {
            $data = $this->connect()->query("UPDATE posts SET  `title` = '$title', `content` = '$content', `url` = '$url' WHERE `id` = $id");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $data;
    }

    public function parserUrl($url)
    {
        //$url = $_POST['title'];
        $st = strtr($url,
            array(
                'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d',
                'е'=>'e','ё'=>'e','ж'=>'zh','з'=>'z','и'=>'i',
                'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o',
                'п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u',
                'ф'=>'ph','х'=>'h','ы'=>'y','э'=>'e','ь'=>'',
                'ъ'=>'','й'=>'y','ц'=>'c','ч'=>'ch', 'ш'=>'sh',
                'щ'=>'sh','ю'=>'yu','я'=>'ya',' '=>'_', '<'=>'_',
                '>'=>'_', '?'=>'_', '"'=>'_', '='=>'_', '/'=>'_',
                '|'=>'_'
            )
        );
        $url = strtr($st,
            array(
                'А'=>'a','Б'=>'b','В'=>'v','Г'=>'g','Д'=>'d',
                'Е'=>'e','Ё'=>'e','Ж'=>'zh','З'=>'z','И'=>'i',
                'К'=>'k','Л'=>'l','М'=>'m','Н'=>'n','О'=>'o',
                'П'=>'p','Р'=>'r','С'=>'s','Т'=>'t','У'=>'u',
                'Ф'=>'ph','Х'=>'h','Ы'=>'y','Э'=>'e','Ь'=>'',
                'Ъ'=>'','Й'=>'y','Ц'=>'c','Ч'=>'ch', 'Ш'=>'sh',
                'Щ'=>'sh','Ю'=>'yu','Я'=>'ya'
            )
        );
        $url = trim(stripslashes(strip_tags(htmlspecialchars(mb_strtolower(str_replace(' ', '-', $url))), 'UTF-8')));
        return $url;

    }

    public function testUrl($url)
    {
        //var_dump($this->getArticleByUrl($url));
        if(!empty($this->getArticleByUrl($url))) {
            $url = $url . 1;
            var_dump($url);
            echo 'after concat';
            $url = $this->getArticleByUrl($url);
            var_dump($url);
        }
        return $url;
    }

    public function getArticleByUrl($url)
    {
        $result_one = null;
        try {
            $data = $this->connect()->query("SELECT url FROM  posts WHERE url='$url'");
            if ($data) {
                $result_one = mysqli_fetch_assoc($data);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $result_one;
    }

    public function articleInsert($data)
    {
        $url = $this->testUrl($this->parserUrl($data['title']));
        $title = $data['title'];
        var_dump($data);
        $content = $data['content'];
        try {
            $data = $this->connect()->query("INSERT INTO `posts` ( `title`, `content`, `url`) VALUES ( '$title', '$content', '$url')");
            $getLastId = $this->connect()->query("SELECT id FROM  posts WHERE url=$url");
            $lastId = mysqli_fetch_assoc($getLastId);
            echo 'last id is '.$lastId['id'];
            //$id = $lastId['id'];
            //$data = $lastId;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $data;
    }

}


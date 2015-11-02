<?php

class Model_Admin extends Model
{
    public function readGet($get) 
    {
        $mykey = key($_GET);
        $fulUrl = explode('/', $mykey);
        
        return $fulUrl;
    }
    
    public function readPost($post)
    {
        $postResult = [];
        $postResult['title'] = $_POST['title'];
        $postResult['content'] = $_POST['txt'];
        if (!empty($_POST['description'])){
            $postResult['description'] = $_POST['description'];
        } else {
            $postResult['description'] = mb_substr($postResult['content'], 0, 50, 'utf-8').'...';
        }
        if(empty($_POST['url'])){
            $st = strtr($_POST['title'], 
                array(
                    'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d',
                    'е'=>'e','ё'=>'e','ж'=>'zh','з'=>'z','и'=>'i',
                    'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o',
                    'п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u',
                    'ф'=>'ph','х'=>'h','ы'=>'y','э'=>'e','ь'=>'',
                    'ъ'=>'','й'=>'y','ц'=>'c','ч'=>'ch', 'ш'=>'sh',
                    'щ'=>'sh','ю'=>'yu','я'=>'ya',' '=>'_'
                )
            );
            $st2 = strtr($st, 
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
            $postResult['url'] = $st2;
        } else {
            $postResult['url'] = $_POST['url'];
        }
        
        return $postResult;
    }
    
    public function getContentList($table)
    {
        if ($table != 'manager_user') {
            try {
                $data = $this->connect()->query("SELECT id, title, content, description, url FROM  $table");
                $result=[];
                $i=0;
                $count = $data->num_rows - 1;
                if ($count >= 0){
                    while ($i<=$count){
                        $result[]=mysqli_fetch_assoc($data);
                        $i++;
                    }
                    $val = array_reverse($result);
                    
                    $val[0]['class'] = '';
                    $val[0]['templateName'] = 'listResultAdmin_view';
                } else {
                    $val[0]['title'] = 'Еще нет ниодной записи, добавте...';
                    $val[0]['content'] = 'Здесь будет отображен контент ваших записей...';
                    $val[0]['class'] = ' display_non';
                    $val[0]['templateName'] = 'listResultAdmin_view';
                }
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        } elseif ($table === 'manager_user') {
            try {
                $data = $this->connect()->query("SELECT id, login FROM  $table");
                $result=[];
                $i=0;
                $count = $data->num_rows - 1;
                    while ($i<=$count){
                        $result[]=mysqli_fetch_assoc($data);
                        $i++;
                    }
                    $result[0]['class'] = '';
                    $result[0]['templateName'] = 'userListAdmin_view';
                    $val = array_reverse($result);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
        return $val;
    }
    
    public function getContent($table, $url)
    {
        try {
            $data = $this->connect()->query("SELECT id, title, content, url FROM  $table WHERE url='$url'");
            $result_one = mysqli_fetch_assoc($data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        return $result_one;
    }
    
    public function updateContent($title, $content, $description, $urlCont, $table, $url)
    {
        try {
            $data = $this->connect()->query("UPDATE $table SET title='$title', content='$content', description='$description', url='$urlCont' WHERE url='$url'");
            header('location:/admin?'.$table);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return ($data)? 'Успеx':'Не успех';
    }
    
    public function delPost($table, $url)
    {
        try {
            $data = $this->connect()->query("DELETE FROM $table WHERE url='$url'");
            header('location:/admin?'.$table);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return ($data)? 'Успеx':'Не успех';
    }
    
    public function addPost($title, $content, $description, $url, $table)
    {
        try {
            $data = $this->connect()->query("INSERT INTO $table (title,content,description,url) VALUES ('$title','$content','$description','$url')");
            header('location:/admin?'.$table);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return ($data)? 'Успеx':'Не успех';
    }
}


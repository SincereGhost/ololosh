<?php

class Model_Admin extends Model
{
    public function getContentList($table)
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
            $val=[];
            foreach ($result as $value)
            {   
                
                $value['content'] = mb_substr($value['content'], 0, 50, 'utf-8').'...';
                $val[] = $value;
                
                
            }
//            var_dump($val);
        } catch (Exception $ex) {
            echo $ex->getMessage();
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
    
    public function updateContent($title, $content, $urlCont, $table, $url)
    {
        try {
            $data = $this->connect()->query("UPDATE $table SET title='$title', content='$content', url='$urlCont' WHERE url='$url'");
            header('location:/admin?'.$table);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return ($data)? 'Успеx':'Не успех';
    }
}


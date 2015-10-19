<?php $urlPage = key($_GET); ?>
<nav class="navbar navbar-inverse">
  <a href="/admin/addPost?<?php echo $urlPage; ?>" class="btn btn-lg btn-success btn-block add_button">Добавить новую запись</a>
</nav>
<?php
    foreach($data as $row) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $row['title']; ?></h1>
            </div>
            <div class="panel-body">
                <p><?php echo $row['content']; ?></p>
            </div>
            <div class="panel-footer <?php echo $row['class']; ?>">
               <a href="?<?php echo $urlPage.'/'.$row['url']; ?>" class="btn btn-lg btn-success btn-block edit_button">Редактировать</a>
               <a href="/admin/delPost?<?php echo $urlPage.'/'.$row['url']; ?>" class="btn btn-lg btn-success btn-block del_button">Удалить</a>
            </div>
        </div>
<?php
    }
?>

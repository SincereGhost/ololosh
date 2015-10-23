<?php $urlPage = key($_GET); ?>
<nav class="navbar navbar-inverse">
  <a href="/admin/addPost?<?php echo $urlPage; ?>" class="btn btn-lg btn-success btn-block add_button">Добавить новую запись</a>
</nav>
<ul>
<?php
    foreach($data as $row) { ?>
        <li>
            <?php echo $row['login']; ?></h1>
            <a href="?<?php echo $urlPage.'/'.$row['url']; ?>" class="btn btn-lg btn-success btn-block edit_button">Редактировать</a>
            <a href="/admin/delPost?<?php echo $urlPage.'/'.$row['url']; ?>" class="btn btn-lg btn-success btn-block del_button">Удалить</a>
        </li>
<?php
    }
?>
</ul>
<?php
if ($data) {
    foreach ($data as $row) { ?>
        <div>
            <a href="/admin/articleUpdate/<?php echo $row['id']; ?>"><h1><?php echo $row['title']; ?></h1></a>
            <p><?php echo $row['content']; ?></p>
        </div>
        <?php
    }
}
?>
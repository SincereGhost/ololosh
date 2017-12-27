<?php if ($data): ?>

    <form action="/admin/articleUpdate/<?php echo $data['id']; ?>" method="POST">
        <input type="text" name="title" value="<?php echo $data['title'] ?>"/>
        <textarea name="content"><?php echo $data['content'] ?></textarea>
        <button>Update</button>
    </form>

<?php endif; ?>
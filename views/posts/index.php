<?php include 'views/partials/header.php' ?>

<main class="container">
    <a href="/admin/posts/create" class="btn btn-primary">Create New Post</a>
    <table class= "table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td><?= $post->createdDate()->format('Y-m-d H:i:s') ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="/admin/posts/show?id=<?= $post->id ?>" class="btn btn-info">View</a>
                            <a href="/admin/posts/edit?id=<?= $post->id ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/posts/delete?id=<?= $post->id ?>" class="btn btn-danger">Delete</a>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

</main>
<?php include 'views/partials/footer.php' ?>
<?php include 'views/partials/header.php' ?>

<main class="container">
    <form action="/admin/posts/edit?id=<?=$post->id?>" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="<?=$post->title?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="12"><?=$post->body?></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Update">
    </form>
</main>

<?php include 'views/partials/footer.php' ?>
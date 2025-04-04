<?php include 'views/partials/header.php' ?>

<main class="container">
    <form action="/admin/posts" method="POST">
        <div class="mn-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="mn-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="12"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Create Post">
    </form>

</main>

<?php include 'views/partials/footer.php' ?>
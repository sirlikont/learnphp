<?php include 'views/partials/header.php' ?>

<main class="container">
    <table class="table table-striped table-hover">
       
        <tbody>
            <tr>
                <th>ID</th>
                <td><?=$post->id?></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><?=$post->title?></td>
            </tr>
            <tr>
                <th>Content</th>
                <td><?=$post->body?></td>
            </tr>	
            <tr>
                <th>Created</th>
                <td><?=$post->createdDate()->format('Y-m-d H:i:s')?></td>
            </tr>
        </tbody>
</main>

<?php include 'views/partials/footer.php' ?>
<?php
$heroTitle = 'U.S news';
$posts = [
  ['title' => 'U.S news 1', 'author' => 'Lauri', 'body' => 'some content here 1'],
  ['title' => 'U.S news 2', 'author' => 'Jaanika', 'body' => 'some content here 2'],
  ['title' => 'U.S news 3', 'author' => 'Ethel', 'body' => 'some content here 3'],
  ['title' => 'U.S news 4', 'author' => 'Kaur', 'body' => 'some content here 4'],
];
?>
<?php include 'partials/header.php' ?>

<main class="container">

  <?php include 'partials/hero.php' ?>
  <?php include 'partials/featured.php' ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php' ?>
    </div>

    <div class="col-md-4">
      <?php include 'partials/sidebar.php' ?>
    </div>
  </div>

</main>
<?php include 'partials/footer.php' ?>
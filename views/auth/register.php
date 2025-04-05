<?php include 'views/partials/header.php' ?>

<main class="container">
    <form action="/register" method="POST">
        <div class="mn-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Password Confirmation</label>
            <input name="password_confirm" type="password" class="form-control" id="password_confirm">
        </div>
        <input class="btn btn-primary" type="submit" value="Register">
    </form>

</main>

<?php include 'views/partials/footer.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn | Nilgiris Likemind Technologies</title>
        <!-- bootstrap-4 css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <!-- custom-css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- header -->
    <header>
        <?php include('header.php') ?>
    </header>
    <!-- carousel have 3image -->
    <section class="RegisterSection">
    	    <?php include('signin-form.php') ?>
    </section>

    <!-- insert jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="./assets/js/bootstrap.js"></script>
     <!-- script js -->
     <script src="./assets/js/script.js"></script>
</body>

<!-- Footer -->
<article>
    <?php include('articles.php')?>
</article>

<!-- Copyrights -->
<footer class="bg-white">
    <?php include('footer.php')?>
</footer>

</html>
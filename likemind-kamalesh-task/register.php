<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Nilgiris Likemind Technologies</title>
        <!-- bootstrap-4 css -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- custom-css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- header -->
    <header>
        <?php include('header.php') ?>
    </header>
    <!-- carousel have 3image -->
    <section class="RegisterSection">
    	    <?php include('register-form.php') ?>
    </section>

    <!-- insert jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="./js/bootstrap.js"></script>
     <!-- script js -->
     <script src="./js/script.js"></script>
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
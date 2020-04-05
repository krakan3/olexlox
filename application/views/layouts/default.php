<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="ru"> <!--<![endif]-->
<head>
   <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">
    <title>O L E X L O X</title>
    <link href="/public/styles/main.css" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>

   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Links
    ================================================== -->
    <script src="https://kit.fontawesome.com/3a0ca78c25.js"></script>
</head>
<body>

    <!-- Header
    ================================================== -->
    <header>
        <div class="logo">
            <div><a href="/">OLEXLOX</a></div>
        </div>
        <nav id="nav-wrap">
            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

            <ul id="nav" class="nav">
                <li><a href="category">T-shirts</a></li>
                <li><a href="category">Hoodies</a></li>
                <li><a href="category">Sweetshots</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="about">About</a></li>
            </ul> <!-- end #nav -->
        </nav> <!-- end #nav-wrap -->
        <div class="header-right">
            <a href="account"><i class="fas fa-user"></i></a>
            <i class="fas fa-shopping-cart"></i>
            <a href="account" class="cost">0 rub</a>
        <div>
    </header>
    <?php echo $content; ?>

</body>
<footer>
    <nav id="nav-wrap">
        <ul id="nav-bot" class="nav-bot">
            <li><a href="about.html">YouTube</a></li>
            <li><a href="blog.html">Our VK</a></li>
            <li><a href="support.html">SoundCloud</a></li>
        </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
</footer>
</body>
</html>
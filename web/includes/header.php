<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/images/icons/favicon.ico" />
        <!-- Load Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">

        <title>The Maya Kitchen</title>
    </head>

    <body>
        <header class="siteHead">
            <div id="brand">
                <div>
                    <img class="logo" src="/images/logo.png">
                    <!-- <div class="social">
                        <a href="http://facebook.com/80kph" rel="nofollow"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/upsigmadeltaphi" rel="nofollow"><span class="icon icontwitter" aria-hidden="true"></span></a>
                        <a href=""><span class="icon iconpinterest" aria-hidden="true"></span></a>
                    </div> -->
                    <nav>
                        <a href="classes.php" <?php if ($thisPage=="classes") 
    echo " class=\"active\""; ?>>Classes</a>
                        <a href="recipes.php" <?php if ($thisPage=="recipes") 
    echo " class=\"active\""; ?>>Recipes</a>
                        <a href="articles.php" <?php if ($thisPage=="articles") 
    echo " class=\"active\""; ?>>Articles</a>
                        <a href="kids.php" <?php if ($thisPage=="kids") 
    echo " class=\"active\""; ?>>Kids' Corner</a>
                        <a href="contact.php" <?php if ($thisPage=="contact") 
    echo " class=\"active\""; ?>>Contact</a>
                    </nav>  
                </div>
            </div>
        </header>
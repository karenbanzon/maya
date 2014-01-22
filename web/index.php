<?php $thisPage="home" ?>
    
    <?php require 'includes/header.php' ?>

        <div class="main" id="home">
            <div class="topTier">
                <h1>Welcome to the Maya Kitchen</h1>
                <h5>Take a look at the classes we offer, try out our recipes, or catch up with our latest news!</h5>
                <div>
                    <a href="classes.php"><img src="images/essential/classes.jpg"></a>
                    <a href="classes.php">CLASSES</a>
                </div>
                <div>
                    <a href="recipes.php"><img src="images/essential/recipes.jpg"></a>
                    <a href="recipes.php">RECIPES</a>
                </div>
                <div>
                    <a href="articles.php"><img src="images/essential/articles.jpg"></a>
                    <a href="articles.php">ARTICLES</a>
                </div>
            </div>

            <aside>
                <div>
                    <h6>Social Media</h6>
                    <div class="social">
                        <a href="https://www.facebook.com/Mayakitchen" target="_blank"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="https://twitter.com/mayakitchen" target="_blank"><span class="icon icontwitter" aria-hidden="true"></span></a>
                        <a href="http://instagram.com/themayakitchen" target="_blank"><span class="icon iconinstagram" aria-hidden="true"></span></a>
                    </div>
                </div>
                <div class="schedules">
                    <h6>Class Schedules</h6>
                    <div>
                        <a href="classes.php"><strong>Christmas Dinner Menu</strong></a>
                        7 Dec 2013
                    </div>
                    <div>
                        <a href="classes.php"><strong>Crazy Cupcakes and Cake Pops</strong></a>
                        7 Dec 2013
                    </div>
                    <div>
                        <a href="classes.php"><strong>Cold Dishes for Noche Buena</strong></a>
                        14 Dec 2013
                    </div>
                    <div>
                        <a href="classes.php"><strong>Healthy Breads</strong></a>
                        14 Dec 2013
                    </div>
                </div>
                <?php require 'includes/rotm.php' ?>
                <?php require 'includes/newgen.php' ?>
                <?php require 'includes/newsletter.php' ?>
            </aside>

            <?php require 'includes/recentArticles.php' ?>

        </div>

    <?php require 'includes/footer.php' ?>
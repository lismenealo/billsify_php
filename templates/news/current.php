<?php
require_once "../modules/News/current.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <section>
            <a href="#" class="image featured"><img src="<?php echo $news_info['image']?>" alt="<?php echo $news_info['title']?>" /></a>
            <header>
                <h3><?php echo $news_info['title']?></h3>
            </header>
            <?php echo $news_info['body']?>
            <footer>
                <?php echo $news_info['author']?>
            </footer>
        </section>
    </div>
</section>
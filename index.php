<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/common.css">
    <link rel="stylesheet" href="style/home_page.css">
    <link rel="stylesheet" href="/style/adaptive.css">
    <title>Main</title>
</head>
<body>
    <?php require_once"header.php"; ?>
    
    <section class="about sections">
        <div class="container-flex">
            <div class="about__forest-video">
                <video class="about__video" src="videos/forest.mp4" controls>
                </video>
            </div>
            <div class="about__forest-subscribe">
                <h2 class="about__forest-subscribe-title">Follow_me</h2>
                <a class="about__forest-link" href="https://youtu.be/JTps8X_6kCI">
                    <img class="about__forest-link-image-youtube" src="images/YouTube-Logo.jpg" alt="">
                </a>
                <div class="about__forest-subscribe-icons">
                    <a class="about__forest-link-icon" href="https://youtu.be/JTps8X_6kCI">
                        <img class="about__forest-link-image-icon facebook" src="images/facebook.png" alt="">
                    </a>
                    <a class="about__forest-link-icon" href="https://youtu.be/JTps8X_6kCI">
                        <img class="about__forest-link-image-icon instagram" src="images/instagram.jfif" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="about__us sections">
        <div class="container">
            <div class="about__us-title-box">
                <h2 class="about__us-title">
                    About_us
                </h2>
            </div>
            <div class="about__us-text-box">
                <p class="about__us-box-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus quia dolores et vero earum quam libero dicta eum labore eius, ipsam odio temporibus fuga, illum enim deleniti non inventore laborum!
                </p>
            </div>
        </div> 
    </section>
    <section class="slider sections">
        <div class="container">
            <div class="slider__titlebox">
                <h2 class="slider__title">
                    Look_at_this
                </h2>
            </div>
            <div class="slider__textbox">
                <p class="slider__text">
                    We travelling anywhere , and it`s cool. More people was interesting of trawelling in the forest. 
                    Forest - it`s no just trees or birds and beautifull rivers. Forest - it`s time, when you can be free.
                </p>
            </div>
            <div class="slider__sliderbox">
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container-flex">
            <h1 class="footer__title">Forest_Travell</h1>
            <div class="footer__menu-box">
                <div class="footer__menu">
                    <ul class="footer__menu-items">
                        <li class="footer__menu-item">
                            <a class="footer__menu-link" href="form.php">sign up</a>
                        </li>
                        <li class="footer__menu-item">
                            <a class="footer__menu-link" href="form.php">registration</a>
                        </li>
                        <li class="footer__menu-item">
                            <a class="footer__menu-link" href="send_mail.php">send message</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__menu">
                    <ul class="footer__menu-items">
                        <li class="footer__menu-item">
                             <a class="footer__menu-link" href="#">Facebook</a>
                        </li>
                        <li class="footer__menu-item">
                            <a class="footer__menu-link" href="#">YouTube</a>
                        </li>
                        <li class="footer__menu-item">
                            <a class="footer__menu-link" href="#">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>   
        </div>
    </footer>
                        
</body>
</html>
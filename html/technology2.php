<?php
include 'common.php'; // Include the common file with session checks
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <title>Next View | Technology</title>
    <script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div class="preloader">
        <div></div>
        <div>Loading Content!</div>
    </div>

    <nav>
        <div class="container">
            <div class="logo">
                <i class="fas fa-globe fa-3x"></i>
                <h1>Next<span>View</span></h1>
            </div>

            <div class="social">
                <a href="https://web.facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
            </div>

            <div class="options">
            <a href="../index.php">Home</a>
            <a href="./about.php">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <section class="article-page">
            <article>
                <iframe width="400" height="500" frameborder="0" src="https://www.bbc.com/news/av-embeds/67304427"></iframe>
                <h2>'There will come a point when no job is needed,' says Elon Musk</h2>
                <div>
                    <p>
                        <i class="fas fa-user fa-1x"></i> Written By Joan Blav November 2, 2023
                    </p>
                    <p class="technology-category">Technology</p>
                </div>
                <p>
                    Billionaire Elon Musk tells British Prime Minister Rishi Sunak that artificial intelligence will be smarter than the smartest human.
                </p>
                <p>
                    Speaking at a highly regulated event, where journalists were not allowed to ask questions, TV cameras were not allowed inside and Downing Street instead released their own footage, he told the PM that at some point no jobs would be needed.
                </p>
                <p>
                    Technology industry guests were allowed to ask questions.
                </p>
            </article>

            <article>
                <h3>CATEGORIES</h3>
                <ul>
                    <li>Sports</li>
                    <li>Entertainment</li>
                    <li>Technology</li>
                    <li>Fashion</li>
                    <li>Shopping</li>
                </ul>
            </article>

            <article>
                <h3>JOIN OUR CLUB</h3>
                <p>
                    Join our club for exclusive news and updates!
                </p>
                <a href="#">Join Now</a>
            </article>
        </section>
    </div>

    <footer>
        <div class="container">
            <div class="footer">
                <article>
                    <div class="logo">
                        <i class="fas fa-globe fa-2x"></i>
                        <h2>Next<span>View</span></h2>
                    </div>
                    <p>
                        Get the latest news and updates from around the world with Next View.
                    </p>
                </article>

                <article>
                    <h4>EMAIL NEWSLETTER</h4>
                    <p>Stay informed. Subscribe to our newsletter for the latest news and updates.</p>
                    <input type="email" placeholder="Enter Email..." />
                    <a href="#"> Subscribe</a>
                </article>

                <article>
                    <h4>SITE LINKS</h4>
                    <p>Help & Support</p>
                    <p>Privacy Policy</p>
                    <p>About Us</p>
                    <p>Contact</p>
                </article>

                <article>
                    <h4>JOIN OUR CLUB</h4>
                    <p>
                        Join our club for exclusive news and updates!
                    </p>
                    <a href="#">Join Now</a>
                </article>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2021, All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script src="../js/script.js"></script>
</body>
</html>
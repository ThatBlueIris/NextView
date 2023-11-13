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
    <title>Next View | Home</title>
    <script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" />
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
                <a href="./index.html" class="current">Home</a>
                <a href="./html/about.html">About</a>
            </div>
        </div>
    </nav>
    <header class="showcase">
        <div class="container">
            <div class="text-content">
                <p class="sports-category">News</p>
                <h1>Latest News</h1>
                <p>
                    Get the latest news updates from around the world. Stay informed with the most important stories.
                </p>
                <a href="./html/Latest.html">Read More</a>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <h1 class="editor-h1">Hot Topics</h1>
            <div class="articles">
                <a href="./html/Entertainment.html" class="card">
                    <img src="https://assets.bharian.com.my/images/articles/WhatsApp_Image_2023-11-05_at_11.21.28_PM_1699198819.jpg" alt="" />
                    <article>
                        <p class="entertainment-category">Entertainment</p>
                        <h1>Haqiem Rusli, Ariff Bahran menang lagi di pentas FD3</h1>
                        <p>
                            SHAH ALAM: Pasangan sepupu, Haqiem Rusli dan Ariff Bahran terus unggul di pentas musim ketiga Famili Duo (FD3) apabila diumum Duo Terbaik pada konsert minggu keempat yang disiarkan secara langsung TV3 dari Studio TV3, Glenmarie, di sini, malam tadi.
                        </p>
                    </article>
                </a>
                <a href="./html/article.html" class="card">
                    <article>
                        <p class="sports-category">Sports</p>
                        <h1>Sports News</h1>
                        <p>
                            Stay updated with sports events, scores, and highlights.
                        </p>
                    </article>
                </a>
                <a href="./html/technology.html" class="card">
                    <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/10912/production/_131585876_hh212_jwst_full_20231030.jpg.webp" alt="" />
                    <article>
                        <p class="technology-category">Technology</p>
                        <h1>James Webb telescope: Baby star launches giant jets and shocks</h1>
                        <p>
                            Imagine you could go back in time 4.6 billion years and take a picture of our Sun just as it was being born. What would it look like?
                        </p>
                    </article>
                </a>
                <a href="./html/sports.html" class="card">
                    <article>
                        <p class="sports-category">Sports</p>
                        <h1>Infantino puji bola sepak Malaysia</h1>
                        <p>
                            KUALA LUMPUR: Presiden Persekutuan Bolasepak Antarabangsa (FIFA), Gianni Infantino percaya bola sepak Malaysia berada di landasan tepat untuk terus berkembang menerusi Peta Hala Tuju F:30 yang diperkenalkan Persatuan Bolasepak Malaysia (FAM) sejak 2018.
                        </p>
                    </article>
                    <img src="https://assets.bharian.com.my/images/articles/fifa510c_1699853706.jpg" alt=""/>
                </a>
                <a href="./html/technology2.html" class="card">
                    <img src="https://ichef.bbci.co.uk/news/240/cpsprodpb/6996/production/_131603072_p0gqgxsq.jpg" alt="" />
                    <article>
                        <p class="technology-category">Technology</p>
                        <h1>'There will come a point when no job is needed,' says Elon Musk</h1>
                        <p>
                            Billionaire Elon Musk tells British Prime Minister Rishi Sunak that artificial intelligence will be smarter than the smartest human.
                        </p>
                    </article>
                </a>
                <a href="./html/article.html" class="card">
                    <article>
                        <p class="sports-category">Sports</p>
                        <h1>Sports News</h1>
                        <p>
                            Stay updated with sports events, scores, and highlights.
                        </p>
                    </article>
                </a>
                <a href="./html/Entertainment2.html" class="card">
                    <article>
                        <p class="entertainment-category">Entertainment</p>
                        <h1>Usah tertipu dengan akaun palsu minta bantuan untuk Gaza - Heliza Helmi</h1>
                        <p>
                            Aktivis kemanusiaan, Heliza Helmi, 37, mendakwa ada pihak mengambil kesempatan menggunakan namanya dan mewujudkan akaun media sosial bagi tujuan mengutip derma.
                        </p>
                    </article>
                    <img src="https://assets.bharian.com.my/images/articles/bh13heliza2_1699856070.jpg" alt="" />
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div class "container">
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
                    <p>Join our club for exclusive news and updates.</p>
                    <a href="#">Join Now</a>
                </article>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2023, All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>
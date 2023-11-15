<?php
include 'common.php'; // Include the common file with session checks
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png" />
    <link rel="manifest" href="../favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <title>Next View | About</title>
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
                <a href="./about.php" class="current">About Me</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <section class="about">
            <article>
                <h2>ABOUT OUR ORGANIZATION</h2>
                <p>Welcome to Next View, your definitive source for comprehensive and insightful news coverage. At Next View, we pride ourselves on delivering a diverse array of news stories that span the entire spectrum of human experience. Our journey began with a simple yet profound mission: to provide our readers with a holistic view of the world, one that transcends borders and captures the essence of global events.</p>
                <p>In the fast-paced and dynamic landscape of modern news, Next View stands out as a beacon of credibility and integrity. Our team of seasoned journalists and contributors, each equipped with a unique set of skills and perspectives, works tirelessly to unearth the untold stories, investigate the pressing issues, and present them to you with unparalleled depth and clarity.</p>
                <p>Rooted in a commitment to journalistic excellence, Next View prides itself on delivering news that matters. Whether it's breaking news, in-depth features, or thought-provoking analysis, we strive to be your go-to destination for staying informed and inspired. Our dedication to accuracy and unbiased reporting is unwavering, ensuring that you receive news you can trust.</p>
                <p>Beyond the headlines, Next View is more than just a news website; it's a community of engaged and informed individuals who share a curiosity about the world. We encourage lively discussions and diverse perspectives, fostering an environment where ideas can flourish and understanding can grow. Through our interactive features, opinion pieces, and community forums, we invite you to be an active participant in shaping the discourse of our times.</p>
                <p>In the digital age, we understand the importance of adapting to the evolving needs of our readers. Next View is not just a spectator in the technological revolution; we are at the forefront, utilizing cutting-edge tools and platforms to enhance your news-reading experience. Our user-friendly interface ensures that you can navigate seamlessly through the wealth of information we offer, tailoring your news consumption to suit your preferences.</p>
                <p>At Next View, we believe that knowledge is power, and through our commitment to providing you with accurate, timely, and thought-provoking content, we empower you to make informed decisions in your personal and professional life. As we continue on this journalistic odyssey, we invite you to join us in exploring the Next View—where every story is an opportunity to broaden your perspective and deepen your understanding of the world we share. Thank you for being part of our journey.</p>
            </article>
            <article>
                <h3>JOIN OUR CLUB</h3>
                <p>
                    Become a part of the News Grid community and stay connected with the latest developments. Join our club to receive exclusive updates, newsletters, and special content.
                </p>
                <a href="#">Join Now</a>
            </article>
        </section>
    </div>
    
    <div class="row">
        <div class="column">
          <div class="card">
            <img src="me.jpg" alt="Arif" style="width:300px">
            <div class="container">
              <h2>Arif Abd Kahar</h2>
              <p class="title">CEO &amp; Founder</p>
              <p>As a dedicated and aspiring computer scientist, I bring a wealth of knowledge and passion for technology to the forefront. Armed with a diploma in Computer Science, I have cultivated a solid foundation in programming, data structures, and algorithm design. 
                My journey in the realm of technology extends beyond the classroom, where I have actively engaged in real-world projects, harnessing problem-solving skills to create innovative solutions. 
                With a keen eye for emerging trends and a commitment to continuous learning, I strive to contribute meaningfully to the ever-evolving landscape of computer science. 
                My goal is to bridge the gap between theoretical knowledge and practical application, leveraging my skills to drive positive change in the tech industry. 
                Join me on this exciting journey as we navigate the dynamic world of computer science together.</p>
              <a href="https://www.instagram.com/arifabdkahar_/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
              <p>kl2207011677@student.kuptm.edu.my</p>

            </div>
          </div>
        </div>
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
                        Stay informed with News Grid, your trusted source for news and updates. We're here to bring the world to your fingertips.
                    </p>
                </article>
                <article>
                    <h4>EMAIL NEWSLETTER</h4>
                    <p>Subscribe to our newsletter and get the latest news delivered to your inbox.</p>
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
                        Be a part of our community and receive exclusive updates and content.
                    </p>
                    <a href="#">Join Now</a>
                </article>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2023, All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>
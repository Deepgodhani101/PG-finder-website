<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="css/aboutUs.css">
    <script src="js/common.js"></script>
</head>
<body>
<nav>
    <div class="icon">
        <img src="img/Logo/png/log.png" alt="icon" onclick="gotoLink('index.php')">
    </div>

    <div class="links">
        <div class="search-button">
            <form id="search-form" action="property_list.php" method="GET">
                <label for="search-city"></label><input class="form-control" type="text" name="city" id="search-city" placeholder="search">
            </form>
        </div>
        <div class="text-links">
            <a href="aboutUs.php"><strong>About Us</strong></a>
            |
            <a href="home.php">Homes</a>
        </div>
        <?php
        if (!isset($_SESSION['user_id'])) {
            ?>
            <div class="login-button">
                <button onclick="gotoLink('logup.php')">Login</button>
            </div>
            <?php
        } else {
            ?>

            <div class="login-button">
                <button onclick="gotoLink('logout.php')">Logout</button>
            </div>
            <?php
        }
        ?>
    </div>
</nav>

<div class="hr-under-nav">
    <hr>
</div>

<div class="top-panel">
    <div class="top-large-name">
        <h1>PG Finder Website</h1>
    </div>
    <div class="top-lower-container">
        <img src="img/Logo/png/vcet-logo.jpeg" alt="face-icon" aria-label="face-icon">
        <div class="top-lower-text">
            <p>
             Welcome to PG Finder, a student-built platform designed to help students find PG accommodations across
             India from the comfort of their homes. Created by Chetas Mohite, Shubham Ghelani, Nandish Ghela, and 
             Deep Godhani, students of VCET, PG Finder makes it easy to explore and book your ideal PG. Find the 
             perfect place to stay, hassle-free!
            </p>
            
        </div>
    </div>
</div>

<div class="hr-under-nav">
    <hr>
</div>

<div class="tech-stack">
    <h2>Tech Stack</h2>
    <div class="tech-icons">
        <div class="each-tech-icon">
            <h3>HTML</h3>
            <img src="img/tech-stack/icons8-html-5-480.png" alt="HTML icon" onclick="gotoLink('')">
        </div>
        <div class="each-tech-icon">
            <h3>CSS</h3>
            <img src="img/tech-stack/icons8-css3-240.png" alt="CSS icon">
        </div>
        <div class="each-tech-icon">
            <h3>JavaScript</h3>
            <img src="img/tech-stack/icons8-javascript-480.png" alt="JS icon">
        </div>
        <div class="each-tech-icon">
            <h3>PHP</h3>
            <img src="img/tech-stack/icons8-php-logo-512.png" alt="PHP icon">
        </div>
        <div class="each-tech-icon">
            <h3>MySQL</h3>
            <img src="img/tech-stack/icons8-mysql-logo-480.png" alt="MySQL">
        </div>
    </div>
</div>

<div class="hr-under-nav">
    <hr>
</div>

<div class="members-title">
    Team Members
</div>

<div class="members-info">
    <div class="top-member">
        <div class="member-card">
            <img src="img/deep.jpeg" alt="member-image">
            <div class="member-text">
                <h2>Deep Godhani</h2>
                <h3>8104044809</h3>
                <div class="member-text-links">
                    <a href="https://www.linkedin.com/in/deep-godhani-9243a9278?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a>   
                </div>
            </div>
        </div>
        <div class="member-card">
            <img src="img/chetas.jpeg" alt="member-image">
            <div class="member-text">
                <h2>Chetas Mohite</h2>
                <h3>7066777707</h3>
                <div class="member-text-links">
                    <a href="https://www.linkedin.com/in/chetas-mohite-66b6481b2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a>
                    <a href="https://github.com/CSM4416">GitHub</a>
                </div>
            </div>
        </div>
        <div class="member-card">
            <img src="img/shubham.jpeg" alt="member-image">
            <div class="member-text">
                <h2>  Shubham Ghelani</h2>
                <h3>8104044809</h3>
                <div class="member-text-links">
                    <a href="">LinkedIn</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="down-member">
        <div class="member-card">
            <img src="img/nandish.jpeg" alt="member-image">
            <div class="member-text">
                <h2>Nandish Ghela</h2>
                <h3>8779752592</h3>
                <div class="member-text-links">
                    <a href="">LinkedIn</a>
                    <a href="">GitHub</a>
                </div>
            </div>
        </div>
        <div class>
            <img src="" alt="">
            <div class="member-text">
                <h2></h2>
                <h3></h3>
                <div class="member-text-links">
                   
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hr-under-nav">
    <hr>
</div>

<div class="lower-text">
    <h2>✨ <em>BUILT BY VCET STUDENTS</em> ✨</h2>
</div>

<footer>
    <div class="footer-up">
        <div class="footer-links">
            <a href="home.php">homes</a>
            <a href="logup.php">login</a>
            <a href="logup.php">signup</a>
        </div>

        <div class="other-info">
            <h3>PG Finder built for the <br>students <a href="home.php">looking for PGs</a><br> and homes throughout the country.</h3>
        </div>

        <div class="contact-us">
            <h3>Contact Us</h3>
            <div class="contact-form">
                <form>
                    <label for="email-contact"></label><input id="email-contact" type="email" name="email" value="email">
                    <label for="content"></label><input id="content" type="text" name="content" value="content">
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-text">
        &#169; PG Finder 2024 | Application By CSE(DS) Students.
    </div>
</footer>
</body>
</html>
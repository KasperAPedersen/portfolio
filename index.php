<!DOCTYPE html>
<html>
    <head>
        <title>Swoopai | Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="inc/styling/css/index.css?version=4">
        <?php include 'inc/styling/php/db_connection.php' ?>
    </head>
    <body>
        <!-- Header -->
        <div class="w3-top">
            <!-- Header (on larger screens) -->
            <div class="w3-bar" id="navbar">
                <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="navIconChange()" title="Toggle Navigation Menu">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#home" class="w3-bar-item w3-button w3-hover-dark-gray">HOME</a>
                <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-dark-gray"><i class="fa fa-user"></i> ABOUT</a>
                <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small w3-hover-dark-gray"><i class="fa fa-th"></i> PORTFOLIO</a>
            </div>

            <!-- Header (on smaller screens) -->
            <div id="smallNav" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                <a href="#about" class="w3-bar-item w3-button" onclick="navIconChange()">ABOUT</a>
                <a href="#portfolio" class="w3-bar-item w3-button" onclick="navIconChange()">PORTFOLIO</a>
            </div>
        </div>

        <!-- Top background picture with title (swoopie.xyz) (swoopie on smaller screens) -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">
                <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">SWOOPAI<span class="w3-hide-small">.DK</span></span>
            </div>
        </div>

        <!-- About me page -->
        <div class="w3-content w3-container w3-padding-64" id="about">
            <h3 class="w3-center">ABOUT ME</h3>
            <p class="w3-center"><em>I love programming</em></p>
            <p>Hi! My name is Kasper &amp; I'm 24 years old and loves spending time on my computer, I mostly spend my time on programming &amp; playing FPS and survival games. I got into programming when I was 13 years old and was trying to develop my first mod to Call of Duty, however now I'm more focused on PC Game Hacking &amp; web development which I've been doing for the past 4 years now. I'm familiar in the programming languages HTML, CSS, Javascript, Python &amp; C++. I'm currently studying software development &amp; I'd like to become a game developer or a backend developer once I'm finished with my studies.</p>
            <p>On this website you'll be able to see my projects as live demo versions, you'll also be able to contact me through the formular in the bottom of the page.</p>
        </div>

        <!-- Statetics page -->
        <div class="w3-row w3-center w3-dark-grey w3-padding-16" id="statsPage">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge"><?php include 'inc/styling/php/visitors.php' ?></span><br> Visitors
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">10+</span><br>All-time projects
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge"><?php include 'inc/styling/php/websites.php' ?></span><br>Websites
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge"><?php include 'inc/styling/php/cheats.php' ?></span><br>Cheats
            </div>
        </div>

        <!-- Portfolio background with title (portfolio) -->
        <div class="bgimg-2 w3-display-container w3-opacity-min" id="portfolioHeader">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
            </div>
        </div>

        <!-- Portfolio page -->
        <div class="w3-content w3-container w3-padding-64" id="portfolio">
            <h3 class="w3-center">MY WORK</h3>
            <p class="w3-center"><em>Here are some of my latest websites<br> Click on the images to view a live version</em></p><br>

            <div class="w3-cell-row">
                <div class="w3-container w3-cell w3-mobile projectCards">
                    <a href="#" class="hideLinks"><div class="w3-card-4 hvr-pop" style="width:100%;max-width:400px">
                        <img src="inc/images/tempPic1.PNG" alt="Alps" style="width:100%">
                        <div class="w3-container w3-center w3-padding">
                            <p><b>Portfolio</b><br>Written in html, css, js, php</p>
                        </div>
                    </div></a>
                </div>
                    
                <div class="w3-container w3-cell w3-mobile">
                    <a href="#" class="hideLinks"><div class="w3-card-4 hvr-pop" style="width:100%;max-width:400px">
                        <img src="inc/images/tempPic1.PNG" alt="Alps" style="width:100%">
                        <div class="w3-container w3-center w3-padding">
                            <p><b>Template</b><br>Written in html, css, js, php</p>
                        </div>
                    </div></a>
                </div>
            </div>

            <div class="seperator"></div>

            <div class="w3-cell-row">
                <div class="w3-container w3-cell w3-mobile projectCards">
                    <a href="#" class="hideLinks"><div class="w3-card-4 hvr-pop" style="width:100%;max-width:400px">
                        <img src="inc/images/tempPic1.PNG" alt="Alps" style="width:100%">
                        <div class="w3-container w3-center w3-padding">
                            <p><b>Template</b><br>Written in html, css, js, php</p>
                        </div>
                    </div></a>
                </div>
                    
                <div class="w3-container w3-cell w3-mobile">
                    <a href="#" class="hideLinks"><div class="w3-card-4 hvr-pop" style="width:100%;max-width:400px">
                        <img src="inc/images/tempPic1.PNG" alt="Alps" style="width:100%">
                        <div class="w3-container w3-center w3-padding">
                            <p><b>Template</b><br>Written in html, css, js, php</p>
                        </div>
                    </div></a>
                </div>
            </div>

            <div class="seperator"></div>

            <div class="w3-cell-row">
                <div class="w3-container w3-cell w3-mobile">
                    <a href="#" class="hideLinks"><div class="w3-card-4 hvr-pop" style="width:100%;max-width:400px">
                        <img src="inc/images/tempPic1.PNG" alt="Alps" style="width:100%">
                        <div class="w3-container w3-center w3-padding">
                            <p><b>Template</b><br>Written in html, css, js, php</p>
                        </div>
                    </div></a>
                </div>
            </div>

            
        </div>

        <!-- Contact background with title (contact) -->
        <div class="bgimg-3 w3-display-container w3-opacity-min" id="contactHeader">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
            </div>
        </div>

        <!-- Contact page -->
        <div class="w3-content w3-container w3-padding-64" id="contact">
            <form class="w3-container w3-card-4" method="POST" action="inc/styling/php/mail.php"><br>
                <div class="w3-cell-row">
                    <div class="w3-container w3-cell w3-mobile">
                        <div class="w3-row-padding">
                            <div class="w3-half">
                                <label class="w3-text-grey">Email Address</label>
                                <input class="w3-input w3-border" type="text" required="" name="email">
                            </div>
                            <div class="w3-quarter">
                                <label class="w3-text-grey">First Name</label>
                                <input class="w3-input w3-border" type="text" required="" name="fname">
                            </div>
                            <div class="w3-quarter">
                                <label class="w3-text-grey">Last Name</label>
                                <input class="w3-input w3-border" type="text" required="" name="lname">
                            </div>
                        </div>

                        <div class="w3-row-padding">
                            <div class="w3-quarter">
                                <label class="w3-text-grey">Subject</label>
                                <input class="w3-input w3-border" type="text" required="" name="subject">
                            </div>
                            <div class="w3-threequarter">
                                <label class="w3-text-grey">Message</label>
                                <input class="w3-input w3-border" type="text" required="" name="message">
                            </div>
                        </div>
                        
                        <div class="w3-row-padding w3-right">
                            <div class="w3-quarter">
                                <p><button type="submit" class="w3-btn w3-padding w3-teal" style="width:120px" id="contactBtn">Send &nbsp; ❯</button></p>
                            </div>
                        </div><br>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer page -->
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
            <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
            <div class="w3-xlarge w3-section">
                <a href="https://steamcommunity.com/id/easyzyx"><i class="fa fa-steam w3-hover-opacity"></i></a>
                <a href="https://www.instagram.com/swooopie/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
                <a href="https://www.snapchat.com/add/slaskerhd"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
                <a href="https://twitter.com/imeasyx"><i class="fa fa-twitter w3-hover-opacity"></i></a>
            </div>
        </footer>
        <script src="inc/styling/js/index.js?version=4"></script>
    </body>
</html>

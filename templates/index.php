<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcane Landscaping</title>
    <link rel="icon" href="{{ url_for('static', filename='static/images/icon.png') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='styles.css') }}">
</head>
<body>
    <div class="custom-shape-divider-top-1712454902">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <nav class="navbar"> </nav>

        <div class="navbar__container">
            <a href="/" id="navbar__logo"><img src="static/images/icon.png" alt="" width="100px" height="100px"><p>
                Arcane Landscaping
            </p></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="/" class="navbar__links">
                        Home
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="/Images" class="navbar__links">
                        Images
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="/about-us" class="navbar__links">
                        About us
                    </a>
                </li>
                <li class="navbar__btn">
                    <a href="/" class="button">
                        Contact us
                    </a>
                </li>
            </ul>
        </div>
    

</body>
 
    <footer>
        <nav class="foot">

        </nav>
        <div class="background">
            
            </svg>
          </div>

        <section>
            
              <p class="legal">© 2024 All rights reserved</p>
        </section>
        
    </footer>
   
    
        
        

        <div class="finish_title">
            <h2>
                <center>
                    <p>
                        OUR WORK
                    </p>
                </center>
            </h2>
        </div>
        <div class="finish">
            <center>
                <p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
                     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                    <br>
                    <br>
                    <br>
                    <p id="demo">Lauren ipsum</p>
                    <br>
                </p>
                
            </center>
        </div>
            <img src="static/images/backyard.png" alt="/" width=100% height=100% >
            <style>
                /* Additional CSS styles can be added here */
                .divScroll {
                    overflow:hidden;
                    height: 1000px;
                }
                .center-text {
                    text-align: center;
                }
                .center-content {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh; /* This centers vertically */
                }
            </style>
            <div class="divScroll">
            </div>
    <?php
    echo "Your IP is: " . $_SERVER["REMOTE_ADDR"];
    ?>
</html>
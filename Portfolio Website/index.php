<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#Resume" class="menu-btn">Resume</a></li>
                <li><a href="#portfolio" class="menu-btn">Portfolio</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Labanna Saha</div>
                
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile 1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Labanna </div>
                <tr>
        
                Name             :Laboni Saha <br>
                Address          :18 No,Cotbari,Gabtoli,Mirpur,Dhaka-1216 <br>
                Mobile No        :01684386098 <br>
                </tr>
        
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume section start -->
    <section class="Resume" id="Resume">
        <div class="max-width">
            <h2 class="title">My Resume</h2>
            <div class="serv-content">
                <tr style="text-align: center;">
                    BIODATA<br>
        
        
                </tr>
                
                Name             :Laboni Saha <br>
        
                Father's Name    :Dilip Saha <br>
        
                Mother's Name    :Sumona Saha <br>
        
                Permanent Address:18 No,Cotbari,Gabtoli,Mirpur,Dhaka-1216 <br>
        
                Present Address  :18 No,Cotbari,Gabtoli,Mirpur,Dhaka-1216 <br>
        
                Date Of Birth    :13 May,2000 <br>
        
                Nationality      :Bangladeshi <br>
        
                Religion         :Hindu <br>
                
                Mobile No        :016********* <br>
        
                <tr>
                    <th>Educational Qualification</th>
        
                </tr>
                <table border="1px" width="100%">
                    <tr style="text-align: center;">
                        <th>SL.NO</th>
                        <th>Name Of Examination</th>
                        <th>Passing Year</th>
                        <th>Subject</th>
                        <th>GPA</th>
                        <th>Board/University</th>
        
                    </tr>
                    <tr style="text-align: center;">
                        <td>1</td>
                        <td>SSC</td>
                        <td>2015</td>
                        <td>Science</td>
                        <td>4.50</td>
                        <td>Dhaka</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>2</td>
                        <td>HSC</td>
                        <td>2017</td>
                        <td>Science</td>
                        <td>4.25</td>
                        <td>Dhaka</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>3</td>
                        <td>B.SC</td>
                        <td>2017-2021</td>
                        <td>CSE</td>
                        <td>3.08</td>
                        <td>City University</td>
        
                    </tr>
                </table>
                Present Profession :Student <br>
                Hobbies            :Travelling ,Listening Song ,Learning New Things.
                
                        
                    </div>
                </div>
                
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Labanna Saha</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Dhaka,Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">labonnosaha47@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="database/in.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name"placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field textarea">
                            <textarea  name="text"cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a>Labanna saha</a> 
    </footer>

    <script src="script.js"></script>
</body>
</html>

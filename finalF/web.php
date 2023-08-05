<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELORA</title>
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

            <div class="logo"><a href="#">ELO<span>RA</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#category" class="menu-btn">Internships</a></li>
                <li><a href="#quotes" class="menu-btn">Quotes</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="index3.php" class="menu-btn">Sign Out</a></li>
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
                <div class="text-1">Welcome to</div>
                <div class="text-2">ELORA</div>
                <div class="text-3"><span class="typing"></span></div>
                <a href="#about">Know More</a>
            </div>
        </div>
    </section>

     

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="elora.png" alt="">
                </div>
                <div class="column right">
                    <div class="text"><span class="typing-2"></span></div>
                    <p>ELORA can be a useful tool for students who are looking for internships. We can help students to find suitable internship opportunities, apply for them, and manage their internship experience. We provide a list of available internship opportunities from various companies and organizations. The students are able to filter the list based on their interests and track their internship progress. Overall, ELORA can help students to have a more organized and effective internship experience.
                    </p>
                    <a href="#category">Find Internships</a>
                </div>
            </div>
        </div>
    </section>
<!-- category section start -->
<section class="category" id="category">
	<div class="max-width">
		<h2 class="title">Internships</h2>
		<div class="carousel owl-carousel">
			<div class="card">
				<div class="box">
                    <a href="eee1.php">
					<img src="ic3.jpg" alt="">
					<div class="text">Electrical and Electronics Engineering</div>
                </a>
				</div>
			</div>
			<div class="card">
				<div class="box">
                    <a href="ec1.php">
					<img src="ic4.jpg">
					<div class="text">Electronics and Communication Engineering</div></a>
				</div>
			</div>
			<div class="card">
				<div class="box">
                    <a href="mech1.php">
					<img src="ic5.jpg" alt="">
					<div class="text">Mechanical Engineering</div></a>
					
				</div>
			</div>
			<div class="card">
				<div class="box">
                    <a href="cs1.php">
					<img src="icon1.jpg" alt="">
					<div class="text">Computer Science Engineering</div>
                    </a>
				</div>
			</div>
			<div class="card">
				<div class="box">
                    <a href="ce1.php">
					<img src="ic2.jpg" alt="">
					<div class="text">Civil Engineering</div></a>
					
				</div>
			</div>
		</div>
	</div>
</section>

    <!-- quotes section start -->
    <section class="quotes" id="quotes">
        <div class="max-width">
            
            <div class="quotes-content">
                <div class="card">
                    <div class="box">
                        
                        <div class="text"></div>
                        <p>" Work hard in silence. Let success be your noise. "</p>
						<p>~ Frank Ocean</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        
                        <div class="text"></div>
                        <p>" The value of achievement lies in the achieving. "</p>
						<p>~ Albert Einstein</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text"></div>
                        <p>" It always seems impossible until it's done. "</p>
						<p>~ Nelson Mandela</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- team section start -->
	

    

    

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Want to get in touch with us? We'd love to hear from you. Here's how you can reach us...</p>
                    <div class="icons">
                        
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Location</div>
                                <div class="sub-title">KOCHI</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">elora@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
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
        <span>Created By <a href="#"><span class="typing-3"></span></a> | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>

    <script src="web.js"></script>
</body>
</html>
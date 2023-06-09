<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Athang Learning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
</head>
    <body>
        <!---------------------------------------------------NAV-BAR----------------------------------------------------->
        <?php 
            include('nav.php') 
        ?>
        <!---------------------------------------------------SERVICES-SECTION-------------------------------------------->
        <section id=servics>
            <h2>Our Services</h2>
            <p>Athang plays a vital lead role in the ever changing ICT scenario in Bhutan. With our team of professional expertise 
                abreast and adept with the ICT trend, Athang offers its software development expertise in designing, developing and 
                re-engineering the ICT requirements of our clients. Over a decade, our software engineers have executed several 
                interesting projects starting from a simple website to many complex systems. And the recent achievement would be 
                the development and successful rollout of an Enterprise Resource Planning system.
            </p>
            <!-----------------------------------------------SERVICE-DETAILS-FLEX--------------------------------------->
            <div class="serviceprovider"> 
                <div class="cols">
                    <h1> Academic Programs</h1>
                    <div class="icons">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <p>Learning institutes typically offer various 
                        academic programs such as undergraduate and graduate degrees, 
                        certificates, diplomas, and other specialized courses in fields like Information Technology, engineering, ECCD, and more.</p>
                </div>
                <div class="cols">
                    <h1>Professional Development</h1>
                    <div class="icons">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <p>Learning institutes also provide training and development opportunities for professionals who want to enhance their skills and knowledge
                         in specific areas like leadership, project management, data analysis, communication, and more.</p>
                </div>
                <div class="cols">
                    <h1>Research Facilities</h1>
                    <div class="icons">
                    <i class="fa-solid fa-globe"></i>
                    </div>
                    <p>Many learning institutes have research facilities 
                    such as laboratories, observatories, and libraries that support 
                    cutting-edge research in fields like software development, engineering, and etc.</p>
                </div>
            </div>
        </section>
     
        <!----------------------------------------------------COURSE-DETAILS-------------------------------------------->
        <section id="courses">                                  
            <h2>Courses</h2>
        </section>    
        <div class="servicecontainer">
            <div class="colum">
                 <h1>Web Development</h1>
                 <img src="webdev.jpg" alt="Web development" style="border-radius:10px">
                 <p> we implement rigorous safety checks and test the software to ensure a high level of performance. 
                    We teach Frontend and backend which include:
                    <ol type="i">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>JAVASCRIPT</li>
                    <li>Mysql</li>
              
                 
                 
                </p>
            </div>
            <div class="colum">
                 <h1>Graphic Design</h1>
                 <img src="graphic.jpg" alt="Graphic design" style="border-radius:10px">
                 <p> A typical Graphic Design curriculum includes subjects like Colours and Form, Technical Drawing,
                      Visual Culture, Additionally Athang Training Academy provide graphic designing Program, 
                     Which include:
                   
                    <ol type="i">
                    <li>ADOBE photoshop,</li>
                    <li>Animation</li>
                    <li> Video editing</li>
                    <li> Logo Design</li>
                    <li>Drawing</li>
                    </ol>
                </p> 
            </div>
            <div class="colum">
                 <h1>Networking</h1>
                 <img src="network.jpg" alt="Networking"; style="border-radius:10px">
                 <p>Network specialists and administrators are responsible for day-to-day operations and network architects and engineers design and build local area networks (LANs)
                 <ol type="i">
                    <li>Cisco packet tracer</li>
                    <li>virtual Box</li>
                    <li>Ubuntu - Networking</li>
                    </ol>
                 </p>
            </div>
            <div class="colum">
                 <h1>Project Management</h1>
                 <img src="project.png" alt="Image 1" style="border-radius:10px">
                 <p>If you have a software product that has served you well over many years but no longer meets your current needs, the best approach for is to arrange for a re-engineering of the app rather than starting over from scratch.
                     It often proves efficient and cost effective to re-engineer outdated software.</p>
            </div>
            <div class="colum">
                 <h1>ECCD</h1>
                 <img src="child.jpg" alt="Eccd" style="border-radius:10px">
                 <p>Athang Training Academy 
                    Athang provides the foundation of life skills to children, like soft skills, good behavior, 
                    good manners, emotional literacy, pre-literacy, emergent literacy</p>
            </div>
            <div class="colum">
                 <h1>General Training</h1>
                 <img src="gene.jpg" alt="Image 1" style="border-radius:10px">
                 <p>Athang Training Academy provide Online Freelancing Program and
                     training a duration of 6 months supported by ministry of labour and resources.
                    Which you can upgrade your skills by joining variety of trainings.
                </p>
            </div>
        </div>
        <!-------------------------------------------------LINK-REGISTER-PAGE-------------------------------------------->
        <div class="mycon">
                <div class="click">
                    <a href="register">Register here</a>
                </div>    
                <div class="plan">
                    <a href="button"name="save">Lesson plan </a>
                </div>
        </div>

        <!------------------------------------------------- Lesson plan---------------------- -->
  
        <!---------------------------------------------------FOOTER-----------------------------------------------------> 
        <?php 
            include('footer.php')    
        ?>
    </body>
</html>
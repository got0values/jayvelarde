<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <title>Jason Velarde</title>
    </head>

<body>
    <nav id="navbar">
        <div id="jv" class="dancingscript">
            Jason Velarde
        </div>
        <ul>
            <li><a href="#projects" class="nav-list">Projects</a></li>
            <li><a href="#me" class="nav-list">About Me</a></li>
            <li><a href="#contact" class="nav-list">Contact</a></li>
        </ul>
    </nav>

    <div id="container">

        <section id="welcome-section">
            <h1>JASON VELARDE</h1>
            <h2 class="dancingscript appear show-on-scroll">web developer</h2>
        </section>

        <section class="section" id="projects">
            <h2>My Projects</h2>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://jvreads.com" target="_blank"><img src="images/jvreads.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://jvreads.com" target="_blank"><h3 class="from-right show-on-scroll">JV Reads</h3></a>
                        <a href="https://github.com/got0values/jvreads" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">Made for librarians, but can be useful for anyone that would like to find the readability level of text. Uses tesseract-OCR to read photos taken/uploaded.<br><br><b>Technologies used:</b><br><i>HTML, CSS, Python, Flask, JavaScript</i></p>
                    </div>
                </div>                
            </div>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="/scorekeeper" target="_blank"><img src="images/scorekeeper.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://jvreads.com" target="_blank"><h3 class="from-right show-on-scroll">Scorekeeper</h3></a>
                        <p class="appear show-on-scroll ln-ht">Scorekeeper keeps your score.</p>
                    </div>
                </div>                
            </div>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://stemcadia.com" target="_blank"><img src="images/stemcadia.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://stemcadia.com" target="_blank"><h3 class="from-right show-on-scroll">STEMcadia</h3></a>
                        <p class="appear show-on-scroll ln-ht">An informational website on all things Science, Technology, Engineering, and Math.<br><br>Technologies used:<br><i>WordPress, HTML, CSS, PHP, JavaScript</i></p>
                    </div>
                </div>                
            </div>
            
            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://jayvel.com" target="_blank"><img src="images/jayvel.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://jayvel.com" target="_blank"><h3 class="from-right show-on-scroll">JayVel Photography</h3></a>
                        <p class="appear show-on-scroll ln-ht">My photography portfolio.<br><br>Technologies used:<br><i>WordPress, HTML, CSS, Lightroom, GIMP</i></p>
                    </div>
                </div>                
            </div>
            
            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <img src="images/lbtq.png" class="from-left show-on-scroll">
                    </div>
                    <div class="project-des">
                        <a href="https://longislandprofessionalheadshots.com" target="_blank"><h3 class="from-right show-on-scroll">LibraryThing Quiz</h3></a>
                        <p class="appear show-on-scroll">LibraryThing Quiz is a PHP site.</p>
                    </div>
                </div>                
            </div>

        </section>

        <section class="section" id="me">
            <h2 class="from-right show-on-scroll">About Me</h2>
            <div id="me-row">
                <div id="mepic-div">            
                    <div class="from-right show-on-scroll" id="mepic"></div>
                </div>
                <div id="me-des">                
                    <p class="appear show-on-scroll ln-ht">Started dabling with HTML in 1998. Fell in love with coding in 2017 in my second year of being a librarian when I was assigned to start a coding club for tweens and teens. Became serious about studying coding during the 2020 quarantine. 
                    </p>
                    <p class="ln-ht">I am able to work with the following technologies:<br><br> <i>HTML, CSS, JavaScript, Node JS, Python, Flask, PHP, Lightroom, Photoshop, GIMP</i></p>
                </div>                
            </div>
        </section>
    
        <section class="section" id="contact">
            <h2>Contact</h2>
            <!-- <i class="far fa-envelope"></i> -->
            <a href="https://github.com/got0values" id="profile-link" target="_blank">GitHub</a>
            <div id='bottom-joke'></div>
        </section>

        <!-- <section>
            <div id='bottom-joke'></div>
        </section> -->
    
    </div>
<script src='jv.js'></script>
</body>
</html>



<!-- https://cssanimation.rocks/scroll-animations/ -->
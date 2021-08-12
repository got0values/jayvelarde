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
            <a href="#">Jason Velarde</a>
        </div>
        <ul>
            <li><a href="#projects" class="nav-list">Projects</a></li>
            <li><a href="#me" class="nav-list">About Me</a></li>
            <li><a href="#contact" class="nav-list">Contact</a></li>
        </ul>
    </nav>

    <div id="container">

        <section id="welcome-section">
            <div id="jvwrap">
                <h1 id="jvh1">JASON VELARDE</h1>
                <h2 id= "webdev" class="dancingscript appear show-on-scroll is-visible">web developer</h2>
            </div>
        </section>

        <section class="section" id="projects">
            <h2>My Projects</h2>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://garagesalesny.com/" target="_blank"><img src="/images/garagesalesnyHome.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://garagesalesny.com/" target="_blank">
                            <h3 class="from-right show-on-scroll">GarageSalesNY 
                                <img style="filter: invert(1); height: 16px;" src="/images/nodejs.png">
                            </h3>
                        </a>
                        <div class="mb-3">
                            <p>u/n: <i>DEMO</i></p>
                            <p>p/w: <i>DEMOPW</i></p>
                        </div>                        
                        <a href="https://github.com/got0values/garagesalesny" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">A web app for users to find garage sales in New York.<br><br><b>Technologies used:</b><br><i>HTML, CSS, Bootstrap, NodeJS, MongoDB, Google Maps API, Google Geocoding API</i></p>
                    </div>
                </div>                
            </div>
            
            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://mammoth-giant.netlify.app/" target="_blank"><img src="/images/mammothgianthome.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://mammoth-giant.netlify.app/" target="_blank">
                            <h3 class="from-right show-on-scroll">Mammoth Giant 
                            <img style="filter: invert(1); height: 16px;" src="/images/atom.png">
                            </h3>
                        </a>                    
                        <a href="https://github.com/got0values/mammoth-giant" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">A demo eCommerce site made with React.<br><br><b>Technologies used:</b><br><i>HTML, CSS, React</i></p>
                    </div>
                </div>                
            </div>
            
            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://jvreads.com/" target="_blank"><img src="/images/jvreadsHome.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://jvreads.com/" target="_blank">
                            <h3 class="from-right show-on-scroll">JV Reads 
                                <img style="filter: invert(1); height: 16px;" src="/images/flask.png">
                            </h3>
                        </a>
                        <div class="mb-3">
                            <p>u/n: <i>DEMO</i></p>
                            <p>p/w: <i>DEMOPW</i></p>
                        </div>                        
                        <a href="https://github.com/got0values/jvreads" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">Made for librarians, but can be useful for anyone that would like to find the readability level of text. Uses tesseract-OCR to read photos taken/uploaded.<br><br><b>Technologies used:</b><br><i>HTML, CSS, Bootstrap, Python, Flask, JavaScript</i></p>
                    </div>
                </div>                
            </div>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://books-db-search.netlify.app/" target="_blank"><img src="/images/books-db.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://books-db-search.netlify.app/" target="_blank">
                            <h3 class="from-right show-on-scroll">Books DB 
                            <img style="filter: invert(1); height: 16px;" src="/images/atom.png">
                            </h3>
                        </a>                      
                        <a href="https://github.com/got0values/books-db" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">A React app made to quickly search for books by keyword by using the Open Library API. Especially useful for librarians when looking to find different versions of a book while entering metadata.<br><br><b>Technologies used:</b><br><i>HTML, CSS, JavaScript, React, Open Library API</i></p>
                    </div>
                </div>                
            </div>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://latestdigitalreviews.com/compsignin" target="_blank"><img src="/images/compsignin.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://latestdigitalreviews.com/compsignin" target="_blank">
                            <h3 class="from-right show-on-scroll">Public Computer Sign In (Demo) 
                            <img style="filter: invert(1); height: 18px;" src="/images/php-document.png">
                            </h3>
                        </a>
                        <a href="https://github.com/got0values/computersignin" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">An app developed for libraries to sign patrons up for public computers. It includes a countdown, banned list, and history.<br><br><b>Technologies used:</b><br><i>HTML, CSS, Bootstrap, JavaScript, PHP, SQLite</i></p>
                    </div>
                </div>                
            </div>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://jayvel-photo-development-store.myshopify.com/" target="_blank"><img src="/images/jayvel-photo-development-store.myshopify.com_.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://jayvel-photo-development-store.myshopify.com/" target="_blank"><h3 class="from-right show-on-scroll">JVPhoto Shopify Theme</h3></a>
                        <div class="mb-3">
                            <p>p/w: <i>DEMOPW</i></p>
                        </div>
                        <a href="https://github.com/got0values/jvphoto" target="_blank"><button>View Code</button></a>
                        <p class="appear show-on-scroll ln-ht">A photography-themed Shopify theme.<br><br><b>Technologies used:</b><br><i>HTML, CSS, Bootstrap, Liquid, JavaScript</i></p>
                    </div>
                </div>                
            </div>

            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://stemcadia.com/" target="_blank"><img src="/images/stemcadia.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://stemcadia.com/" target="_blank">
                            <h3 class="from-right show-on-scroll">STEMcadia 
                            <img style="filter: invert(1); height: 16px;" src="/images/wordpress.png">
                            </h3>
                        </a>
                        <p class="appear show-on-scroll ln-ht">An informational website on all things Science, Technology, Engineering, and Math.<br><br>Technologies used:<br><i>WordPress, HTML, CSS, PHP, JavaScript</i></p>
                    </div>
                </div>                
            </div>
            
            <div class="projects-row">
                <div class="project">                
                    <div class="project-img">            
                        <a href="https://jayvel.com/" target="_blank"><img src="/images/jayvel.png" class="from-left show-on-scroll"></a>
                    </div>
                    <div class="project-des">
                        <a href="https://jayvel.com/" target="_blank">
                            <h3 class="from-right show-on-scroll">JayVel Photography 
                            <img style="filter: invert(1); height: 16px;" src="/images/wordpress.png">
                            </h3>
                        </a>
                        <p class="appear show-on-scroll ln-ht">My photography portfolio.<br><br>Technologies used:<br><i>WordPress, HTML, CSS, Lightroom, GIMP</i></p>
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
                    <p class="appear show-on-scroll ln-ht">Started dabbling with HTML in 1998. Fell in love with coding in 2017 in my second year of being a librarian when I was assigned to start a coding club for tweens and teens. Became serious about studying coding during the 2020 quarantine. 
                    </p>
                    <p class="ln-ht">I am able to work with the following technologies:<br><br> <i>HTML, CSS, JavaScript, Node JS, Python, Flask, PHP, Lightroom, Photoshop, GIMP</i></p>
                </div>                
            </div>
        </section>
    
        <section class="section" id="contact">
            <h2>Contact</h2>
            <p><i class="fa far fa-envelope"></i> jayvelphoto@gmail.com</p>
            <p><i class="fa fab fa-github fa-2x"></i> <a href="https://github.com/got0values" id="profile-link" target="_blank">GitHub</a></p>
            
        </section>
    
    </div>
<script src="jv.js"></script>
<script src="3d.js"></script>

</body>
</html>
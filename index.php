<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="/fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="/fontawesome/css/brands.css">
        <link rel="stylesheet" href="/fontawesome/css/solid.css">
        <title>Jason Velarde</title>
    </head>

<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand dancingscript fs-3" href="#">Jason Velarde</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#me">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
    <section id="welcome-section">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
            <h1 class="display-1 fw-bold mb-0 lh-1">JASON VELARDE</h1>
            <h2 class="dancingscript text-primary mb-4">Web Developer</h2>
                        <p class="lead mb-4">I build modern, accessible web apps with a focus on user experience and performance.</p>
                        <a href="#projects" class="btn btn-primary btn-lg">View My Work</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
    <section id="projects">
            <div class="container">
                <h2 class="text-center mb-5">My Projects</h2>
                <div class="row g-4 justify-content-center">
                    <!-- ScribeMentor -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm p-3 bg-dark text-white">
                            <img src="/images/scribementorscreenshot.png" class="card-img-top" alt="ScribeMentor Screenshot">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">ScribeMentor <img src="/images/nextjs.png" style="width: 1.5rem; height: 1.5rem;"></h5>
                                <p class="card-text pb-2">An AI study helper that extracts text from images and PDFs then allows the user to ask questions about the text.</p>
                                <div class="small text-muted">demo100@demo.com / Abcd1234!</div>
                                <a href="https://app.scribementor.com/" class="btn btn-primary mb-2" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/scroth2" class="btn btn-outline-light mb-2" target="_blank">View Code</a>
                                <div class="mt-2"><span class="badge bg-info">NextJS</span> <span class="badge bg-info">ChakraUI</span> <span class="badge bg-info">Prisma</span> <span class="badge bg-info">Typescript</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- CuratorKit -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm p-3 bg-dark text-white">
                            <img src="/images/curatorkitscreenshot.png" class="card-img-top" alt="CuratorKit Screenshot">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">CuratorKit <img src="/images/nextjs.png" style="width: 1.5rem; height: 1.5rem;"></h5>
                                <p class="card-text pb-2">An extensive set of tools made for public libraries to provide a more efficient workflow. Accessibility-first design.</p>
                                <div class="small text-muted">demo@demo.com / Abcd1234!</div>
                                <a href="https://app.curatorkit.com/" class="btn btn-primary mb-2" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/curatorkit-next" class="btn btn-outline-light mb-2" target="_blank">View Code</a>
                                <div class="mt-2"><span class="badge bg-info">NextJS</span> <span class="badge bg-info">ChakraUI</span> <span class="badge bg-info">Prisma</span> <span class="badge bg-info">Typescript</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- BookChatNoir -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm p-3 bg-dark text-white">
                            <img src="/images/bookchatnoirscreenshot.png" class="card-img-top" alt="BookChatNoir Screenshot">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">BookChatNoir <i class="fa-brands fa-react"></i> <i class="fa-brands fa-node"></i></h5>
                                <p class="card-text pb-2">A web app that helps users keep track of their reading, find new books, and connect with other readers.</p>
                                <div class="small text-muted">demo100@demo.com / Abcd1234!</div>
                                <a href="https://app.bookchatnoir.com/" class="btn btn-primary mb-2" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/bookchat-client" class="btn btn-outline-light mb-2" target="_blank">View Code</a>
                                <div class="mt-2"><span class="badge bg-info">React</span> <span class="badge bg-info">Fastify</span> <span class="badge bg-info">Socket.IO</span> <span class="badge bg-info">ChakraUI</span> <span class="badge bg-info">Typescript</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Terms Gate -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm p-3 bg-dark text-white">
                            <img src="/images/termsgate.png" class="card-img-top" alt="Terms Gate Screenshot">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Terms Gate <i class="fa-brands fa-php"></i></h5>
                                <p class="card-text pb-2">A Wordpress plugin that lets users require visitors to agree to terms, privacy policy, or any custom agreement before viewing specific posts or pages.</p>
                                <a href="https://wordpress.org/plugins/terms-gate/" class="btn btn-primary mb-2" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/terms-gate" class="btn btn-outline-light mb-2" target="_blank">View Code</a>
                                <div class="mt-2"><span class="badge bg-info">PHP</span> <span class="badge bg-info">Wordpress</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Free Flashcard Generator -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm p-3 bg-dark text-white">
                            <img src="/images/ffg.png" class="card-img-top" alt="Free Flashcard Generator Screenshot">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Free Flashcard Generator <img src="/images/nextjs.png" style="width: 1.5rem; height: 1.5rem;"></h5>
                                <p class="card-text pb-2">A web app that allows users to upload PDFs or input text to turn into flashcards using AI.</p>
                                <a href="https://freeflashcardgenerator.com" class="btn btn-primary mb-2" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/freeflashcardgenerator" class="btn btn-outline-light mb-2" target="_blank">View Code</a>
                                <div class="mt-2"><span class="badge bg-info">NextJS</span> <span class="badge bg-info">ChakraUI</span> <span class="badge bg-info">Ollama</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- JV Reads -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm p-3 bg-dark text-white">
                            <img src="/images/jvreadsHome.png" class="card-img-top" alt="JV Reads Screenshot">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">JV Reads <img style="filter: invert(1); height: 16px;" src="/images/flask.png"></h5>
                                <p class="card-text pb-2">Find the readability level of text using tesseract-OCR. Made for librarians, but useful for anyone. Upload photos for OCR.</p>
                                <div class="small text-muted">DEMO / DEMOPW</div>
                                <a href="https://jvreads.com/" class="btn btn-primary mb-2" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/jvreads" class="btn btn-outline-light mb-2" target="_blank">View Code</a>
                                <div class="mt-2"><span class="badge bg-info">HTML</span> <span class="badge bg-info">CSS</span> <span class="badge bg-info">Bootstrap</span> <span class="badge bg-info">Python</span> <span class="badge bg-info">Flask</span> <span class="badge bg-info">JavaScript</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Me Section -->
    <section id="me">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="images/jvhead3.png" alt="Jason Velarde" class="rounded-circle img-fluid shadow" style="width: 200px; height: 200px; object-fit: cover;">
                    </div>
                    <div class="col-md-7">
                        <h2 class="mb-3">About Me</h2>
                        <p class="lead">I’m a web developer with a strong focus on building fast, accessible, and user-friendly applications. With a background in librarianship, I bring an eye for organization and usability to every project, ensuring clean code and intuitive design that put the user experience first. My goal is to deliver performant, scalable solutions that make a meaningful impact for both users and businesses.</p>
                        <p class="lead mb-2">I am able to work with the following technologies:</p>
                        <div class="mb-2">
                            <span class="badge bg-primary mb-1">HTML</span> <span class="badge bg-primary mb-1">CSS</span> <span class="badge bg-primary mb-1">Typescript</span> <span class="badge bg-primary mb-1">NodeJS</span> <span class="badge bg-primary mb-1">React</span> <span class="badge bg-primary mb-1">NextJS</span> <span class="badge bg-primary mb-1">C#</span> <span class="badge bg-primary mb-1">ASP.NET</span> <span class="badge bg-primary mb-1">Blazor</span> <span class="badge bg-primary mb-1">MudBlazor</span> <span class="badge bg-primary mb-1">Fastify</span> <span class="badge bg-primary mb-1">ChakraUI</span> <span class="badge bg-primary mb-1">MaterialUI</span> <span class="badge bg-primary mb-1">Tailwind</span> <span class="badge bg-primary mb-1">Python</span> <span class="badge bg-primary mb-1">Flask</span> <span class="badge bg-primary mb-1">FastAPI</span> <span class="badge bg-primary mb-1">PHP</span> <span class="badge bg-primary mb-1">Wordpress</span> <span class="badge bg-primary mb-1">Wix</span> <span class="badge bg-primary mb-1">Linux</span> <span class="badge bg-primary mb-1">Git</span> <span class="badge bg-primary mb-1">Jira</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
    <section id="contact" class="bg-dark">
            <div class="container">
                <h2 class="text-center mb-2 text-white">Contact</h2>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <p class="mb-3"><i class="fa fa-envelope me-2"></i>jayvelphoto@gmail.com</p>
                                <p class="mb-0"><i class="fa fab fa-github me-2"></i><a href="https://github.com/got0values" target="_blank" class="text-decoration-underline">GitHub</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
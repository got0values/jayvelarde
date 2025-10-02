<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'primary': '#0f172a',
                            'primary-hover': '#334155',
                            'accent': '#6366f1',
                            'accent-hover': '#4f46e5',
                        },
                        fontFamily: {
                            'inter': ['Inter', 'sans-serif'],
                            'space': ['Space Grotesk', 'monospace'],
                        }
                    }
                }
            }
        </script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="/fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="/fontawesome/css/brands.css">
        <link rel="stylesheet" href="/fontawesome/css/solid.css">
        <title>Jason Velarde</title>
    </head>

<body class="bg-gradient-to-br from-slate-50 to-pink-50">
        <!-- Navbar -->
        <div class="navbar bg-white/80 backdrop-blur-md text-slate-900 fixed top-0 z-50 border-b border-slate-200/50">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow-lg bg-white rounded-xl w-52 border border-slate-200">
                        <li><a href="#projects" class="text-slate-700 hover:text-slate-900 hover:bg-slate-50">Projects</a></li>
                        <li><a href="#me" class="text-slate-700 hover:text-slate-900 hover:bg-slate-50">About</a></li>
                        <li><a href="#contact" class="text-slate-700 hover:text-slate-900 hover:bg-slate-50">Contact</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl font-space font-semibold tracking-tight" href="#">Jason Velarde</a>
            </div>
            <div class="navbar-end hidden lg:flex">
                <ul class="menu menu-horizontal px-1 gap-2">
                    <li><a href="#projects" class="text-slate-700 hover:text-slate-900 font-medium rounded-lg">Projects</a></li>
                    <li><a href="#me" class="text-slate-700 hover:text-slate-900 font-medium rounded-lg">About</a></li>
                    <li><a href="#contact" class="text-slate-700 hover:text-slate-900 font-medium rounded-lg">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Hero Section -->
        <section id="welcome-section" class="hero min-h-screen gradient-bg">
            <div class="hero-content text-center">
                <div class="max-w-5xl mx-auto px-4">
                    <div class="mb-6">
                        <h1 class="text-5xl lg:text-7xl font-bold text-gradient mb-4 font-space tracking-tight leading-tight">Jason Velarde</h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-slate-900 to-slate-600 mx-auto mb-6"></div>
                    </div>
                    <p class="text-xl lg:text-2xl text-slate-600 mb-4 font-light">Web Developer</p>
                    <p class="text-lg mb-12 max-w-2xl mx-auto text-slate-500 leading-relaxed">I create clean, modern web applications with a focus on user experience and performance.</p>
                    <a href="#projects" class="btn btn-modern text-white px-8 py-3 text-lg font-medium">View Projects</a>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-slate-900 mb-4 font-space">Featured Projects</h2>
                    <div class="w-16 h-1 bg-slate-900 mx-auto"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                    <!-- ScribeMentor -->
                    <div class="card bg-white shadow-lg border border-slate-200 h-full card-hover rounded-2xl overflow-hidden">
                        <figure><img src="/images/scribementorscreenshot.png" alt="ScribeMentor Screenshot" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-6 flex flex-col">
                            <div class="flex items-center gap-2 mb-3">
                                <h3 class="text-xl font-semibold text-slate-900 font-space">ScribeMentor</h3>
                                <img src="/images/nextjs.png" class="w-5 h-5">
                            </div>
                            <p class="flex-grow text-slate-600 mb-4 leading-relaxed">An AI study helper that extracts text from images and PDFs then allows the user to ask questions about the text.</p>
                            <div class="text-sm text-slate-400 mb-4 font-mono">demo100@demo.com / Abcd1234!</div>
                            <div class="flex gap-3 mb-4">
                                <a href="https://app.scribementor.com/" class="btn btn-modern text-white flex-1 text-sm" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/scroth2" class="btn btn-outline border-slate-300 text-slate-700 hover:bg-slate-50 flex-1 text-sm" target="_blank">Code</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern text-xs">NextJS</span>
                                <span class="badge badge-modern text-xs">ChakraUI</span>
                                <span class="badge badge-modern text-xs">Prisma</span>
                                <span class="badge badge-modern text-xs">TypeScript</span>
                            </div>
                        </div>
                    </div>
                    <!-- CuratorKit -->
                    <div class="card bg-white shadow-lg border border-slate-200 h-full card-hover rounded-2xl overflow-hidden">
                        <figure><img src="/images/curatorkitscreenshot.png" alt="CuratorKit Screenshot" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-6 flex flex-col">
                            <div class="flex items-center gap-2 mb-3">
                                <h3 class="text-xl font-semibold text-slate-900 font-space">CuratorKit</h3>
                                <img src="/images/nextjs.png" class="w-5 h-5">
                            </div>
                            <p class="flex-grow text-slate-600 mb-4 leading-relaxed">An extensive set of tools made for public libraries to provide a more efficient workflow. Accessibility-first design.</p>
                            <div class="text-sm text-slate-400 mb-4 font-mono">demo@demo.com / Abcd1234!</div>
                            <div class="flex gap-3 mb-4">
                                <a href="https://app.curatorkit.com/" class="btn btn-modern text-white flex-1 text-sm" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/curatorkit-next" class="btn btn-outline border-slate-300 text-slate-700 hover:bg-slate-50 flex-1 text-sm" target="_blank">Code</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern text-xs">NextJS</span>
                                <span class="badge badge-modern text-xs">ChakraUI</span>
                                <span class="badge badge-modern text-xs">Prisma</span>
                                <span class="badge badge-modern text-xs">TypeScript</span>
                            </div>
                        </div>
                    </div>
                    <!-- BookChatNoir -->
                    <div class="card bg-white shadow-lg border border-slate-200 h-full card-hover rounded-2xl overflow-hidden">
                        <figure><img src="/images/bookchatnoirscreenshot.png" alt="BookChatNoir Screenshot" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-6 flex flex-col">
                            <div class="flex items-center gap-2 mb-3">
                                <h3 class="text-xl font-semibold text-slate-900 font-space">BookChatNoir</h3>
                                <i class="fa-brands fa-react text-slate-600"></i>
                                <i class="fa-brands fa-node text-slate-600"></i>
                            </div>
                            <p class="flex-grow text-slate-600 mb-4 leading-relaxed">A web app that helps users keep track of their reading, find new books, and connect with other readers.</p>
                            <div class="text-sm text-slate-400 mb-4 font-mono">demo100@demo.com / Abcd1234!</div>
                            <div class="flex gap-3 mb-4">
                                <a href="https://app.bookchatnoir.com/" class="btn btn-modern text-white flex-1 text-sm" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/bookchat-client" class="btn btn-outline border-slate-300 text-slate-700 hover:bg-slate-50 flex-1 text-sm" target="_blank">Code</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern text-xs">React</span>
                                <span class="badge badge-modern text-xs">Fastify</span>
                                <span class="badge badge-modern text-xs">Socket.IO</span>
                                <span class="badge badge-modern text-xs">ChakraUI</span>
                                <span class="badge badge-modern text-xs">TypeScript</span>
                            </div>
                        </div>
                    </div>
                    <!-- Terms Gate -->
                    <div class="card bg-white shadow-lg border border-slate-200 h-full card-hover rounded-2xl overflow-hidden">
                        <figure><img src="/images/termsgate.png" alt="Terms Gate Screenshot" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-6 flex flex-col">
                            <div class="flex items-center gap-2 mb-3">
                                <h3 class="text-xl font-semibold text-slate-900 font-space">Terms Gate</h3>
                                <i class="fa-brands fa-php text-slate-600"></i>
                            </div>
                            <p class="flex-grow text-slate-600 mb-4 leading-relaxed">A WordPress plugin that lets users require visitors to agree to terms, privacy policy, or any custom agreement before viewing specific posts or pages.</p>
                            <div class="flex gap-3 mb-4">
                                <a href="https://wordpress.org/plugins/terms-gate/" class="btn btn-modern text-white flex-1 text-sm" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/terms-gate" class="btn btn-outline border-slate-300 text-slate-700 hover:bg-slate-50 flex-1 text-sm" target="_blank">Code</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern text-xs">PHP</span>
                                <span class="badge badge-modern text-xs">WordPress</span>
                            </div>
                        </div>
                    </div>
                    <!-- Free Flashcard Generator -->
                    <div class="card bg-white shadow-lg border border-slate-200 h-full card-hover rounded-2xl overflow-hidden">
                        <figure><img src="/images/ffg.png" alt="Free Flashcard Generator Screenshot" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-6 flex flex-col">
                            <div class="flex items-center gap-2 mb-3">
                                <h3 class="text-xl font-semibold text-slate-900 font-space">Free Flashcard Generator</h3>
                                <img src="/images/nextjs.png" class="w-5 h-5">
                            </div>
                            <p class="flex-grow text-slate-600 mb-4 leading-relaxed">A web app that allows users to upload PDFs or input text to turn into flashcards using AI.</p>
                            <div class="flex gap-3 mb-4">
                                <a href="https://freeflashcardgenerator.com" class="btn btn-modern text-white flex-1 text-sm" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/freeflashcardgenerator" class="btn btn-outline border-slate-300 text-slate-700 hover:bg-slate-50 flex-1 text-sm" target="_blank">Code</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern text-xs">NextJS</span>
                                <span class="badge badge-modern text-xs">ChakraUI</span>
                                <span class="badge badge-modern text-xs">Ollama</span>
                            </div>
                        </div>
                    </div>
                    <!-- JV Reads -->
                    <div class="card bg-white shadow-lg border border-slate-200 h-full card-hover rounded-2xl overflow-hidden">
                        <figure><img src="/images/jvreadsHome.png" alt="JV Reads Screenshot" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-6 flex flex-col">
                            <div class="flex items-center gap-2 mb-3">
                                <h3 class="text-xl font-semibold text-slate-900 font-space">JV Reads</h3>
                                <img style="filter: grayscale(1) opacity(0.6); height: 16px;" src="/images/flask.png">
                            </div>
                            <p class="flex-grow text-slate-600 mb-4 leading-relaxed">Find the readability level of text using tesseract-OCR. Made for librarians, but useful for anyone. Upload photos for OCR.</p>
                            <div class="text-sm text-slate-400 mb-4 font-mono">DEMO / DEMOPW</div>
                            <div class="flex gap-3 mb-4">
                                <a href="https://jvreads.com/" class="btn btn-modern text-white flex-1 text-sm" target="_blank">Live Demo</a>
                                <a href="https://github.com/got0values/jvreads" class="btn btn-outline border-slate-300 text-slate-700 hover:bg-slate-50 flex-1 text-sm" target="_blank">Code</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern text-xs">HTML</span>
                                <span class="badge badge-modern text-xs">CSS</span>
                                <span class="badge badge-modern text-xs">Python</span>
                                <span class="badge badge-modern text-xs">Flask</span>
                                <span class="badge badge-modern text-xs">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="me" class="gradient-bg py-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center justify-center gap-12 max-w-6xl mx-auto">
                    <div class="flex-shrink-0 text-center">
                        <div class="relative">
                            <div class="w-56 h-56 rounded-full overflow-hidden shadow-2xl border-4 border-white">
                                <img src="images/jvhead3.png" alt="Jason Velarde" class="w-full h-full object-cover" />
                            </div>
                            <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
                        </div>
                    </div>
                    <div class="flex-1 text-center lg:text-left">
                        <div class="mb-6">
                            <h2 class="text-4xl font-bold text-slate-900 mb-3 font-space">About Me</h2>
                            <div class="w-16 h-1 bg-slate-900 mx-auto lg:mx-0"></div>
                        </div>
                        <p class="text-lg mb-6 text-slate-600 leading-relaxed max-w-2xl">I'm a web developer with a strong focus on building clean, accessible, and user-friendly applications. With a background in librarianship, I bring an eye for organization and usability to every project.</p>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-slate-800 mb-4 font-space">Technologies I work with:</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="badge badge-modern">HTML</span>
                                <span class="badge badge-modern">CSS</span>
                                <span class="badge badge-modern">TypeScript</span>
                                <span class="badge badge-modern">React</span>
                                <span class="badge badge-modern">Next.js</span>
                                <span class="badge badge-modern">Node.js</span>
                                <span class="badge badge-modern">Python</span>
                                <span class="badge badge-modern">Flask</span>
                                <span class="badge badge-modern">FastAPI</span>
                                <span class="badge badge-modern">PHP</span>
                                <span class="badge badge-modern">C#</span>
                                <span class="badge badge-modern">Tailwind</span>
                                <span class="badge badge-modern">Prisma</span>
                                <span class="badge badge-modern">Git</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Contact Section -->
        <section id="contact" class="bg-slate-50 py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-slate-900 mb-4 font-space">Let's Connect</h2>
                    <div class="w-16 h-1 bg-slate-900 mx-auto mb-6"></div>
                    <p class="text-lg text-slate-600 max-w-2xl mx-auto">I'm always interested in new opportunities and collaborations.</p>
                </div>
                <div class="flex justify-center">
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-200 w-full max-w-md">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center">
                                    <i class="fa fa-envelope text-slate-600 text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-900">Email</p>
                                    <p class="text-slate-600">jayvelphoto@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center">
                                    <i class="fa fab fa-github text-slate-600 text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-900">GitHub</p>
                                    <a href="https://github.com/got0values" target="_blank" class="text-slate-600 hover:text-slate-900 transition-colors">@got0values</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>
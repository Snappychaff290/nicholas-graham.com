<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/css/style_mobile.css', 'build'])
        <!-- <link href="css/style.css" rel="stylesheet" />
        <link href="css/style_mobile.css" rel="stylesheet" /> -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <script
            src="https://kit.fontawesome.com/509a141bf1.js"
            crossorigin="anonymous"
        ></script>
        <!-- <script href="js/app.js" rel="script"></script>
        <script href="../js/app.js" rel="script"></script> -->
        <title>Nicholas Graham</title>
    </head>
    <!-- HEADER BAR -->
    <div class="header-bar">
        <!-- <h2 class="logo">LOGO</h2> -->
        <a href="/" class="header-logo-link">
            <img src="img/Logo_white.svg" class="header-logo" />
        </a>
        <div class="header-links">
            <a href="#section-2" class="header-link about-me">About Me</a>
            <a href="/puter" class="header-link puter">Puter</a>
            <a href="/projects" class="header-link projects">Projects</a>
            <a href="/contact" class="header-link contact">Contact Me</a>
        </div>
    </div>
    <!-- END HEADER BAR -->
    <body>
        <div class="section-1">
            <!-- <div id="pointer" class="pointer">right here daddy</div> -->
            <div class="top-section-header">
                <p class="name-compliment">Hello, my name is</p>
                <h1 class="name gradient-words">Nicholas Graham</h1>
                <p class="name-compliment">Web Design | Web Development</p>
            </div>
            <div class="cta-two">
                <a class="learn-more" href="#section-3">
                    <h1 class="contact-me">Learn More</h1>
                </a>
                <a
                    class="download-cv"
                    href="files/Nicholas_Graham_CV.pdf"
                    download
                >
                    <h1 class="contact-me">Download CV</h1>
                </a>
            </div>
            <div class="hcihy hcihy-section-1">
                <div class="container-1">
                    <div class="container-content">
                        <h1>Web Design</h1>
                        <h2>Figma</h2>
                        <p>
                            I am experienced with web design in Figma and would
                            happily do design work for you, this would include:
                        </p>
                        <ul>
                            <li>Typography</li>
                            <li>Color Pallet</li>
                            <li>UI</li>
                            <li>UX</li>
                        </ul>
                        <p>
                            Learn more about what this entails by clicking the
                            Explore button below!
                        </p>
                        <a href="/contact"><div>Contact Me</div></a>
                        <a href="#section-3" class="backup-cta"
                            ><div>Explore</div></a
                        >
                    </div>
                </div>
                <div class="container-2">
                    <div class="container-content">
                        <h1>Web Development</h1>
                        <h2>WordPress</h2>
                        <p>
                            I will build you a site on WordPress based off
                            designs that myself (or another) have created.
                            WordPress has withstood the test of time and is
                            trusted by a majority of sites that are opperating
                            on the internet.
                        </p>
                        <h2>WebFlow</h2>
                        <p>
                            I will build you a site on WebFlow based off designs
                            that myself (or another) have created. WebFlow will
                            allow for more modern design, with smoother and
                            easier animation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="section-2" id="section-2">
            <h2>How can I help you...</h2>
            <div class="hcihy hcihy-section-2">
                <div class="container-1">
                    <div class="container-content">
                        <h1>Web Design</h1>
                        <h2>Figma</h2>
                        <p>
                            I am experienced with web design in Figma and would
                            happily do design work for you, this would include:
                        </p>
                        <ul>
                            <li>Typography</li>
                            <li>Color Pallet</li>
                            <li>UI</li>
                            <li>UX</li>
                        </ul>
                        <p>
                            Learn more about what this entails by clicking the
                            Explore button below!
                        </p>
                        <a href="/contact"><div>Contact Me</div></a>
                        <a href="#section-3" class="backup-cta"
                            ><div>Explore</div></a
                        >
                    </div>
                </div>
                <div class="container-2">
                    <div class="container-content">
                        <h1>Web Development</h1>
                        <h2>WordPress</h2>
                        <p>
                            I will build you a site on WordPress based off
                            designs that myself (or another) have created.
                            WordPress has withstood the test of time and is
                            trusted by a majority of sites that are opperating
                            on the internet.
                        </p>
                        <h2>WebFlow</h2>
                        <p>
                            I will build you a site on WebFlow based off designs
                            that myself (or another) have created. WebFlow will
                            allow for more modern design, with smoother and
                            easier animation.
                        </p>
                    </div>
                </div>
                <div class="container-3">
                    <div class="container-content">
                        <h1>More About Me</h1>
                        <h2>Old Site</h2>
                        <p>
                            There's far too much that I want you to know about
                            me, and theres no chance I could fit it all in this
                            container. You can learn a lot about me throughout
                            this website. If you want a more general overview,
                            the link below will take you to the old version of
                            this site, which has a lot of general information
                            about me!
                        </p>
                        <a href="Old-Site" class="old-site-link"
                            ><div>Old Site</div></a
                        >
                        <div class="media-links slider">
                            <div class="slide">
                                <a
                                    class="icon linkedin"
                                    href="https://www.linkedin.com/in/nicholas-graham-129450293/"
                                    ><i class="fa-brands fa-linkedin-in"></i
                                ></a>
                                <a
                                    class="icon github"
                                    href="https://github.com/Snappychaff290"
                                    ><i class="fa-brands fa-github"></i
                                ></a>

                                <a
                                    class="icon twitter"
                                    href="https://twitter.com/Snappychaff"
                                    ><i class="fa-brands fa-x-twitter"></i
                                ></a>
                                <a
                                    class="icon instagram"
                                    href="https://www.instagram.com/nicholas.a.graham/"
                                    ><i class="fa-brands fa-instagram"></i
                                ></a>

                                <a
                                    class="icon discord"
                                    href="https://discordapp.com/users/snappy.eth"
                                    ><i class="fa-brands fa-discord"></i
                                ></a>
                            </div>
                            <div class="slide">
                                <a
                                    class="icon linkedin"
                                    href="https://www.linkedin.com/in/nicholas-graham-129450293/"
                                    ><i class="fa-brands fa-linkedin-in"></i
                                ></a>
                                <a
                                    class="icon github"
                                    href="https://github.com/Snappychaff290"
                                    ><i class="fa-brands fa-github"></i
                                ></a>

                                <a
                                    class="icon twitter"
                                    href="https://twitter.com/Snappychaff"
                                    ><i class="fa-brands fa-x-twitter"></i
                                ></a>
                                <a
                                    class="icon instagram"
                                    href="https://www.instagram.com/nicholas.a.graham/"
                                    ><i class="fa-brands fa-instagram"></i
                                ></a>

                                <a
                                    class="icon discord"
                                    href="https://discordapp.com/users/snappy.eth"
                                    ><i class="fa-brands fa-discord"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="section-3" id="section-3">
            <h2 class="gradient-words">Web Design</h2>
            <p>
                Using Figma, I start by creating a typography for the website.
                Once this has been established, I move on to creating the UX,
                the point of the UX Page is to make sure the layout and
                hierarchy of all the elements and whitespace are properly
                ordered. While the images and colors could impact hierarchy and
                aesthetics, I still find it helpful to separate the UX and UI.
                Once the client is happy with the UX, I move onto UI, which
                involves deciding on a color pallet and the images to be used
                and where to incorporate all of these, see the below images of
                the process for the site you’re currently viewing
            </p>
            <h3 class="typography">Typography / UX</h3>
            <h3 class="ui">UI</h3>
            <div class="images">
                <div class="typography-border">
                    <img
                        src="img/typography.png"
                        alt="Image of Website UX and Typography"
                    />
                </div>
                <div class="ui-border">
                    <img
                        src="img/ui.png"
                        alt="Image of Website UX and Typography"
                    />
                </div>
            </div>
        </div>
        <div class="section-4" id="section-4">
            <h2 class="gradient-words">More by Me</h2>
            <div class="options">
                <div class="option-1">
                    <div class="option-content">
                        <h2>Blogs</h2>
                        <p>
                            Find out more about the things I am learning and
                            potentially discover some things you have never
                            thought about. I am writing in an attempt first and
                            foremost to improve my literacy skills and become
                            more articulate, but also because I want to start
                            putting more content out, even if only a few people
                            read it.
                        </p>
                        <a href="/blogs"><div>Read More</div></a>
                    </div>
                </div>
                <div class="option-2">
                    <div class="option-content">
                        <h2>Projects</h2>
                        <p>
                            Discover what’s currently taking up my time and
                            efforts and how I’m applying the things I’m learning
                            to real-world applications.. Or just for fun!
                        </p>
                        <p>My current projects include:</p>
                        <ul>
                            <li>Bytesized</li>
                            <li>Puter</li>
                            <li>Pink Santa</li>
                            <li>This Website!</li>
                        </ul>
                        <a href="/projects"><div>Explore</div></a>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/app.js" type="text/javascript"></script>
    </body>
</html>

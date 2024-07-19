@extends('layouts.app')

@section('content')
<div class="spacer"> </div>
<div class="section-1">
        <div class="top-section-header">
            <p class="name-compliment">Hello, my name is</p>
            <h1 class="name gradient-words">Nicholas Graham</h1>
            <p class="name-compliment">Web Design | Web Development</p>
        </div>
        <div class="cta-two">
            <a class="learn-more" href="#section-3">
                <h2 class="contact-me">Learn More</h2>
            </a>
            <a class="download-cv" href="files/Nicholas_Graham_CV.pdf" download>
                <h2 class="contact-me">Download CV</h2>
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
                    <div class="hero-buttons">
                    <a href="/contact"><div>Contact Me</div></a>
                    <a href="#section-3" class="backup-cta"
                        ><div>Explore</div></a
                    >
                    </div>
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
            the process for the site you're currently viewing
        </p>
        <div class="typography-ui-style">
            <h3 class="typography">Typography / UX</h3>
            <h3 class="ui">UI</h3>
        </div>
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
        @if(isset($post))
            <a href="{{ route('blog.show', $slug) }}" class="read-more">
                <div class="blog-card">
                    <img src="{{ asset('img/blog/' . ($post['meta']['image'] ?? 'default.jpg')) }}" alt="{{ $post['meta']['title'] }} - Thumbnail">
                    <div class="blog-card-content">
                        <h2>{{ $post['meta']['title'] }}</h2>
                        @if(isset($post['meta']['description']))
                            <p class="description">{{$post['meta']['description']}}</p>
                        @endif
                        <p class="date">{{ $post['meta']['date'] }}</p>
                    </div>
                </div>
            </a>
        @else
            <p>No blog posts available at the moment.</p>
        @endif
        <div class="section-3-button">
            <a href="{{ route('blog.index') }}"><div>All Blogs</div></a>
        </div>
    </div>
</div>
            <div class="option-2">
                <div class="option-content">
                    <h2>Projects</h2>
                    <p>
                        Discover what's currently taking up my time and
                        efforts and how I'm applying the things I'm learning
                        to real-world applications.. Or just for fun!
                    </p>
                    <p>My current projects include:</p>
                    <ul>
                        <li>Bytesized</li>
                        <li>Puter</li>
                        <li>Pink Santa</li>
                        <li>This Website!</li>
                    </ul>
                    <div class="section-3-button">
                        <a href="/projects"><div>Explore</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
@endsection
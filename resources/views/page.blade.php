<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>mediaFork</title>
    @vite('resources/css/app.css')
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body class="template-dark">
    <header class="header">
        <div class="header-container container">
            <a class="logo" href="#">
                <img class="logo-img" src="img/logo-s.png" alt="mediaFork logo">
                <h1 class="logo-ttl">mediaFork</h1>
            </a>
            <nav class="nav">
                <ul id="main-nav" class="nav-list">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <button id="mobile-button" class="nav-burger"><i id="mobile-icon" class="fa fa-bars" aria-hidden="true"></i></button>
            </nav>
        </div>
    </header>
    <div class="hero-banner">
        <div class="hero-banner-content">
            <img class="hero-logo" src="img/logo-l.png" alt="mediaFork">
            <h2 class="hero-ttl">
                <p>Awesome agency</p>
                <p>Beautiful project</p>
            </h2> 
            <a class="button-scroll" href="#main"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
    </div>
    <main id="main" class="container">
        <section id="about" class="section">
            <div class="about">
                <p class="about-text about-text-xl">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    <span class="about-text-highlight">nihil quidem facere</span>  
                </p>
                <div class="about-text">
                    <h3 class="about-ttl-sm">Lorem ipsum dolor sit amet</h3>
                    <p class="about-txt-sm">
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim 
                    </p>
                </div>
            </div>
            <div id="services" class="section section-card">
                <ul id="cards-list" class="cards-list">
                    @foreach ($services as $service)
                        <li>
                        <a class="card" href="#">
                            <h3 class="card-ttl">{{ $service->name }}</h3>
                            <p class="card-txt">
                                {{ $service->description }}
                            </p>
                            <img class="card-icon" src="{{ $service->image }}" alt="Web services">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section id="portfolio" class="section">
            <div class="title">
                <div class="title-top">Just a glance</div>
                <h3 class="title-main">Our last projects</h3>
            </div>
            <ul class="portfolio-grid">
                @foreach ($projects as $project)
                    <li>
                        <img  class="portfolio-img" src="{{ $project->image }}" alt="Roll the Dole">
                        <a href="#" class="portfolio-block">
                            <span class="portfolio-brand">{{ $project->name }}</span>
                        </a> 
                    </li>
                @endforeach
            </ul>
        </section>
        <section id="contact" class="section">
            <div class="title">
                <div class="title-top">Get in touch</div>
                <h3 class="title-main">How can we help you ?</h3>
            </div>
            @if ($errors->any())
                <div class="err-msg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="err-li">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="contact-form" action="{{ @route('addcustomer') }}#contact" method="post">
                @csrf
                <ul class="contact-list">
                    <li class="contact-item">
                        <label class="contact-label required" for="name">Your name</label>
                        <input class="contact-text" type="text" id="name" name="name" value="">
                    </li>
                    <li class="contact-item">
                        <label class="contact-label required" for="email">Your email address</label>
                        <input class="contact-text" type="email" id="email" name="email" value="">
                    </li>
                    <li class="contact-item">
                        <label class="contact-label" for="phone">Your mobile</label>
                        <input class="contact-text" type="tel" id="phone" name="phone" value="">
                    </li>
                    <li class="contact-item contact-message">
                        <label class="contact-label" for="message">Your message</label>
                        <textarea class="contact-text" name="message" id="message" cols="30" rows="10"></textarea>
                    </li>
                    <li class="contact-item contact-consent">
                        <input class="contact-checkbox" type="checkbox" id="consent" name="consent">
                        <label class="contact-label" for="consent">
                            I accept the terms and conditions lorem ipsum dolor sit amet llamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        </label>
                    </li>
                    <li class="contact-item contact-submit">
                        <input class="button" type="submit" id="submit" name="submit" value="send message">
                    </li>
                </ul>
            </form>
        </section>
    </main>
    <footer class="footer">
        <div class="social">
            <ul class="social-list">
                <li>
                    <a class="social-link bg-instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="social-link bg-facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="social-link bg-twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <div class="copyright">© 2022, mediaFork</div>
        <ul class="footer-legal">
            <li><a class="footer-legal-link" href="#">Privacy policy</a></li>
            <li><a class="footer-legal-link" href="#">Cookies</a></li>
            <li><a class="footer-legal-link" href="#">Site map</a></li>
            <li><a class="footer-legal-link" href="{{ @route('register') }}">login</a></li>
        </ul>
    </footer>
    @vite('resources/js/app.js')

    <!-- <script type="text/javascript" src="js/script.js"></script> -->
</body>
</html>
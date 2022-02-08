<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span>H</span>arun</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                @guest
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                @endguest

                @auth
                    <li class="nav-item"><a href="#dashboard-section" class="nav-link"><span>Dashboard</span></a></li>
                    <li class="nav-item"><a href="#education-section" class="nav-link"><span>Education</span></a></li>
                    <li class="nav-item"><a href="#organization-section" class="nav-link"><span>Organization</span></a></li>
                    <li class="nav-item"><a href="#work-section" class="nav-link"><span>Work</span></a></li>
                    <li class="nav-item"><a href="#skill-section" class="nav-link"><span>Skill</span></a></li>
                    <li class="nav-item"><a href="#project-section" class="nav-link"><span>Project</span></a></li>
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link"><span>Logout</span></a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

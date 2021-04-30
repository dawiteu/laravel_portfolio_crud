<header id="header">
<div class="d-flex flex-column">

    <div class="profile">
    {{-- <img src={{ asset('img/profile-img.jpg')}} alt="" class="img-fluid rounded-circle"> --}}
    @if (File::exists("storage/img/upload/".$user->img))
        <img src={{asset("storage/img/upload/".$user->img)}} alt="" class="img-fluid rounded-circle"/>
    @else
        <img src={{asset("img/".$user->img)}} alt="" class="img-fluid rounded-circle"/>
    @endif

    <h1 class="text-light">
            <a href="index.html">{{ $user->prenom }} {{ $user->nom }} </a> 
            @if (request()->is('admin/*') || request()->path() == 'admin')
                <br/><p class="text-danger">BackOffice</p>
            @endif
    </h1>
        @if (request()->is('admin/*') || request()->path() == 'admin') 
            
        @else
        <div class="social-links mt-3 text-center">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        @endif
    </div>
    <nav class="nav-menu">
    <ul>
        @if (request()->is('admin/*') || request()->path() == 'admin') 
            <li><a href={{route('admin.home')}}><i class='bx bx-home'></i><span>Back Office Home</span></a></li>
            <li><a href={{route('ad.infop.show')}}><i class='bx bx-show'></i><span>Info Personelles</span></a></li>
            <li><a href={{route('ad.about.show')}}><i class='bx bx-edit-alt'></i><span>About</span></a></li>
            <li><a href={{route('ad.facts.show')}}><i class='bx bx-edit-alt'></i><span>Facts</span></a></li>
            <li><a href={{route('ad.skills.show')}}><i class='bx bx-edit-alt'></i><span>Skills</span></a></li>
            <li><a href={{route('ad.services.show')}}><i class='bx bx-edit-alt'></i><span>Services</span></a></li>
            <li><a href={{route('ad.projects.show')}}><i class='bx bx-edit-alt'></i><span>Portfolio</span></a></li>
            <li><a href={{route('ad.contact.show')}}><i class='bx bx-edit-alt'></i><span>Contact</span></a></li>
            <li><a href={{route('ad.mailbox.show')}}><i class="bx bx-envelope"></i><span>Mailbkkkox</span></a></li>
        @else
            <li><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
            <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
            <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
        @endif

    </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button> 

</div>
</header><!-- End Header -->
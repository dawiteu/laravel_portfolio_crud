<!-- ======= About Section ======= -->
<section id="about" class="about">
<div class="container">

    <div class="section-title">
    <h2>About</h2>
    <p>{{ $about[0]->title }}</p>
    </div>

    <div class="row">
    <div class="col-lg-4" data-aos="fade-right">
        <img src={{asset('/img/profile-img.jpg')}} class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>{{ $about[0]->descprofil }}</h3>
        <p class="font-italic"> {{ $about[0]->desc1 }} </p>

        <div class="row">
            
            <div class="col-lg-6">
                <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{ $user->date }}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{ $user->website }} </li>
                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $user->tel }}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{ $user->city }}</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ date_diff(date_create($user->date), date_create('now'))->y }} </li>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{ $user->degree }}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{ $user->email }} </li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{ $user->freelance }} </li>
                </ul>
            </div>
        </div>

        <p> {{ $about[0]->desc2 }} </p>
    </div>
    </div>

</div>
</section><!-- End About Section -->
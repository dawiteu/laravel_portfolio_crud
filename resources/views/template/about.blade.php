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
            @foreach ($persi as $pinfo)

                @if ($loop->iteration % 2 == 1)
                    gauche 
                @else
                    right 
                @endif
            @endforeach
            
            <div class="col-lg-6">
                <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 May 1995</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +123 456 7890</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>
                </ul>
            </div>
        <div class="col-lg-6">
            <ul>
            <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 30</li>
            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
            <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
            <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
            </ul>
        </div>
        </div>


        <div class="row">
        <div class="col-lg-6">
            <ul>
            <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 May 1995</li>
            <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
            <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +123 456 7890</li>
            <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <ul>
            <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 30</li>
            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
            <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
            <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
            </ul>
        </div>
        </div>

        <p> {{ $about[0]->desc2 }} </p>
    </div>
    </div>

</div>
</section><!-- End About Section -->
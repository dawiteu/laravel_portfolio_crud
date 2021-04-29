<!-- ======= About Section ======= -->
<section id="about" class="about">
<div class="container">

    <div class="section-title">
    <h2>{{ $about->name }}</h2>
    <p>{{ $about->description }}</p>
    </div>

    <div class="row">
    <div class="col-lg-4" data-aos="fade-right">

    @if (File::exists("storage/img/upload/".$user->img))
        <img src={{asset("storage/img/upload/".$user->img)}} style="width:200px; height:200px; " alt="" class="img-fluid"/>
    @else
        <img src={{asset("img/".$user->img)}} style="width:200px; height:200px; " alt="" class="img-fluid"/>
    @endif
        {{-- <img src={{asset($user->img)}} class="img-fluid" alt="img no work"> --}}
        {{-- <p>{{$user->img}}</p> --}}
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>{{ $about->desc1 }}</h3>
        <p class="font-italic"> {{ $about->desc2 }} </p>

        <div class="row">
            
            <div class="col-lg-6">
                <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{ $date }}</li>
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

        <p> {{ $about->desc3 }} </p>
    </div>
    </div>

</div>
</section><!-- End About Section -->
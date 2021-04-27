<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
        <h2>{{ $skill->name }}</h2>
        <p> {{$skill->description }} </p>
        </div>

        <div class="row skills-content">

        
            @foreach ($skills as $skil)
            <div class="col-lg-6" data-aos="fade-up">
                <div class="progress">
                    <span class="skill">{{$skil->technologie}} <i class="val">{{$skil->value}}%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$skil->value}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            @endforeach

        

        </div>

    </div>
    </section><!-- End Skills Section -->

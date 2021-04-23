<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
        <h2>Skills</h2>
        <p>{{ $skills->title }} </p>
        </div>

        <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
            <span class="skill">HTML <i class="val">{{$skills->html}}%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->html}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">CSS <i class="val">{{$skills->css}}%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->css}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">JavaScript <i class="val">{{$skills->js}}%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->js}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
            <span class="skill">PHP <i class="val">{{$skills->php}}%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->php}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">{{$skills->cms}}%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->cms}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">Photoshop <i class="val">{{$skills->photoshop}}%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->photoshop}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

        </div>

        </div>

    </div>
    </section><!-- End Skills Section -->
  
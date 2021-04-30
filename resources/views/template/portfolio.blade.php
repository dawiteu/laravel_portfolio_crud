<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
        <h2>{{ $portfolio->name }}</h2>
        <p>{{ $portfolio->description }} </p>
        </div>

        <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @foreach ($projects as $proj)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$proj->cat}}">
                    <div class="portfolio-wrap">

                    @if (File::exists("storage/img/upload/".$proj->img))
                        <img src={{asset("storage/img/upload/".$proj->img)}} alt="Proj nob: {{$proj->id}}" class="img-fluid" />
                    @else
                        <img src={{asset("img/portfolio/".$proj->img)}}  alt="Proj no: {{$proj->id}}" class="img-fluid" /> 
                    @endif



                    <div class="portfolio-links">
                        <a href={{$proj->img}} data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href={{$proj->link}} title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            @endforeach 


        </div>

    </div>
    </section><!-- End Portfolio Section -->
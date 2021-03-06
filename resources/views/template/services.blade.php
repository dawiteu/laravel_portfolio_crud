<!-- ======= Services Section ======= -->
<section id="services" class="services">
<div class="container">

    <div class="section-title" >
    <h2>{{$servi->name}}</h2>
    <p>{{ $servi->description}} </p>
    </div>

    <div class="row">
        @foreach ($services as $serv)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{$loop->iteration}}00">
                <div class="icon"><i class="{{$serv->icon}}"></i></div>
                <h4 class="title"><a href="#">{{$serv->title}}</a></h4>
                <p class="description"> {{$serv->desc}}</p>
            </div>
        @endforeach
        <div class="col-12 d-flex justify-content-center">
            {{ $services->links() }}
        </div>
    </div>



</div>
</section><!-- End Services Section -->
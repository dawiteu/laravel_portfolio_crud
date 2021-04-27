<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
<div class="container">

    <div class="section-title">
    <h2>{{ $fact->name }}</h2>
    <p>{{ $fact->description}} </p>
    </div>

    <div class="row no-gutters">

    @foreach ($facts as $fac)

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="{{$loop->iteration}}00">
            <div class="count-box">
            <i class="{{ $fac->icon }}"></i>
            <span data-toggle="counter-up">{{ $fac->value }}</span>
            <p><strong>{{ $fac->title }}</strong> {{ $fac->desc }}</p>
            </div>
        </div>

    @endforeach
    
    </div>

</div>
</section><!-- End Facts Section -->
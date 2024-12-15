@extends('layouts.main')
@section('title', 'Tentang')

@section('content')
    <!-- Testimonials Section -->
    <section id="staffs" class="staffs section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Struktural</h2>
            <p>Berikut ini adalah daftar struktural</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-5 justify-content-center">

                {{-- <div class="col-lg-3 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
              <div class="staff-item">
                  <img src="assets/images/testimonials/testimonials-1.jpg" class="img-t text-center" alt="">
                  <h3 class="text-center">Sapiah</h3>
                  <h4 class="text-center">Ketua RW</h4> --}}
                {{-- <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                          rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                          risus at semper.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                  </p> --}}
                {{-- </div> --}}
                {{-- </div><!-- End testimonial item --> --}}

                
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card  shadow shadow-sm">
                        <img src="{{ asset('assets/images/testimonials/testimonials-1.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Ketua RW</h5>
                            <p class="text-center text-secondary">Supiah Wati</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card  shadow shadow-sm">
                        <img src="{{ asset('assets/images/testimonials/testimonials-1.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Ketua RW</h5>
                            <p class="text-center text-secondary">Supiah Wati</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card  shadow shadow-sm">
                        <img src="{{ asset('assets/images/testimonials/testimonials-1.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Ketua RW</h5>
                            <p class="text-center text-secondary">Supiah Wati</p>
                        </div>
                    </div>
                </div>

            </div>

    </section><!-- /Testimonials Section -->
@endsection

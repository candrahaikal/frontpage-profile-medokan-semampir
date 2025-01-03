@extends('layouts.main')
@section('title', 'Detail Fasilitas')

@section('content')
    <!-- Facilities Section -->
    <section id="detail-facility" class="detail-facility section light-background" data-aos="fade-up">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <div class="mb-4">
                            <a class="badge bg-info font-size-12" href="{{ route('facility.index') }}">
                                <i class="bx bx-purchase-tag-alt align-middle text-white me-1"></i>
                                Fasilitas Umum
                            </a>
                            @if ($type == 'rw')
                                <p class="badge bg-warning">{{ $facility->rw->name }}</p>
                            @else
                                <p class="badge bg-warning">{{ $facility->rt->rw->name }}</p>

                                <p class="badge bg-primary">{{ $facility->rt->name }}</p>
                            @endif
                        </div>
                        <h1 class="fw-bold">{{ $facility->name }}</h1>
                    </div>
                    <!-- Section Title -->
                    <hr>
                    <div>
                        <div class="row justify-content-center ">
                            <div class="col-lg-6 text-center">

                                <iframe src="{{ $facility->link_maps }}" height="200" style="border:0;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                            {{-- <div class="col-lg-6 text-center">
    
                                <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                <p class="fs-5">{{ $facility->link_maps }}</p>
                            </div> --}}
                            {{-- <div class="col-sm-4">
                                <div class="mt-4 mt-sm-0">
                                    <p class="text-muted mb-2">Lokasi</p>
                                    <h5 class="font-size-15">Gang 5 Medokan Semampir</h5>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mt-4 mt-sm-0">
                                    <p class="text-muted mb-2">Post by</p>
                                    <h5 class="font-size-15">Gilbert Smith</h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <hr>
                    <div class="my-5">
                        <img 
                            src="{{ $facility->image ? env('APP_CMS_URL') . $facility->image : 'https://placehold.co/800x500?text=Tidak+ada+gambar&font=roboto' }}" 
                            alt="{{ $facility->name ?? 'Gambar tidak tersedia' }}" 
                            class="img-thumbnail mx-auto d-block">
                    </div>
                    
                    <hr>
                    <div class="mt-4">
                        <div class="text-muted font-size-14">

                            {!! $facility->description !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection

@extends('layouts.main')
@section('title', 'UMKM')

@section('content')
    <!-- Facilities Section -->
    <section id="facility" class="facility section light-background">

        <!-- Section Title -->
        <div class="container section-title mt-5" data-aos="fade-up">
            <h2>UMKM</h2>
            <p>Berikut ini adalah daftar UMKM yang ada di RW 7 Kelurahan Medokan Semampir</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                {{-- Start Card Facility --}}

                {{-- <div class="row"> --}}
                    @foreach ($umkms as $umkm)
                    <div class="col-lg-4">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body">
                                <div class="position-relative mb-3 ratio ratio-4x3">
                                    <img
                                        src="{{ $umkm->image ? env('APP_CMS_URL') . $umkm->image : 'https://placehold.co/400x300?text=Tidak+ada+gambar&font=roboto' }}" alt=""
                                        class="img-thumbnail"></div>
                                <div class="card-text px-2 pb-4">
                                    <h4><a class="text-dark fw-bold" href="/blog-details">{{ $umkm->name }}</a></h4>
                                    {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-3">
                                            {{-- <a class="text-muted"><i
                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                            <p class="badge text-bg-warning">{{ $umkm->rt->rw->name }}</p>
                                            <p class="badge text-bg-primary">{{ $umkm->rt->name }}</p>
                                        </li>
                                        <br>
                                        <li class="list-inline-item mr-3">
                                            <p class="text-muted"><i
                                                    class="bx bxs-map-pin align-middle text-muted me-1 fs-5"></i>{{ Str::limit($umkm->link_maps, 20) }}
                                            </p>
                                            {{-- <br> --}}
                                            <a class="text-muted" href="{{ $umkm->link_order }}"><i
                                                class="bx bx-store-alt align-middle text-muted me-1 fs-5"></i>{{ $umkm->link_order ? Str::limit($umkm->link_order, 30) : 'Link Tidak Tersedia' }}
                                        </a>
                                        </li>
                                    </ul>
                                    <p class="text-secondary">{!! Str::limit($umkm->description, 40) !!}</p>
                                    <a href="{{ route('umkm.show', ['id' => $umkm->id]) }}"
                                        class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card Facility --}} 
                @endforeach
                <div class="d-flex justify-content-center my-2">
                    {{ $umkms->links() }}
                </div>
                {{-- </div> --}}
            </div>


           

        </div>


        {{-- <hr> --}}


        {{--  --}}


        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection

@extends('layouts.main')
@section('title', 'Fasilitas')

@section('content')
    <!-- Facilities Section -->
    <section id="facility" class="facility section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas RW</h2>
            <p>Berikut ini adalah daftar fasilitas umum yang ada di RW 7 Kelurahan Medokan Semampir</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                {{-- Start Card Facility --}}
                @foreach ($facilityRws as $facilityRw)
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="position-relative mb-3 ratio ratio-4x3"><img
                                        src="{{ $facilityRw->image ? env('APP_CMS_URL') . $facilityRw->image : 'https://placehold.co/400x300?text=Tidak+ada+gambar&font=roboto' }}" alt=""
                                        class="img-thumbnail"></div>
                                <div class="card-text px-2 pb-4">
                                    <h4><a class="text-dark fw-bold" href="/blog-details">{{ $facilityRw->name }}</a></h4>
                                    {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-3">
                                            {{-- <a class="text-muted"><i
                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                            <p class="badge text-bg-warning">{{ $facilityRw->rw->name }}</p>
                                        </li>
                                        <br>
                                        <li class="list-inline-item mr-3">
                                            <p class="text-muted">
                                                <i class="bx bxs-map-pin align-middle text-muted me-1"></i>
                                                {{ Str::limit($facilityRw->link_maps, 20) }}
                                            </p>
                                            {{-- <p class="text-muted">
                                                <i class="bx bxl-whatsapp align-middle text-muted me-1"></i>
                                                {{ Str::limit($facilityRw->link_maps, 20) }}
                                            </p> --}}
                                        </li>
                                    </ul>
                                    <p class="text-secondary">{!! $facilityRw->description !!}</p>
                                    <a href="{{ route('facility.show', ['type' => 'rw', 'id' => $facilityRw->id]) }}"
                                        class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card Facility --}}
                @endforeach
                {{ $facilityRws->links() }}
            </div>

        </div>

        <!-- Section Title -->
        <div class="container section-title mt-5" data-aos="fade-up">
            <h2>Fasilitas RT</h2>
            <p>Berikut ini adalah daftar fasilitas RT yang ada di RW 7 Kelurahan Medokan Semampir</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                {{-- Start Card Facility --}}

                {{-- <div class="row"> --}}
                    @foreach ($facilityRts as $facilityRt)
                    <div class="col-lg-4">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body">
                                <div class="position-relative mb-3 ratio ratio-4x3"><img
                                        src="{{ $facilityRt->image ? env('APP_CMS_URL') . $facilityRt->image : 'https://placehold.co/400x300?text=Tidak+ada+gambar&font=roboto' }}" alt=""
                                        class="img-thumbnail"></div>
                                <div class="card-text px-2 pb-4">
                                    <h4><a class="text-dark fw-bold" href="/blog-details">{{ $facilityRt->name }}</a></h4>
                                    {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-3">
                                            {{-- <a class="text-muted"><i
                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                            <p class="badge text-bg-warning">{{ $facilityRt->rt->rw->name }}</p>
                                            <p class="badge text-bg-primary">{{ $facilityRt->rt->name }}</p>
                                        </li>
                                        <br>
                                        <li class="list-inline-item mr-3">
                                            <p class="text-muted"><i
                                                    class="bx bxs-map-pin align-middle text-muted me-1"></i>{{ Str::limit($facilityRw->link_maps, 20) }}
                                            </p>
                                        </li>
                                    </ul>
                                    <p class="text-secondary">{!! $facilityRt->description !!}</p>
                                    <a href="{{ route('facility.show', ['type' => 'rt', 'id' => $facilityRt->id]) }}"
                                        class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card Facility --}} 
                @endforeach
                <div class="d-flex justify-content-center my-2">
                    {{ $facilityRts->links() }}
                </div>
                {{-- </div> --}}
            </div>


           

        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection

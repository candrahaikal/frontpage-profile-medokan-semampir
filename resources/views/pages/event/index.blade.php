@extends('layouts.main')
@section('title', 'Kegiatan')

@section('content')
    <!-- Facilities Section -->
    <section id="facility" class="facility section light-background">

        <!-- Section Title -->
        <div class="container section-title mt-5" data-aos="fade-up">
            <h2>Kegiatan</h2>
            <p>Berikut ini adalah daftar Kegiatan yang ada di RW 7 Kelurahan Medokan Semampir</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                {{-- Start Card Facility --}}

                {{-- <div class="row"> --}}
                    @foreach ($events as $event)
                    <div class="col-lg-4">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body">
                                <div class="position-relative mb-3 ratio ratio-4x3"><img
                                        src="{{ $event->image ? env('APP_CMS_URL') . $event->image : 'https://placehold.co/400x300?text=Tidak+ada+gambar&font=roboto' }}" alt=""
                                        class="img-thumbnail"></div>
                                <div class="card-text px-2 pb-4">
                                    <h4><a class="text-dark fw-bold" href="/blog-details">{{ $event->name }}</a></h4>
                                    {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-3">
                                            {{-- <a class="text-muted"><i
                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                            <p class="badge text-bg-warning">{{ $event->rt->rw->name }}</p>
                                            <p class="badge text-bg-primary">{{ $event->rt->name }}</p>
                                        </li>
                                        <br>
                                        <li class="list-inline-item mr-3">
                                            <p class="text-muted"><i
                                                    class="bx bxs-map-pin align-middle text-muted me-1 fs-5"></i>{{ Str::limit($event->location, 20) }}
                                            </p>
                                            {{-- <br> --}}
                                            {{-- <a class="text-muted" href="{{ $event->link_order }}"><i
                                                class="bx bx-store-alt align-middle text-muted me-1 fs-5"></i>{{ $event->link_order ? Str::limit($event->link_order, 30) : 'Link Tidak Tersedia' }}
                                        </a> --}}
                                        </li>
                                    </ul>
                                    <p class="text-secondary">{!! Str::limit($event->description, 30) !!}</p>
                                    <a href="{{ route('event.show', ['id' => $event->id]) }}"
                                        class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card Facility --}} 
                @endforeach
                <div class="d-flex justify-content-center my-2">
                    {{ $events->links() }}
                </div>
                {{-- </div> --}}
            </div>


           

        </div>


       
        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection

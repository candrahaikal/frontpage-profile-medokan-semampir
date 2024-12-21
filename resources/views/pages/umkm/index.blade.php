@extends('layouts.main')
@section('title', 'UMKM')

@section('content')
    <!-- Facilities Section -->
    <section id="facility" class="facility section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>UMKM</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">


                @if ($umkms->count() > 0)
                    <p class="text-center text-accent">Berikut ini adalah daftar UMKM yang ada di RW 7 Kelurahan Medokan
                        Semampir</p>

                    @foreach ($umkms as $umkm)
                        <div class="col-lg-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="position-relative mb-3 ratio ratio-4x3"><img
                                            src="{{ env('APP_CMS_URL') . $umkm->image }}" alt=""
                                            class="img-thumbnail"></div>
                                    <div class="card-text px-2 pb-4">
                                        <h4><a class="text-dark fw-bold" href="/blog-details">{{ $umkm->name }}</a></h4>
                                        {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                        <ul class="list-inline">
                                            <!-- Badge for RT Name -->
                                            <li class="list-inline-item me-3">
                                                <span class="badge bg-primary">{{ $umkm->rt->name }}</span>
                                            </li>
                                            
                                            <!-- Link for Map -->
                                            <li class="list-inline-item me-3">
                                                <span class="text-muted">
                                                    <i class="bx bxs-map align-middle me-1"></i>
                                                    <a target="_blank" class="text-decoration-none text-muted">
                                                        {{ $umkm->link_maps }}
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                        
                                        <p class="text-secondary">{!! $umkm->description !!}</p>
                                        <a href="{{ route('umkm.show', ['id' => $umkm->id]) }}"
                                            class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Card Facility --}}
                    @endforeach
                @else
                    <div class="col-lg-12">
                        <p class="text-center">Belum ada UMKM</p>
                    </div>
            </div>
            @endif
        </div>


        {{-- <hr> --}}


        {{--  --}}

        {{-- __-- --}}

        {{-- Pagination --}}
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        {{-- End Pagination --}}

        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection

@extends('layouts.main')
@section('title', 'Kegiatan')

@section('content')
    <!-- Facilities Section -->
    <section id="facility" class="facility section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kegiatan</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">


                @if ($events->count() > 0)
                    <p class="text-center text-accent">Berikut ini adalah daftar kegiatan yang ada di RW 7 Kelurahan Medokan
                        Semampir</p>

                    @foreach ($events as $event)
                        <div class="col-lg-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="position-relative mb-3 ratio ratio-4x3"><img
                                            src="{{ env('APP_CMS_URL') . $event->image }}" alt=""
                                            class="img-thumbnail"></div>
                                    <div class="card-text px-2 pb-4">
                                        <h4><a class="text-dark fw-bold" href="/blog-details">{{ $event->name }}</a></h4>
                                        {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                        <ul class="list-inline">
                                            <li class="list-inline-item mr-3">
                                                {{-- <a class="text-muted" href="/blog-list"><i
                                            class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                                {{-- <p class="badge text-bg-warning">{{ $event->rt->rw->name }}</p> --}}
                                                <p class="badge text-bg-primary">{{ $event->rt->name }}</p>
                                            </li>
                                            <li class="list-inline-item mr-3">
                                                <p class="text-muted" href="/blog-list"><i
                                                        class="bx bx-comment-dots align-middle text-muted me-1"></i>{{ $event->link_maps }}
                                                </p>
                                            </li>
                                        </ul>
                                        <p class="text-secondary">{!! $event->description !!}</p>
                                        <a href="{{ route('event.show', ['id' => $event->id]) }}"
                                            class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Card Facility --}}
                    @endforeach
                @else
                    <div class="col-lg-12">
                        <p class="text-center">Belum ada Kegiatan</p>
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

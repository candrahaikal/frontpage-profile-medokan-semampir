@extends('layouts.main')
@section('title', 'Fasilitas')

@section('content')
    <!-- Facilities Section -->
    <section id="facility" class="facility section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
            <p>Berikut ini adalah daftar daftar fasilitas umum yang ada di Kelurahan Medokan Semampir</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gap-2 justify-content-center">

                {{-- Start Card Facility --}}
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="position-relative mb-3 ratio ratio-4x3"><img
                                    src="{{ asset('assets/images/features-illustration-1.webp') }}" alt=""
                                    class="img-thumbnail"></div>
                            <div class="card-text px-2 pb-4">
                                <h5><a class="text-dark fw-bold" href="/blog-details">Taman Bermain Anak-anak</a></h5>
                                {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                <ul class="list-inline">
                                    <li class="list-inline-item mr-3">
                                        {{-- <a class="text-muted" href="/blog-list"><i
                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                                <p class="badge text-bg-primary">RW 7</p>
                                    </li>
                                    <li class="list-inline-item mr-3"><a class="text-muted" href="/blog-list"><i
                                                class="bx bx-comment-dots align-middle text-muted me-1"></i>Gang 5 Medokan
                                            Semampir</a></li>
                                </ul>
                                <p class="text-secondary">Fasilitas taman bermain anak-anak ini dapat digunakan oleh
                                    anak-anak untuk bermain.</p>
                                <a href="{{ route('about.index') }}" class="read-more">Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Card Facility --}}

                {{-- Start Card Facility --}}
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="position-relative mb-3 ratio ratio-4x3"><img src="{{ asset('assets/images/services.jpg') }}"
                                    alt="" class="img-thumbnail"></div>
                            <div class="card-text px-2 pb-4">
                                <h5><a class="text-dark fw-bold" href="/blog-details">Taman Bermain Anak-anak</a></h5>
                                {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                                <ul class="list-inline">
                                    <li class="list-inline-item mr-3">
                                      {{-- <a class="text-muted" href="/blog-list"><i
                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                                <p class="badge text-bg-primary">RW 7</p>
                                    </li>
                                    <li class="list-inline-item mr-3"><a class="text-muted" href="/blog-list"><i
                                                class="bx bx-comment-dots align-middle text-muted me-1"></i>Gang 5 Medokan
                                            Semampir</a></li>
                                </ul>
                                <p class="text-secondary">Fasilitas taman bermain anak-anak ini dapat digunakan oleh
                                    anak-anak untuk bermain.</p>
                                <a href="{{ route('about.index') }}" class="read-more">Selengkapnya <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Card Facility --}}

                {{-- Start Card Facility --}}
                <div class="col">
                  <div class="card shadow-sm">
                      <div class="card-body">
                          <div class="position-relative mb-3 ratio ratio-4x3"><img src="{{ asset('assets/images/services.jpg') }}"
                                  alt="" class="img-thumbnail"></div>
                          <div class="card-text px-2 pb-4">
                              <h5><a class="text-dark fw-bold" href="/blog-details">Taman Bermain Anak-anak</a></h5>
                              {{-- <p class="text-muted">10 Apr, 2020</p> --}}
                              <ul class="list-inline">
                                  <li class="list-inline-item mr-3">
                                    {{-- <a class="text-muted" href="/blog-list"><i
                                              class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> RW 7</a> --}}
                                              <p class="badge text-bg-primary">RW 7</p>
                                  </li>
                                  <li class="list-inline-item mr-3"><a class="text-muted" href="/blog-list"><i
                                              class="bx bx-comment-dots align-middle text-muted me-1"></i>Gang 5 Medokan
                                          Semampir</a></li>
                              </ul>
                              <p class="text-secondary">Fasilitas taman bermain anak-anak ini dapat digunakan oleh
                                  anak-anak untuk bermain.</p>
                              <a href="{{ route('about.index') }}" class="read-more">Selengkapnya <i
                                      class="bi bi-arrow-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              {{-- End Card Facility --}}

            </div>

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

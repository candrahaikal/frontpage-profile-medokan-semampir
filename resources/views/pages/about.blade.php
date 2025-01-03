@extends('layouts.main')
@section('title', 'Tentang')

@section('content')
    <!-- Testimonials Section -->
    <section id="staffs" class="staffs section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Struktural RW</h2>
            <p>Berikut ini adalah daftar struktural di RW 7 Kelurahan Medokan Semampir</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row g-5 justify-content-center">
                @foreach ($staffRws as $staffRw)
                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card shadow shadow-sm">
                            <img src="{{ $staffRw->image ? env('APP_CMS_URL') . $staffRw->image : 'https://placehold.co/500?text=Tidak+ada+gambar&font=roboto' }}" class="card-img-top"
                                alt="{{ $staffRw->name }}">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bold">{{ $staffRw->staffCategory->name }}</h5>
                                <p class="text-center text-secondary">{{ $staffRw->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Testimonials Section -->

    <!-- Features Section -->
    <section id="struktural" class="struktural light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Struktural RT</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="d-flex justify-content-center">
                <ul class="nav navs" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($rts as $rt)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active show' : '' }}" data-bs-toggle="tab"
                                data-bs-target="#struktural-{{ $rt->id }}">
                                <h4>{{ $rt->name }}</h4>
                            </a>
                        </li><!-- End tab nav item -->
                    @endforeach
                </ul>
            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                @foreach ($rts as $rt)
                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="struktural-{{ $rt->id }}">
                        @php
                            $staffsForRt = $staffRts->where('rt_id', $rt->id);
                        @endphp

                        @if ($staffsForRt->isEmpty())
                            <p class="text-accent text-center text-secondary mb-4">Tidak ada struktural untuk {{ $rt->name }}</p>
                        @else
                            <p class="text-accent text-center mb-4">Berikut ini adalah daftar struktural {{ $rt->name }}
                                di RW 7 Kelurahan Medokan Semampir</p>
                            <div class="row justify-content-center">
                                @foreach ($staffsForRt as $staffRt)
                                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="card shadow shadow-sm">
                                            <img src="{{ $staffRt->image ? env('APP_CMS_URL') . $staffRt->image : 'https://placehold.co/500?text=Tidak+ada+gambar&font=roboto' }}"
                                                class="card-img-top" alt="{{ $staffRt->name }}">
                                            <div class="card-body">
                                                <h5 class="card-title text-center fw-bold">
                                                    {{ $staffRt->staffCategory->name }}
                                                </h5>
                                                <p class="text-center text-secondary">{{ $staffRt->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Features Section -->
@endsection

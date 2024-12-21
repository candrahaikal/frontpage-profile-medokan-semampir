@extends('layouts.main')
@section('title', 'Detail Kegiatan')

@section('content')
    <!-- Facilities Section -->
    <section id="detail-event" class="detail-event section light-background" data-aos="fade-up">

        <div class="container">
            <div class="">
                <div class="text-center">
                    <div class="mb-4">
                        <a class="badge bg-info font-size-12" href="{{ route('event.index') }}">
                            <i class="bx bx-purchase-tag-alt align-middle text-white me-1"></i>
                            Kegiatan
                        </a>
                        <p class="badge bg-warning">{{ $event->rt->rw->name }}</p>
                        {{-- @if ($type == 'rt') --}}
                            
                        <p class="badge bg-primary">{{ $event->rt->name }}</p>
                    </div>
                    <h1 class="fw-bold">{{ $event->name }}</h1>
                </div>
                <!-- Section Title -->
                <hr>
                <div>
                    <div class="row">
                        <div class="col-lg-6 text-center">

                            <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                            <p class="fs-5">{{ $event->link_maps }}</p>
                        </div>
                        
                        <div class="col-lg-6 text-center">

                            <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                            <p class="fs-5">{{ $event->link_maps }}</p>
                        </div>
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
                <div class="my-5"><img src="{{ env('APP_CMS_URL') . $event->image }}" alt=""
                        class="img-thumbnail mx-auto d-block"></div>
                <hr>
                <div class="mt-4">
                    <div class="text-muted font-size-14">
                        
                        {!! $event->description !!}
                    </div>

                </div>
            </div>
        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection
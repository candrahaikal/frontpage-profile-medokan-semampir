@extends('layouts.main')
@section('title', 'Detail Fasilitas')

@section('content')
    <!-- Facilities Section -->
    <section id="detail-facility" class="detail-facility section light-background" data-aos="fade-up">

        <div class="container">
            <div class="">
                <div class="text-center">
                    <div class="mb-4"><a class="badge bg-light font-size-12" href="/blog-details"><i
                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Fasilitas Umum</a></div>
                    <h2>Taman Bermain Anak-anak</h2>
                </div>
                <!-- Section Title -->
                <hr>
                <div class="text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <div>
                                <p class="badge text-bg-primary p-2 fs-6">RW 7</p>
                                <p class="badge text-bg-warning p-2 fs-6">RT 7</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
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
                        </div>
                    </div>
                </div>
                <hr>
                <div class="my-5"><img src="{{ asset('assets/images/services.jpg') }}" alt=""
                        class="img-thumbnail mx-auto d-block"></div>
                <hr>
                <div class="mt-4">
                    <div class="text-muted font-size-14">
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                            quia non numquam eius modi tempora incidunt ut labore et dolore magnam enim ad minima veniam
                            quis</p>
                        <p class="mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea reprehenderit qui in ea voluptate velit esse quam nihil
                            molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos
                            et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                            atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                            similique sunt</p>
                        <blockquote class="p-4 border-light border rounded mb-4">
                            <div class="d-flex">
                                <div class="me-3"><i class="bx bxs-quote-alt-left text-dark font-size-24"></i></div>
                                <div>
                                    <p class="mb-0"> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint quidem rerum facilis est</p>
                                </div>
                            </div>
                        </blockquote>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                            consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste
                            natus error sit</p>
                        <div class="mt-4">
                            <h5 class="mb-3">Title: </h5>
                            <div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <div>
                                            <ul class="ps-4">
                                                <li class="py-1">Donec sodales sagittis</li>
                                                <li class="py-1">Sed consequat leo eget</li>
                                                <li class="py-1">Aliquam lorem ante</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div>
                                            <ul class="ps-4">
                                                <li class="py-1">Aenean ligula eget</li>
                                                <li class="py-1">Cum sociis natoque</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>



    </section><!-- /Testimonials Section -->
@endsection

@section('script')
@endsection

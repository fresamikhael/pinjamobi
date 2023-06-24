@extends('layouts.app')

@section('title')
    Rental | Pinjamobi
@endsection

@section('content')
    <div class="page-content page-home page-details">
        <section class="rental-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Informasi Rental
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="rental-details-container" data-aos="fade-up">
            <section class="rental-heading">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center col-lg-12">
                            <h4>{{ $users->rent_name }}</h4>
                        </div>
                        <div class="d-flex justify-content-center col-lg-12 mb-5">
                            <div class="owner">Rental Mobil</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rental new-car">
                <div class="container">
                    <div class="row">
                        <div class="col-12" data-aos="fade-up">
                            <h5>Daftar Mobil Tersedia</h5>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($cars as $car)
                            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                                <a href="{{ route('detail', $car->slug) }}" class="component-car d-block">
                                    <div class="car-thumbnail">
                                        <div class="car-image"
                                            style="
                                                @if ($car->galleries->count()) background-image: url('{{ Storage::url($car->galleries->first()->photos) }}')
                                                @else
                                                    background-color: #eee @endif
                                            ">
                                        </div>
                                    </div>
                                    <div class="car-text">{{ $car->name }}</div>
                                    <div class="car-price">
                                        Rp. {{ number_format($car->price) }}
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                                No Car Found
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>

            <section class="rental-owner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mt-3 mb-3">
                            <h4>Pemilik Rental</h4>
                            <p>
                                {{ $users->name }}
                            </p>
                        </div>
                        <div class="col-lg-4 mt-3 mb-3">
                            <h4>Status Rental</h4>
                            <p>
                                @if ($users->rent_status == 1)
                                    <p>Rental Buka</p>
                                @else
                                    <p>Rental Tutup</p>
                                @endif
                            </p>
                        </div>
                        <div class="col-lg-4 mt-3 mb-3">
                            <h4>No. Telepon Rental</h4>
                            <p>
                                {{ $users->phone_number }} a/n {{ $users->name }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="d-flex justify-content-center col-12">
                            <h4>Lokasi Rental</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-center col-12 mt-3 mb-3"
                            style="position: relative; overflow: hidden; padding-bottom: 56.25%">
                            <iframe src="{{ $users->address }}" style="height: 70%; width: 70%; position: absolute;"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

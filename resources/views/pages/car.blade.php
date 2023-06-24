@extends('layouts.app')

@section('title')
    Mobil | Pinjamobi
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="rental-top-rent">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Semua Kategori</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('cars') }}" class="component-top-rental d-block">
                            <div class="top-rental">
                                <img src="/images/cars.png" alt="" class="w-100" />
                            </div>
                            <p class="top-rental-text">All Cars</p>
                        </a>
                    </div>
                    @php $incrementCategory = 0 @endphp
                    @forelse ($categories as $category)
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up"
                            data-aos-delay="{{ $incrementCategory += 100 }}">
                            <a href="{{ route('car-detail', $category->slug) }}" class="component-top-rental d-block">
                                <div class="top-rental">
                                    <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100" />
                                </div>
                                <p class="top-rental-text">{{ $category->name }}</p>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            No Categories Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="rental new-car">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Semua Mobil</h5>
                    </div>
                </div>
                <div class="row">
                    @php $incrementCar = 0 @endphp
                    @forelse ($cars as $car)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementCar += 100 }}">
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
                                <div class="car-price">Rp. {{ number_format($car->price) }}</div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            No Cars Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection

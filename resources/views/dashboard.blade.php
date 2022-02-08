@extends('layouts.master')

@push('css-vendor')
@livewireStyles
@endpush

@section('content')
<section class="hero-wrap js-fullheight" id="dashboard-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading">Hey!</span>
                    <h1>{{ auth()->user()->name }}</h1>
                    <h2>I'm a
                        <span class="txt-rotate" data-period="2000"
                            data-rotate='[ "Web Developer.", "Backend Developer.", "PHP Developer.", "Laravel Developer"]'></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="education-section">
<livewire:education >
</section>
@endsection

@push('js-vendor')
@livewireScripts
@endpush

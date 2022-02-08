@extends('layouts.master')

@section('content')
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Login</h2>
            </div>
        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-12 order-md-last d-flex">
                <form action="{{ route('login.verify') }}" class="bg-light p-4 p-md-5 contact-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-5">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection

@extends('errors::minimal')

@section('title', __('Service Unavailable'))


@section('content')
<div class="text-center">
    <div class="mb-4 text-center">
        <a href="index.html" class="auth-logo">
            <img src="assets/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
        </a>
    </div>

    <div class="maintenance-img">
        <img src="assets/images/svg/503-error.svg" class="img-fluid" alt="coming-soon">
    </div>

    <div class="text-center">
        <h3 class="mt-4 fw-semibold text-black text-capitalize">Service unavailable</h3>
        <p class="text-muted">Temporary service outage. Please try again later.</p>
    </div>

    <a class="btn btn-primary mt-3 me-1" href="index.html">Back to Home</a>
</div>

@endsection('content')
@extends('user_type.auth', ['parentFolder' => 'authentication', 'childFolder' => 'error', 'hasFooter' => 'footer', 'navbar' => 'cover'])

@section('content')
<!--navbar basic-->
  <main class="main-content  mt-0">
    <div>
      <section class="min-vh-100 d-flex align-items-center">
        <div class="container">
          <div class="row mt-lg-0 mt-8">
            <div class="col-lg-5 my-auto">
              <h1 class="display-1 text-bolder text-gradient text-warning fadeIn1 fadeInBottom mt-5">Error 500</h1>
              <h2 class="fadeIn3 fadeInBottom opacity-8">Something went wrong</h2>
              <p class="lead opacity-6 fadeIn2 fadeInBottom">We suggest you to go to the homepage while we solve this issue.</p>
              <a href="/dashboard-default" type="button" class="btn bg-gradient-dark mt-4">Go to Homepage</a>
            </div>
            <div class="col-lg-7 my-auto">
              <img class="w-100 fadeIn1 fadeInBottom" src="{{ URL::asset('assets/img/illustrations/error-500.png') }}" alt="500-error">
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
<!--footer socials-->
@endsection
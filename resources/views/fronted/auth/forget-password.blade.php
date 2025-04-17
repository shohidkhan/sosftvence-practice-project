@extends('fronted.auth.app')
@section('content_auth')
<section class="authentication">
    <div class="authentication-box" dir="rtl">
      <div class="authentication-box-header">
        <img src="{{ asset('frontend') }}/./assets/images/favicon.png" alt="logo" />
        <h4>Verify Your Email</h4>
      </div>

      <div class="verify-divider-line"></div>
      <h5 class="notify-alert">
        A verification link will send via your email
      </h5>
      <p class="remaining-time-text">
        Please check your email and 
        verify your email address.
      </p>

      <x-auth-session-status class="mb-4 bg-success text-white p-3 rounded" :status="session('status')" />

      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-wrapper-wrapper">
         <div class="input-wrapper">
            <input type="email" value="{{ old('email') }}" name="email"  class="mb-3"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
         </div>
        </div>
        <button class="verify-button text-center"
          >Verify</
        >
      </form>

      <!-- home-tutorials -->
      <div class="home-tutorials-wrapper">
        <a href="./index.html">Home</a>
        <div data-bs-toggle="modal" data-bs-target="#videoModal">
          Tutorials
        </div>
      </div>
      <!-- home-tutorials -->
    </div>
    <div class="greeting-box">
      <div class="greeting-content">
        <h2>Welcome</h2>
        <p>New Here? Create a account to start a new campaign?</p>
      </div>
    </div>
  </section>
@endsection
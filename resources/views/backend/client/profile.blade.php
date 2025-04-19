@extends('fronted.app')
@section('content')
<section class="get-started">
    <div class="get-started-form-wrapper">
      <h3 class="form-title">Please Fill This Form to Get Started</h3>
      <!-- into the class .input-wrapper-large input  text-end class defined for arabic design -->

      @if(session("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ session("success") }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
      <form class="get-started-form" method="POST" action="{{ route('client.profile-store') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-wrapper-large">
          <label>Company Name<span>*</span></label>
          <input type="text" name="company_name" value="{{ old('company_name',$userProfile->company_name ?? '') }}" placeholder="Apple.inc" />
          @error('company_name')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-wrapper-large">
          <label>Company Email<span>*</span></label>
          <input type="email" name="company_email" value="{{ old('company_email',$userProfile->company_email ??'') }}" placeholder="adam_smith@Email.com" />
          @error('company_email')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        {{-- <div class="input-wrapper-large">
          <label>Your Password<span>*</span></label>
          <input type="password" placeholder="**********" />
        </div>
        <div class="input-wrapper-large">
          <label>Confirm Password<span>*</span></label>
          <input type="password" placeholder="**********" />
        </div> --}}
        <div class="input-wrapper-large">
          <label>Phone Number<span>*</span></label>
          <input type="tel"  name="company_phone" value="{{ old('company_phone',$userProfile->company_phone ?? 
          '') }}" placeholder="+898-2786223" class="text-end"/>
          @error('company_phone')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-wrapper-large">
          <label>Address<span>*</span></label>
          <input type="text" name="company_address" value="{{ old('company_address',$userProfile->company_address ?? '') }}" placeholder="3/4 Street, 5 No House" class="text-end"/>
          @error('company_address')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-wrapper-large">
          <label>VAT Number<span>*</span></label>
          <input type="number" name="vat_number" value="{{ old('vat_number',$userProfile->vat_number ?? '') }}" placeholder="1223-1344131-12313" />
          @error('vat_number')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-wrapper-large">
          <label>CR Document<span>*</span></label>
          <div class="upload-box">
            <input type="file" name="cr_documents"   id="file-input" />
            <div class="upload-content">
              <span class="upload-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M19 15V17C19 18.1046 18.1046 19 17 19H7C5.89543 19 5 18.1046 5 17V15M12 15L12 5M12 5L14 7M12 5L10 7"
                    stroke="#344051"
                    stroke-width="1.67"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
              <span class="upload-file-text">Upload file</span>
            </div>
          </div>
          @error('cr_documents')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- .agree-to-policy label::before into the class margin-right applied instead of left -->
        <div class="agree-to-policy">
          <input type="checkbox" name="agree_terms_policy"  id="get-started-checkbox" />
          <label for="get-started-checkbox"
            >
            <a href="./terms-and-conditions.html" class="agree">
              I agree to terms & Policy
            </a>
            </label
            
          >
          @error('agree_terms_policy')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="auth-submit-btn">Submit</button>
      </form>
    </div>
  </section>
@endsection
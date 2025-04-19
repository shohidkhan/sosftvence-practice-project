@extends('backend.app')
@section('dashboard')
<div class="campaign-header">
    <div>
      <h4 class="campaign-header-title">Add New Signage</h4>
      <p class="campaign-subtitle">
        Follow this Steps to Add New Signage
      </p>
    </div>
  </div>

  <div class="describe-campaign mt-4">
    <h5>Describe your campaign bellow</h5>
    @if(session("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ session("success") }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session("error"))
        <div class="alert alert-error alert-dismissible fade show" role="alert">
            <p>{{ session("error") }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form method="POST" action="{{ route('owner.store_signage') }}" enctype="multipart/form-data">
        @csrf
      <div class="describe-campaign-input-wrapper">
        <label>Signage Name <span>*</span></label>
        <input
          type="text"
          name="singage_name"
          placeholder="Get 70% OFF Discount from Shashh"
        />
        @error('singage_name')
            <span>{{ $message }}</span>
        @enderror
      </div>

      <div class="describe-campaign-input-wrapper input-wrapper">
        <label>Signage Type <span>*</span></label>
        <select name="singage_type_id" id="">
            <option value="">select singage type</option>
            @foreach ($signageTypes as $type)
            <option value="{{ $type->id }}">{{ $type->signage_type }}</option>
            @endforeach
        </select>
        @error('singage_type_id')
            <span>{{ $message }}</span>
        @enderror
      </div>

      <div class="describe-campaign-input-wrapper">
        <label>Description <span>*</span></label>
        <textarea name="description"></textarea>
        @error('description')
            <span>{{ $message }}</span>
        @enderror
      </div>

      <div class="d-flex align-items-start flex-wrap column-gap-4 w-100">
        <div class="describe-campaign-input-wrapper w-100">
          <label>Average Daily Views<span>*</span></label>
          <input type="text" name="daily_views" placeholder="50k" />
          @error('daily_views')
              <span>{{ $message }}</span>
          @enderror
        </div>
        <div class="describe-campaign-input-wrapper w-100">
          <label>Set Per Day Price<span>*</span></label>
          <input type="text" name="signage_price" placeholder="SR 5" />
          @error('signage_price')
              <span>{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="d-flex align-items-start flex-wrap column-gap-4 w-100">
        <div class="describe-campaign-input-wrapper w-100">
          <label>AD Display Height<span>*</span></label>
          <input type="text" name="height" placeholder="638px" />
          @error('height')
              <span>{{ $message }}</span>
          @enderror
        </div>
        <div class="describe-campaign-input-wrapper w-100">
            <label>AD Display Wide<span>*</span></label>
            <input type="text" name="wide" placeholder="638px " />
            @error('wide')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="describe-campaign-input-wrapper w-100">
          <label>Set Exposure time per minute<span>*</span></label>
          <input type="text" name="rotation_time" placeholder="8 Seconds" />
          @error('rotation_time')
              <span>{{ $message }}</span>
          @enderror
        </div>
      </div>


      <div class="describe-campaign-input-wrapper w-100">
        <label>Signage Location<span>*</span></label>
        <input type="text" name="location" placeholder="Dammam" />
        @error('location')
            <span>{{ $message }}</span>
        @enderror
      </div>

      <div class="describe-campaign-input-wrapper w-100">
        <label>Upload Signage Photo</label>

        <div class="upload-box">
          <input type="file" name="signage_image" id="file-input" />
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
          @error('signage_image')
              <span>{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="d-flex align-items-center gap-4 flex-wrap">
        <label class="custom-checkbox-label">
          <input
            type="checkbox"
            name="terms_and_condition"
            id="terms-and-condition"
          />
          <span class="custom-checkbox-checkmark"></span>
          <a href="./terms-and-conditions.html" class="agree">Terms & Conditions</a>
          @error('terms_and_condition')
              <span>{{ $message }}</span>
          @enderror
        </label>

        <label class="custom-checkbox-label">
          <input
            type="checkbox"
            name="privacy_policy"
            id="privacy-policy"
          />
          <span class="custom-checkbox-checkmark"></span>
          <a href="./privacy-policy.html" class="agree">Privacy Policy</a>
          @error('privacy_policy')
              <span>{{ $message }}</span>
          @enderror
        </label>
      </div>

      <button type="submit" class="btn-common w-100 mt-4">
        Submit For Approval
      </button>
    </form>
  </div>
@endsection

<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Overview | Shashh</title>
    <!-- ==== All Css Links ==== -->
    @include('backend.partials.style')
  </head>
  <body>
    <div class="dashboard-layout-wrapper">
      <!-- Sidebar -->
     @include('backend.partials.sidebar')

      <!-- Overlay for Sidebar Toggle on Smaller Screens -->
      <div class="overlay" id="overlay"></div>

      <!-- Main Content -->
      <div class="main-content-wrapper" id="main-content">
        @include('backend.partials.top_bar')

        <div class="main-content">
          @yield('admin_dashboard')
        </div>
      </div>
    </div>

    <!-- ==== All Js Links ==== -->
   @include('backend.partials.scripts')
  </body>
</html>

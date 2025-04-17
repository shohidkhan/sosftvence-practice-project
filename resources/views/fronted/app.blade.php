
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1 , maximum-scale=1"
    />
    <title>Shashh</title>

    <!-- ==== All Css Links ==== -->
    @include('fronted.partials.style')
  </head>
  <body>
    @include('fronted.partials.header')

    <main>
      @yield('content')
    </main>

    <!-- footer starts -->
    @include('fronted.partials.footer')
    <!-- footer ends -->

    <!-- ==== All Js Links ==== -->
    @include('fronted.partials.script')

    <script>
      $(document).ready(function () {
        $("select").niceSelect();
      });
    </script>
    
  </body>
</html>

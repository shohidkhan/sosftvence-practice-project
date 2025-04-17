
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1 , maximum-scale=1"
    />
    <title>Register | Shashh</title>

    <!-- ==== All Css Links ==== -->
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/./assets/images/favicon.png" />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('frontend') }}/assets/css/plugins/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('frontend') }}/assets/css/plugins/nice-select.min.css"
    />
    <link rel="stylesheet" href="assets/css/plugins/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/fontawesome.min.css" />

    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="assets/css/common.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/responsive.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/./assets/css/style.css" />
  </head>
  <body>
    <main>
      @yield('content_auth')
    </main>

    <!-- Modal -->
    <div
      class="modal fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="videoModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-hightlight" id="exampleModalLabel">
              Login Steps
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="responsive-video-wrapper">
              <video id="videoIframe" controls>
                <source src="{{ asset('frontend') }}/./assets/images/signage.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==== All Js Links ==== -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/./assets/js/main.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("videoModal");
        const video = document.getElementById("videoIframe");

        // Listen for Bootstrap modal hidden event
        modal.addEventListener("hidden.bs.modal", function () {
          if (video) {
            video.pause(); // Pause the video
            video.currentTime = 0; // Optionally reset the video to the beginning
          }
        });
      });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout._head') {{--We are including layout file--}}
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('layout._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('layout._sidebar')
      <!-- partial -->
      <div class="main-panel">
        
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button>
                </div>
              </div>
            </div>
          </div>
          
         
        @yield('MainContent')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout._footer')  
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('layout._scripts');
</body>

</html>


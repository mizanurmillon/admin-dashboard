
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.partials.style')
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start -->
      @include('backend.partials.header')
      <!-- Page Header Ends                              -->
      <!-- Page body Start -->
      <div class="page-body-wrapper"> 
        <!-- Page Sidebar Start-->
        
        @include('backend.partials.sidebar')
        
        <div class="page-body">
          
            @yield('page-content')

        </div>
        <!-- footer start-->
        @include('backend.partials.footer')
      </div>
    </div>
   @include('backend.partials.script')
  </body>
</html>
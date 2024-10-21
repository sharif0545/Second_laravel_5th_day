<div class="container-scroller">
    <!-- Top bar -->
    @include('DashboardSections.dashboard_topbar')
     <!-- Top bar end -->

    <!-- partial:partials/middelbar -->
    @include('DashboardSections.dashboard_middelbar')
     <!-- end partial:partials/middelbar -->
  
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        @include('DashboardSections.dashboard_sidebar')
          <!-- end partial:partials/_sidebar.html -->
       <!-- main-panel -->
        @include('DashboardSections.dashboard_main_panel')
      <!-- main-panel ends -->
    </div>
  
  </div>
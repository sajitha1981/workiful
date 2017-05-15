@extends('Master-Admin/layouts.master')

@section('content')

 <!-- Start Admin User Info -->
    <div class="left-right" style="padding-top:20px">
      <h2>Dashboard</h2>
      <p><b>Today is:</b> 12 January 2015</p>
    </div>
    <!-- End Admin User Info -->
    <!-- Start Quick Action Section -->
    <div class="container-responsive">
      <div class="col-md-2 col-sm-6 well">
        <div class="text-center">
          <h3 style="color:#009898"><b>Rs. 4565</b></h3>
          <p><i class="fa fa-users"></i> Candidates Earning</p>
          <b>Total</b>
          <!-- <p class="pull-right"><i class="fa fa-user" style="font-size:32px"></i></p> -->
        </div>
        <!-- // text center -->    
      </div>
      <!-- // col-md-2 -->
      <div class="col-md-2 col-sm-6 well">
        <div class="text-center">
          <h3 style="color:#009898"><b>Rs. 444565</b></h3>
          <p><i class="fa fa-building"></i> Companies Earning</p>
           <b>Total</b>
          <!-- <a href="financials.html">Financials</a> -->
          <!-- <p class="pull-right"><i class="fa fa-user" style="font-size:32px"></i></p> -->
        </div>
        <!-- // text center -->    
      </div>
      <!-- // col-md-2 --> 
      <div class="col-md-2 col-sm-6 well">
        <div class="text-center">
          <h3><b>4565</b></h3>
          <p><i class="fa fa-database"></i> Total Candidates</p>
          <a href="manage-candidates.html">Manage Candidates</a>
          <!-- <p class="pull-right"><i class="fa fa-user" style="font-size:32px"></i></p> -->
        </div>
        <!-- // text center -->    
      </div>
      <!-- // col-md-2 -->
      <div class="col-md-2 col-sm-6 well">
        <div class="text-center">
          <h3><b>4565</b></h3>
          <p><i class="fa fa-bank"></i> Total Companies</p>
          <a href="manage-companies.html">Manage Companies</a>
          <!-- <p class="pull-right"><i class="fa fa-user" style="font-size:32px"></i></p> -->
        </div>
        <!-- // text center -->    
      </div>
      <!-- // col-md-2 -->
      <div class="col-md-2 col-sm-6 well">
        <div class="text-center">
          <h3><b>254</b></h3>
          <p><i class="fa fa-briefcase"></i> Current Interviews</p>
          <a href="interviews.html">Intervews</a>
          <!-- <p class="pull-right"><i class="fa fa-user" style="font-size:32px"></i></p> -->
        </div>
        <!-- // text center -->    
      </div>
      <!-- // col-md-2 -->
      <div class="col-md-2 col-sm-6 well">
        <div class="text-center">
          <h3><b>6598</b></h3>
          <p><i class="fa fa-check"></i> Hired</p>
           <b>Listing Page</b>
          <!-- <a href="hired.html">View Hired</a> -->
          <!-- <p class="pull-right"><i class="fa fa-user" style="font-size:32px"></i></p> -->
        </div>
        <!-- // text center -->    
      </div>
      <!-- // col-md-2 -->    
      <div class="clearfix">
      </div>
      <!-- End Start Quick Action Section -->
      <!-- <div style="height:500px;"></div> -->
      <!-- Content Started
        =============================================== -->
      <div class="col-md-12 padding-left0" style="padding-top:30px">
        <div class="col-md-8">
          <h3>Recommendation</h3>
          <section class="widget-box">
            <h3><b>Razeqeen Candidates</b> | 6536</h3>
            <hr>
            <h3><b>Razeqeen Companies</b> | 3254</h3>
          </section>
        </div>
        <div class="col-md-4 padding-right0">
          <h3>Jobs & Applicants</h3>
          <section class="widget-box" style="background-color:#03314b;color:#ffcc33">
            <h3><b>Posted Jobs</b> (5,000)</h3>
            <hr>
            <h3><b>Applicants</b> (5,000)</h3>
          </section>
        </div>
        <!-- // Right Box -->
      </div>
      <!-- // col-md-12 -->
      <div class="col-md-12" style="padding-top:30px">
        <h3>Latest Activity</h3>
        <p><i class="fa fa-info"></i> Admin added a new candidate. | Today - 8.00 Pm</p>
        <div class="activity-height">&nbsp;</div>
        <p><i class="fa fa-info"></i> Admin added a new candidate. | Today - 8.00 Pm</p>
        <div class="activity-height">&nbsp;</div>
      </div>
      <!-- Content Ended
        =============================================== -->
    </div>
    <!-- //.container-responsive -->
    <div class="clearfix"></div>
	@include('Master-Admin/layouts.partials._js')
	
	@endsection
	
	
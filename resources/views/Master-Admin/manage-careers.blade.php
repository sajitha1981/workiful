@extends('Master-Admin/layouts.master')

@section('content')


   <!-- Start Admin User Info http://laraget.com/blog/how-to-create-an-ajax-pagination-using-laravel-->
    <div class="left-right set-padding-on-small-devices" style="padding-top:20px">
      <div class="row">
        <!--Start left text column-->
        <div class="col-md-8 col-sm-8 col-lg-8">
          <div class="hedging-common">
            <h3><b>Razeqeen:</b><span style="color:#009898"> Career level</span>  </h3>
            <p><span><b>Today Is:</b></span> {{date("l, d  F Y")}}</p>
            <p>Total:<span class="only-size"><b id="rdCnt"> {{ $eduCnt }} </b></span> Career level(s)</p>
          </div>
        </div>
        <!--End left text column-->
        <!--Start Right text column-->
        <div class="col-md-4 col-sm-4 col-lg-4">
          <div class="hedging text-right">
            <h3><span>CEO:</span> {{session('sesAdminautoID')}}</h3>
			 <a href="add-edit-career" class="btn btn-secondary"><i class="glyphicon glyphicon-user"></i><b>+ Add  Career level</b></a>
          </div>
        </div>
      </div>
      <!--End Right text column-->
    </div>
    <!-- End Admin User Info -->
    <!-- Start Quick Action Section -->
    <!-- End Quick Action Section -->
    <div class="clearfix"></div>
    <!-- Any future section place holder -->
    <!-- Content Started
      =============================================== -->
    <!-- add any future section placeholder -->
    <!-- Search Panel -->
    <div class="col-md-12 col-sm-12" style="background-color:#F6F4E8">
      <div class="row mycolor hide-me-mobile">
        <!--Start left text column-->
        <div class="col-md-3 col-sm-3 col-lg-3">
          <div class="hedging-common">
            <h3> <i class="fa fa-search"></i> Search </h3>
            <p style="margin-left:39px;">By keywords.</p>
          </div>
        </div>
        <!--End left text column-->
        <!--Start middle text column-->
        <div class="col-md-9 col-sm-9 col-lg-9">
		
          <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="margintop20">
              <div class="form-group">
                <label>Keyword</label>
                <div class="text-field">
                  <i class="fa fa-search"></i>
  <input class="form-control" placeholder="Type your keywords..." name="keywords"  value="" type="text" id="keywords" >                           </div>
              </div>
            </div>
          </div>
         
          <div class="col-md-3 col-sm-3 col-lg-3">
            <div style="margin-top:47px">
              <div class="form-group">
              
			                    <input class="form-control btn-secondary" type="button" value="Search" style="color:white" name="mtp" id="search"> 

              </div>
            </div>
          </div>
		  
        </div>
        <!--End middle text column-->
      </div>
    </div>
    <!-- End Search Panel -->
    <!-- Search Options Panel -->
    <div class="col-md-6" style="background-color:#F6F4E8">
      <div class="btn-group" role="group" aria-label="...">
        <!--  <a href="company-analytics.html" class="btn btn-secondary"><i class="fa fa-arrow-circle-left"></i> Go Back</a> -->
        <button type="button" class="btn btn-secondary"><i class="fa fa-print"></i></button>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Show Results
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu " role="menu">
            <li><a class="numrecs" href="list-careers?npage=10" data-value="10"><i class="fa fa-list-ol"></i> Show 10 Records</a></li>
            <li><a class="numrecs" href="list-careers?npage=25" data-value="25"><i class="fa fa-list-ol"></i> Show 25 Records</a></li>
            <li><a class="numrecs" href="list-careers?npage=50" data-value="50"><i class="fa fa-list-ol"></i> Show 50 Records</a></li>
            <li><a class="numrecs" href="list-careers?npage=100" data-value="100"><i class="fa fa-list-ol"></i> Show 100 Records</a></li>
            <div class="div"></div>
            <li><a class="sorder"  data-value="ASC"  href="list-careers?orderby=ASC"><i class="fa fa-long-arrow-up"></i> Ascending Order</a></li>
            <li><a class="sorder" data-value="DESC" href="list-careers?orderby=DESC"><i class="fa fa-long-arrow-down"></i> Descending Order</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Search Options Panel -->
    <!-- Search Options Panel Right -->
    <div class="col-md-6" style="background-color:#F6F4E8">
      <p class="pull-right"><b>&nbsp;</b></p>
    </div>
    <!-- /Search Options Panel Right -->
    <div style="padding-top:30px;padding-bottom:30px">&nbsp;</div>
	@if ($eduCnt > 0)
	<div>
      <h3 class="text-center" style="padding-left:15px; padding-right:15px">=== Showing <span id="stcnts">1</span> to <span id="endcnts">{{$numresc}}</span> of <span id="netcnts">{{$eduCnt}}</span> Records ===</h3>
    </div>
	@endif
    <!-- START MAIN CONTENT -->
    <div class="">
      <!-- Interview Listing Box
        ======================================================================= -->
      <div class="col-md-12">
        <div id="no-more-tables" class="dispalyContent">
          
			 @include('Master-Admin.careerload')
			
         </div>
        <!-- /col-sm-6 col-md-4 col-lg-3 -->
      </div>
      <!-- /Interview Listing Box -->
    </div>
   
    <!-- Content Ended
      =============================================== -->
    <!-- //.container-responsive -->
    <div class="clearfix"></div>
	
	@include('Master-Admin/layouts.partials._js')
	
	@include('Master-Admin/layouts.partials._sjs')
	@endsection
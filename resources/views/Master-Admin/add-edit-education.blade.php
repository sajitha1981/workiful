@extends('Master-Admin/layouts.master')

@section('content')


   
  <!-- Body
================================================== -->
<div class="container">
      <div class="row">
        <!-- Navigation Buttons -->
       
        <!-- Content -->
        <div class="col-md-12 padding-left0 col-sm-12">
          <div class="tab-content">
            <!--Start Personal Details Section-->
            <form action=""  method="post"><div class="tab-pane active profile-form" id="personal">
              <!--Start Slider Bar-->
              
              <!--Start Slider Bar-->
              <!--Start Title Bar-->
              <div class="row" style="padding-bottom:30px">
                <div class="col-md-8 col-sm-8 col-lg-8">
                  <div class="hedging">
                   <h3><b>Razeqeen:</b><span style="color:#009898">  Education </span>  </h3>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="hedging text-right">
                     <h3><span>CEO:</span> </h3>
                  </div>
                </div>
              </div>
              <!--End Title Bar-->
             <div class="row"><div class="col-md-12 col-sm-12 col-lg-12"><div class="text-left">ggg
</div></div></div>
            
              <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="form-group">
                    <label>Education</label>
                   
                     
 <input name="education_name" type="text" class="form-control" id="education_name" maxlength="200"  value=""  required/>  </div>
                
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                 
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="form-group">
                    
                  </div>
                </div>
              </div>
              
            
              <div class="row">
               
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="form-group">
                    <label>Status</label>
                    <div class="text-field">
                     
                        <input name="education_status" type="radio" value="1" >

                                    Active&nbsp;&nbsp; <input name="education_status" type="radio" value="0" >

             In Active 					
                    </div>
                  </div>
                </div>  <div class="col-md-4 col-sm-4 col-lg-4">
                 
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4">
                  <div class="form-group">
                    
                  </div>
                </div>
              </div>
              
            
              
             
			  
			  
			    <div class="text-center" style="margin-top:30px">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-lg-4">
                    <!--Any future message we write here-->
                  </div>
                  <div class="col-md-4 col-sm-4 col-lg-4">
                     <div class="form-group"><input type="hidden" name="npage" value=""> 
                                    <input type="hidden" name="page" value=""> 
                                    <input type="hidden" name="keywords" value=""><input type="hidden" name="orderby" value=""> 
                  		 

                                    <input type="Hidden" name="id" value="<?=$id?>"> <input type="hidden" name="tp" value="save">
                                  <input class="form-control btn btn-warning" type="submit" value="Update Education" id="Lsubmit" name="Lsubmit" style="color:white;font-size:20px;">   
                                 


                
           			</div>
                  </div>
				    <div class="col-md-4 col-sm-4 col-lg-4">
                    <!--Any future message we write here-->
                  </div>
                </div>
              </div>
			  
			  
			  
			  
			  
            </div> </form>
            <!--End Personal Details Section-->
            
            
            
            
          </div>
        </div>
      </div>
    </div>
    <!-- /Container -->
	

	
    <script type="text/javascript">
		var npage = {{$numrecpage}};
		var page = 1;
		var orderby = '{{$orderby}}';
		var baseurl = '{{url("/")}}';
		var AdminURL = '{{$AdminURL}}';
		var curPage = '{{$curPage}}';
        var imgPath = "{{ url('public/admin/images') }}";
    </script>
	<script src="{{ url('public/admin') }}/js/common/paginate.js"></script>
	<!-- All jQuery Plugins Used -->
    <!-- Modal Window
      ==================================================-->
    <script src="{{ url('public/admin/assets') }}/plugins/jquery.remodal.js"></script>
    <script src="{{ url('public/admin/assets') }}/plugins/call-modal.js"></script>
    <!--End Modal Window-->
   
	
	<script src="{{ url('public/admin/assets') }}/SweetAlert/lib/sweet-alert.js"></script>
    <script src="{{ url('public/admin/assets') }}/SweetAlert/lib/call-sweet.js"></script>
	<script src="{{ url('public/admin') }}/js/common/delete.js"></script>
	@endsection
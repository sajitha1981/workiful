<table class="col-md-12 table-bordered table-striped table-condensed cf table-hover">
            <thead class="cf">
              <tr>
                <!-- All actions td start -->
                <th data-title="All" style="background:#03314b; height:50px">
                  <div class="btn-group">
                    <a data-toggle="dropdown" href="#" style="color:#ffffff">
                    All
                    <i class="fa fa-angle-down "></i>
                    </a>
                    <ul class="dropdown-menu">
                     <li><a href="#" class='sel-only'><i class="fa fa-trash-o"></i> Delete Selected</a></li>
                      <li><a href="#" class='all-sel'><i class="fa fa-trash"></i> Delete All</a></li>
                    </ul>
                  </div>
                </th>
                <!-- /All actions html -->
                <th class="numeric" style="background:#03314b;color:#ffffff">No.</th>
				 <th style="background:#03314b;color:#ffffff">Jobcategory</th>
                
                <th style="background:#03314b;color:#ffffff">Status</th>
                <th style="background:#03314b;color:#ffffff">Actions</th>
              </tr>
            </thead>
            <tbody>
<div id="load" style="position: relative;">
<?php $index = $stcnt; ?>
			@if (count($eduList) > 0)
				@foreach ($eduList as $val)
              <!-- Data Row Start -->
              <tr>
                <!-- All actions td start -->
                <td data-title="All"><input name="del[]" type="checkbox" value="{{ $val->raz_job_category_id }}"  /></td>
                <!-- /All actions td -->
                <td data-title="No">{{ $index }}</td>
				 <td data-title="Job Category"> {{ $val->raz_job_category_name }}</td>
                
                <td data-title="Status">
					@if ($val->raz_job_category_status == 1)
						Active
					@else 
						Inactive
					@endif
				</td>
                <td data-title="Actions">
                  <!-- Actions html -->
                  <div class="btn-group dropup">
                    <button type="button" class="btn btn-default allorange">Actions</button>
                    <button type="button" class="btn btn-default allorange dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li><a href="#"><i class="fa fa-edit"></i> Edit Job Category</a></li>
                      <li><a href="#" class="delete-record" data-value="{{ $val->raz_job_category_id }}"><i class="fa fa-trash"></i> Delete Record</a></li>
                    </ul>
                  </div>
                  <!-- /Actions html -->
                </td>
              </tr> <?php $index++; ?>
              <!-- /Data Row -->
               @endforeach
			@else
				<tr align='center' valign='middle'><td class='' colspan='5'>No job category found.</td></tr>   
			@endif
</div>
 </tbody>
          </table>
		  
		   <!-- END MAIN CONTENT DIV THAT HOLDS EVERYTHING -->
    <!-- Start Pagination -->
    <div style="padding-top:30px"></div>
    <!-- <div class="col-sm-12" style="padding-top:35px"><span>Showing 1 to 05 of 965346 entries</span></div> -->
    <div class="col-sm-6" style="padding-top:21px"><a href="dashboard" class="btn btn-default">Go Back</a>
	<input type="hidden" name='reccnt' id='reccnt'  value="{{ $eduCnt }}">
	<input type="hidden" name='stcnt' id='stcnt'  value="{{ $stcnt }}">
	<input type="hidden" name='endcnt' id='endcnt'  value="{{ $endcnt }}">
	</div>
    <div class="col-sm-6 " >
     <span class=" pull-right">
       {{ $eduList->links() }}
     </span>
    </div>
  
        
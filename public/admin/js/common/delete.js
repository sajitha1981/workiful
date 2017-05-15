$('body').on('click', '.all-sel', function(e) {	 // Delete all link click
		var chks = document.getElementsByName('del[]');
		var delids = '';
		for (var i = 0; i < chks.length; i++)
		{
			chks[i].checked=true;
			delids=delids+chks[i].value+",";
		}
		if (delids != '') {
			swal({   title: "Are you sure?",   text: "You will not be able to recover these again!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",     confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){ 
				var nurl = baseurl+"/"+AdminURL+'/'+curPage+'?npage='+npage+'&orderby='+orderby+'&page=1';
				
				$.ajax({
					type: "POST",
					//url: baseurl+"/"+AdminURL+"/edu-delete",
					url: baseurl+"/"+AdminURL+"/"+curPage,
					data: {
						tp: 'int_dels',
						delids: delids,
						npage: npage,
						orderby: orderby,
						page: page,
						'_token': $('meta[name=_token]').attr('content')
						},
					success: function( data ) {
						swal("Deleted!", "Your record has been deleted.", "success"); 
						$('.dispalyContent').html(data);
						$("#rdCnt").html($("#reccnt").val());
						$("#stcnts").text($("#stcnt").val());
						$("#endcnts").text($("#endcnt").val());
						$("#netcnts").text($("#reccnt").val());
						window.history.pushState("", "", nurl);
					}
				});
				
				
			});
		} else {
			
			swal({   title: "Warning!",   text: "Please select atleast one record to delete",   type: "warning" }, function(){ 
				});
		}
    });
	
	
	$('body').on('click', '.sel-only', function(e) {	 // Delete selected link click
		var chks = document.getElementsByName('del[]');
		var delids = '';
		for (var i = 0; i < chks.length; i++)
		{
			if (chks[i].checked == true) {
				delids = delids+chks[i].value+",";
			}
		}
		if (delids != '') {
			swal({   title: "Are you sure?",   text: "You will not be able to recover these again!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",     confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){ 
				var nurl = baseurl+"/"+AdminURL+'/'+curPage+'?npage='+npage+'&orderby='+orderby+'&page=1';
				
				$.ajax({
					type: "POST",
					//url: baseurl+"/"+AdminURL+"/edu-delete",
					url: baseurl+"/"+AdminURL+"/"+curPage,
					data: {
						tp: 'int_dels_sel',
						delids: delids,
						npage: npage,
						orderby: orderby,
						page: page,
						'_token': $('meta[name=_token]').attr('content')
						},
					success: function( data ) {
						swal("Deleted!", "Your record has been deleted.", "success"); 
						$('.dispalyContent').html(data);
						$("#rdCnt").html($("#reccnt").val());
						$("#stcnts").text($("#stcnt").val());
						$("#endcnts").text($("#endcnt").val());
						$("#netcnts").text($("#reccnt").val());
						window.history.pushState("", "", nurl);
					}
				});
				
				
			});
		} else {
			
			swal({   title: "Warning!",   text: "Please select atleast one record to delete",   type: "warning" }, function(){ 
				});
		}
    });
	
	$('body').on('click', '.delete-record', function(e) {	 // Delete record  in each row link click
		var aid = $(this).data('value');
		
		swal({   title: "Are you sure?",   text: "You will not be able to recover these again!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",     confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){ 
			var nurl = baseurl+"/"+AdminURL+'/'+curPage+'?npage='+npage+'&orderby='+orderby+'&page=1';
			
			$.ajax({
				type: "POST",
				//url: baseurl+"/"+AdminURL+"/edu-delete",
				url: baseurl+"/"+AdminURL+"/"+curPage,
				data: {
					tp: 'int_del',
					delids: aid,
					npage: npage,
					orderby: orderby,
					page: page,
					'_token': $('meta[name=_token]').attr('content')
					},
				success: function( data ) {
					swal("Deleted!", "Your record has been deleted.", "success"); 
					$('.dispalyContent').html(data);
					$("#rdCnt").html($("#reccnt").val());
					$("#stcnts").text($("#stcnt").val());
					$("#endcnts").text($("#endcnt").val());
					$("#netcnts").text($("#reccnt").val());
					window.history.pushState("", "", nurl);
				}
			});
			
			
		});
		
    });
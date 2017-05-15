$(function() {
	 $('body').on('click', '.numrecs', function(e) { // no. of records per page link click
		e.preventDefault();
		page = 1;
	   // $('#load a').css('color', '#dfecf6');
		$('#load').append('<img style="position: absolute; left: 20; top: 20; z-index: 100000;" width="100" height ="100" src="'+imgPath+'/loading.gif" />');
		var url = $(this).attr('href')+'&orderby='+orderby+'&page='+page;
		npage = $(this).data("value");
		
		getCommonDetails(url);
		window.history.pushState("", "", url);
	});
	$('body').on('click', '.sorder', function(e) { // asc/desc order link click
		e.preventDefault();

	   // $('#load a').css('color', '#dfecf6');
		$('#load').append('<img style="position: absolute; left: 20; top: 20; z-index: 100000;" width="100" height ="100" src="'+imgPath+'/loading.gif" />');
		var url = $(this).attr('href')+'&npage='+npage+'&page='+page;
		orderby = $(this).data("value");
		
		getCommonDetails(url);
		window.history.pushState("", "", url);
	});

	$('body').on('click', '.pagination a', function(e) { // ajax pagination link click
		e.preventDefault();

	   // $('#load a').css('color', '#dfecf6');
		$('#load').append('<img style="position: absolute; left: 20; top: 20; z-index: 100000;" width="100" height ="100" src="'+imgPath+'/loading.gif" />');

		var url = $(this).attr('href')+'&npage='+npage+'&orderby='+orderby;
		
		if ($(this).text() == '»' || $(this).text() == '«') {
			
		} else {
			page = $(this).text();
		}
		
		getCommonDetails(url);
		window.history.pushState("", "", url);
	});

	function getCommonDetails(url) { //common function to load ajax page
		$.ajax({
			url : url
		}).done(function (data) {
			$('.dispalyContent').html(data);
			$("#stcnts").text($("#stcnt").val());
			$("#endcnts").text($("#endcnt").val());
			$("#netcnts").text($("#reccnt").val());
			
		}).fail(function () {
			alert('Data could not be loaded.');
		});
	}
});
$("#search").click(function () {  // searching table on search button click
	var value = $("#keywords").val().toLowerCase().trim();

	$("table tr").each(function (index) {
		if (!index) return;
		$(this).find("td").each(function () {
			var id = $(this).text().toLowerCase().trim();
			var not_found = (id.indexOf(value) == -1);
			$(this).closest('tr').toggle(!not_found);
			return not_found;
		});
	});
});

$("#keywords").change(function () { // searching table on textbox change event
	var value = $("#keywords").val().toLowerCase().trim();

	$("table tr").each(function (index) {
		if (!index) return;
		$(this).find("td").each(function () {
			var id = $(this).text().toLowerCase().trim();
			var not_found = (id.indexOf(value) == -1);
			$(this).closest('tr').toggle(!not_found);
			return not_found;
		});
	});
});
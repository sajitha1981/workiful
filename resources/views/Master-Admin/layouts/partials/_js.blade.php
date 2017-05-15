<!-- JavaScript
      ================================================== -->
    <script src="{{ url('public/admin/js') }}/jquery.min.js"></script>
    <script src="{{ url('public/admin/js') }}/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ url('public/admin/js') }}/ie10-viewport-bug-workaround.js"></script>
    <!-- Dropdowns
      ================================================== -->
    <script>
      $('.dropdown').on('show.bs.dropdown', function(e){
          var $dropdown = $(this).find('.dropdown-menu');
          var orig_margin_top = parseInt($dropdown.css('margin-top'));
          $dropdown.css({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}).animate({'margin-top': orig_margin_top + 'px', opacity: 1}, 300, function(){
             $(this).css({'margin-top':''});
          });
       });
       
       $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });
      
      
      
       // Add slidedown & fadeout animation to dropdown
       $('.dropdown').on('hide.bs.dropdown', function(e){
          var $dropdown = $(this).find('.dropdown-menu');
          var orig_margin_top = parseInt($dropdown.css('margin-top'));
          $dropdown.css({'margin-top': orig_margin_top + 'px', opacity: 1, display: 'block'}).animate({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}, 300, function(){
             $(this).css({'margin-top':'', display:''});
          });
       });
    </script>
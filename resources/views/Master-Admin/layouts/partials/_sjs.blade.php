 <script type="text/javascript">
		var npage = {{$numrecpage}};
		var page = 1;
		var orderby = '{{$orderby}}';
		var baseurl = '{{url("/")}}';
		var AdminURL = '{{$AdminURL}}';
		var curPage = '{{$curPage}}';
        var imgPath = "{{ url('admin/images') }}";
</script>
<script src="{{ url('admin') }}/js/common/paginate.js"></script>
<!-- All jQuery Plugins Used -->
<!-- Modal Window
  ==================================================-->
<script src="{{ url('admin/assets') }}/plugins/jquery.remodal.js"></script>
<script src="{{ url('admin/assets') }}/plugins/call-modal.js"></script>
<!--End Modal Window-->


<script src="{{ url('admin/assets') }}/SweetAlert/lib/sweet-alert.js"></script>
<script src="{{ url('admin/assets') }}/SweetAlert/lib/call-sweet.js"></script>
<script src="{{ url('admin') }}/js/common/delete.js"></script>
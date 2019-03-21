@extends('layouts.admin')

@section('css')
<!-- vendor css -->
<link href="/admin_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/admin_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
<link href="/admin_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<link href="/admin_assets/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
<link href="/admin_assets/lib/highlightjs/github.css" rel="stylesheet">
<link href="/admin_assets/lib/select2/css/select2.min.css" rel="stylesheet">
<link href="/admin_assets/lib/jquery-toggles/toggles-full.css" rel="stylesheet">
<link href="/admin_assets/lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
<link href="/admin_assets/lib/spectrum/spectrum.css" rel="stylesheet">
<link href="/admin_assets/lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<link href="/admin_assets/lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
<link href="/admin_assets/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">
<!-- Bracket CSS -->
<link rel="stylesheet" href="/admin_assets/css/bracket.css">
@endsection

@section('js')
<script src="/admin_assets/lib/jquery/jquery.js"></script>
<script src="/admin_assets/lib/popper.js/popper.js"></script>
<script src="/admin_assets/lib/bootstrap/bootstrap.js"></script>
<script src="/admin_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="/admin_assets/lib/moment/moment.js"></script>
<script src="/admin_assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="/admin_assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="/admin_assets/lib/peity/jquery.peity.js"></script>
<script src="/admin_assets/lib/highlightjs/highlight.pack.js"></script>
<script src="/admin_assets/lib/select2/js/select2.min.js"></script>
<script src="/admin_assets/lib/jquery-toggles/toggles.min.js"></script>
<script src="/admin_assets/lib/jt.timepicker/jquery.timepicker.js"></script>
<script src="/admin_assets/lib/spectrum/spectrum.js"></script>
<script src="/admin_assets/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
<script src="/admin_assets/lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="/admin_assets/lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>

<script src="/admin_assets/js/bracket.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<script type="text/javascript">
  tinymce.get('textarea').setContent('1111',{format: 'bbcode'});
</script>

@endsection


@section('main')

<div class="br-mainpanel" style="margin-top: 40px;">

<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.html">Bracket</a>
    <a class="breadcrumb-item" href="#">Forms</a>
    <span class="breadcrumb-item active">Form Elements</span>
  </nav>
</div>
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Form Elements</h4>
  <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
</div>
<div class="br-pagebody">
  <div class="br-section-wrapper">
  	<div class="row">
  		<div class="col-md-9">
  			<input class="form-control" placeholder="Tiêu đề bài viết " type="text">
			</br>
		    <textarea id='content'></textarea>
		    </br>
			<select class="form-control select2" data-placeholder="Choose Browser" multiple>
				<option value="Firefox">Firefox</option>
				<option value="Chrome selected">Chrome</option>
				<option value="Safari">Safari</option>
				<option value="Opera" selected>Opera</option>
				<option value="Internet Explorer">Internet Explorer</option>
			</select>
  		</div>
  		<div class="col-md-3">
  			<select class="form-control select2" data-placeholder="Choose Browser" multiple>
				<option value="Firefox">Firefox</option>
				<option value="Chrome selected">Chrome</option>
				<option value="Safari">Safari</option>
				<option value="Opera" selected>Opera</option>
				<option value="Internet Explorer">Internet Explorer</option>
			</select>
  		</div>
  	</div>
    
 
  </div>
</div>

<footer class="br-footer">
  <div class="footer-left">
    <div class="mg-b-2">Copyright © 2017. Bracket. All Rights Reserved.</div>
    <div>Attentively and carefully made by ThemePixels.</div>
  </div>
  <div class="footer-right d-flex align-items-center">
    <span class="tx-uppercase mg-r-10">Share:</span>
    <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
    <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
  </div>
</footer>

</div>  


@endsection
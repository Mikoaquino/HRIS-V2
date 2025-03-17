@extends('layouts.app')

    @section('styles')

		<!---Internal Fileupload css-->
		<link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

		<!---Internal Fancy uploader css-->
		<link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

		<!--Internal  Quill css -->
		<link href="{{asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">

		<!-- Internal Summernote css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- Internal Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">EDIT POST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit-Post</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-md-12">
							<div class="card ">
								<div class="card-body">
									<div class="form-group">
										<label class="form-label text-dark">Course Title</label>
										<input type="text" class="form-control" value="Advanced Web Develpment">
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Category</label>
										<select class="form-control select2 form-select">
											<option>Select</option>
											<option value="1" selected>IT</option>
											<option value="2">Language</option>
											<option value="3">Science</option>
											<option value="4">Health</option>
											<option value="5">Humanities</option>
											<option value="6">Business</option>
											<option value="7">Maths</option>
											<option value="8">Marketing</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Instructor</label>
										<select class="form-control select2 form-select">
											<option>Select</option>
											<option value="1" selected>Pedro Cox</option>
											<option value="2">Vera Guzman</option>
											<option value="3">Glenda Long</option>
											<option value="4">Joel Anderson</option>
											<option value="5">Blanche Henderson</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Type of mode</label>
										<div class="d-md-flex ad-post-details">
											<label class="custom-control custom-radio mb-2 me-4">
												<input type="radio" class="custom-control-input" name="radios2" value="option1" checked="">
												<span class="custom-control-label"><a href="javascript:void(0)" class="">Online </a></span>
											</label>
											<label class="custom-control custom-radio  mb-2">
												<input type="radio" class="custom-control-input" name="radios2" value="option2" >
												<span class="custom-control-label"><a href="javascript:void(0)" class="">Offline</a></span>
											</label>
										</div>
									</div>
									<div class="ql-wrapper">
										<div id="quillEditor">
											<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
											<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Course Type</label>
										<div class="d-md-flex ad-post-details">
											<label class="custom-control custom-radio mb-2 me-4">
												<input type="radio" class="custom-control-input" name="radios12" value="option1" checked="">
												<span class="custom-control-label"><a href="javascript:void(0)" class="">Free </a></span>
											</label>
											<label class="custom-control custom-radio  mb-2">
												<input type="radio" class="custom-control-input" name="radios12" value="option2" >
												<span class="custom-control-label"><a href="javascript:void(0)" class="">Paid</a></span>
											</label>
										</div>
									</div>
									<div class="p-4 border mb-4 form-group">
										<div>
											<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
										</div>
									</div>
									<div class="form-group">
										<label class="form-label">Upload Video URL</label>
										<input type="text" class="form-control" placeholder="https://videos.com" value="https://www.youtube.com/embed/tMWkeBIohBs">
									</div>
									<div class="control-group form-group  mb-0">
										<label class="form-label text-dark">Course Post Package</label>
										<div class=" border p-3 br-7">
											<div class="d-md-flex ad-post-details">
												<label class="custom-control custom-radio mb-0 me-5">
													<input type="radio" class="custom-control-input" name="radios1" value="option7">
													<span class="custom-control-label">30 Days Free</span>
												</label>
												<label class="custom-control custom-radio  mb-0 me-4">
													<input type="radio" class="custom-control-input" name="radios1" value="option8" checked="">
													<span class="custom-control-label">60 days / <span class="font-weight-bold">$20</span></span>
												</label>
												<label class="custom-control custom-radio  mb-0 me-4">
													<input type="radio" class="custom-control-input" name="radios1" value="option9">
													<span class="custom-control-label">6months /<span class="font-weight-bold">$50</span></span>
												</label>
												<label class="custom-control custom-radio  mb-0">
													<input type="radio" class="custom-control-input" name="radios1" value="option10">
													<span class="custom-control-label">1 year / <span class="font-weight-bold">$80</span></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer ">
									<a href="javascript:void(0)" class="btn btn-secondary">Save to Draft</a>
									<a href="javascript:void(0)" class="btn btn-primary float-end">Publish Now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!--Internal quill js -->
		<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>

		<!--Internal Fileuploads js-->
		<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- Internal Summernote js-->
		<script src="{{asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- Internal Form-editor js -->
		<script src="{{asset('assets/js/form-editor-2.js')}}"></script>

    @endsection

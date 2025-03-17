@extends('layouts.app')

    @section('styles')

		<!--- Internal Select2 css-->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

		<!-- INTERNAL WYSIWYG EDITOR CSS -->
		<link href="{{asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />

		<!-- INTERNAL Quill css -->
		<link href="{{asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">

		<!-- Summernote editor css -->
		<link href="{{asset('assets/plugins/summernote-editor/summernote1.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FORM EDITOR</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Editor</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header border-bottom-0">
									<h3 class="card-title">Summernote Editor</h3>
								</div>
								<div class="card-body">
									<div id="summernote"><p>Hello Summernote</p></div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row-->

					 <!-- Row -->
					 <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <h3 class="card-title">Wysiwyag Form Editor</h3>
                                </div>
                                <div class="card-body">
                                    <textarea class="content5" name="example"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Row-->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <div class="card-title">
                                        Quill Editor
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="ql-wrapper ql-wrapper-demo">
                                        <div id="quillEditor">
                                            <p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a>                                                and expressive API, it is completely customizable to fit any need.</p><br>
                                            <p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                    <!-- Row -->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <div class="card-title">
                                        Form Editor in Modal
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center p-4 border">
                                        <a class="btn btn-primary" data-bs-target="#modalQuill" data-bs-toggle="modal" href="">View Live Demo</a>
                                    </div>
                                    <!-- pd-y-30 -->
                                    <div class="modal">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header pd-20">
                                                    <h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body pd-0">
                                                    <div class="ql-wrapper ql-wrapper-modal ht-250">
                                                        <div class="flex-1" id="quillEditorModal">
                                                            <p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a>                                                                and expressive API, it is completely customizable to fit any need.</p><br>
                                                            <p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer pd-20">
                                                    <button class="btn btn-primary">Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                    <!-- Row -->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header border-bottom-0">
                                    <div class="card-title">
                                        From Inline-Edit Editor
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="wd-xl-100p ht-350">
                                        <div class="ql-scrolling-demo p-4 border" id="scrolling-container">
                                            <div id="quillInline">
                                                <h2>Try to select me and edit</h2>
                                                <p><br></p>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

    @endsection

    @section('modal')

			<!--Modal-->
			<div class="modal" id="modalQuill">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header pd-20">
							<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body pd-0">
							<div class="ql-wrapper ql-wrapper-modal ht-250">
								<div class="flex-1" id="quillEditorModal2">
									<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
									<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
								</div>
							</div>
						</div>
						<div class="modal-footer pd-20">
							<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
			<!--/Modal-->

    @endsection

    @section('scripts')

		<!--Internal  Select2 js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal quill js -->
		<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>

		<!-- Internal Summernote js-->
		<script src="{{asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- INTERNAL WYSIWYG Editor JS -->
		<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

		<!-- INTERNAL Summernote Editor js -->
		<script src="{{asset('assets/plugins/summernote-editor/summernote1.js')}}"></script>
		<script src="{{asset('assets/js/summernote.js')}}"></script>

		<!-- Internal Form-editor js -->
		<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>
		<script src="{{asset('assets/js/form-editor.js')}}"></script>

    @endsection

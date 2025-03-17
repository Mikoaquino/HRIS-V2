@extends('layouts.switcher')

    @section('styles')

	    <!-- SWITCHER CSS -->
		<link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SWITCHER</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Switcher</a></li>
								<li class="breadcrumb-item active" aria-current="page">switcherpage</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
                    <div class="container p-0 p-sm-5">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-sm-12"></div>
                            <div class="col-lg-6 col-md-12 col-sm-12 ">
                                <!-- Switcher -->
                                <div class="switcher-wrapper">
                                    <div class="bg-white">
                                        <div class="form_holder sidebar-right1">
                                            <div class="row">
                                                <div class="p-5">
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">LTR AND RTL VERSIONS</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">LTR</span>
                                                                    <p class="onoffswitch2 my-0">
																		<input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch54" class="onoffswitch2-label"></label>
																	</p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">RTL</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Navigation Style</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Vertical Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Horizantal Click Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Horizantal Hover Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Theme Style</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Theme</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Primary</span>
                                                                    <div class="">
                                                                        <input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"  data-id7="transparentcolor"  name="lightPrimary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Primary Theme Style</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Theme</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Primary</span>
                                                                    <div class="">
                                                                        <input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#38cab3" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"  data-id8="transparentcolor" name="darkPrimary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swichermainleft mb-3">
														<h6 class="ms-3">Transparent Style</h6>
														<div class="skin-body">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-2">
																	<span class="me-auto">Transparent Theme</span>
																	<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox" >
																		<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
																	</p>
																</div>
																<div class="switch-toggle d-flex">
																	<span class="me-auto">Transparent Primary</span>
																	<div class="">
																		<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
																	</div>
																</div>
																<div class="switch-toggle d-flex mt-2">
																	<span class="me-auto">Transparent Background</span>
																	<div class="">
																		<input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#38cab3" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme"  data-id9="transparentcolor" name="transparentBackground">
																	</div>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="swichermainleft">
                                                        <h4>Transparent Bg-Image Style</h4>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">BG-Image Primary</span>
                                                                    <div class="">
                                                                        <input class="wd-30 ht-30 input-transparent-color-picker color-bgImg-transparent" value="#38cab3" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                                                    </div>
                                                                </div>
                                                                <div class="switch-toggle">
                                                                    <a class="bg-img1 bg-img" href="javascript:void(0);"><img src="{{asset('assets/img/media/bg-img1.jpg')}}" class="br-5 me-2 mb-2" id="bgimage1" alt="switch-img"></a>
                                                                    <a class="bg-img2 bg-img" href="javascript:void(0);"><img src="{{asset('assets/img/media/bg-img2.jpg')}}"  class="br-5 me-2 mb-2" id="bgimage2" alt="switch-img"></a>
                                                                    <a class="bg-img3 bg-img" href="javascript:void(0);"><img src="{{asset('assets/img/media/bg-img3.jpg')}}"  class="br-5 me-2 mb-2" id="bgimage3" alt="switch-img"></a>
                                                                    <a class="bg-img4 bg-img" href="javascript:void(0);"><img src="{{asset('assets/img/media/bg-img4.jpg')}}"  class="br-5 me-2 mb-2" id="bgimage4" alt="switch-img"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3 leftmenu-styles">
                                                        <h6 class="ms-3">Leftmenu Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Menu</span>
                                                                    <p class="onoffswitch2 my-0">
																		<input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Color Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Gradient Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3 header-styles">
                                                        <h6 class="ms-3">Header Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Color Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Gradient Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Layout Width Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Full Width</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Boxed</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Layout Positions</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Fixed</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Scrollable</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft vertical-switcher mb-3">
                                                        <h6 class="ms-3">Sidemenu layout Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Default Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                                        <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Closed Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                                                        <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Icon with Text</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Icon Overlay</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Hover Submenu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Hover Submenu style 1</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft">
                                                        <div class="skin-body">
                                                            <div class="switch_section my-4">
                                                                <button class="btn btn-danger btn-block resetCustomStyles" type="button">Reset All
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Switcher -->
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12"></div>
                        </div>
                    </div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- CUSTOM JS -->
		<script src="{{asset('assets/js/custom1.js')}}"></script>

		<!-- SWITCHER JS -->
		<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

    @endsection

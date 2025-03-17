@extends('layouts.app')

    @section('styles')

		<!---Internal Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!---Internal  Multislider css-->
		<link href="{{asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MODALS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Modals</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example of Modal View</h6>
										<p class="text-muted card-sub-title">Below is the static example of the basic modal.</p>
									</div>
									<div class="pd-20">
										<div class="modal d-block pos-static basic-modal">
											<div class="modal-dialog" role="document">
												<div class="modal-content modal-content-demo">
													<div class="modal-header">
														<h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body">
														<h6>Modal Body</h6>
														<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
													</div>
													<div class="modal-footer">
														<button class="btn ripple btn-primary" type="button">Save changes</button>
														<button class="btn ripple btn-secondary" type="button">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-sm-4 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Basic Modal</h6>
									</div>
									<a class="btn ripple btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Small Modal</h6>
									</div>
									<a class="btn ripple btn-secondary" data-bs-target="#modaldemo2" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Large Modal</h6>
									</div>
									<a class="btn ripple btn-info" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Grid Modal</h6>
									</div>
									<a class="btn ripple btn-warning" data-bs-target="#modaldemo6" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Modal Success Alert Messages</h6>
									</div>
									<a class="btn ripple btn-success" data-bs-target="#modaldemo4" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Modal Danger Alert Messages</h6>
									</div>
									<a class="btn ripple btn-danger" data-bs-target="#modaldemo5" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Select2 Inside Modals</h6>
									</div>
									<a class="btn ripple btn-teal" data-bs-target="#select2modal" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Scrolling Modal</h6>
									</div>
									<a class="btn ripple btn-primary" data-bs-target="#scrollingmodal" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-12 col-lg-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title">Scrolling with Content</h6>
									</div>
									<a class="btn ripple btn-secondary" data-bs-target="#scrollmodal" data-bs-toggle="modal" href="">View Demo</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Varying modal content</h6>
										<p class="text-muted card-sub-title">Below are different kind of effects to choose from.</p>
									</div>
									<div class="row row-sm">
										<button type="button" class="btn btn-primary me-3  mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
										<button type="button" class="btn btn-primary  me-3 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
										<button type="button" class="btn btn-primary   mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
											<div class="modal-content">
											  <div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">New message</h5>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
											  </div>
											  <div class="modal-body">
												<form>
												  <div class="mb-3">
													<label for="recipient-name" class="col-form-label">Recipient:</label>
													<input type="text" class="form-control" id="recipient-name">
												  </div>
												  <div class="mb-3">
													<label for="message-text" class="col-form-label">Message:</label>
													<textarea class="form-control" id="message-text"></textarea>
												  </div>
												</form>
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Send message</button>
											  </div>
											</div>
										  </div>
										</div>
									</div>

								</div>
							</div>
						</div>
			    	</div>
				  <!-- row closed -->
				<div class="row">
					<div class="col-sm-4 col-md-6 col-lg-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Toggle between modals</h6>
								</div>
								<div class="row row-sm">
									<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
									  <div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										  </div>
										  <div class="modal-body">
											Show a second modal and hide this one with the button below.
										  </div>
										  <div class="modal-footer">
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
										  </div>
										</div>
									  </div>
									</div>
									<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
									  <div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										  </div>
										  <div class="modal-body">
											Hide this modal and show the first with the button below.
										  </div>
										  <div class="modal-footer">
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
										  </div>
										</div>
									  </div>
									</div>
									<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">view Demo</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">full-screen</h6>
								</div>
								<a class="btn ripple btn-primary" data-bs-target="#full-screen" data-bs-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">popover model</h6>
								</div>
								<a class="btn ripple btn-primary" data-bs-target="#popover" data-bs-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Grid Modal</h6>
								</div>
								<a class="btn ripple btn-primary" data-bs-target="#grid" data-bs-toggle="modal" href="">View Demo</a>

							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Vertically centered</h6>
								</div>
								<a class="btn ripple btn-primary" data-bs-target="#Vertically" data-bs-toggle="modal" href="">View Demo</a>

							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Extra-large</h6>
								</div>
								<a class="btn ripple btn-primary" data-bs-target="#Extra" data-bs-toggle="modal" href="">View Demo</a>

							</div>
						</div>
					</div>
			    </div>
				<!-- row closed -->

    @endsection

    @section('modal')

                    <!-- Basic modal -->
                    <div class="modal fade" id="modaldemo1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Basic Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Basic modal -->

                    <!-- Small modal -->
                    <div class="modal fade" id="modaldemo2">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Small Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Small Modal -->

                    <!-- Large Modal -->
                    <div class="modal fade" id="modaldemo3">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Large Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Large Modal -->

                    <!-- Scroll modal -->
                    <div class="modal fade" id="scrollingmodal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Scroll modal -->

                    <!-- Scroll with content modal -->
                    <div class="modal fade" id="scrollmodal">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Scroll with content modal -->

                    <!-- Modal alert message -->
                    <div class="modal fade" id="modaldemo4">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content tx-size-sm">
                                <div class="modal-header">
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body tx-center pd-y-20 pd-x-20"><i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                                    <h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
                                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn ripple btn-success pd-x-25" data-bs-dismiss="modal" type="button">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modaldemo5">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content tx-size-sm">
                                <div class="modal-header">
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body tx-center pd-y-20 pd-x-20">
                                    <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                                    <h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
                                    <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn ripple btn-danger pd-x-25" data-bs-dismiss="modal" type="button">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal alert message -->

                    <!-- Basic modal -->
                    <div class="modal fade" id="select2modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Select2 Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <!-- Select2 -->
                                    <select class="form-control select2-show-search select2-dropdown">
                                        <option label="Choose one">
                                        </option>
                                        <option value="Firefox">
                                        Firefox
                                        </option>
                                        <option value="Chrome">
                                        Chrome
                                        </option>
                                        <option value="Safari">
                                        Safari
                                        </option>
                                        <option value="Opera">
                                        Opera
                                        </option>
                                        <option value="Internet Explorer">
                                        Internet Explorer
                                        </option>
                                    </select>
                                    <!-- Select2 -->
                                    <p class="mt-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Basic modal -->

                    <!-- Grid modal -->
                    <div class="modal fade" id="modaldemo6">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Grid Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Grid modal -->

                    <!-- Modal effects -->
                    <div class="modal fade" id="modaldemo8">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal effects-->
                    <!-- popover modal -->
                    <div class="modal fade" id="popover">
                        <div class="modal-dialog modal-fullscreen-lg-down" role="document">
                            <div class="modal-content  modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Popover Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>This <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default2"  data-bs-placement="right" title="Popover right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">button</button> triggers a popover on click.</p>

                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p> <button class="btn btn-secondary me-1" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">This link</button>and <button class="btn btn-secondary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">that link</button> have tooltips on hover.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End popover modal -->
                    <!-- full scree modal -->
                    <div class="modal fade" id="full-screen">
                        <div class="modal-dialog modal-fullscreen" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Full-screen Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Modal Body</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End full-screen modal -->
                    <!-- grid scree modal -->
                    <div class="modal fade" id="grid">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header ">
                                    <h6 class="modal-title">Grid Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div><div class="modal-body bd-example-row">
                                    <div class="container-fluid ">
                                    <div class="row mt-2">
                                        <div class="col-md-4">.col-md-4</div>
                                        <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                    </div>
                                    <div class="row  mt-2">
                                        <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                        <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                    </div>
                                    <div class="row  mt-2">
                                        <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                    </div>
                                    <div class="row  mt-2">
                                        <div class="col-sm-9">
                                        Level 1: .col-sm-9
                                        <div class="row">
                                            <div class="col-8 col-sm-6">
                                            Level 2: .col-8 .col-sm-6
                                            </div>
                                            <div class="col-4 col-sm-6">
                                            Level 2: .col-4 .col-sm-6
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End grid-screen modal -->
                    <!-- Vertically centered modal -->
                    <div class="modal fade" id="Vertically">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Vertically centered Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Vertically centered modal -->
                    <!-- Extra-large  modal -->
                    <div class="modal fade" id="Extra">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Extra-large Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Extra-large modal -->

    @endsection

    @section('scripts')



    @endsection

@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TYPOGRAPHY</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Typography</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!--row open -->
					<div class="row row-sm">
						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header pb-0">
									<h3 class="card-title mb-2">Default Heading Text</h3>
									<p class="mg-b-20 tx-13 text-muted">Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
								</div>
								<div class="card-body pt-0">
									<div class="text-wrap">
										<div class="example">
											<h1>h1. Heading</h1>
											<h2>h2. Heading</h2>
											<h3>h3. Heading</h3>
											<h4>h4. Heading</h4>
											<h5>h5. Heading</h5>
											<h6>h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header pb-0">
									<h3 class="card-title mb-2">HEADING WITH COLOR TEXT</h3>
									<p class="mg-b-20 tx-13 text-muted">Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
								</div>
								<div class="card-body pt-0">
									<div class="text-wrap">
										<div class="example">
											<h1 class="text-primary">h1. Heading</h1>
											<h2  class="text-secondary">h2. Heading</h2>
											<h3  class="text-success">h3. Heading</h3>
											<h4  class="text-danger">h4. Heading</h4>
											<h5  class="text-info">h5. Heading</h5>
											<h6  class="text-warning">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>
					<!-- row closed -->

					<div class="card custom-card" id="display">
						<div class="card-body">
							<div>
						     <h3 class="card-title  mg-b-10">Display headings</h3>
								<p class="text-muted card-sub-title">you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</p>
							</div>
							<div class="text-wrap">
								<div class="example">
									<h1 class="display-1">Display 1</h1>
									<h1 class="display-2">Display 2</h1>
									<h1 class="display-3">Display 3</h1>
									<h1 class="display-4">Display 4</h1>
									<h1 class="display-5">Display 5</h1>
									<h1 class="display-6">Display 6</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="card custom-card" id="linetext">
						<div class="card-body">
							<div>
						     <h3 class="card-title  mg-b-10">Inline text elements</h3>
								<p class="text-muted card-sub-title">Styling for common inline HTML5 elements.</p>
							</div>
							<div class="text-wrap">
								<div class="example">
									<p>You can use the mark tag to <mark>highlight</mark> text.</p>
									<p><del>This line of text is meant to be treated as deleted text.</del></p>
									<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
									<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
									<p><u>This line of text will render as underlined</u></p>
									<p><small>This line of text is meant to be treated as fine print.</small></p>
									<p><strong>This line rendered as bold text.</strong></p>
									<p class="mb-0"><em>This line rendered as italicized text.</em></p>
								</div>
							</div>
						</div>
					</div>

					<!--row open -->
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card mg-b-20" id="typography">
								<div class="card-body">
						     <h3 class="card-title  mg-b-10">Font Size</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<tbody>
												<tr>
													<td class="bg-gray-100"><b>Classes</b></td>
													<td><code>.tx-[size]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100"><b>Values</b></td>
													<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
											<tbody>
												<tr>
													<td class="bg-gray-100"><b>Classes</b></td>
													<td><code>.tx-[viewport]-[size]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100"><b>Viewports</b></td>
													<td>xs | sm | md | lg | xl</td>
												</tr>
												<tr>
													<td class="bg-gray-100"><b>Sizes</b></td>
													<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140 (step of 2)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<!--div-->
							<div class="card mg-b-20">
								<div class="card-body">
						     <h3 class="card-title  mg-b-10">Font Weight</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
											<tbody>
												<tr>
													<td class="bg-gray-100"><b>Classes</b></td>
													<td><code>.tx-[weight]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100"><b>Weight</b></td>
													<td>bold | semibold | medium | normal | light | thin | xthin</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card mg-b-20">
								<div class="card-body">
						     <h3 class="card-title  mg-b-10">Font Color</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.tx-[color]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
													<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.tx-gray-[num]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
													<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.tx-white-[transparency]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
													<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card mg-b-20">
								<div class="card-body">
						     <h3 class="card-title  mg-b-10">Font Spacing</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.tx-spacing-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.tx-spacing--[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card">
								<div class="card-body">
						     <h3 class="card-title  mg-b-10">Line Height</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.lh-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
											<tbody>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
													<td><code>.lh-[viewport]-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>View Port</b></td>
													<td>xs | sm | md | lg | xl</td>
												</tr>
												<tr>
													<td class="bg-gray-100 wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')



    @endsection
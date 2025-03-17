				<!-- main-sidebar -->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="{{url('index')}}">
								<img src="{{asset('assets/img/brand/logo.png')}}" class="main-logo  desktop-logo" alt="logo">
								<img src="{{asset('assets/img/brand/logo-white.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/img/brand/favicon.png')}}" class="main-logo  mobile-logo" alt="logo">
								<img src="{{asset('assets/img/brand/favicon-white.png')}}" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">
								<li class="side-item side-item-category">Main</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg><span class="side-menu__label">Dashboards</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Dashboards</a></li>
										<li><a class="slide-item" href="{{url('index')}}">Dashboard-1</a></li>
										<li><a class="slide-item" href="{{url('index1')}}">Dashboard-2</a></li>
										<li><a class="slide-item" href="{{url('index2')}}">Dashboard-3</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">WEB APPS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Apps</a></li>
										<li><a class="slide-item" href="{{url('cards')}}">Cards</a></li>
										<li><a class="slide-item" href="{{url('draggablecards')}}">Darggablecards</a></li>
										<li><a class="slide-item" href="{{url('rangeslider')}}">Range-slider</a></li>
										<li><a class="slide-item" href="{{url('calendar')}}">Calendar</a></li>
										<li><a class="slide-item" href="{{url('contacts')}}">Contacts</a></li>
										<li><a class="slide-item" href="{{url('image-compare')}}">Image-compare</a></li>
										<li><a class="slide-item" href="{{url('notification')}}">Notification</a></li>
										<li><a class="slide-item" href="{{url('widget-notification')}}">Widget-notification</a></li>
										<li><a class="slide-item" href="{{url('treeview')}}">Treeview</a></li>
										<li><a class="slide-item" href="{{url('file-manager')}}">File-manager</a></li>
										<li><a class="slide-item" href="{{url('file-manager1')}}">File-manager1</a></li>
										<li><a class="slide-item" href="{{url('file-details')}}">File-details</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg><span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Elements</a></li>
										<li><a class="slide-item" href="{{url('alerts')}}">Alerts</a></li>
										<li><a class="slide-item" href="{{url('avatar')}}">Avatar</a></li>
										<li><a class="slide-item" href="{{url('breadcrumbs')}}">Breadcrumbs</a></li>
										<li><a class="slide-item" href="{{url('buttons')}}">Buttons</a></li>
										<li><a class="slide-item" href="{{url('badge')}}">Badge</a></li>
										<li><a class="slide-item" href="{{url('dropdown')}}">Dropdown</a></li>
										<li><a class="slide-item" href="{{url('thumbnails')}}">Thumbnails</a></li>
										<li><a class="slide-item" href="{{url('list-group')}}">List Group</a></li>
										<li><a class="slide-item" href="{{url('navigation')}}">Navigation</a></li>
										<li><a class="slide-item" href="{{url('images')}}">Images</a></li>
										<li><a class="slide-item" href="{{url('pagination')}}">Pagination</a></li>
										<li><a class="slide-item" href="{{url('popover')}}">Popover</a></li>
										<li><a class="slide-item" href="{{url('progress')}}">Progress</a></li>
										<li><a class="slide-item" href="{{url('spinners')}}">Spinners</a></li>
										<li><a class="slide-item" href="{{url('media-object')}}">Media Object</a></li>
										<li><a class="slide-item" href="{{url('typography')}}">Typography</a></li>
										<li><a class="slide-item" href="{{url('tooltip')}}">Tooltip</a></li>
										<li><a class="slide-item" href="{{url('toast')}}">Toast</a></li>
										<li><a class="slide-item" href="{{url('tags')}}">Tags</a></li>
										<li><a class="slide-item" href="{{url('tabs')}}">Tabs</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z"/><path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"/></svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Advanced UI</a></li>
										<li><a class="slide-item" href="{{url('accordion')}}">Accordion</a></li>
										<li><a class="slide-item" href="{{url('carousel')}}">Carousel</a></li>
										<li><a class="slide-item" href="{{url('collapse')}}">Collapse</a></li>
										<li><a class="slide-item" href="{{url('modals')}}">Modals</a></li>
										<li><a class="slide-item" href="{{url('timeline')}}">Timeline</a></li>
										<li><a class="slide-item" href="{{url('sweet-alert')}}">Sweet Alert</a></li>
										<li><a class="slide-item" href="{{url('rating')}}">Ratings</a></li>
										<li><a class="slide-item" href="{{url('counters')}}">Counters</a></li>
										<li><a class="slide-item" href="{{url('search')}}">Search</a></li>
										<li><a class="slide-item" href="{{url('userlist')}}">Userlist</a></li>
										<li><a class="slide-item" href="{{url('blog')}}">Blog</a></li>
										<li><a class="slide-item" href="{{url('blog-details')}}">Blog-details</a></li>
										<li><a class="slide-item" href="{{url('edit-post')}}">Edit-post</a></li>
										<li><a class="slide-item" href="{{url('file-attached-tags')}}">File Attachments</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">Pages</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z"/><path d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"/><path d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"/></svg><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Pages</a></li>
										<li class="sub-slide">
											<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Authentication</span><i class="sub-angle fe fe-chevron-right"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('signin')}}">Sign In</a></li>
												<li><a class="sub-side-menu__item" href="{{url('signup')}}">Sign Up</a></li>
												<li><a class="sub-side-menu__item" href="{{url('forgot')}}">Forgot Password</a></li>
												<li><a class="sub-side-menu__item" href="{{url('reset')}}">Reset Password</a></li>
												<li><a class="sub-side-menu__item" href="{{url('lockscreen')}}">Lockscreen</a></li>
												<li><a class="sub-side-menu__item" href="{{url('underconstruction')}}">UnderConstruction</a></li>
												<li><a class="sub-side-menu__item" href="{{url('error404')}}">404 Error</a></li>
												<li><a class="sub-side-menu__item" href="{{url('error500')}}">500 Error</a></li>
												<li><a class="sub-side-menu__item" href="{{url('error501')}}">501 Error</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Switcher</span><i class="sub-angle fe fe-chevron-right"></i></a>
											<ul class="sub-slide-menu">

												<li><a class="sub-side-menu__item" href="{{url('switcherpage')}}">Switcherpage</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Ecommerce</span><i class="sub-angle fe fe-chevron-right"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('shop')}}">Shop</a></li>
												<li><a class="sub-side-menu__item" href="{{url('product-details')}}">Product-Details</a></li>
												<li><a class="sub-side-menu__item" href="{{url('product-cart')}}">Cart</a></li>
												<li><a class="sub-side-menu__item" href="{{url('check-out')}}">Check-out</a></li>
												<li><a class="sub-side-menu__item" href="{{url('wish-list')}}">Wish-list</a></li>
											</ul>
										</li>
										<li><a class="slide-item" href="{{url('profile')}}">Profile</a></li>
										<li><a class="slide-item" href="{{url('profile-notifications')}}">Notifications-list</a></li>
										<li><a class="slide-item" href="{{url('aboutus')}}">About us</a></li>
										<li><a class="slide-item" href="{{url('settings')}}">Settings</a></li>
										<li class="sub-slide">
											<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Mail</span><i class="sub-angle fe fe-chevron-right"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('mail')}}">Mail</a></li>
												<li><a class="sub-side-menu__item" href="{{url('mail-compose')}}">Mail Compose</a></li>
												<li><a class="sub-side-menu__item" href="{{url('mail-read')}}">Read-mail</a></li>
												<li><a class="sub-side-menu__item" href="{{url('mail-settings')}}">mail-settings</a></li>
												<li><a class="sub-side-menu__item" href="{{url('chat')}}">Chat</a></li>
											</ul>
										</li>
										<li><a class="slide-item" href="{{url('invoice')}}">Invoice</a></li>
										<li><a class="slide-item" href="{{url('pricing')}}">Pricing</a></li>
										<li><a class="slide-item" href="{{url('gallery')}}">Gallery</a></li>
										<li><a class="slide-item" href="{{url('todotask')}}">Todotask</a></li>
										<li><a class="slide-item" href="{{url('faq')}}">Faqs</a></li>
										<li><a class="slide-item" href="{{url('emptypage')}}">Empty Page</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z"/><path d="M11 9h2v5h-2zm0 6h2v2h-2z"/></svg><span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Utilities</a></li>
										<li><a class="slide-item" href="{{url('background')}}">Background</a></li>
										<li><a class="slide-item" href="{{url('border')}}">Border</a></li>
										<li><a class="slide-item" href="{{url('display')}}">Display</a></li>
										<li><a class="slide-item" href="{{url('flex')}}">Flex</a></li>
										<li><a class="slide-item" href="{{url('height')}}">Height</a></li>
										<li><a class="slide-item" href="{{url('margin')}}">Margin</a></li>
										<li><a class="slide-item" href="{{url('padding')}}">Padding</a></li>
										<li><a class="slide-item" href="{{url('position')}}">Position</a></li>
										<li><a class="slide-item" href="{{url('width')}}">Width</a></li>
										<li><a class="slide-item" href="{{url('extras')}}">Extras</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">General</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-1.209A4.92 4.92 0 0 0 19 5.5C19 3.57 17.43 2 15.5 2c-1.622 0-2.705 1.482-3.404 3.085C11.407 3.57 10.269 2 8.5 2 6.57 2 5 3.57 5 5.5c0 .596.079 1.089.209 1.5H4c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-4.5-3c.827 0 1.5.673 1.5 1.5C17 7 16.374 7 16 7h-2.478c.511-1.576 1.253-3 1.978-3zM7 5.5C7 4.673 7.673 4 8.5 4c.888 0 1.714 1.525 2.198 3H8c-.374 0-1 0-1-1.5zM4 9h7v2H4V9zm2 11v-7h5v7H6zm12 0h-5v-7h5v7zm-5-9V9.085L13.017 9H20l.001 2H13z"/></svg><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Icons</a></li>
										<li><a class="slide-item" href="{{url('icons')}}">Font Awesome </a></li>
										<li><a class="slide-item" href="{{url('icons2')}}">Material Design Icons</a></li>
										<li><a class="slide-item" href="{{url('icons3')}}">Simple Line Icons</a></li>
										<li><a class="slide-item" href="{{url('icons4')}}">Feather Icons</a></li>
										<li><a class="slide-item" href="{{url('icons5')}}">Ionic Icons</a></li>
										<li><a class="slide-item" href="{{url('icons6')}}">Flag Icons</a></li>
										<li><a class="slide-item" href="{{url('icons7')}}">Pe7 Icons</a></li>
										<li><a class="slide-item" href="{{url('icons8')}}">Themify Icons</a></li>
										<li><a class="slide-item" href="{{url('icons9')}}">Typicons Icons</a></li>
										<li><a class="slide-item" href="{{url('icons10')}}">Weather Icons</a></li>
										<li><a class="slide-item" href="{{url('icons11')}}">Material Icons</a></li>
										<li><a class="slide-item" href="{{url('icons12')}}">Bootstrap Icons</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z"/></svg><span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Charts</a></li>
										<li><a class="slide-item" href="{{url('chart-morris')}}">Morris Charts</a></li>
										<li><a class="slide-item" href="{{url('chart-flot')}}">Flot Charts</a></li>
										<li><a class="slide-item" href="{{url('chart-chartjs')}}">ChartJS</a></li>
										<li><a class="slide-item" href="{{url('chart-echart')}}">Echart</a></li>
										<li><a class="slide-item" href="{{url('chart-sparkline')}}">Sparkline</a></li>
										<li><a class="slide-item" href="{{url('chart-peity')}}">Chart-peity</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">MULTI LEVEL</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg><span class="side-menu__label">Menu-levels</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Menu-Levels</a></li>
										<li><a class="slide-item" href="javascript:void(0);">Level-1</a></li>
										<li class="sub-slide">
											<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fe fe-chevron-down me-4"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="javascript:void(0);">Level-2.1</a></li>
												<li><a class="sub-side-menu__item" href="javascript:void(0);">Level-2.2</a></li>
												<li class="sub-slide2">
													<a class="sub-side-menu__item" data-bs-toggle="sub-slide2" href="javascript:void(0);"><span class="sub-side-menu__label">Level-2.3</span><i class="sub-angle2 fe fe-chevron-down"></i></a>
													<ul class="sub-slide-menu1">
														<li><a class="sub-slide-item2" href="javascript:void(0);">Level-2.3.1</a></li>
														<li><a class="sub-slide-item2" href="javascript:void(0);">Level-2.3.2</a></li>
														<li><a class="sub-slide-item2" href="javascript:void(0);">Level-2.3.3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="side-item side-item-category">COMPONENTS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z"/></svg><span class="side-menu__label">Forms</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Forms</a></li>
										<li><a class="slide-item" href="{{url('form-elements')}}">Form Elements</a></li>
										<li><a class="slide-item" href="{{url('form-advanced')}}">Advanced Forms</a></li>
										<li><a class="slide-item" href="{{url('form-layouts')}}">Form Layouts</a></li>
										<li><a class="slide-item" href="{{url('form-validation')}}">Form Validation</a></li>
										<li><a class="slide-item" href="{{url('form-wizards')}}">Form Wizards</a></li>
										<li><a class="slide-item" href="{{url('form-editor')}}">Form Editor</a></li>
										<li><a class="slide-item" href="{{url('form-sizes')}}">Form-element-sizes</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 2 .001 4H5V5h14zM5 11h8v8H5v-8zm10 8v-8h4.001l.001 8H15z"/></svg><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Tables</a></li>
										<li><a class="slide-item" href="{{url('table-basic')}}">Basic Tables</a></li>
										<li><a class="slide-item" href="{{url('table-data')}}">Data Tables</a></li>
								</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('widgets')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg><span class="side-menu__label">Widgets</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M2.002 9.63c-.023.411.207.794.581.966l7.504 3.442 3.442 7.503c.164.356.52.583.909.583l.057-.002a1 1 0 0 0 .894-.686l5.595-17.032c.117-.358.023-.753-.243-1.02s-.66-.358-1.02-.243L2.688 8.736a1 1 0 0 0-.686.894zm16.464-3.971-4.182 12.73-2.534-5.522a.998.998 0 0 0-.492-.492L5.734 9.841l12.732-4.182z"/></svg><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Maps</a></li>
										<li><a class="slide-item" href="{{url('map-leaflet')}}">Leaflet Maps</a></li>
										<li><a class="slide-item" href="{{url('map-vector')}}">Vector Maps</a></li>
									</ul>
								</li>
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->

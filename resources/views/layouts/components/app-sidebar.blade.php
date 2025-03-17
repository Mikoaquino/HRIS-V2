				<!-- main-sidebar -->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="{{url('index')}}">
								<!-- <img src="{{asset('assets/img/brand/logo.png')}}" class="main-logo  desktop-logo" alt="logo">
								<img src="{{asset('assets/img/brand/logo-white.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/img/brand/favicon.png')}}" class="main-logo  mobile-logo" alt="logo">
								<img src="{{asset('assets/img/brand/favicon-white.png')}}" class="main-logo  mobile-dark" alt="logo"> -->
								<img src="{{asset('assets/img/brand/cge.png')}}" class="main-logo  desktop-logo" alt="logo">
								<img src="{{asset('assets/img/brand/cge.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/img/brand/cge.png')}}" class="main-logo  mobile-logo" alt="logo">
								<img src="{{asset('assets/img/brand/cge.png')}}" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">

								<li class="side-item side-item-category">CGE MAIN</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M13,3V9H21V3M13,21H21V11H13M3,21H11V15H3M3,13H11V3H3V13Z" />
										</svg><span class="side-menu__label">Dashboards</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Dashboards</a></li>
										<li><a class="slide-item" href="{{url('/mrs')}}">Monthly Report Summary</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/trips')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M.75 7.5H10.5L11.25 9H1.5L.75 7.5M1.75 10.5H11.5L12.25 12H2.5L1.75 10.5M18 18.5C18.83 18.5 19.5 17.83 19.5 17C19.5 16.17 18.83 15.5 18 15.5C17.17 15.5 16.5 16.17 16.5 17C16.5 17.83 17.17 18.5 18 18.5M19.5 9.5H17V12H21.46L19.5 9.5M8 18.5C8.83 18.5 9.5 17.83 9.5 17C9.5 16.17 8.83 15.5 8 15.5C7.17 15.5 6.5 16.17 6.5 17C6.5 17.83 7.17 18.5 8 18.5M20 8L23 12V17H21C21 18.66 19.66 20 18 20C16.34 20 15 18.66 15 17H11C11 18.66 9.65 20 8 20C6.34 20 5 18.66 5 17H3V13.5 13.5H5V15H5.76C6.31 14.39 7.11 14 8 14C8.89 14 9.69 14.39 10.24 15H15V6H3V6C3 4.89 3.89 4 5 4H17V8H20Z" />
										</svg><span class="side-menu__label">Trips</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/people')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16.5,16.25C16.5,14.75 13.5,14 12,14C10.5,14 7.5,14.75 7.5,16.25V17H16.5M12,12.25A2.25,2.25 0 0,0 14.25,10A2.25,2.25 0 0,0 12,7.75A2.25,2.25 0 0,0 9.75,10A2.25,2.25 0 0,0 12,12.25Z" />
										</svg><span class="side-menu__label">People</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M18 18.5C18.83 18.5 19.5 17.83 19.5 17C19.5 16.17 18.83 15.5 18 15.5C17.17 15.5 16.5 16.17 16.5 17C16.5 17.83 17.17 18.5 18 18.5M19.5 9.5H17V12H21.46L19.5 9.5M6 18.5C6.83 18.5 7.5 17.83 7.5 17C7.5 16.17 6.83 15.5 6 15.5C5.17 15.5 4.5 16.17 4.5 17C4.5 17.83 5.17 18.5 6 18.5M20 8L23 12V17H21C21 18.66 19.66 20 18 20C16.34 20 15 18.66 15 17H9C9 18.66 7.66 20 6 20C4.34 20 3 18.66 3 17H1V6C1 4.89 1.89 4 3 4H17V8H20M3 6V15H3.76C4.31 14.39 5.11 14 6 14C6.89 14 7.69 14.39 8.24 15H15V6H3Z" />
										</svg><span class="side-menu__label">Fleet</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M18 18.5C18.83 18.5 19.5 17.83 19.5 17C19.5 16.17 18.83 15.5 18 15.5C17.17 15.5 16.5 16.17 16.5 17C16.5 17.83 17.17 18.5 18 18.5M19.5 9.5H17V12H21.46L19.5 9.5M6 18.5C6.83 18.5 7.5 17.83 7.5 17C7.5 16.17 6.83 15.5 6 15.5C5.17 15.5 4.5 16.17 4.5 17C4.5 17.83 5.17 18.5 6 18.5M20 8L23 12V17H21C21 18.66 19.66 20 18 20C16.34 20 15 18.66 15 17H9C9 18.66 7.66 20 6 20C4.34 20 3 18.66 3 17H1V6C1 4.89 1.89 4 3 4H17V8H20M3 6V15H3.76C4.31 14.39 5.11 14 6 14C6.89 14 7.69 14.39 8.24 15H15V6H3M5 10.5L6.5 9L8 10.5L11.5 7L13 8.5L8 13.5L5 10.5Z" />
										</svg><span class="side-menu__label">Dispatch</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M11 15H17V17H11V15M9 7H7V9H9V7M11 13H17V11H11V13M11 9H17V7H11V9M9 11H7V13H9V11M21 5V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H19C20.1 3 21 3.9 21 5M19 5H5V19H19V5M9 15H7V17H9V15Z" />
										</svg><span class="side-menu__label">Checklists</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M6 3V5H4C2.9 5 2 5.9 2 7V17C2 18.1 2.9 19 4 19V20C4 21.1 4.9 22 6 22H7C8.1 22 9 21.1 9 20V19H15V20C15 21.1 15.9 22 17 22H18C19.1 22 20 21.1 20 20V19C21.1 19 22 18.1 22 17H11V5H8V3H6M16 3V5H13V7H22C22 5.9 21.1 5 20 5H18V3H16M7 7V11H9L6 17V13H4L7 7M13 9V11H22V9H13M13 13V15H22V13H13Z" />
										</svg><span class="side-menu__label">Purchases</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M17.86 18L18.9 19C17.5 20.2 14.94 21 12 21C7.59 21 4 19.21 4 17V7C4 4.79 7.58 3 12 3C14.95 3 17.5 3.8 18.9 5L17.86 6L17.5 6.4C16.65 5.77 14.78 5 12 5C8.13 5 6 6.5 6 7S8.13 9 12 9C13.37 9 14.5 8.81 15.42 8.54L16.38 9.5H13.5V10.92C13 10.97 12.5 11 12 11C9.61 11 7.47 10.47 6 9.64V12.45C7.3 13.4 9.58 14 12 14C12.5 14 13 13.97 13.5 13.92V14.5H16.38L15.38 15.5L15.5 15.61C14.41 15.86 13.24 16 12 16C9.72 16 7.61 15.55 6 14.77V17C6 17.5 8.13 19 12 19C14.78 19 16.65 18.23 17.5 17.61L17.86 18M18.92 7.08L17.5 8.5L20 11H15V13H20L17.5 15.5L18.92 16.92L23.84 12L18.92 7.08Z" />
										</svg><span class="side-menu__label">Disburse</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M16.5 16.25L19.36 17.94L18.61 19.16L15 17V12H16.5V16.25M23 16C23 19.87 19.87 23 16 23C13.61 23 11.5 21.8 10.25 20C6.19 19.79 3 18.08 3 16V6C3 3.79 6.58 2 11 2S19 3.79 19 6V9.68C21.36 10.81 23 13.21 23 16M17 9.08V8.64C16.77 8.77 16.5 8.9 16.24 9C16.5 9 16.75 9.04 17 9.08M5 6C5 6.5 7.13 8 11 8S17 6.5 17 6 14.87 4 11 4 5 5.5 5 6M5 11.45C6.07 12.23 7.8 12.76 9.72 12.93C10.33 11.67 11.32 10.62 12.54 9.92C12.04 9.97 11.53 10 11 10C8.61 10 6.47 9.47 5 8.64V11.45M9.26 17.87C9.1 17.27 9 16.65 9 16C9 15.61 9.04 15.23 9.1 14.86C7.56 14.69 6.15 14.33 5 13.77V16C5 16.42 6.5 17.5 9.26 17.87M21 16C21 13.24 18.76 11 16 11S11 13.24 11 16 13.24 21 16 21 21 18.76 21 16Z" />
										</svg><span class="side-menu__label">Payroll</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M20 13.09V7C20 4.79 16.42 3 12 3S4 4.79 4 7V17C4 19.21 7.59 21 12 21C12.46 21 12.9 21 13.33 20.94C13.12 20.33 13 19.68 13 19L13 18.95C12.68 19 12.35 19 12 19C8.13 19 6 17.5 6 17V14.77C7.61 15.55 9.72 16 12 16C12.65 16 13.27 15.96 13.88 15.89C14.93 14.16 16.83 13 19 13C19.34 13 19.67 13.04 20 13.09M18 12.45C16.7 13.4 14.42 14 12 14S7.3 13.4 6 12.45V9.64C7.47 10.47 9.61 11 12 11S16.53 10.47 18 9.64V12.45M12 9C8.13 9 6 7.5 6 7S8.13 5 12 5 18 6.5 18 7 15.87 9 12 9M22.5 17.25L17.75 22L15 19L16.16 17.84L17.75 19.43L21.34 15.84L22.5 17.25Z" />
										</svg><span class="side-menu__label">Billing</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M6,16.5L3,19.44V11H6M11,14.66L9.43,13.32L8,14.64V7H11M16,13L13,16V3H16M18.81,12.81L17,11H22V16L20.21,14.21L13,21.36L9.53,18.34L5.75,22H3L9.47,15.66L13,18.64" />
										</svg><span class="side-menu__label">Reports</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M12,20L12.76,17C9.5,16.79 6.59,15.4 5.75,13.58C5.66,14.06 5.53,14.5 5.33,14.83C4.67,16 3.33,16 2,16C3.1,16 3.5,14.43 3.5,12.5C3.5,10.57 3.1,9 2,9C3.33,9 4.67,9 5.33,10.17C5.53,10.5 5.66,10.94 5.75,11.42C6.4,10 8.32,8.85 10.66,8.32L9,5C11,5 13,5 14.33,5.67C15.46,6.23 16.11,7.27 16.69,8.38C19.61,9.08 22,10.66 22,12.5C22,14.38 19.5,16 16.5,16.66C15.67,17.76 14.86,18.78 14.17,19.33C13.33,20 12.67,20 12,20M17,11A1,1 0 0,0 16,12A1,1 0 0,0 17,13A1,1 0 0,0 18,12A1,1 0 0,0 17,11Z" />
										</svg><span class="side-menu__label">Wholesale</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/auditlogs')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M19 5V19H5V5H19M21 3H3V21H21V3M17 17H7V16H17V17M17 15H7V14H17V15M17 12H7V7H17V12Z" />
										</svg><span class="side-menu__label">Audit Logs</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('/underconstruction')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M17.25,12C17.25,12.23 17.23,12.46 17.2,12.68L18.68,13.84C18.81,13.95 18.85,14.13 18.76,14.29L17.36,16.71C17.27,16.86 17.09,16.92 16.93,16.86L15.19,16.16C14.83,16.44 14.43,16.67 14,16.85L13.75,18.7C13.72,18.87 13.57,19 13.4,19H10.6C10.43,19 10.28,18.87 10.25,18.7L10,16.85C9.56,16.67 9.17,16.44 8.81,16.16L7.07,16.86C6.91,16.92 6.73,16.86 6.64,16.71L5.24,14.29C5.15,14.13 5.19,13.95 5.32,13.84L6.8,12.68C6.77,12.46 6.75,12.23 6.75,12C6.75,11.77 6.77,11.54 6.8,11.32L5.32,10.16C5.19,10.05 5.15,9.86 5.24,9.71L6.64,7.29C6.73,7.13 6.91,7.07 7.07,7.13L8.81,7.84C9.17,7.56 9.56,7.32 10,7.15L10.25,5.29C10.28,5.13 10.43,5 10.6,5H13.4C13.57,5 13.72,5.13 13.75,5.29L14,7.15C14.43,7.32 14.83,7.56 15.19,7.84L16.93,7.13C17.09,7.07 17.27,7.13 17.36,7.29L18.76,9.71C18.85,9.86 18.81,10.05 18.68,10.16L17.2,11.32C17.23,11.54 17.25,11.77 17.25,12M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M12,10C10.89,10 10,10.89 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12C14,10.89 13.1,10 12,10Z" />
										</svg><span class="side-menu__label">System</span></a>
								</li>


								<!-- <li class="side-item side-item-category">Main</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
										</svg><span class="side-menu__label">Dashboards</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Dashboards</a></li>
										<li><a class="slide-item" href="{{url('index')}}">Dashboard-1</a></li>
										<li><a class="slide-item" href="{{url('index1')}}">Dashboard-2</a></li>
										<li><a class="slide-item" href="{{url('index2')}}">Dashboard-3</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">WEB APPS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z" />
										</svg><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z" />
										</svg><span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z" />
											<path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z" />
										</svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z" />
											<path d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" />
											<path d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" />
										</svg><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z" />
											<path d="M11 9h2v5h-2zm0 6h2v2h-2z" />
										</svg><span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M20 7h-1.209A4.92 4.92 0 0 0 19 5.5C19 3.57 17.43 2 15.5 2c-1.622 0-2.705 1.482-3.404 3.085C11.407 3.57 10.269 2 8.5 2 6.57 2 5 3.57 5 5.5c0 .596.079 1.089.209 1.5H4c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-4.5-3c.827 0 1.5.673 1.5 1.5C17 7 16.374 7 16 7h-2.478c.511-1.576 1.253-3 1.978-3zM7 5.5C7 4.673 7.673 4 8.5 4c.888 0 1.714 1.525 2.198 3H8c-.374 0-1 0-1-1.5zM4 9h7v2H4V9zm2 11v-7h5v7H6zm12 0h-5v-7h5v7zm-5-9V9.085L13.017 9H20l.001 2H13z" />
										</svg><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z" />
										</svg><span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
										</svg><span class="side-menu__label">Menu-levels</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z" />
										</svg><span class="side-menu__label">Forms</span><i class="angle fe fe-chevron-right"></i></a>
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
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 2 .001 4H5V5h14zM5 11h8v8H5v-8zm10 8v-8h4.001l.001 8H15z" />
										</svg><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Tables</a></li>
										<li><a class="slide-item" href="{{url('table-basic')}}">Basic Tables</a></li>
										<li><a class="slide-item" href="{{url('table-data')}}">Data Tables</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{url('widgets')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z" />
										</svg><span class="side-menu__label">Widgets</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
											<path d="M2.002 9.63c-.023.411.207.794.581.966l7.504 3.442 3.442 7.503c.164.356.52.583.909.583l.057-.002a1 1 0 0 0 .894-.686l5.595-17.032c.117-.358.023-.753-.243-1.02s-.66-.358-1.02-.243L2.688 8.736a1 1 0 0 0-.686.894zm16.464-3.971-4.182 12.73-2.534-5.522a.998.998 0 0 0-.492-.492L5.734 9.841l12.732-4.182z" />
										</svg><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Maps</a></li>
										<li><a class="slide-item" href="{{url('map-leaflet')}}">Leaflet Maps</a></li>
										<li><a class="slide-item" href="{{url('map-vector')}}">Vector Maps</a></li>
									</ul>
								</li>
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg></div> -->
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                          {{--   <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo.png" srcset="./images/logo.png.png 2x" alt="logo-dark"> --}}

                              <img class="" style="width: 164px;" src="{{ asset('images/logo.png') }} " srcset="{{ asset('images/logo.png') }}" >
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    {{-- <h6 class="overline-title text-primary-alt">Use-Case Preview</h6> --}}
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ url('/') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Applications</h6>
                                </li><!-- .nk-menu-heading -->
                              
                               <li class="nk-menu-item">
                                    <a href="{{ route('general.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">General</span>
                                    </a>
                                </li>
                               <li class="nk-menu-item">
                                    <a href="{{ route('gallery.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Gallery</span>
                                    </a>
                                </li>
                                  <li class="nk-menu-item">
                                    <a href="{{ route('slides.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Slides</span>
                                    </a>
                                </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('employe.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Employe</span>
                                    </a>
                                </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('trades.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Trades</span>
                                    </a>
                                </li>
                                   <li class="nk-menu-item">
                                    <a href="{{ route('page.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Page</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('menus.index') }}" class="nk-menu-link" data-original-title="" title="">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Menus</span>
                                    </a>
                                </li>
                                

                            </ul><!-- .nk-menu -->

                           
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
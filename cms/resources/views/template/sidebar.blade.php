<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{'/assets/Logo.JPG'}}" alt="" height="50">
        </span>
        <span class="logo-sm">
            <img src="{{'/assets/images/logo_sm.png'}}" alt="" height="16">
        </span>
    </a>



    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>



            <li class="side-nav-item">
                <a href="{{ route('index') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Home </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('tagline') }}">Tagline</a>
                        </li>
                        <li>
                            <a href="{{ route('banner') }}">Banner</a>
                        </li>
                       
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil uil-chat-info"></i>
                    <span> About us </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('visi') }}">Visi</a>
                        </li>
                        <li>
                            <a href="{{ route('misi') }}">Misi</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('msk') }}">Manfaat dan Sistem Kerjasama</a>
                        </li>
                       
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('team') }}" class="side-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <g fill="currentColor">
                            <g opacity=".2">
                                <path d="M9.75 7.75a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                <path fill-rule="evenodd" d="M6.75 8.75a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm0 2a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.8 11.5A1.5 1.5 0 0 0 5.3 13v1.5a1 1 0 0 1-2 0V13a3.5 3.5 0 0 1 7 0v.5a1 1 0 1 1-2 0V13a1.5 1.5 0 0 0-1.5-1.5Z" clip-rule="evenodd" />
                                <path d="M12.75 7.75a3 3 0 1 0 6 0a3 3 0 0 0-6 0Z" />
                                <path fill-rule="evenodd" d="M15.75 8.75a1 1 0 1 1 0-2a1 1 0 0 1 0 2Zm0 2a3 3 0 1 1 0-6a3 3 0 0 1 0 6Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M15.7 11.5a1.5 1.5 0 0 1 1.5 1.5v1.5a1 1 0 1 0 2 0V13a3.5 3.5 0 0 0-7 0v.5a1 1 0 1 0 2 0V13a1.5 1.5 0 0 1 1.5-1.5Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M11.3 14.25a1.5 1.5 0 0 0-1.5 1.5v1.5a1 1 0 0 1-2 0v-1.5a3.5 3.5 0 0 1 7 0v1.5a1 1 0 1 1-2 0v-1.5a1.5 1.5 0 0 0-1.5-1.5Z" clip-rule="evenodd" />
                                <path d="M14.25 10.5a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                <path fill-rule="evenodd" d="M11.25 11.5a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm0 2a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                <path d="M4.25 11.5h5v4h-5v-4Zm9 0h5v4h-5v-4Z" />
                                <path d="M9.25 13.5h4l.5 4.75h-5l.5-4.75Z" />
                            </g>
                            <path fill-rule="evenodd" d="M5 9a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm0 1a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3.854 8.896a.5.5 0 0 1 0 .708l-.338.337A3.47 3.47 0 0 0 2.5 12.394v1.856a.5.5 0 1 1-1 0v-1.856a4.47 4.47 0 0 1 1.309-3.16l.337-.338a.5.5 0 0 1 .708 0Zm11.792-.3a.5.5 0 0 0 0 .708l.338.337A3.469 3.469 0 0 1 17 12.094v2.156a.5.5 0 0 0 1 0v-2.156a4.47 4.47 0 0 0-1.309-3.16l-.337-.338a.5.5 0 0 0-.708 0Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M14 9a2 2 0 1 1 0-4a2 2 0 0 1 0 4Zm0 1a3 3 0 1 1 0-6a3 3 0 0 1 0 6Zm-4.5 3.25a2.5 2.5 0 0 0-2.5 2.5v1.3a.5.5 0 0 1-1 0v-1.3a3.5 3.5 0 0 1 7 0v1.3a.5.5 0 1 1-1 0v-1.3a2.5 2.5 0 0 0-2.5-2.5Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M9.5 11.75a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm0 1a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </g>
                    </svg>
                    <span> Team </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('service') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Service </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('blog') }}" class="side-nav-link">
                    <i class="uil uil-newspaper"></i>
                    <span> Blog </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('contact') }}" class="side-nav-link">
                    <i class="dripicons-phone"></i>
                    <span> Contact us </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('job') }}" class="side-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M7.25 5.461v1.42l-1.694.138a2.61 2.61 0 0 0-2.367 2.184c-.041.258-.08.516-.114.775a.298.298 0 0 0 .169.308l.077.036c5.429 2.57 11.93 2.57 17.358 0l.077-.036a.298.298 0 0 0 .168-.308a26.748 26.748 0 0 0-.113-.775a2.61 2.61 0 0 0-2.367-2.184l-1.694-.137v-1.42a1.75 1.75 0 0 0-1.49-1.731l-1.22-.183a13.75 13.75 0 0 0-4.08 0l-1.22.183a1.75 1.75 0 0 0-1.49 1.73Zm6.567-.43a12.25 12.25 0 0 0-3.634 0l-1.22.183a.25.25 0 0 0-.213.247v1.315a56.826 56.826 0 0 1 6.5 0V5.461a.25.25 0 0 0-.213-.247l-1.22-.183Z" clip-rule="evenodd" />
                        <path fill="currentColor" d="M21.118 12.07a.2.2 0 0 0-.282-.17c-5.571 2.467-12.101 2.467-17.672 0a.2.2 0 0 0-.282.17a26.88 26.88 0 0 0 .307 5.727a2.61 2.61 0 0 0 2.367 2.184l1.872.152c3.043.245 6.1.245 9.144 0l1.872-.151a2.61 2.61 0 0 0 2.367-2.185c.306-1.895.41-3.815.307-5.726Z" />
                    </svg>
                    <span> Job Portal </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('candidate') }}" class="side-nav-link">
                    <i class="uil uil-file"></i>
                    <span> Candidate </span>
                </a>
            </li>


        </ul>

        <!-- Help Box -->

        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
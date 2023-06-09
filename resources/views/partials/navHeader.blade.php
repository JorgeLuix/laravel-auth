
<header>

    <div class="container-fluid">

        <div class="navb-logo">
            <img src="" alt="Full-stack developer">
        </div>

        <div class="navb-items d-none d-xl-flex">

            <div class="item">
                <a class="nav-link" href="{{ url('/') }}"> Home
            </div>

            <div class="item">
                <a href="{{ route('admin.projects.index') }}">Projects</a>
            </div>

            <div class="item">
                <a href="/cases">Cases</a>
            </div>

            <div class="item">
                <a href="/about">About</a>
            </div>

            <div class="item-button">
                <ul class="d-flex list-unstyled align--center">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item px-2">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/admin') }}">{{ __('Dashboard') }}</a>
                                {{-- <a class="dropdown-item" href="{{ url('/admin/profile') }}">{{ __('Profile') }}</a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                {{-- <a href="/contact" type="button">Let's talk</a> --}}
            </div>
        </div>

        <!-- Button trigger modal -->
        <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <img src="" alt="Logo">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">

                        <div class="modal-line">
                            <i class="fa-solid fa-house"></i><a href="{{ url('/') }}">Home</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-cube"></i><a href="{{ route('admin.projects.index') }}">Projects</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-file-lines"></i> <a href="/cases">Cases</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-circle-info"></i><a href="/about">About</a>
                        </div>

                        <ul class="navbar-nav modal-line">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/admin') }}">{{ __('Dashboard') }}</a>
                                        {{-- <a class="dropdown-item" href="{{ url('/admin/profile') }}">{{ __('Profile') }}</a> --}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                        {{-- <a href="/contact" class="navb-button" type="button">Let's talk</a> --}}
                    </div>

                    <div class="mobile-modal-footer">

                        <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>


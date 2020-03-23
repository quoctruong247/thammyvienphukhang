<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('public/admin/images/pc/favicon.png')}}" type="image/gif">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{asset('public/admin/css/admin.css')}}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}">
    
    <title>@yield('title')</title>
    <script src="{{asset('public/admin/js/jquery-3.3.1.min.js')}}"></script>    
    <!-- ckeditor -->
    <script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('public/admin/ckfinder/ckfinder.js')}}"></script>
    @yield('header_script')

</head>
<body style="background: #ecf0f1;">
    <div id="app" class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('public/admin/images/pc/logo.png')}}" alt="" width="70%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @if(Auth::user()->active==1)

                        @if(Auth::user()->levels_id==1||
                            Auth::user()->levels_id==2
                            )
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.user.index')}}"><i class="fas fa-user"></i> Người dùng</a>
                        </li>
                        @endif

                        @if(Auth::user()->levels_id==1||
                            Auth::user()->levels_id==2 ||
                            Auth::user()->levels_id==3
                            )
                        <li class="nav-item"><a class="nav-link" href="{{route('admin.category.index')}}"><i class="fas fa-list"></i> Danh mục</a></li>
                        @endif

                        @if(Auth::user()->levels_id==1||
                            Auth::user()->levels_id==2 ||
                            Auth::user()->levels_id==3||
                            Auth::user()->levels_id==5
                            )
                        <li class="nav-item"><a class="nav-link" href="{{route('admin.post.index')}}"><i class="fas fa-file-word"></i> Bài viết</a></li>
                        @endif

                        @if(Auth::user()->levels_id==1||
                            Auth::user()->levels_id==2||
                            Auth::user()->levels_id==3||
                            Auth::user()->levels_id==6
                            )
                        <li class="nav-item"><a class="nav-link" href="{{route('admin.slider.index')}}"><i class="far fa-images"></i> Ảnh Slide</a></li>
                        @endif

            @if(Auth::user()->levels_id==1||
                Auth::user()->levels_id==2||
                Auth::user()->levels_id==3
                )
            <li class="nav-item"><a class="nav-link" href="{{route('admin.interface.index')}}"><i class="fas fa-cog"></i> Giao diện</a></li>
            @endif

            @if(Auth::user()->levels_id==1||
                Auth::user()->levels_id==2||
                Auth::user()->levels_id==3||
                Auth::user()->levels_id==4
                )
            <li class="nav-item"><a class="nav-link" href="{{route('admin.customer.index')}}"><i class="fas fa-shopping-cart"></i> Khách hàng</a></li>
            @endif
                    @else
                        <ul>
                            <li>Người dùng tên <strong>{{Auth::user()->name}}</strong> này đang bị khóa. Vui lòng liên hệ người quản trị hệ thống.</li>
                        </ul>
                    @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Thoát hệ thống') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
        <h5 class="shadow-sm p-3 mb-2 bg-white rounded text-center"><small>Bản quyền thuộc về Thẩm mỹ viện Phú Khang</small></h5>
          

    </div><!-- end container -->
    
    @yield('bottom_script')
    <!-- kết thúc cho thanh menu -->

    <script src="{{asset('public/default/js/bootstrap.min.js')}}"></script>
</body>
</html>

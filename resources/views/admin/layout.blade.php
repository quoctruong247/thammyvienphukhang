@extends('admin.master')
@section('title','Trang Quản Trị')
@section('content')
@if(Auth::user()->active==1)
    @if(
    Auth::user()->levels_id==1 ||
    Auth::user()->levels_id==2 ||
    Auth::user()->levels_id==3
    )     
    <div class="card">
    <div class="card-header"><div class="container text-muted"><strong>CÁC TÍNH NĂNG CHÍNH TRONG HỆ THỐNG</strong></div></div>

    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="card" style="width: 15rem;">
                      <div class="card-body">
                        <h1 class="text-center"><i class="fas fa-users"></i></h1>
                        <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ NGƯỜI DÙNG</h6>
                        Có người sử dụng hệ thống
                        <a href="#" class="card-link">Danh sách</a>
                      </div>
                    </div>
                </div>
           
        <div class="col-md-3 text-center">
            <div class="card" style="width: 15rem;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-list"></i></h1>
                <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ DANH MỤC</h6>
                <a href="#" class="card-link">Tạo mới</a>
                <a href="#" class="card-link">Danh sách</a>
              </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="card" style="width: 15rem;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-file-word"></i></h1>
                <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ BÀI VIẾT</h6>
                <a href="#" class="card-link">Tạo mới</a>
                <a href="#" class="card-link">Danh sách</a>
              </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="card" style="width: 15rem;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-sitemap"></i></h1>
                <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ SITEMAP</h6>
                <a href="#" class="card-link">Tạo Site-map</a>
                
              </div>
            </div>
        </div>
        </div><!-- end row -->
        <div class="row mt-3">
                <div class="col-md-3 text-center">
                    <div class="card" style="width: 15rem;">
                      <div class="card-body">
                        <h1 class="text-center"><i class="far fa-images"></i></h1>
                        <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ ẢNH SLIDE</h6>
                        <a href="#" class="card-link">Tạo mới</a>
                        <a href="#" class="card-link">Danh sách</a>
                      </div>
                    </div>
                </div>
           
        <div class="col-md-3 text-center">
            <div class="card" style="width: 15rem;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-shopping-cart"></i></h1>
                <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ KHÁCH HÀNG</h6>
                
                <a href="#" class="card-link">Danh sách</a>
              </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="card" style="width: 15rem;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-cog"></i></h1>
                <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ GIAO DIỆN</h6>
                <a href="#" class="card-link">Tạo mới</a>
                <a href="#" class="card-link">Danh sách</a>
              </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="card" style="width: 15rem;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-chart-pie"></i></h1>
                <h6 class="card-subtitle mb-2 text-muted">QUẢN LÝ THỐNG KÊ</h6>
                <a href="#" class="card-link">Xem</a>
                <a href="#" class="card-link">Danh sách</a>
              </div>
            </div>
        </div>
        </div><!-- end row -->
     </div>
    </div>
    </div>
    </div>
    @else
    <div class="card">
    <div class="card-header"><div class="container text-muted">
        Chào mừng bạn đến trang quản trị hệ thống website Thẩm Mỹ Viện Phú Khang
    </div>
    </div>
    @endif
@endif
@endsection

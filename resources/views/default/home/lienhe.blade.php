@extends('default.home')
@section('title','Liên hệ Phú Khang')
@section('pc_content')
<div class="container-fluid" id="content" style="padding-right: 0px; padding-left: 0px;">
    <div class="row" id="lienhe_row">
        <div class="col-md-12 col-sm-12" id="content">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" style="width: 100%;" src="{{asset('public/default/images/pc/bg_lienhe1.jpg')}}"/>
                    <div class="carousel-caption d-md-block pt-1" id="lienhe_margin">
                        <div class="row text-center">
                            <div class="col-md-7 col-sm-8"></div>
                            <div class="col-md-4 col-sm-4" id="lienhe_bg_dk" style="height: auto;">

                                <div class="row pt-2" id="lienhe_tieude">
                                    <div class="col-md-12 col-sm-4">ĐĂNG KÝ ĐẶT HẸN
                                    </div>
                                </div>
                                <div class="row pt-2 pl-2 text-left">
                                    <div class="col-md-12 col-sm-4 mt-5" id="lienhe_tieude1"><!-- <small> Phú Khang luôn cố gắng giúp quý khách làm đẹp thuận tiện nhất.</small>    -->
                                       
                                    </div>
                                </div>

<form id="lienhe" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input class="form-control mt-2" type="hidden" name="_currentUrl" value="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"/>

<div class="row mt-3">
    <div class="col-md-12 col-sm-4">
        <input class="form-control rounded-pill" name="_hoten" required="" placeholder="* Họ và tên:" type="text">
         
    </div>
</div>
<div class="row mt-3">
        <div class="col-md-12 col-sm-4">
            <input class="input_phone form-control rounded-pill" name="_dienthoai" required="" placeholder="* Số điện thoại:" type="text">
             
        </div> 
    </div>
    <div class="row mt-3">
        <div class="col-md-12 col-sm-4">
    <select class="form-control rounded-pill" id="_noidungpc" name="_noidung" style="background: white;border-color: #d4eff4;">
        <option value="Chọn dịch vụ ưu đãi của Phú Khang" disabled selected>Chọn dịch vụ ưu đãi của Phú Khang</option>
        <option value="Bấm mí Hàn Quốc">●  Bấm mí Hàn Quốc – 4.888.000 Đ</option>
        <option value="Cắt Mí Hàn Quốc">● Cắt mí Hàn Quốc – 5.888.000 Đ</option>
        <option value="Nâng cung chân mày">● Nâng cung chân mày – 5.888.000 Đ</option>
        <option value="Lấy mỡ bọng mắt">● Lấy mỡ bọng mắt – 5.888.000 Đ</option>
        <option value="Lấy mỡ bọng mắt">● Xóa nhăn vùng mắt – 5.888.000 Đ</option>
        <option value="Nâng mũi Hàn Quốc">● Nâng mũi Hàn Quốc – 5.888.000 Đ</option>
        <option value="Nâng mũi Bọc Sụn">● Nâng mũi Bọc Sụn – 12.888.000 Đ</option>
        <option value="Nâng mũi cấu trúc Sline">● Nâng mũi cấu trúc Sline – 24.888.000 Đ</option>
    </select>                           
    </div>
</div>

    <div class="row mt-3">
    <div class="col-md-12 col-sm-4">
        <button class="text-center" type="submit" style="background: transparent;
    border: 0px;">
            <img class="lienhe_img_dk pb-3" src="{{asset('public/default/images/pc/btn_dangkyngay_vang.png')}}" width="100%" />
        </button>
    </div>

<!-- nút tư vấn và messenger -->
<div class="container" style="background: #d4eff4;">
<div class="row pb-2">
   
    <div class="col-6"><a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/default/images/pc/icon_messenger.png')}}" alt="" width="70%"></a></div>
   
    <div class="col-6"><a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank"><img src="{{asset('public/default/images/pc/icon_tuvantructuyen.png')}}" alt="" width="70%"></a></div>
                                        
    </div>
</div>
<!-- nút tư vấn và messenger -->
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---end dangky-->
<div class="container-fluid" id="content">
    <div class="row" id="lienhe_row">
        <div class="col-md-12 col-sm-12 col-12">
            <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+Ph%C3%BA+Khang/@10.7622453,106.6877373,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f2ecd9ff80b:0x78659cfb81496fbf!8m2!3d10.76224!4d106.689926?hl=vi" target="_blank"><img style="width:100%" src="{{asset('public/default/images/pc/bg_lienhe3.jpg')}}" /></a>
            
        </div>
    </div>
</div>
<!-- end pc -->
@include('default.includes.pc_form_success')
@endsection

<!-- giao diện mobile -->
@section('mb_content')
<div class="container" style="margin-top: 76px; padding-right: 0px; padding-left: 0px;">
    <img class="d-block" style="width: 100%;" src="{{asset('public/default/images/mb/bg_lienhe1.jpg')}}"/>
</div>
    
 
 
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 col-12 pb-3" id="lienhe_bg_dk" style="height: auto;">

            <div class="row pt-2" id="lienhe_tieude">
                <div class="col-sm-12 col-12">ĐĂNG KÝ ĐẶT HẸN</div>
            </div>
            <div class="row pt-2 pl-2 text-left">
                <div class="col-sm-12 col-12" id="lienhe_tieude1">
                    Phú Khang luôn cố gắng giúp quý khách làm đẹp thuận tiện nhất nên hãy ĐẶT HẸN TRƯỚC để không ảnh hưởng đến kế hoạch và thời gian cá nhân.
                </div>
            </div>

           <form id="lienhe" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input class="form-control mt-2" type="hidden" name="_currentUrl" value="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"/>

            <div class="row mt-3">
                <div class="col-sm-12 col-12">
                    <input class="form-control rounded-pill" name="_hoten" required="" placeholder="* Họ và tên:" type="text"> 
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-12">
                    <input class="input_phone form-control rounded-pill" name="_dienthoai" required="" placeholder="* Số điện thoại:" type="text">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-12">
    <select class="form-control rounded-pill" id="_noidungmb" name="_noidung" style="background: white;border-color: #d4eff4;">
      <option value="Chưa chọn dịch vụ ưu đãi" selected disabled>Chọn dịch vụ ưu đãi của Phú Khang</option>
        <option value="Bấm mí Hàn Quốc">●  Bấm mí Hàn Quốc – 4.888.000 Đ</option>
        <option value="Cắt Mí Hàn Quốc">● Cắt mí Hàn Quốc – 5.888.000 Đ</option>
        <option value="Nâng cung chân mày">● Nâng cung chân mày – 5.888.000 Đ</option>
        <option value="Lấy mỡ bọng mắt">● Lấy mỡ bọng mắt – 5.888.000 Đ</option>
        <option value="Lấy mỡ bọng mắt">● Xóa nhăn vùng mắt – 5.888.000 Đ</option>
        <option value="Nâng mũi Hàn Quốc">● Nâng mũi Hàn Quốc – 5.888.000 Đ</option>
        <option value="Nâng mũi Bọc Sụn">● Nâng mũi Bọc Sụn – 12.888.000 Đ</option>
        <option value="Nâng mũi cấu trúc Sline">● Nâng mũi cấu trúc Sline – 24.888.000 Đ</option>
        
    </select>
        <!-- <input class="form-control pb-0" name="_noidung" placeholder="Nội dung:" type="text"> -->
    </div>
</div>
            
            <div class="row mt-3">
                <div class="col-sm-12 col-12">
                    <button class="text-center" type="submit" style="background: transparent;
    border: 0px;">
                        <img style="width:100%" src="{{asset('public/default/images/mb/btn_dangkyngay_vang.png')}}" />
                    </button>
                </div>
               
            </div>
        </form>
        <div class="container" style="background: #d4eff4;">
            <div class="row pt-2">
                <div class="col-6"><a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/default/images/mb/icon_messenger.png')}}" alt="" width="70%"></a></div>
                <div class="col-6"><a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank"><img src="{{asset('public/default/images/mb/icon_tuvantructuyen.png')}}" alt="" width="70%"></a></div>
            </div>
        </div><!-- end nút messenger và tư vấn trực tuyến -->
        
      </div> 
    </div>
</div>
<div class="col-12 mt-1 mb-1" style="padding-left:0px; padding-right: 0px;">
        <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+Ph%C3%BA+Khang/@10.7622453,106.6877373,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f2ecd9ff80b:0x78659cfb81496fbf!8m2!3d10.76224!4d106.689926?hl=vi" target="_blank"><img src="{{asset('public/default/images/mb/bg_lienhe3.jpg')}}" width="100%" />  </a>
        </div>
    @include('default.includes.mb_form_success')

@endsection

@section('bottom_script')

<script type="text/javascript">
    $('#lienhe').on('submit',function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('.input_phone').val();
        var nd = $('#_noidung').val();
        console.log(data);
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false || mobile.length < 10 || mobile.length >10) 
            {
                alert('Số điện thoại không hợp lệ !');
            }
            else if(nd=="Chưa chọn dịch vụ ưu đãi"){
                alert('Bạn chưa chọn dịch vụ cần tư vấn ?');
                }else{
                var url="{{URL::to('/ajax/form-saved')}}";
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        $('.customer_success').modal('show');
                        document.getElementById("lienhe").reset();             
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            }
        }
    }); 

    
</script>
@endsection
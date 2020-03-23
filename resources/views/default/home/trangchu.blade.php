@extends('default.home')
@section('title','Thẩm Mỹ Viện Phú Khang')
@section('img','/public/default/images/pc/logo_grand.png')
<!-- -------------phần pc------------------------>
@section('pc_content')
<!-- slide -->
<div id="slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#slider" data-slide-to="0" class="active"></li>
  @if(count($sliders)>1)
  
    @for($i=1 ; $i < count($sliders) ; $i++)
    <li data-target="#slider" data-slide-to="{{$i}}" class="active"></li>
    @endfor
  
  @endif
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="{{$sliders[0]->Url}}">
        <img src="{{$sliders[0]->Pc}}" class="d-block w-100" alt="Thẩm mỹ viện Phú Khang">
      </a>
    </div>
  @if(count($sliders)>1)
  <?php $i=0;
      foreach($sliders as $slider)
      {
        $i++;
        if($i==1) continue;
     ?>
    <div class="carousel-item">
      <a href="{{$slider->Url}}">
        <img src="{{$slider->Pc}}" class="d-block w-100" alt="Thẩm mỹ viện Phú Khang">
      </a>
    </div>
    <?php } ?>
  @endif
    
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- giới thiệu - ưu đãi - bác sĩ -->
<div class="container mt-5 ">
  <div class="row">
    <div class="col-md-4">
      <a href="/tmv-phu-khang-thuong-hieu-tham-my-uy-tin-tp-hcm"><img src="{{asset('public/default/images/pc/content_bacsi.jpg')}}" alt="bác sĩ" width="100%" class="shadow-sm mb-5 bg-white rounded"></a>
      
    </div>
    <div class="col-md-4">
      <a href="/ve-phu-khang"><img src="{{asset('public/default/images/pc/content_gioithieu.jpg')}}" alt="giới thiệu" width="100%" class="shadow-sm mb-5 bg-white rounded"></a>
      
    </div>
    <div class="col-md-4">
      <a href="/bang-gia-dich-vu-tham-my-tai-phu-khang"><img src="{{asset('public/default/images/pc/content_khuyenmai.jpg')}}" alt="ưu đãi" width="100%" class="shadow-sm  mb-5 bg-white rounded"></a>
      
    </div>
  </div>
</div>
<!-- end giới thiệu - ưu đãi - bác sĩ -->
<div class="container">
    <img src="{{asset('public/default/images/pc/hinhbacsi.jpg')}}" alt="Nguyễn Văn Thạch" width="100%" class="shadow-sm bg-white rounded">
</div>
<div class="container mt-5">
    <img src="{{asset('public/default/images/pc/hinhbacsi1.jpg')}}" alt="Nguyễn Văn Thạch" width="100%" class="shadow-sm  mb-5 bg-white rounded">
  
</div>

<!-- nhật ký làm đẹp -->
<style>
    .carousel-indicators.sinhnhat li{
        border-top: none;
        border-bottom: none;
        margin-top: 10px;
    }
  .carousel-indicators.sinhnhat{
    
    top: 100%;
  }
  .carousel-indicators.sinhnhat .active{
    background-color: #13506d!important;
  }
  .carousel-indicators.sinhnhat li{
    text-indent: unset;
    width: 20px;
    height:20px;
    border-radius: 0px!important;
    background-color: #2196F3;
    text-align: center;
    color: #fff;
  }
 
</style>

 <div class="container-fluid">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <img src="{{asset('public/default/images/pc/tieu-de-chu-de_nhat-ky-lam-dep.png')}}" alt="nhật ký làm đẹp" width="55%" >
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="sinhnhat" class="carousel slide" data-ride="carousel" >
            <!-- data-interval="false" -->
            <ol class="carousel-indicators sinhnhat">
              <li data-target="#sinhnhat" data-slide-to="0" class="active">1</li>
              <li data-target="#sinhnhat" data-slide-to="1">2</li>
              <li data-target="#sinhnhat" data-slide-to="2">3</li>
            </ol>
          <div class="carousel-inner">
             <div class="carousel-item active">
             <img style="width: 100%" src="{{asset('public/default/images/pc/pc-2.jpg')}}"/>
            </div>
            <div class="carousel-item">
             <img style="width: 100%" src="{{asset('public/default/images/pc/pc-3.jpg')}}"/>
            </div>
            <div class="carousel-item">
              <img style="width: 100%" src="{{asset('public/default/images/pc/pc-1.jpg')}}"/>
            </div>
           
          </div>
          <a class="carousel-control-prev" href="#sinhnhat" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#sinhnhat" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
            </div>
        </div>
    </div>
</div><!-- ket thuc nhật ký làm đẹp --> 

<!--khachhhang-->
<div class="container-fluid" style="background-color: #e6e6e8; margin-top: 60px;">
    <div class="container">
        <div class="row ">
          <div class="col-md-12 col-sm-12 col-12 text-center">
                <img alt="phu-khang"class="mt-2" style="width: 55%" src="{{asset('public/default/images/pc/khachhang_1.png')}}" />
          </div>
        </div>
        
        <div class="row">
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
            <img src="{{asset('public/default/images/pc/1-thumnail_mui_truoc.jpg')}}" width="100%"  class="truoc" />
            <img src="{{asset('public/default/images/pc/1-thumnail_mui_sau.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/2-thumnail_mui_truoc.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/2-thumnail_mui_sau.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/3-thumnail_mui_truoc.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/3-thumnail_mui_sau.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/4-thumnail_mui_truoc.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/4-thumnail_mui_sau.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/5-thumnail_mui_truoc.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/5-thumnail_mui_sau.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/6-thumnail_mui_truoc.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/6-thumnail_mui_sau.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-12 pr-0 pl-0">
            <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank"><img alt="phu-khang"data-aos="zoom-in" id="style_img" src="{{asset('public/default/images/pc/khachhang_xemthem.jpg')}}"  width="100%" /></a>
        </div>
        </div>
        <div class="row">
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/1-thumnail_mat_sau.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/1-thumnail_mat_truoc.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/2-thumnail_mat_sau.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/2-thumnail_mat_truoc.jpg')}}" width="100%" class="sau" />
          </a>
        </div> 
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/3-thumnail_mat_sau.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/3-thumnail_mat_truoc.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/4-thumnail_mat_sau.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/4-thumnail_mat_truoc.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/5-thumnail_mat_sau.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/5-thumnail_mat_truoc.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
        <div class="khachhang col-md-2">
          <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
              <img src="{{asset('public/default/images/pc/6-thumnail_mat_sau.jpg')}}" width="100%" class="truoc" />
              <img src="{{asset('public/default/images/pc/6-thumnail_mat_truoc.jpg')}}" width="100%" class="sau" />
          </a>
        </div>
      </div>

    </div>
</div>
<!---end khachhhang-->

<!-- tin mới và cảm nhận khách hàng -->
<style>
  .card{
    border:none;
  }
  .card-header{
    margin-top: 10px;
    padding:0px;
    cursor: pointer;
  }
  .btn-link{
    text-decoration: none!important;
  }

</style>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-8 style_line_tinlienquan px-0" >Tin ưu đãi mới nhất</div>
    <div class="col-md-4 style_line_tinlienquan">Tin nổi bật</div>
  </div>
</div>
<div class="container"> 
  <div class="row">
    <div class="col-md-8" style="padding-right: 0px; padding-left: 0px;">
      <!-- phần tin sale -->
      <div class="container mt-1">
        <div class="row">
          
          <div class="col-md-5" style="padding-left: 0px;"><a href="/{{$salePosts[0]->Slug}}"><img src="{{$salePosts[0]->Image}}" alt="New Sale" width="100%" class="rounded"></a></div>
          <div class="col-md-7 ">
            <h5 class="text-blue">{{$salePosts[0]->Title}}</h5>
            <p class="text-justify text-muted mt-2">{{$salePosts[0]->Description}}</p>
            <span class="text-right" style="float: right;"><a href="/{{$salePosts[0]->Slug}}">xem tiếp <i class="fas fa-angle-double-right"></i></a></span>
          </div>
        </div>
      </div>
      <!-- end tin sale -->
      <div id="accordion">
        <div class="card">
        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
            <button class="btn btn-link collapsed" >
              <i class="fas fa-comment-dots"></i> Thu Hà hóa "thiên thần" trong 90 phút tại Phú Khang.
            </button>
          
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-4"><img src="{{asset('public/default/images/pc/mui1.jpg')}}" alt="" width="100%"></div>
                <div class="col-md-8">
                  <p class="text-justify"><b>Trước</b>: <i>Mũi to, không thon gọn, sống mũi bè khiến khuôn mặt ít có thần là nhược điểm khiến Thu Hà không tự tin khi giao tiếp.<br>
                      <b>Sau: </b>Sống mũi cao thon gọn, không bị bóng đỏ hay lệch.<br>
                  => Giờ đây Thu Hà đã có thể khoe sắc với dáng mũi chuẩn hotgirl mà không còn phải lo lắng.</i></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    
      <div class="card">
        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
            <button class="btn btn-link collapsed" >
              <i class="fas fa-comment-dots"></i> Cô gái Lan Thanh sở hữu nét mí xuất thần.
            </button>
          
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-4"><img src="{{asset('public/default/images/pc/mat1.jpg')}}" alt="" width="100%"></div>
                <div class="col-md-8">
                  <p class="text-justify"><b>Trước</b>: <i>Ngũ quan tương đối hài hòa duy nhỉ có đôi mắt mí lót và các mí còn khá nông khiến Lan Thanh không gây được nhiều ấn tượng. Biết tới công nghệ Bấm Mí Classic từ 1 người bạn. Lan Thanh đã trải nghiệm...<br>
                  <b>Sau: </b>7 ngày hồi phục đã được bù đắp bằng đôi mí rõ nét. Đôi mắt Lan Thanh thêm phần trẻ trung nhờ vào Bấm Mí Classic tại Phú Khang. Cô gái trẻ thêm phần tự tin với cuộc sống.<br>
                  => Đừng để đôi mắt 1 mí cản trở vẻ đẹp của bạn.</i></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div> 

      <div class="card">
        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
            <button class="btn btn-link collapsed" >
              <i class="fas fa-comment-dots"></i> Mỹ Thu - Nâng mũi thay đổi cuộc đời tôi.
            </button>
          
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-4"><img src="{{asset('public/default/images/pc/mui2.jpg')}}" alt="" width="100%"></div>
                <div class="col-md-8">
                  <p class="text-justify"><b>Trước</b>: <i>Sống mũi thấp, cánh mũi to bè khiến khuôn mặt của Thu không có gì nổi bật. Điều này là lý do khiến Thu quyết định tìm đến Phú Khang để thực hiện Nâng mũi S-line.<br>
                  <b>Sau: </b>Thu đã sở hữu dáng mũi S-line mềm mại tự nhiên, khi nhìn và sờ nắn cho cảm giác như thật.<br>
                  => Kết quả thẩm mỹ hơn mong đợi khiến Mỹ Thu hài lòng vì đã tin tưởng đúng chỗ để trao gửi nhan sắc mình."</i></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div> 

      <div class="card">
        <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
            <button class="btn btn-link collapsed" >
              <i class="fas fa-comment-dots"></i> Ngọc Giang - Sự đắn đo đã được đền đáp.
            </button>
          
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-4"><img src="{{asset('public/default/images/pc/mat2.jpg')}}" alt="" width="100%"></div>
                <div class="col-md-8">
                  <p class="text-justify"><b>Trước</b>: <i>Đôi mắt với mí không rõ nét, không đều. Điều này làm cho gương mặt của Giang chưa có điểm nhấn. Giang đắn đo khi quyết định thay đổi để trông xinh đẹp hơn. Sự đắn đo đã được đền đáp khi Giang thực hiện Cắt mí mắt tại TMV Phú Khang<br>
                  <b>Sau: </b>Giang đã sở hữu nếp mí tự nhiên, phù họp với gương mặt mà Giang mong muốn<br>
                  => Nếu chần chừ, đã không thể khiến cho gương mặt trở nên rạng rỡ hơn.</i></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div> 

      <div class="card">
        <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
            <button class="btn btn-link collapsed" >
              <i class="fas fa-comment-dots"></i> Quyết định thay đổi cuộc sống Phương Vy. 
            </button>
          
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-4"><img src="{{asset('public/default/images/pc/mui3.jpg')}}" alt="" width="100%"></div>
                <div class="col-md-8">
                  <p class="text-justify"><b>Trước</b>: <i>Dáng mũi to bè, làm ảnh hưởng tới vẻ đẹp ngũ quan khuôn mặt Vy nhưng vì chưa đủ tuổi nên mãi đến khi 19 tuổi, Vy mới quyết định nâng mũi tại Phú Khang để cải thiện nhan sắc mình.<br>
                  <b>Sau: </b>Sau khi áp dụng phương pháp Nâng mũi Diamond Line tại TMV Phú Khang. Vy hoàn toàn biến thành cô gái trẻ trung đáng yêu với dáng mũi cao thanh thoát, sống mũi thẳng tắp.<br>
                  => Vy hài lòng vì đã quyết định đúng đắn và cảm ơn Phú Khang đã đồng hành cùng Vy trong thời gian Vy sử dụng dịch vụ.</i></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div> 

    </div><!-- end accordion -->

    </div><!-- end col-md-8 -->
<!-- kết thúc cảm nhận khách hàng -->
<!-- phần tin nỗi bật -->
    <div class="col-md-4">
      
      <div class="container " style="padding-left: 0px;padding-right: 0px;">
     
        @foreach($newPosts as $newPost)
        <a href="/{{$newPost->Slug}}">
          <div class="row mt-2" style="padding-left: 0px;padding-right: 0px;">
            <div class="col-md-4"><img src="{{$newPost->Image}}" alt="" width="100%" class="rounded"></div>
            <div class="col-md-8" style="font-size: 14px;color: #0d4673;border-bottom: 1px dotted gray;padding-right: 0px; padding-left: 0px;">{{$newPost->Title}}</div>
          </div>
        </a>
        @endforeach
      
     </div>
    </div>
<!-- kết thúc phần tin nỗi bật -->
  </div><!-- end row -->
</div>  <!-- end container tin sale - cảm nhận khách hàng - tin nổi bật-->

@endsection



<!-- -----------------phần mobile---------------- -->
@section('mb_content')
  <!-- slider -->
  <div id="slide" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @if(count($sliders)>1)
      @for($i=1 ; $i < count($sliders) ; $i++)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
      @endfor
    @endif
  </ol> -->
  <div class="carousel-inner" style="margin-top: 77px;">
    <div class="carousel-item active">
      <a href="{{$sliders[0]->Url}}">
        <img src="{{$sliders[0]->Mobile}}" class="d-block w-100" alt="Thẩm mỹ viện Phú Khang">
      </a>
    </div>
    @if(count($sliders)>1)
    <?php $i=0;
      foreach($sliders as $slider)
      {
        $i++;
        if($i==1) continue;
     ?>  
    <div class="carousel-item">
      <a href="/{{$slider->Url}}">
        <img src="{{$slider->Mobile}}" class="d-block w-100" alt="Thẩm mỹ viện Phú Khang">
      </a>
    </div>
  <?php } ?>
  @endif  
  </div>
  <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- end slider -->


<!-- form đăng ký -->

  <div class="container">

  <div class="row mb-2">
   <div class="col-8">
     <form method="POST" id="customer">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_hoten" value="Khách Hàng">
        <input type="hidden" name="_noidung" value="Yêu cầu gọi lại">
        <input class="form-control mt-2" type="hidden" name="_currentUrl" value="{{asset('/trang-chu')}}">
        <input type="number" placeholder="* đăng ký ưu đãi" class="rounded-pill form-control mt-2" required="" id="DienThoai" name="_dienthoai">
        </div>
    <div class="col-4"><button type="submit" class="rounded-pill form-control mt-2" style="background: #0e4d6b;color: white;font-weight: bold;">GỬI</button></div>
      </form>
    </div>
<!-- kết thúc form đăng ký -->

    <!-- nội dung hiện thị nhanh -->
    <style>
        .line_auto{
            list-style: none;
            height: 25px;
            font-size: 13px;
        }
    </style>

    <script>
        $(function(){
        var top=-125;
        setInterval(function(){ 
            if (top<=-300) {top=25}
            $('.all_line').css({
                top: top-=25,
            });
            
         }, 5000);
        
    });
    </script>
    <div class="row" style="background: #bdc3c7;padding: 5px 0px;">
        <div class="col-1">
            <i class="fas fa-wifi"></i>
        </div>
        <div class="col-11" style="position: relative;height: 25px; overflow: hidden;">
            <ul class="all_line" style="position:absolute;padding-inline-start:0px;transition: 0.3s;
    ">
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Bấm Mí Hàn Quốc 4.888.000đ</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Cắt Mí Hàn Quốc 5.888.000đ.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Nâng Cung Chân Mày 5.888.000đ.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Lấy Mỡ Bọng Mắt 5.888.000đ</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Xóa Nhăn Vùng Mắt 5.888.000đ</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">070772**** đã đăng ký tư vấn.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">090267**** đã đặt lịch hôm nay.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">089756**** đã đặt lịch hôm nay.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">097256**** đã đăng ký tư vấn.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">036895**** đã đăng ký tư vấn.</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Nâng Mũi Hàn Quốc 5.888.000đ</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Nâng Mũi Bọc Sụn 12.888.000đ</a></li>
                <li class="line_auto"><a href="https://online.depquavietnam.com/lr/chatpre.aspx?id=ndg53329783&lng=en&r=&rf1=&rf2=&p=https%3A//thammyvienphukhang.com/&cid=a0c6e5cf2a104bcc985ab8840bd3f8cd&sid=d7c70fc128214351b879afb3d4974972">Nâng Mũi Sline 24.888.000đ</a></li>
            </ul>
        </div>
            
    </div>
    <!-- kết thúc nội dung hiện thị nhanh -->


    <!-- dịch vụ chính -->
    <style>
        p.text-center {
            font-weight: bold;
            font-size: 12px;
            color: #0e4d6b;
        }
    </style>
  
    <div class="row" style="background:#ecf0f1;padding-top:10px;">
        <div class="col-3">
            <a href="/bam-mi-han-quoc-bi-quyet-cua-nhung-doi-mat-to-tron
">
            <img src="{{asset('public/default/images/mb/dv1.jpg')}}" alt="" width="100%">
            <p class="text-center">Bấm mí <br>Hàn Quốc</p>
        </a>
           
        </div>
        <div class="col-3">
            <a href="/cat-mat-2-mi-ve-dep-toa-sang-den-tu-doi-mat
">
            <img src="{{asset('public/default/images/mb/dv2.jpg')}}" alt="" width="100%">
            <p class="text-center">Cắt mắt <br>2 mí</p>
        </a>
        </div>
        <div class="col-3">
            <a href="/lay-mo-bong-mat-chia-khoa-thanh-xuan-cho-doi-mat
">
            <img src="{{asset('public/default/images/mb/dv3.jpg')}}" alt="" width="100%">
            <p class="text-center">Lấy mỡ <br>bọng mắt</p>
        </a>
        </div>
        <div class="col-3"> 
            <a href="/cong-nghe-chua-sup-mi-tuyet-chieu-giup-mi-mat-rang-ngoi
">
            <img src="{{asset('public/default/images/mb/dv4.jpg')}}" alt="" width="100%">
            <p class="text-center">Điều trị <br>sụp mí</p>
        </a>
        </div>
    </div>
    <div class="row" style="background:#ecf0f1;padding-top:10px;">
        <div class="col-3">
            <a href="/nang-mui-han-quoc-dang-mui-cao-sang-lung-linh-toa-sang
">
            <img src="{{asset('public/default/images/mb/dv5.jpg')}}" alt="" width="100%">
            <p class="text-center">Nâng mũi <br>Hàn Quốc</p>
        </a>
        </div>
        <div class="col-3">
            <a href="/nang-mui-boc-sun-kien-tao-dang-mui-sang-moi-goc-nhin
">
            <img src="{{asset('public/default/images/mb/dv6.jpg')}}" alt="" width="100%">
            <p class="text-center">Nâng mũi <br>Bọc Sụn</p>
        </a>
        </div>
        <div class="col-3">
            <a href="/nang-mui-sline-cham-den-dinh-cao-dang-mui
">
            <img src="{{asset('public/default/images/mb/dv7.jpg')}}" alt="" width="100%">
            <p class="text-center">Nâng mũi <br>Sline</p>
        </a>
        </div>
        <div class="col-3"> 
            <a href="/co-ngay-dang-mui-chuan-voi-nang-mui-filler
">
            <img src="{{asset('public/default/images/mb/dv8.jpg')}}" alt="" width="100%">
            <p class="text-center">Nâng mũi <br>Filler</p>
        </a>
        </div>
    </div>
    <div class="row" style="background:#ecf0f1;padding-top:10px;">
        <div class="col-3">
            <a href="/cong-nghe-phun-xam-tham-my-bi-quyet-to-diem-mat-moc
">
            <img src="{{asset('public/default/images/mb/dv9.jpg')}}" alt="" width="100%">
            <p class="text-center">Phun xăm <br>thẩm mỹ</p>
        </a>
        </div>
        <div class="col-3">
            <a href="/da-khong-tuoi-duoi-lao-hoa-cung-dich-vu-spa-tai-phu-khang
">
            <img src="{{asset('public/default/images/mb/dv10.jpg')}}" alt="" width="100%">
            <p class="text-center">Chăm sóc <br> da Spa</p>
        </a>
        </div>
        <div class="col-3">
        <a href="/cong-nghe-giam-mo-quang-dong-cho-ban-eo-thon-dang-chuan
">
            <img src="{{asset('public/default/images/mb/dv11.jpg')}}" alt="" width="100%">
            <p class="text-center">Giảm mỡ <br>thon dáng</p>
        </a>
        </div>
        <div class="col-3"> 
        <a href="/tiem-cay-mo-tu-than-phuong-phap-so-huu-voc-dang-dep-toan-dien
">
            <img src="{{asset('public/default/images/mb/dv12.jpg')}}" alt="" width="100%">
            <p class="text-center">Cấy mỡ <br>tự thân</p>
        </a>
        </div>
    </div>
  </div>
<!-- kết thúc dịch vụ chính -->
<!-- bác sĩ Nguyễn Văn Thạch -->
<div class="container mt-3">
    <img src="{{asset('public/default/images/mb/hinhbacsi.jpg')}}" alt="Nguyễn Văn Thạch" width="100%" class="shadow-sm bg-white rounded">
</div>
<div class="container mt-3">  
    <img src="{{asset('public/default/images/mb/hinhbacsi1.jpg')}}" alt="Nguyễn Văn Thạch" width="100%" class="shadow-sm bg-white rounded">
</div>
<!-- kết thúc bác sĩ Nguyễn Văn Thạch -->


<!-- hiệu quả khách hàng -->
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-1 col-1"></div>
        <div class="col-sm-10 col-10">
            <img id="style_img" src="{{asset('public/default/images/mb/HieuQuaKhachHang.png')}}" width="100%" />
        </div>
        <div class="col-sm-1 col-1"></div>
    </div>
  
  <div id="hqkh" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#hqkh" data-slide-to="0" class="active">1</li>
        <li data-target="#hqkh" data-slide-to="1">2</li>
        <li data-target="#hqkh" data-slide-to="2">3</li>
        <li data-target="#hqkh" data-slide-to="3">4</li>
        <li data-target="#hqkh" data-slide-to="4">5</li>
        <li data-target="#hqkh" data-slide-to="5">6</li>
        <li data-target="#hqkh" data-slide-to="6">7</li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('public/default/images/mb/moi_hieu_qua_khach_hang-01.jpg')}}" class="d-block w-100" alt="hiệu quả khách hàng">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moi_hieu_qua_khach_hang-02.jpg')}}" class="d-block w-100" alt="hiệu quả khách hàng">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moi_hieu_qua_khach_hang-03.jpg')}}" class="d-block w-100" alt="hiệu quả khách hàng">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moi_hieu_qua_khach_hang-04.jpg')}}" class="d-block w-100" alt="hiệu quả khách hàng">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moi_hieu_qua_khach_hang-05.jpg')}}" class="d-block w-100" alt="hiệu quả khách hàng">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moi_hieu_qua_khach_hang-06.jpg')}}" class="d-block w-100" alt="hiệu quả khách hàng">
        </div>
      </div>
      <a class="carousel-control-prev" href="#hqkh" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#hqkh" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>     
  </div>
<!-- kết thúc hiệu quả khách hàng -->


<!-- thẩm mỹ viện uy tín tại tp.hcm-->
<div class="container">
    <div class="row text-center mt-5">
        <div class="col-md-12 col-sm-12 col-12">
            <img alt="phu-khang"style="width: 80%" src="{{asset('public/default/images/mb/visaochonphukhang_title.png')}}">
        </div>
    </div>
    
    <div id="thammyvienuytin" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#thammyvienuytin" data-slide-to="0" class="active">1</li>
        <li data-target="#thammyvienuytin" data-slide-to="1">2</li>
        <li data-target="#thammyvienuytin" data-slide-to="2">3</li>
        <li data-target="#thammyvienuytin" data-slide-to="3">4</li>
        <li data-target="#thammyvienuytin" data-slide-to="4">5</li>
        <li data-target="#thammyvienuytin" data-slide-to="5">6</li>
        <li data-target="#thammyvienuytin" data-slide-to="6">7</li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('public/default/images/mb/moitruongvien1.jpg')}}" class="d-block w-100" alt="môi trường viện 3">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moitruongvien2.jpg')}}" class="d-block w-100" alt="môi trường viện 5">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moitruongvien3.jpg')}}" class="d-block w-100" alt="môi trường viện 6">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moitruongvien4.jpg')}}" class="d-block w-100" alt="môi trường viện 6">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moitruongvien5.jpg')}}" class="d-block w-100" alt="môi trường viện 6">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/moitruongvien6.jpg')}}" class="d-block w-100" alt="môi trường viện 6">
        </div>
      </div>
      <a class="carousel-control-prev" href="#thammyvienuytin" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#thammyvienuytin" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>    
</div>
<!-- thẩm mỹ viện uy tín tại tp.hcm-->


<!-- môi trường viện -->
<div class="container mt-5">
  <div class="row">
    <img src="{{asset('public/default/images/mb/visaochonphukhang_title1.png')}}" alt="môi trường viện" width="100%">
  </div>
  
    <div id="moitruongvien" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#moitruongvien" data-slide-to="0" class="active">1</li>
        <li data-target="#moitruongvien" data-slide-to="1">2</li>
        <li data-target="#moitruongvien" data-slide-to="2">3</li>
        <li data-target="#moitruongvien" data-slide-to="3">4</li>
        <li data-target="#moitruongvien" data-slide-to="4">5</li>
        <li data-target="#moitruongvien" data-slide-to="5">6</li>
        <li data-target="#moitruongvien" data-slide-to="6">7</li>
        <li data-target="#moitruongvien" data-slide-to="7">8</li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('public/default/images/mb/1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/3.jpg')}}" class="d-block w-100" alt="...">
        </div>
         <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/4.jpg')}}" class="d-block w-100" alt="...">
        </div>
         <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/5.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/6.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/7.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('public/default/images/mb/8.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#moitruongvien" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#moitruongvien" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<!-- end môi trường viện -->


<!-- sinh nhật Phú Khang -->
<style>
  .carousel-indicators.sinhnhat li{
      border-top: none;
      border-bottom: none;
      margin-top: 10px;
  }
.carousel-indicators.sinhnhat{
  
  top: 100%;
}
.carousel-indicators.sinhnhat .active{
  background-color: #13506d!important;
}
.carousel-indicators.sinhnhat li{
  text-indent: unset;
  width: 20px;
  height:20px;
  border-radius: 0px!important;
  background-color: #2196F3;
  text-align: center;
  color: #fff;
}
</style>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12 col-12">
            <div class="style_line">SINH NHẬT PHÚ KHANG</div>
        </div>
    </div>
    
    <div id="sinhnhat" class="carousel slide mt-2" data-ride="carousel" >
    <!-- data-interval="false" -->
    <ol class="carousel-indicators sinhnhat">
      <li data-target="#sinhnhat" data-slide-to="0" class="active">1</li>
      <li data-target="#sinhnhat" data-slide-to="1">2</li>
      <li data-target="#sinhnhat" data-slide-to="2">3</li>
      <li data-target="#sinhnhat" data-slide-to="3">4</li>
      <li data-target="#sinhnhat" data-slide-to="4">5</li>
      <li data-target="#sinhnhat" data-slide-to="5">6</li>
      <li data-target="#sinhnhat" data-slide-to="6">7</li>
      <li data-target="#sinhnhat" data-slide-to="7">8</li>
      <li data-target="#sinhnhat" data-slide-to="8">9</li>
      <li data-target="#sinhnhat" data-slide-to="9">10</li>
      <li data-target="#sinhnhat" data-slide-to="10">11</li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 100%" src="{{asset('public/default/images/mb/mb-0.jpg')}}"/>
    </div>
    <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-1.jpg')}}"/>
    </div>
    <div class="carousel-item">
      <img style="width: 100%" src="{{asset('public/default/images/mb/mb-2.jpg')}}"/>
    </div>
    <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-3.jpg')}}"/>
    </div>
    <div class="carousel-item">
      <img style="width: 100%" src="{{asset('public/default/images/mb/mb-4.jpg')}}"/>
    </div>
    <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-5.jpg')}}"/>
    </div>
    <div class="carousel-item">
      <img style="width: 100%" src="{{asset('public/default/images/mb/mb-6.jpg')}}"/>
    </div>
    <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-7.jpg')}}"/>
    </div>
     <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-8.jpg')}}"/>
    </div>
     <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-9.jpg')}}"/>
    </div>
     <div class="carousel-item">
     <img style="width: 100%" src="{{asset('public/default/images/mb/mb-10.jpg')}}"/>
    </div>
  </div>
  <a class="carousel-control-prev" href="#sinhnhat" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#sinhnhat" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>     
  </div>
</div>
<!-- kết thúc sinh nhật Phú Khang--> 


<!-- Tin tức Sale -->

<div class="container">
  <div class="row mt-5">
      <div class="col-sm-12 col-12">
          <div class="style_line">Ưu đãi mới nhất</div>
      </div>
  </div>
  <a href="/{{$salePosts[0]->Slug}}">
    <div class="row mt-2">
        <div class="col-4"><img src="{{$salePosts[0]->Image}}" alt="" width="100%"></div>
        <div class="col-8" style="padding-right: 0px;padding-left: 0px;font-size: 12px">
          <h6>{{$salePosts[0]->Title}}</h6>
          <div class="text-truncate text-decoration-none">{{$salePosts[0]->Description}}</div>
        </div>
    </div>
  </a>
</div>
<!-- kết thúc tin tức Sale -->


<!-- Cảm nhận khách hàng -->
<style>
  .card{
    border:none;
  }
  .card-header{
    margin-top: 10px;
    padding:0px;
    cursor: pointer;
  }
  .btn-link{
    text-decoration: none!important;
    font-size: 12px;
  }
  .card-body{
    padding:0px;
  }
</style>
<div class="container mt-2">
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
          <button class="btn btn-link collapsed text-left" >
            <i class="fas fa-comment-dots"></i> Thu Hà hóa "thiên thần" trong 90p tại Phú Khang
          </button>
        
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <div class="container">
            <div class="row" style="padding-left:0px;padding-right:0px;">
              <div class="col-12 mt-1" style="padding-left:0px;padding-right:0px;"><img src="{{asset('public/default/images/mb/cnkh_mui1.jpg')}}" alt="" width="100%"></div>
            </div>
            <div class="row">
              <div class="col-12" style="padding-left:0px; padding-right:0px;">
                <p class="text-justify"><b>Trước</b>: <i>Mũi to, không thon gọn, sống mũi bè khiến khuôn mặt ít có thần là nhược điểm khiến Thu Hà không tự tin khi giao tiếp.<br>
                    <b>Sau: </b>Sống mũi cao thon gọn, không bị bóng đỏ hay lệch.<br>
                => Giờ đây Thu Hà đã có thể khoe sắc với dáng mũi chuẩn hotgirl mà không còn phải lo lắng.</i></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
          <button class="btn btn-link collapsed text-left" >
            <i class="fas fa-comment-dots"></i> Cô gái Lan Thanh sở hữu nét mí xuất thần.
          </button>
        
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <div class="container">
            <div class="row" style="padding-left:0px;padding-right:0px;">
              <div class="col-12 mt-1" style="padding-left:0px;padding-right:0px;"><img src="{{asset('public/default/images/mb/cnkh_mat1.jpg')}}" alt="" width="100%"></div>
            </div>
            <div class="row">
              <div class="col-12" style="padding-left:0px; padding-right:0px;">
                <p class="text-justify"><b>Trước</b>: <i>Ngũ quan tương đối hài hòa duy nhỉ có đôi mắt mí lót và các mí còn khá nông khiến Lan Thanh không gây được nhiều ấn tượng. Biết tới công nghệ Bấm Mí Classic từ 1 người bạn. Lan Thanh đã trải nghiệm...<br>
                <b>Sau: </b>7 ngày hồi phục đã được bù đắp bằng đôi mí rõ nét. Đôi mắt Lan Thanh thêm phần trẻ trung nhờ vào Bấm Mí Classic tại Phú Khang. Cô gái trẻ thêm phần tự tin với cuộc sống.<br>
                => Đừng để đôi mắt 1 mí cản trở vẻ đẹp của bạn.</i></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div> 

    <div class="card">
      <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
          <button class="btn btn-link collapsed text-left" >
            <i class="fas fa-comment-dots"></i> Mỹ Thu - Nâng mũi thay đổi cuộc đời tôi.
          </button>
        
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          <div class="container">
            <div class="row" style="padding-left:0px;padding-right:0px;">
              <div class="col-12 mt-1" style="padding-left:0px;padding-right:0px;"><img src="{{asset('public/default/images/mb/cnkh_mui2.jpg')}}" alt="" width="100%"></div>
            </div>
            <div class="row">
              <div class="col-12" style="padding-left:0px; padding-right:0px;">
                <p class="text-justify"><b>Trước</b>: <i>Sống mũi thấp, cánh mũi to bè khiến khuôn mặt của Thu không có gì nổi bật. Điều này là lý do khiến Thu quyết định tìm đến Phú Khang để thực hiện Nâng mũi S-line.<br>
                <b>Sau: </b>Thu đã sở hữu dáng mũi S-line mềm mại tự nhiên, khi nhìn và sờ nắn cho cảm giác như thật.<br>
                => Kết quả thẩm mỹ hơn mong đợi khiến Mỹ Thu hài lòng vì đã tin tưởng đúng chỗ để trao gửi nhan sắc mình."</i></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div> 

    <div class="card">
      <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
          <button class="btn btn-link collapsed text-left" >
            <i class="fas fa-comment-dots"></i> Ngọc Giang - Sự đắn đo đã được đền đáp.
          </button>
        
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
          <div class="container">
            <div class="row" style="padding-left:0px;padding-right:0px;">
              <div class="col-12 mt-1" style="padding-left:0px;padding-right:0px;"><img src="{{asset('public/default/images/mb/cnkh_mat2.jpg')}}" alt="" width="100%"></div>
            </div>
            <div class="row">
              <div class="col-12" style="padding-left:0px; padding-right:0px;">
                <p class="text-justify"><b>Trước</b>: <i>Đôi mắt với mí không rõ nét, không đều. Điều này làm cho gương mặt của Giang chưa có điểm nhấn. Giang đắn đo khi quyết định thay đổi để trông xinh đẹp hơn. Sự đắn đo đã được đền đáp khi Giang thực hiện Cắt mí mắt tại TMV Phú Khang<br>
                <b>Sau: </b>Giang đã sở hữu nếp mí tự nhiên, phù họp với gương mặt mà Giang mong muốn<br>
                => Nếu chần chừ, đã không thể khiến cho gương mặt trở nên rạng rỡ hơn.</i></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div> 

    <div class="card">
      <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <span style="float: right;padding-top: 5px; padding-right: 10px;color: gray;"><i class="fas fa-angle-down"></i></span>
          <button class="btn btn-link collapsed text-left" >
            <i class="fas fa-comment-dots"></i> Quyết định thay đổi cuộc sống Phương Vy. 
          </button>
        
      </div>
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
        <div class="card-body">
          <div class="container">
            <div class="row" style="padding-left:0px;padding-right:0px;">
              <div class="col-12 mt-1" style="padding-left:0px;padding-right:0px;"><img src="{{asset('public/default/images/mb/cnkh_mui3.jpg')}}" alt="" width="100%"></div>
            </div>
            <div class="row" style="padding-left:0px;padding-right:0px;">
              <div class="col-12" style="padding-left:0px; padding-right:0px;">
                <p class="text-justify"><b>Trước</b>: <i>Dáng mũi to bè, làm ảnh hưởng tới vẻ đẹp ngũ quan khuôn mặt Vy nhưng vì chưa đủ tuổi nên mãi đến khi 19 tuổi, Vy mới quyết định nâng mũi tại Phú Khang để cải thiện nhan sắc mình.<br>
                <b>Sau: </b>Sau khi áp dụng phương pháp Nâng mũi Diamond Line tại TMV Phú Khang. Vy hoàn toàn biến thành cô gái trẻ trung đáng yêu với dáng mũi cao thanh thoát, sống mũi thẳng tắp.<br>
                => Vy hài lòng vì đã quyết định đúng đắn và cảm ơn Phú Khang đã đồng hành cùng Vy trong thời gian Vy sử dụng dịch vụ.</i></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div> 

  </div><!-- end accordion -->
</div>
<!-- cảm nhận khách hàng -->


<!-- tin tức nổi bật -->
<div class="container">
  <div class="row mt-3 mb-2">
      <div class="col-sm-12 col-12">
          <div class="style_line">Tin tức nổi bật</div>
      </div>
  </div>
  <div class="row">
    @foreach($newPosts as $newPost)
    
    <div class="col-6 mb-2"><a href="/{{$newPost->Slug}}">
      <img src="{{$newPost->Image}}" alt="" width="100%" class="rounded"></a>
      <h5 class="text-muted" style="font-size: 12px;text-align: center;margin-top: 7px;">{{$newPost->Title}}</h5>
    </div>

    @endforeach
  </div>
  
</div>
<!-- kết thúc tin tức nổi bật -->
@endsection
<!-- ----kết thúc phần section mobile------ -->

@section('bottom_script')
<script type="text/javascript">
    $('#customer').on('submit',function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#DienThoai').val();
            
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false || mobile.length < 10 || mobile.length >10)
            {
                alert('Số điện thoại không hợp lệ !');
            }
            else{
                
                var url="{{URL::to('/ajax/form-saved')}}";
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('.customer_success').modal('show');
                        $('.popuppc').modal('hide');
                        document.getElementById("customer").reset();             
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


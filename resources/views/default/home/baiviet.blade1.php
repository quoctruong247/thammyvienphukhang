@extends('default.home')
@section('title',$post[0]->Title)
@section('img',$post[0]->Image)
@section('slug',$post[0]->Slug)
@section('description',$post[0]->Description)
@section('pc_content')
<div class="container">
	<div class="row mt-1">
		<div class="col-md-9">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="{{route('trang-chu')}}"><i class="fas fa-home"></i> Trang chủ</a></li>
			    <li class="breadcrumb-item"><a href="/tin-tuc/{{$post[0]->categories->slug}}">{{$post[0]->categories->name}}</a></li>
			    <li class="breadcrumb-item active" aria-current="page">{{$post[0]->Title}}</li>
			  </ol>
			</nav>
			<!-- end breadcrum -->
           
            <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
               <img src="{{asset('public/default/images/pc/messeger.jpg')}}" alt="ưu đãi" width="100%" class="mb-3"> 
            </a>
           
			<!-- nội dung bài viết -->
			<h1 class="post_title">{{$post[0]->Title}}</h1>
			<?=$post[0]->Content ?>	
			
            <!--form đăng ký-->
    <div id="scroll_form_register"></div>
    <div class="row mt-2">
       <div class="thongbao pl-2 col-12" style="background: #2980b9;color: white;">* Kết quả tùy theo cơ địa.</div>
        <div class="col-md-6 col-sm-12 col-12 pl-0 pr-0">
        <img id="style_img" src="{{asset('public/default/images/pc/5lydo.jpg')}}" width="100%">
        <!-- carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('public/default/images/pc/moitruongvien1.jpg')}}" class="d-block w-100" >
            </div>
            
            <div class="carousel-item">
              <img src="{{asset('public/default/images/pc/moitruongvien2.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/pc/moitruongvien3.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/pc/moitruongvien4.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/pc/moitruongvien5.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/pc/moitruongvien6.jpg')}}" class="d-block w-100" >
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- end carousel -->
    </div>
    <div class="col-md-6 col-sm-12 col-12" id="post_bg_form_regis">
        
        <form method="POST" id="customer">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="text-center mt-3">
                <p style="font-size: 20px;color: white;font-weight: bold;">ĐẶT LỊCH HẸN</p>
            </div>
            <div class="row mt-5">
                <input class="form-control mt-2" type="hidden" name="_currentUrl" value="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <input name="_hoten" type="text" placeholder="* Họ tên" required maxlength="50" minlength="2" class="rounded-pill form-control" id="_hoten"/>
                </div>
            </div>
            <div class="row mt-3">
                 <div class="col-md-12 col-sm-12 col-12 text-center">
                    <input class="input_phone rounded-pill form-control" name="_dienthoai" type="number" placeholder="* Số điện thoại" required/>
                </div>
            </div>
    
            <div class="row mt-3">
            	<div class="col-md-12 col-sm-12 col-12 text-center">
                <select class="rounded-pill form-control" id="_noidung" name="_noidung" style="background: white;border-color: #d4eff4;">
                <option value="no_chon" selected disabled>Chọn dịch vụ ưu đãi của Phú Khang</option>
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

            <div class="row mt-3 pb-2">
                <div class="col-md-12 col-sm-12 col-10 text-center">
                    <input name="btn_dangky" type="submit" value="Đặt hẹn" class="btn btn-primary" />
                </div>
            </div>
        </form>
                
        </div>
    </div>
<!--end form đăng ký-->
<!--tin tức liên quan -->
<?php 
	use App\Http\Controllers\HomeController;
	$categories = HomeController::getCategory($post[0]->categories->id);
 ?>
@if(count($categories)>0)
	<div class="row mt-4">
	    <p class="col-md-12 col-sm-12 col-12 pl-0 style_line_tinlienquan title_tintuclienquan">DỊCH VỤ LIÊN QUAN
	    </p>
	</div>
	<div class="row mt-1" style="background: #d4dadd;">
   @foreach ($categories as $key) 
   <div class="col-md-6 col-sm-6 col-12 title_thongtinbaiviet">
		<a href="/{{$key->Slug}}">
		    <div class="row" style="height: 50px;">
		        <h4 class="col-md-11 col-sm-11 col-11 mt-1 text-left pl-3 title_thongtintieude"><i class="fas fa-wifi"></i> &nbsp;
		            {{$key->Title}}
		        </h4>
		    </div>
		</a>
	</div>
    @endforeach        
	</div>
@endif
<!--end tin tức liên quan-->

<!-- kết thúc nội dung bài viết -->
		</div><!-- col-md-9 -->
		<div class="col-md-3">
			@include('default.includes.right')
		</div><!-- col-md-3 -->
	</div>
</div>
@include('default.extend.mat_pc')
@endsection<!-- end section pc -->




<!-- giao diện mobile -->
@section('mb_content')
<div class="container">
	<nav aria-label="breadcrumb" style="margin-top: 90px;">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{route('trang-chu')}}"><i class="fas fa-home"></i> Trang chủ</a></li>
	    <li class="breadcrumb-item"><a href="/tin-tuc/{{$post[0]->categories->slug}}">{{$post[0]->categories->name}}</a></li>
	    <li class="breadcrumb-item active" aria-current="page">{{$post[0]->Title}}</li>
	  </ol>
	</nav>
</div>
<div class="container">
    
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
    <div class="row sticky-top" style="background: #bdc3c7;padding: 5px 0px;">
        <div class="col-1">
            <i class="fas fa-wifi"></i>
        </div>
        <div class="col-11 " style="position: relative;height: 25px; overflow: hidden;">
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
		<!-- tiêu đề -->
		<h1 class="col-12 post_title">{{$post[0]->Title}}</h1>
		<!-- kết thúc tiêu đề -->
		<!-- content -->
		<?=$post[0]->Content ?>	
</div>
	<!-- kết thúc content -->
	
    <!--form đăng ký-->
<div class="container">
    <div class="row mt-2">
       <div class="thongbao pl-2 col-12" style="background: #2980b9;color: white;">* Kết quả tùy theo cơ địa.</div>
        <div class="col-md-6 col-sm-12 col-12 pl-0 pr-0">
        <img id="style_img" src="{{asset('public/default/images/mb/5lydo.jpg')}}" width="100%">
        <!-- carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('public/default/images/mb/moitruongvien1.jpg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/mb/moitruongvien2.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/mb/moitruongvien3.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/mb/moitruongvien4.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/mb/moitruongvien5.jpg')}}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/default/images/mb/moitruongvien6.jpg')}}" class="d-block w-100" >
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- end carousel -->
    </div>
   <a href="https://online.depquavietnam.com/LR/Chatpre.aspx?id=NDG53329783&lng=en" target="_blank">
                   <img src="{{asset('public/default/images/mb/messeger.jpg')}}" alt="ưu đãi" width="100%" class="mb-3"> 
            </a>
    <div class="col-md-6 col-sm-12 col-12" id="post_bg_form_regis">
        
        <form method="POST" id="customer">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="text-center mt-3">
            <p style="font-size: 20px;color: white;font-weight: bold;">ĐẶT LỊCH HẸN</p>
        </div>
        <div class="row mt-2">
            <input class="form-control mt-2" type="hidden" name="_currentUrl" value="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
            <div class="col-md-12 col-sm-12 col-12 text-center">
                <input  name="_hoten" type="text" placeholder="* Họ tên" required maxlength="50" minlength="2" class="rounded-pill form-control" />
            </div>
        </div>
        <div class="row mt-2">
             <div class="col-md-12 col-sm-12 col-12 text-center">
                <input  class="input_phone rounded-pill form-control" name="_dienthoai" type="number" placeholder="* Số điện thoại" required/>
            </div>
        </div>
    
       <div class="row mt-2">       
        <div class="col-sm-12 col-12 text-center">
            
	        <select class="form-control rounded-pill" id="_noidung" name="_noidung" style="background: white;border-color: #d4eff4;">
	        <option value="no_chon" selected disabled>Chọn dịch vụ ưu đãi của Phú Khang</option>
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

        <div class="row mt-3 pb-2">
            <div class="col-md-1 col-sm-1 col-1"></div>
            <div class="col-md-10 col-sm-10 col-10 text-center">
                <input name="btn_dangky" type="submit" value="Đặt hẹn" class="btn btn-primary" />
            </div>
        </div>
    </form>
                
    </div>
  </div>
</div>

<!--end form đăng ký-->

<!--tin tức liên quan -->
<div class="container">
@if(count($categories)>0)
	<div class="row mt-4">
	    <p class="col-md-12 col-sm-12 col-12 pl-0 style_line_tinlienquan title_tintuclienquan">DỊCH VỤ LIÊN QUAN
	    </p>
	</div>
	<div class="row mt-1" style="background: #d4dadd;">
   @foreach($categories as $key)

	<div class="col-sm-12 col-12 title_thongtinbaiviet">
	    <a href="/{{$key->Slug}}">
	        <div class="row">
	            <h4 class="col-md-12 col-sm-12 col-12 mt-1 text-left pl-3 title_thongtintieude" style="font-size:14px;">
	                <i class="fas fa-wifi" style="font-size:11px;margin-right:5px;color:#096089"></i>{{$key->Title}}
	            </h4>
	        </div>
	    </a>
	</div>
	@endforeach      
	</div>
@endif
</div>
<!--end tin tức liên quan-->
<!-- include modal Mắt, Mũi, Cảm nhận khách hàng -->
@include('default.extend.mat_mb')
<!-- kết thúc include modal Mắt, Mũi, Cảm nhận khách hàng -->
@endsection <!-- kết thúc section cho phần mobile -->

@section('bottom_script')
<script type="text/javascript">
    $('#customer').on('submit',function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('.input_phone').val();
            
        var nd = $('#_noidung').val();
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false || mobile.length < 10 || mobile.length >10)
            {
                alert('Số điện thoại không hợp lệ !');
            }
            else if(nd=="no_chon"){
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

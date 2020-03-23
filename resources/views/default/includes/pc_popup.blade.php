<!-- model popup -->
    <script type="text/javascript">
    // $(window).on('load',function(){
    //     $('.popupmb').modal('show');
    // });
    </script>
    <style>
        .modal-content{
            background-color: #fff0 !important;
            border: none;
        }
        #HoTen,
        #DienThoai{
            width: 100%;
        }
        .form-group{
            background-color: #fff0!important;
        }
    </style>


<div class="modal fade popupmb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="position: relative;z-index: 1;">
    
    <img src="{{asset('public/default/images/mb/popup-mb.png')}}" width="100%" data-dismiss="modal">
    <div class="container-fluid" style="position: absolute;z-index: 2;top: 52%;right: -15%;">
        <div class="row" >
            <div class="col-md-10 col-10 "></div>
            <div class="col-md-2 col-2 ">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="cursor: pointer;position: absolute;top: -211px;right: 72px;">
                  <span aria-hidden="true" class=" text-white">&times</span>
                </button> -->
               
            </div>
        <div class="col-md-8 col-sm-8 col-xs-8 col-8">
         <form method="POST" id="popupdangky">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
              <input class="form-control mt-2" type="hidden" name="_currentUrl" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
            <div class="form-group">
                <div class="row" style="margin-top: 70px;">
                    
                    <div class="col-sm-12 col-xs-12 col-12 col-md-12">
                        <input type="text" class="form-control rounded-pill" placeholder="* Họ và tên" required="" name="_hoten" id="HoTen">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    
                    <div class="col-sm-12 col-xs-12 col-12 col-md-12">
                        <input type="number" class="form-control rounded-pill input_phone" placeholder="* Điện thoại" required="" name="_dienthoai" id="DienThoai">
                    </div>
                </div>
                <div class="row" style="margin-top: 17px;">
                   
                    <div class="col-sm-12 col-xs-12 col-12 col-md-12">
                        <button type="submit" style="background: transparent;border:none;">
                            <img src="{{asset('public/default/images/mb/popup-dangky.png')}}" width="70%" style="border:none;">
                        </button>
                    </div>
                    
                </div>
            </div>
        </form>
        </div>
    </div>
    
        </div>
      </div>
    </div>
</div>
<!-- popup đăng ký thành công -->
<div class="modal fade popupdangky_success" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="margin-top: 50%;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <img src="{{asset('public/default/images/mb/popup_dang_ki_thanh_cong.jpg')}}" data-dismiss="modal" width="100%">
    </div>
  </div>
</div>
<!-- endpopup đăng ký thành công -->
    <!-- end model popup -->
    
    @section('bottom_script')
    
    <script type="text/javascript">
    $('#popupdangky').on('submit',function(e){
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
                
                var url="{{URL::to('/ajax/form-saved-phone')}}";
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data) {

                        $('.popupdangky_success').modal('show');
                        $('.popupmb').modal('hide');
                        document.getElementById("popupdangky").reset();             
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
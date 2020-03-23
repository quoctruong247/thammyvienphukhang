<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('public/chuyende/uudaivang/pc/favicon.png')}}" type="image/gif">
    <script src="{{asset('public/default/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Thẩm mỹ viện Phú Khang - săn ưu đãi kép</title>
    <style>
     .thoigian li {
      display: inline-block;
      list-style: none;
      border: 1px solid #fff;
      margin: 0px 10px;
      padding: 0px 10px;
      border-radius: 5px;
      background-color: #fff;
      color: #000;
      font-weight: bold;
      font-size: 45px;
      width: 60px; 
      font-family: sans-serifif;
    }
    .thoigian{
      margin-left: -47px;
    }

    .thoigianmb li {
      display: inline-block;
      list-style: none;
      border: 1px solid #fff;
      margin: 0px 10px;
      padding: 0px 10px;
      border-radius: 5px;
      background-color: #fff;
      color: #000;
      font-weight: bold;
      font-size: 35px;
      width: 60px; 
      font-family: sans-serifif;
    }
    .thoigianmb{
      margin-left: -30px;
    }
    </style>
  </head>
  
  <body>
    <!-- giao diện pc -->
    <div class="d-lg-block d-xs-none d-sm-none d-none"> 
      <div class="container-fluid">
      
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc1.jpg')}}" alt="" width="100%">
          <div class="container-fluid mt-2" style="position: absolute;z-index: 2; bottom: 10%;">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-5 text-center text-white" id="thoigian"></div>
              <div class="col-md-5 text-white mt-5">
                <h6>Nhận ưu đãi giờ vàng - Hoàn tiền triệu.</h6>
                <form method="POST" id="popupdangky_pc">
                  <input type="hidden" name="_token" value="{{csrf_token()}}" />
                  <input type="hidden" name="_hoten_pc" value="Khách hàng Phú Khang">
                  <input type="hidden" name="_noidung_pc" value="Yêu cầu gọi lại">
                  <input class="form-control mt-2" type="hidden" name="_currentUrl_pc" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
                  <input type="text" class="rounded" placeholder="&nbsp;nhập SĐT nhận ưu đãi" style="font-style: italic;width: 200px;height: 35px;" required="" name="_dienthoai_pc" id="DienThoai_PC">
                  <!-- <button type="submit" style="background: transparent;border:none;">
                    <img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-dangky.png')}}" width="100%" style="border:none;">
                  </button> -->
                  <input type="submit" class="rounded" value="Nhận mã" style="background-color: red;color: white;height: 35px;">
                </form>
              </div>
            </div>
          </div> 
        </div>

        <div class="row"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc2.jpg')}}" alt="" width="100%"></div>

        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc3.jpg')}}" alt="" width="100%">
           <div class="container-fluid" style="position: absolute;z-index: 2; bottom: 12%;">
            <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-2 text-right"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-dangky.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-2 text-right"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-phone.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>

        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc4.jpg')}}" alt="" width="100%">
          <div class="container-fluid" style="position: absolute;z-index: 2; bottom: 15%;">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-2 text-right"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-dangky.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-2 text-right"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-phone.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-5"></div>
            </div>
          </div>
        </div>

        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc5.jpg')}}" alt="" width="100%">
           <div class="container-fluid" style="position: absolute;z-index: 2; bottom: 17%;">
            <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-2 text-right"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-dangky.png')}}" alt="" width="70%"></a></div>
      
              <div class="col-md-2 text-right"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-phone.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>

        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc6.jpg')}}" alt="" width="100%" >
          <div class="container-fluid" style="position: absolute;z-index: 2; bottom: 15%; ">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-2 text-right"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-dangky.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-2 text-right"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/btn-phone.png')}}" alt="" width="70%"></a></div>
              <div class="col-md-5"></div>
            </div>
          </div>
        </div>
        <style>
          .carousel-indicators{
            top: -50%;
          }
          .carousel-indicators li{
            width: 170px;
            height: 30px;
            text-indent: unset;
            color: white;
            background-color: blue;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            padding:5px;
          }
        </style>
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/pc/pc7.jpg')}}" alt="" width="100%" >
          <div class="container-fluid" style="position: absolute;z-index: 2; bottom: 30%;">
            <div class="row">
              <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">Thẩm mỹ Mắt</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">Thẩm mỹ Mũi</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">TM Không Phẩu Thuật</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3">Spa Cao Cấp</li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5.2-mui-1.png')}}" class="d-block w-100" alt="Thẩm mỹ Mắt"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5.2-mui-2.png')}}" class="d-block w-100" alt="Thẩm mỹ Mắt"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5.2-mui-3.png')}}" class="d-block w-100" alt="Thẩm mỹ Mắt"></div>                     
                      </div>
                    </div>  
                  </div>

                  <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5.1-mat-1.png')}}" class="d-block w-100" alt="Thẩm mỹ Mũi"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5.1-mat-2.png')}}" class="d-block w-100" alt="Thẩm mỹ Mũi"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5.1-mat-3.png')}}" class="d-block w-100" alt="Thẩm mỹ Mũi"></div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5-kpt-1.png')}}" class="d-block w-100" alt="TM Không phẩu thuật"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5-kpt-2.png')}}" class="d-block w-100" alt="TM Không phẩu thuật"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5-kpt-3.png')}}" class="d-block w-100" alt="TM Không phẩu thuật"></div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5-spa-1.png')}}" class="d-block w-100" alt="Spa Cao Cấp"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5-spa-2.png')}}" class="d-block w-100" alt="Spa Cao Cấp"></div>
                        <div class="col-md-4"><img src="{{asset('public/chuyende/sanuudaikep/images/pc/5-spa-3.png')}}" class="d-block w-100" alt="Spa Cao Cấp"></div>
                      </div>
                    </div>
                  </div>

                </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- end container  -->

        </div><!-- end row -->
        
        <div class="row">
          <div class="container-fluid" style="background-color: #00397c;">
            <div class="container">
          <div id="cnkh" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-1.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-2.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-3.jpg')}}" class="d-block w-100" alt="...">
              </div> 
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-4.jpg')}}" class="d-block w-100" alt="...">
              </div> 
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-5.jpg')}}" class="d-block w-100" alt="...">
              </div> 
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-6.jpg')}}" class="d-block w-100" alt="...">
              </div> 
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-7.jpg')}}" class="d-block w-100" alt="...">
              </div> 
              <div class="carousel-item">
                <img src="{{asset('public/chuyende/sanuudaikep/images/pc/cnkh-8.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#cnkh" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#cnkh" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    <!-- giao diện pc -->



    <!-- giao diện mobile -->
    <div class="d-lg-none d-xs-block d-sm-block d-block">
      <div class="container">
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-1.png')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
          <div class="container" style="position: absolute;z-index: 2;bottom: 2%;">
            <div class="row">
              <div class="col-12" id="thoigianmb"></div>
            </div>
            <div class="col-md-4 text-white mt-1">
                <h6>Nhận ưu đãi giờ vàng - Hoàn tiền triệu.</h6>
                <form method="POST" id="popupdangky_mb">
                  <input type="hidden" name="_token" value="{{csrf_token()}}" />
                  <input type="hidden" name="_hoten_mb" value="Khách hàng Phú Khang">
                  <input type="hidden" name="_noidung_mb" value="Yêu cầu gọi lại">
                  <input class="form-control mt-2" type="hidden" name="_currentUrl_mb" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
                  <input type="text" class="rounded" placeholder="&nbsp;nhập SĐT nhận ưu đãi" style="font-style: italic;width: 200px;height: 35px;" id="DienThoai_MB" name="_dienthoai_mb">
                <input type="submit" class="rounded" value="Nhận mã" style="background-color: red;color: white;height: 35px;">
                </form>
              </div>
          </div>
        </div>

        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-2.jpg')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
          <div class="container" style="position: absolute;z-index: 2;bottom: 10%;">
            <div class="row">
              
            </div>
          </div>
        </div>
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-3.jpg')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
          <div class="container" style="position: absolute;z-index: 2;bottom: 5%;">
            <div class="row">
              <div class="col-xs-2 col-sm-2 col-2"></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-dangky.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-phone.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-2 col-sm-2 col-2"></div>
            </div>
          </div>
        </div>
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-4.jpg')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
         <div class="container" style="position: absolute;z-index: 2;bottom: 6%;">
            <div class="row">
              <div class="col-xs-2 col-sm-2 col-2"></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-dangky.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-phone.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-2 col-sm-2 col-2"></div>
            </div>
          </div>
        </div>
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-5.jpg')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
          <div class="container" style="position: absolute;z-index: 2;bottom: 7%;">
            <div class="row">
              <div class="col-xs-2 col-sm-2 col-2"></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-dangky.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-phone.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-2 col-sm-2 col-2"></div>
            </div>
          </div>
        </div>
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-6.jpg')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
          <div class="container" style="position: absolute;z-index: 2;bottom: 15%;">
            <div class="row">
              <div class="col-xs-2 col-sm-2 col-2"></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="#"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-dangky.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-4 col-sm-4 col-4"><a href="tel:0898993663"><img src="{{asset('public/chuyende/sanuudaikep/images/mb/btn-phone.png')}}" alt="" width="100%"></a></div>
              <div class="col-xs-2 col-sm-2 col-2"></div>
            </div>
          </div>
        </div>

        <style>
          .carousel_indicators_mb{
            top: -70%;
            list-style: none;
            display: inline-block;
          }
          .carousel_indicators_mb li{
          
            height: 30px;
            text-indent: unset;
            color: white;
            background-color: blue;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            padding:5px;
          }
        </style>
        <div class="row" style="position: relative;z-index: 1;">
          <img src="{{asset('public/chuyende/sanuudaikep/images/mb/mb-7.jpg')}}" class="d-block w-100" alt="Thẩm mỹ Phú Khang">
          <div class="container" style="position: absolute;z-index: 2;bottom: 20%;">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-12">
                <div id="cnkh_mb" class="carousel slide" data-ride="carousel">
                    <ol class="carousel_indicators_mb">
                      <div class="container" style="position: absolute;left: -12px;bottom: 140%;">
                        <div class="row">
                          <div class="col-xs-6 col-6 sm-col-6">
                            <li data-target="#cnkh_mb" data-slide-to="0" class="active">Thẩm mỹ Mắt</li>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-6">
                            <li data-target="#cnkh_mb" data-slide-to="1">Thẩm mỹ Mũi</li>
                          </div>
                          
                          
                          
                        </div>
                        <div class="row mt-1">
                          <div class="col-xs-6 col-sm-6 col-6">
                            <li data-target="#cnkh_mb" data-slide-to="2">Spa cao cấp</li>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-6">
                            <li data-target="#cnkh_mb" data-slide-to="3">TM Ko Phẩu Thuật</li>
                          </div>
                        </div>
                      </div>
                      
                      

                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5.1-mat-1.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5.1-mat-2.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5.2-mui-1.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5.2-mui-2.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5-spa-1.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5-spa-2.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5-kpt-1.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                              <img src="{{asset('public/chuyende/sanuudaikep/images/mb/5-kpt-2.png')}}" class="d-block w-100" alt="thẩm mỹ Mắt">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#cnkh_mb" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#cnkh_mb" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div><!-- end carousel -->
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
    <!-- kết thúc giao diện mobile -->
    <script>

      $('#popupdangky_pc').on('submit',function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#DienThoai_PC').val();
            
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false || mobile.length < 10 || mobile.length >10)
            {
                alert('Số điện thoại không hợp lệ !');
            }
            else{
                
                var url="{{URL::to('/ajax/form-saved-phone-pc')}}";
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        
                        $('.popupdangky_success_pc').modal('show_pc');
                        $('.popup_pc').modal('hide');
                        document.getElementById("popupdangky_pc").reset();             
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
              }
            }
        }); 


        $('#popupdangky_mb').on('submit',function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#DienThoai_MB').val();
            
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false || mobile.length < 10 || mobile.length >10)
            {
                alert('Số điện thoại không hợp lệ !');
            }
            else{
                
                var url="{{URL::to('/ajax/form-saved-phone-mb')}}";
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        
                        $('.popupdangky_success_mb').modal('show_mb');
                        $('.popup_mb').modal('hide');
                        document.getElementById("popupdangky_mb").reset();             
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
      <script>
        var countDownDate = new Date("Dec 30, 2019 18:00:00").getTime();
 
        // cập nhập thời gian sau mỗi 1 giây
        var x = setInterval(function() {
     
        // Lấy thời gian hiện tại
        var now = new Date().getTime();
     
        // Lấy số thời gian chênh lệch
        var distance = countDownDate - now;
     
        // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        if(days<10) days='0'+days;
        if(hours<10) hours='0'+hours;
        if(minutes<10) minutes='0'+minutes;
        if(seconds<10) seconds='0'+seconds;

        // Hiển thị chuỗi thời gian trong thẻ p
        document.getElementById("thoigian").innerHTML = "<h4 class='text-center'>Chương trình diễn ra trong</h4><br><ul class='thoigian'><li class='ngay'>"+days + "</li><li class='gio'>" + hours + "</li><li class='phut'> "
        + minutes + " </li><li class='giay'>" + seconds +"</li></ul>";

        // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("thoigian").innerHTML = "Thời gian ưu đãi đã kết thúc";
        }
      }, 1000);



        var countDownDatemb = new Date("Dec 30, 2019 18:00:00").getTime();
 
        // cập nhập thời gian sau mỗi 1 giây
        var xmb = setInterval(function() {
     
        // Lấy thời gian hiện tại
        var nowmb = new Date().getTime();
     
        // Lấy số thời gian chênh lệch
        var distancemb = countDownDatemb - nowmb;
     
        // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
        var daysmb = Math.floor(distancemb / (1000 * 60 * 60 * 24));
        var hoursmb = Math.floor((distancemb % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutesmb = Math.floor((distancemb % (1000 * 60 * 60)) / (1000 * 60));
        var secondsmb = Math.floor((distancemb % (1000 * 60)) / 1000);
        if(daysmb<10) daysmb='0'+daysmb;
        if(hoursmb<10) hoursmb='0'+hoursmb;
        if(minutesmb<10) minutesmb='0'+minutesmb;
        if(secondsmb<10) secondsmb='0'+secondsmb;

        // Hiển thị chuỗi thời gian trong thẻ p
        document.getElementById("thoigianmb").innerHTML = "<h4 class='text-center text-white'>Chương trình diễn ra trong</h4><br><ul class='thoigianmb'><li class='ngay'>"+daysmb + "</li><li class='gio'>" + hoursmb + "</li><li class='phut'> "
        + minutesmb + " </li><li class='giay'>" + secondsmb +"</li></ul>";

        // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
        if (distancemb < 0) {
          clearInterval(xmb);
          document.getElementById("thoigianmb").innerHTML = "Thời gian ưu đãi đã kết thúc";
        }
      }, 1000);
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('public/default/js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
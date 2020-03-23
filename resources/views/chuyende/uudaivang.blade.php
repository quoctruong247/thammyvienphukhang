<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('public/chuyende/uudaivang/pc/favicon.png')}}" type="image/gif">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Thẩm mỹ viện Phú Khang - ưu đãi vàng</title>
    <style>
      .mat_ img{
        transition: 0.4s;
      }
      .mat_:hover img{
        transition: 0.4s;
        transform: scale(1.1);
      }
      .mui_ img{
        transition: 0.4s;
      }
      .mui_:hover img{
        transition: 0.4s;
        transform: scale(1.1);
      }
      .khongphauthuat_ img{
        transition: 0.4s;
      }
      .khongphauthuat_:hover img{
        transition: 0.4s;
        transform: scale(1.1);
      }
      .close{
        opacity: 1!important;
      }
    </style>
  </head>
  
  <body>
    <div class="d-lg-block d-xs-none d-sm-none d-none">    
    <div class="container-fluid">
      <div class="row">
        <img src="{{asset('public/chuyende/uudaivang/pc/a1.jpg')}}" alt="" width="100%">
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <img src="{{asset('public/chuyende/uudaivang/pc/a3.jpg')}}" alt="" width="100%" style="position: absolute;z-index: 1;">
        <div class="container">
          <div class="col-md-12">
            <img src="{{asset('public/chuyende/uudaivang/pc/a2.jpg')}}" alt="" width="100%" style="position: absolute;z-index: 2;" width="100%">
             <img src="{{asset('public/chuyende/uudaivang/pc/a4.jpg')}}" alt="" width="100%" style="position: absolute;z-index: 3;top:106px;" width="100%">
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
              <a href="#" data-toggle="modal" data-target=".mat" class="mat_">
                <img src="{{asset('public/chuyende/uudaivang/pc/a3-2.jpg')}}" alt="" width="50%"  style="position: absolute;z-index: 4;top:160px; left: 0%;">
              </a>
              <a href="#" data-toggle="modal" data-target=".mui" class="mui_">
                <img src="{{asset('public/chuyende/uudaivang/pc/a3-1.jpg')}}" alt="" width="50%" style="position: absolute;z-index: 4;top:160px; left: 60%;">
              </a> 
              <a href="#" data-toggle="modal" data-target=".khongphauthuat" class="khongphauthuat_">
                <img src="{{asset('public/chuyende/uudaivang/pc/a3-3.jpg')}}" alt="" width="50%" style="position: absolute;z-index: 4;top:360px;left: 30%;">
              </a> 
               
            </div>
            <div class="col-md-3"></div>
          </div>
          
        </div>
        
      </div>
    </div>

  </div><!-- end pc d-lg d-sm d-xs d- -->

  <div class="d-lg-none d-sm-block d-xs-block d-block">
    <div class="container" style="">
      <div class="row">
        <img src="{{asset('public/chuyende/uudaivang/mb/a1.jpg')}}" alt="" width="100%">
        <img src="{{asset('public/chuyende/uudaivang/mb/a2.jpg')}}" alt="" width="100%">
      </div>
      <div class="row " style="background-image: url({{asset('public/chuyende/uudaivang/mb/a3.jpg')}});height: 510px;">
        <div class="col-12 text-center">
          <a href="#" data-toggle="modal" data-target=".matmb">
            <img src="{{asset('public/chuyende/uudaivang/mb/a3-2.jpg')}}" alt="" width="70%" class="mt-4">
          </a>
          <a href="#" data-toggle="modal" data-target=".muimb">
            <img src="{{asset('public/chuyende/uudaivang/mb/a3-1.jpg')}}" alt="" width="70%" class="mt-4">
          </a>
          <a href="#" data-toggle="modal" data-target=".khongphauthuatmb">
            <img src="{{asset('public/chuyende/uudaivang/mb/a3-3.jpg')}}" alt="" width="70%" class="mt-4">
          </a>
        
        </div>
        
      </div>
      
    </div>
  </div>
</div><!-- end mb d-lg d-sx d-sm -->

<div class="modal fade mat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <img src="{{asset('public/chuyende/uudaivang/pc/bang-gia-mat.jpg')}}" alt="" width="100%" class="close" data-dismiss="modal" aria-label="Close">
      <div class="container" style="position: absolute;bottom: 30px;">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/chuyende/uudaivang/pc/btn-dangky.png')}}" alt="" width="100%">
                </a>
              </div>
             <div class="col"></div>
              <div class="col">
                <a href="tel:02839208228">
                  <img src="{{asset('public/chuyende/uudaivang/pc/btn-phone.png')}}" alt="" width="100%">
                </a>
                
              </div>
              
              <div class="col"></div>
            </div>
          </div>
    </div>
  </div>
</div>


<div class="modal fade mui" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <img src="{{asset('public/chuyende/uudaivang/pc/bang-gia-mui.jpg')}}" alt="" width="100%" class="close" data-dismiss="modal" aria-label="Close">
        <div class="container" style="position: absolute;bottom: 30px;">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/chuyende/uudaivang/pc/btn-dangky.png')}}" alt="" width="100%">
                </a>
              </div>
             <div class="col"></div>
              <div class="col">
                <a href="tel:02839208228">
                  <img src="{{asset('public/chuyende/uudaivang/pc/btn-phone.png')}}" alt="" width="100%">
                </a>
                
              </div>
              
              <div class="col"></div>
            </div>
          </div>
      </div>
    </div>
</div>

<div class="modal fade khongphauthuat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <img src="{{asset('public/chuyende/uudaivang/pc/bang-gia-khong-phau-thuat.jpg')}}" alt="" width="100%" class="close" data-dismiss="modal" aria-label="Close">
        <div class="container" style="position: absolute;bottom: 30px;">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/chuyende/uudaivang/pc/btn-dangky.png')}}" alt="" width="100%">
                </a>
              </div>
             <div class="col"></div>
              <div class="col">
                <a href="tel:02839208228">
                  <img src="{{asset('public/chuyende/uudaivang/pc/btn-phone.png')}}" alt="" width="100%">
                </a>
                
              </div>
              
              <div class="col"></div>
            </div>
          </div>
      </div>
    </div>
    
</div>
<!-- mobile -->
<div class="modal fade matmb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="top:30%">
      <div class="modal-content">
        <img src="{{asset('public/chuyende/uudaivang/pc/bang-gia-mat.jpg')}}" alt="" width="100%" class="close" data-dismiss="modal" aria-label="Close">
        <div class="container" style="position: absolute;bottom: 20px;">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/chuyende/uudaivang/pc/btn-dangky.png')}}" alt="" width="100%">
                </a>
              </div>
            
              <div class="col">
                <a href="tel:02839208228">
                  <img src="{{asset('public/chuyende/uudaivang/pc/btn-phone.png')}}" alt="" width="100%">
                </a>
                
              </div>
              <div class="col"></div>
              
            </div>
          </div>
      </div>
    </div>
    
</div>

<div class="modal fade muimb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="top:30%">
      <div class="modal-content">
        <img src="{{asset('public/chuyende/uudaivang/pc/bang-gia-mui.jpg')}}" alt="" width="100%" class="close" data-dismiss="modal" aria-label="Close">
        <div class="container" style="position: absolute;bottom: 20px;">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <a href="https://m.me/ThammyPhukhang" target="_blank"><img src="{{asset('public/chuyende/uudaivang/pc/btn-dangky.png')}}" alt="" width="100%">
                </a>
              </div>
             
              <div class="col">
                <a href="tel:02839208228">
                  <img src="{{asset('public/chuyende/uudaivang/pc/btn-phone.png')}}" alt="" width="100%">
                </a>
                
              </div>
              
              <div class="col"></div>
            </div>
          </div>
      </div>
    </div>
   
</div>

<div class="modal fade khongphauthuatmb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="top:30%">
      <div class="modal-content">
        <img src="{{asset('public/chuyende/uudaivang/pc/bang-gia-khong-phau-thuat.jpg')}}" alt="" width="100%" class="close" data-dismiss="modal" aria-label="Close">
        <div class="container" style="position: absolute;bottom: 20px;">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <a href="https://m.me/ThammyPhukhang"><img src="{{asset('public/chuyende/uudaivang/pc/btn-dangky.png')}}" alt="" width="100%">
                </a>
              </div>
           
              <div class="col">
                <a href="tel:02839208228">
                  <img src="{{asset('public/chuyende/uudaivang/pc/btn-phone.png')}}" alt="" width="100%">
                </a>
                
              </div>
              
              <div class="col"></div>
            </div>
          </div>
      </div>
    </div>
   
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
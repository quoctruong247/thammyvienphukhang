<?php 
    function svl_ismobile() {
    $is_mobile = '0';
    if(preg_match('/(android|iphone|ipad|up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
        $is_mobile=1;
    if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']))))
        $is_mobile=1;
    $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
    $mobile_agents = array('w3c ','acs-','alav','alca','amoi','andr','audi','avan','benq','bird','blac','blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno','ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-','newt','noki','oper','palm','pana','pant','phil','play','port','prox','qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar','sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-','tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp','wapr','webc','winw','winw','xda','xda-');
    
    if(in_array($mobile_ua,$mobile_agents))
        $is_mobile=1;
 
    if (isset($_SERVER['ALL_HTTP'])) {
        if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0)
            $is_mobile=1;
    }
    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0)
        $is_mobile=0;
    return $is_mobile;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('public/default/images/pc/favicon.png')}}" type="image/gif">
    <!-- phần SEO -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="article">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="284" />
    <meta property="og:image:height" content="202"/>
    <link rel="canonical" href="./">
    <!-- kết thúc phần SEO -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('public/default/css/bootstrap.min.css')}}">
    
    <script src="{{asset('public/default/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/default/js/script_pc_mb.js')}}"></script>
    <script id="pagescript" src="" crossorigin="anonymous"></script>
    <!-- end load script for mobile or pc -->
    <!-- style for mobile or pc -->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="" />
    <!-- end load style for mobile or pc -->
    <!-- Facebook Pixel Code -->
   <!--  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '463637390959288');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=463637390959288&ev=PageView&noscript=1"
    /></noscript> -->
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154230512-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-154230512-1');
    </script> -->
    <script>
        function layoutHandler() {
    var styleLink = document.getElementById("pagestyle");
    var scriptLink = document.getElementById("pagescript");

    if (window.innerWidth < 480) {
        styleLink.setAttribute("href", "{{asset('public/default/css/mb_style.css')}}");
        scriptLink.setAttribute("src", "{{asset('public/default/js/mb_script.js')}}");
    }else if (window.innerWidth < 1024) {
        styleLink.setAttribute("href", "{{asset('public/default/css/mb_style.css')}}");
        scriptLink.setAttribute("src", "{{asset('public/default/js/mb_script.js')}}");
        }else{
            styleLink.setAttribute("href", "{{asset('public/default/css/pc_style.css')}}");
            scriptLink.setAttribute("src", "{{asset('public/default/js/pc_script.js')}}");
            }
        }
        window.onresize = layoutHandler;
        layoutHandler();
    </script>
</head>
<body>
    @yield('header_script')

    @if(svl_ismobile()==1)
        @include('default.includes.mb_header')
        @yield('mb_content')
        @include('default.includes.mb_bottom')
        @include('default.includes.mb_footer')
    @elseif(svl_ismobile()==0)
        @include('default.includes.pc_header')
        @include('default.includes.pc_menu')
        @yield('pc_content')
        @include('default.includes.pc_footer')
    @endif
    <div class="scrolltop" style="display: block;">
        <div class="scroll icon">
          <img style="width:45px" src="{{asset('public/default/images/pc/go-top.png')}}" alt="">
        </div>
    </div>
    <div class="messeger_icon" style="display: block;">
        <div class="messeger icon">
        <a href="https://www.facebook.com/Ph%C3%BA-Khang-Beauty-Spa-880342905631998/" target="_blank">
          <img style="width:45px" src="{{asset('public/default/images/pc/icon-mess.png')}}" alt="">
        </a>
        </div>
    </div>
    @yield('bottom_script')

    <!-- js cho thanh menu mb -->
    <script type="text/javascript" src="{{asset('public/default/js/menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/default/js/mb.js')}}"></script>
    <!-- kết thúc cho thanh menu mb -->

    <!-- thư viện boostrap -->
    <script src="{{asset('public/default/js/bootstrap.min.js')}}"></script>
    <!-- kết thúc thư viện boostrap -->
    <!-- live chat -->
   <!--  <script language="javascript" src="https://online.depquavietnam.com/JS/LsJS.aspx?siteid=NDG53329783&float=1&lng=en"></script> -->
    <!-- kết thúc live chat -->
</body>
</html>


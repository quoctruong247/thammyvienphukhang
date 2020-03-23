@extends('default.home')
@section('title',$cate_posts[0]->categories->name)
@section('pc_content')
<div class="container">
	<div class="row mt-1">
		<div class="col-md-9">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="{{route('trang-chu')}}"><i class="fas fa-home"></i> Trang chủ</a></li>
			    <li class="breadcrumb-item">{{$cate_posts[0]->categories->name}}</li>
			  </ol>
			</nav><!-- end breadcrum -->
        

        <!-- bài viết theo chuyên mục -->
        @foreach($cate_posts as $post)
        <div class="row _1baiviet">
            <div class="col-md-4 col-4">
               <img src="{{$post->Image}}" alt="" width="100%"> 
            </div>
            <div class="col-md-8 col-8 ">
               <h6>{{$post->Title}}</h6>
               <p class="text-muted text-justify">{{$post->Description}}</p>
               <a href="/{{$post->Slug}}">
               <span class="btn btn-primary btn-sm">xem tiếp <i class="far fa-arrow-alt-circle-right"></i></span></a>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-md-12 col-12 mt-3">
                {{$cate_posts->links()}}
            </div>
        </div>
        <!-- kết thúc bài viết theo chuyên mục -->
    	</div><!-- col-md-9 -->
    	<div class="col-md-3">
    		@include('default.includes.right')
    	</div><!-- col-md-3 -->
	</div><!-- end row chính -->
</div><!-- end container chính -->
<!-- end pc -->
@endsection

<!-- giao diện mobile -->
@section('mb_content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb" style="margin-top: 90px;">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$cate_posts[0]->categories->name}}</li>
              </ol>
            </nav>
        </div>
    </div>
</div>	
<!-- bài viết theo chuyên mục -->
<div class="container">
    @foreach($cate_posts as $post)
        <div class="row _1baiviet">
            
            <div class="col-xs-4 col-sm-4 col-4">
                <a href="/{{$post->Slug}}">
               <img src="{{$post->Image}}" alt="" width="100%"></a> 
            </div>
            <div class="col-xs-8 col-sm-8 col-8 ">
               <h6><a href="/{{$post->Slug}}">{{$post->Title}}</a></h6>
            </div>
        </div>
    @endforeach
    <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-12">
        {{$cate_posts->links()}}
        </div>
    </div>
</div><!-- end container bài viết chuyên mục -->
<!-- kết thúc bài viết theo chuyên mục -->
@endsection
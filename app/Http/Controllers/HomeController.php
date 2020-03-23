<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Customer;
use App\Slider;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

    // hiện thị trang chủ
    public function index()
    {
        $sliders=Slider::where('On_Off',1)->orderBy('Order','asc')->get();
        $salePosts=Post::where('PostSale',1)->orderBy('updated_at','desc')->paginate(1);
        $newPosts=Post::where('NewPost',1)->orderBy('updated_at','desc')->paginate(6);

        return view('default.home.trangchu',compact('sliders','newPosts','salePosts'));
    }

    // hiện thị bài viết
    public function viewPost($slug)
    {
        $postSale=Post::where('PostSale',1)->get();
        $post = Post::where([
            ['slug','=',$slug],
            ['On_Off','=',1],
            ])->get();
       
        if (count($post) > 0) {
            return view('default.home.baiviet', compact('post','postSale'));
        }
        else
        {
            return redirect()->route('trang-chu');
        }
        
    }

    // hiện thị bài viết
    public function viewPostAdmin($slug)
    {
        $postSale=Post::where('PostSale',1)->get();
        $post = Post::where([
            ['slug','=',$slug],
            ])->get();
       
        if (count($post) > 0) {
            return view('default.home.baiviet', compact('post','postSale'));
        }
        else
        {
            return redirect()->route('trang-chu');
        }
        
    }

    // truy vấn danh mục
    public static function getCategory($idCate)
    {
        return  Post::where([
            ['categories_id','=',$idCate],
            ['On_Off','=',1],
        ])->orderBy('updated_at','desc')->paginate(6);
    }

    // hiện thị danh mục
    public function viewCategory($slug)
    {
        $postSale=Post::where('PostSale',1)->get();
        $cate=Category::where('slug',$slug)->get();
        $cate_posts= Post::where([
            ['categories_id',$cate[0]->id],
            ['On_Off',1],
        ])->paginate(20);

        return view('default.home.danhmuc', compact('cate_posts','postSale'));
    }

    // lưu dữ liệu cho form bài viết - liên hệ
    public function formSaved(Request $re)
    {
        if($re->ajax())
        {
            $getdata = new Customer();
            $getdata->name=$re->_hoten;
            $getdata->phone=$re->_dienthoai;
            $getdata->url=$re->_currentUrl;
            $getdata->content=$re->_noidung;
            $getdata->on_off=0; //đang chờ
            $getdata->ip=$re->ip();
            $getdata->created_at=now();
            $getdata->updated_at=now();
            $getdata->save();

            return response($getdata);
        }
    }

}


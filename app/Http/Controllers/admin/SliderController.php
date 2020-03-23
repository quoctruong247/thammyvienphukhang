<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    //
    public function index(){
    	$sliders=Slider::paginate(10);
    	return view('admin.slider.list',compact('sliders'));
    }

    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){
        $valid = Validator::make($request->all(), [
            'Pc'        => 'required',
            'Mobile'   	=> 'required',
            'Order'     => 'required',
            'Url'       => 'required',
        ],[
            'Pc.required' 		=> 'Vui lòng nhập Hình Pc',
            'Mobile.required' 	=> 'Vui lòng nhập Hình Mobile',
            'Order.required'   	=> 'Vui lòng nhập số thứ tự',
            'Url.required'		=> 'Vui lòng nhập Url',
        ]);
        
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $slider=Slider::create([
                'Pc' =>$request->input('Pc'),
                'Mobile'  =>$request->input('Mobile'),
                'Order' =>$request->input('Order'),
                'Url' =>$request->input('Url'),
                'On_Off' =>'0',
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);

            return redirect()->route('admin.slider.index')->with('message', "Thêm Slider $slider->id thành công");
        }
    }

    public function show($id){
        $slider = Slider::find($id);
        
        if ($slider !== null) {
            return view('admin.slider.show', compact('slider'));
        }

        return redirect()->route('admin.slider.list')->with('error', 'Không tìm thấy Slider này');
    }

    public function update(Request $request, $id){
        $valid = Validator::make($request->all(), [
            'Pc'    => 'required',
            'Mobile'=> 'required',
            'Url'   => 'required',
            'Order' => 'required|unique:sliders,Order,'.$id,
        ],[
            //Required
            'Pc.required' => 'Vui lòng upload hình Pc',
            'Mobile.required'  =>'Vui lòng upload hình mobile',
            'Url.required'   =>'Vui lòng nhập đường dẫn liên kết',
            'Order.required' => 'Vui lòng nhập số thứ tự',
            
            'Order.unique' => 'thứ tự này đã có, vui lòng chọn thứ tự khác',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $slider = Slider::find($id);
            $slider->Pc = $request->input('Pc');
            $slider->Mobile = $request->input('Mobile');
           
            $slider->Url = $request->input('Url');
            $slider->Order = $request->input('Order');
            $slider->updated_at=now();
            $slider->save();

            return redirect()->route('admin.slider.index')->with('message', "Cập nhật Slider $slider->id thành công");
        }
    }

    public function delete($id){
        $slider = slider::find($id);
        $slider->delete();

        return redirect()->route('admin.slider.index')->with('message', "Xóa Slider $slider->id thành công");
    }

    public function updateActive($id){
        $slider=slider::find($id);
        if($slider->On_Off==1){
                $slider->On_Off=0;
            $slider->save();

            return redirect()->route('admin.slider.index')->with('message',"Slider $slider->id được Tắt");
        }else{
            $slider->On_Off=1;
            $slider->save();

            return redirect()->route('admin.slider.index')->with('message',"Slider $slider->id được Mở");
        }
    }
    
}

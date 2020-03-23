<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Customer;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    public function index(){

    	$customers=Customer::orderBy('id','desc')->paginate(10);

    	return view('admin.customer.list',compact('customers'));
    }

    public function show($id){
        
        $customer = customer::find($id);
        
        if ($customer !== null) {
            return view('admin.customer.show', compact('customer'));
        }

        return redirect()->route('admin.customer.list')->with('error', 'Không tìm thấy customer này');
    }

    public function update(Request $request, $id){

        $valid = Validator::make($request->all(), [
            'note'    => 'required',
            
        ],[
            //Required
            'note.required' => 'Vui lòng nhập ghi chú',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $customer = Customer::find($id);
            $customer->note = $request->input('note');
            $customer->on_off = 1;
            $customer->users_id=Auth::user()->id;
            $customer->updated_at=now();
            $customer->save();

        return redirect()->route('admin.customer.index')->with('message', "Cập nhật ghi chú có $customer->id thành công");
        }
    }

    public function delete($id){

        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('admin.customer.index')->with('message', "Xóa customer $customer->id thành công");
    }

}

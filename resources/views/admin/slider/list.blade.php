@extends('admin.master')
@section('title','Danh sách Slider')
@section('content')
@if(Auth::user()->active==1)
    <div class="container-fluid shadow-sm p-3 bg-white rounded">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">Tạo Slider</a>
                </div>
                <br>
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình PC</th>
                                    <th>Hình Mb</th>
                                    <th>Thứ tự</th>
                                    <th>Url</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th width="150">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($sliders as $slider)
<tr>
    <td>{{ $slider->id }}</td>
    <td><img src="{{ $slider->Pc }}" alt="hình PC" width="100%"></td>
    <td><img src="{{ $slider->Mobile }}" alt="hình Mobile" width="100%"></td>
    <td>{{ $slider->Order }}</td>
    <td>{{ $slider->Url }}</td>
    <td>
        @if($slider->On_Off==1)
        <a href="{{route('admin.slider.active',['id'=>$slider->id])}}"><img src="{{asset('public/admin/images/pc/icon_on.png')}}" alt="on"></a>
        @else
        <a href="{{route('admin.slider.active',['id'=>$slider->id])}}"><img src="{{asset('public/admin/images/pc/icon_off.png')}}" alt="on"></a>
        @endif
    </td>
    <td>{{ $slider->created_at}}</td>
    <td>{{ $slider->updated_at }}</td>
    <td>
        <a href="{{ route('admin.slider.show', ['id' => $slider->id]) }}"
           class="btn btn-primary">Sửa</a>
        <a href="{{ route('admin.slider.delete', ['id' => $slider->id]) }}"
           class="btn btn-danger"
           onclick="event.preventDefault();
                   window.confirm('Bạn đã chắc chắn xóa Id={{ $slider->id }} chưa?') ?
                   document.getElementById('slider-delete-{{ $slider->id }}').submit():
                   0;">Xóa</a>
        <form action="{{ route('admin.slider.delete', ['id' => $slider->id]) }}"
              method="post" id="slider-delete-{{ $slider->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
        </form>
    </td>
</tr>
            @empty
                <tr>
                    <td colspan="5">No data</td>
                </tr>
            @endforelse


                                </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                            {{ $sliders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
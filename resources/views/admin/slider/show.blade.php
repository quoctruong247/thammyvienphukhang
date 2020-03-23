@extends('admin.master')
@section('title','Cập nhật Slider')
@section('content')
@if(Auth::user()->active==1)
<div class="container-fluid shadow-sm p-3 bg-white rounded">
    <div class="row">
        <div class="col-md-12 text-right"><a href="{{route('admin.slider.index')}}" alt="close"><i class="fas fa-times-circle "></i></a>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <h3 class="text-center mt-3 text-muted">CẬP NHẬT SLIDER</h3>
                <div class="panel-body">
                    <form action="{{ route('admin.slider.update', ['id' => $slider->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group {{ $errors->has('Pc') ? 'has-error' : '' }}">
                            <label for="Pc">Hình Pc</label>
                            <input type="text" class="form-control" id="input1" name="Pc" placeholder="hình Pc" value="{{ $slider->Pc }}" readonly>
                            <span class="help-block">{{ $errors->first('Pc') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('Mobile') ? 'has-error' : '' }}">
                            <label for="Mobile">Hình Mobile</label>
                            <input type="text" class="form-control" id="input2" name="Mobile" placeholder="Hình Mobile" value="{{ $slider->Mobile }}" readonly>
                            <span class="help-block">{{ $errors->first('Mobile') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('Url') ? 'has-error' : '' }}">
                            <label for="Url">Liên kết</label>
                            <input type="text" class="form-control" id="Url" name="Url"
                                   placeholder="liên kết"
                                   value="{{ $slider->Url }}">
                            <span class="help-block">{{ $errors->first('Url') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('Order') ? 'has-error' : '' }}">
                            <label for="Order">Thứ tự</label>
                            <input type="text" class="form-control" id="Order" name="Order"
                                   placeholder="Thứ tự"
                                   value="{{ $slider->Order }}">
                            <span class="help-block">{{ $errors->first('Order') }}</span>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Chỉnh sửa Slider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('bottom_script')
<script>
 var button1 = document.getElementById('input1');
 button1.onclick = function() {
     selectFileWithCKFinder('input1');
 };
var button2 = document.getElementById('input2');
 button2.onclick = function() {
     selectFileWithCKFinder('input2');
};    
function selectFileWithCKFinder( elementId ) {
        CKFinder.popup( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var output = document.getElementById( elementId );
                    output.value = file.getUrl();
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var output = document.getElementById(elementId );
                    output.value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>
@endsection
@extends('website.master')

@section('content')
<div class="group-content-right">
    <div class="x_title">
        <h2>Danh sách menu dọc</h2>
        <div class="form-group text-right">
            <a class="btn btn-success" href="menu/vertical/create" ><span class="fa fa-plus"></span> Thêm mới</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        @include('website.includes.notify')
        <p class="info-count">Tìm thấy <code><strong>{{number_format($data->count())}}</strong></code> kết quả.</p>
        <div class="form-group text-right orderby">
            <label class="orderby-label">Trạng thái: </label>
            <div class="orderby-select">
                <select class="form-control orderby_display" name="display" >
                    <option value="1"  @if($display == 1) selected="" @endif >Hiển thị</option>
                    <option value="0"  @if($display == 0) selected="" @endif >Không hiển thị</option>
                    <option value="all" @if($display == 'all') selected="" @endif >Tất cả</option>
                </select>
            </div>
        </div>
        <div class="form-group text-right orderby">
            <label class="orderby-label">Ngày tạo: </label>
            <div class="orderby-select">
                <input type="date" name="time" class="form-control" value="{{$time}}">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered jambo_table">
                <thead>
                    <tr>
                        <th class="text-center">Stt</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Ngày tạo</th>
                        <th class="text-center">Hiển thị</th>
                        <th class="text-center">Sửa</th>
                        <th class="text-center">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $item)
                    <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td>{{$item->name}}</td>
                        <td class="text-center">{{date('H:i:s d-m-Y',strtotime($item->created_at))}}</td>
                        <td class="text-center display" id="display">
                            @if($item->display == 0)
                            <a class="btn btn-danger btn-xs view_display close_display" data-id="{{$item->id}}" data-com="MenuVertical"><b><i class="fa fa-close"></i> Tắt</a></b>
                            <a  class="btn btn-success btn-xs view_display open_display hidden" data-id="{{$item->id}}" data-com="MenuVertical"><b><i class="fa fa-check"></i> Bật</a></b>
                            @else
                            <a class="btn btn-danger btn-xs view_display close_display hidden" data-id="{{$item->id}}" data-com="MenuVertical"><b><i class="fa fa-close"></i> Tắt</a></b>
                            <a  class="btn btn-success btn-xs view_display open_display" data-id="{{$item->id}}" data-com="MenuVertical"><b><i class="fa fa-check"></i> Bật</a></b>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="menu/vertical/update?id={{$item->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit" aria-hidden="true"></i> Sửa</a>
                        </td>
                        <td class="text-center">
                            <a onclick="if( ! confirm('Bạn có chắc chắn xóa?')){return false;}" href="menu/vertical/delete?id={{$item->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $('.orderby_display').on('change', function (){
            var value = $(this).val();
            window.location = "menu/vertical?time={{$time}}&display="+value;
        })
    </script>
    <script type="text/javascript">
        $("input[name='time']").change(function(){
            var value = $(this).val();
            window.location = "menu/vertical?time="+value+"&display={{$display}}";
        })
    </script>
@endsection
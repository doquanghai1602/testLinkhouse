@extends('website.master')

@section('content')
<?php 
    if(old() != null) $item = old() ;
?>
<div class="group-content-right">
    <div class="x_title">
        <h2>Cập nhật menu ngang</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <form class="form-horizontal form-label-left" role="form" action="{{Request::fullurl()}}" method="POST" enctype="multipart/form-data">
                <div class="col-sm-2"></div>
                <div class="col-xs-12 col-sm-8">
                    @include('website.includes.notify')
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên (*)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="name" class="form-control col-md-7 col-xs-12" value="{{$item['name']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hiển thị (*)</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group switch-choice" data-toggle="buttons">
                                <label @if($item['display'] != 1) class="close-choice btn btn-danger" @else class="close-choice btn btn-default" @endif data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio"  @if($item['display'] != 1) checked="" @endif name="display" value="0"> &nbsp; Tắt &nbsp;
                                </label>
                                <label @if($item['display'] == 1) class="open-choice btn btn-primary" @else class="open-choice btn btn-default" @endif data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" @if($item['display'] == 1) checked="" @endif name="display" value="1"> Bật
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
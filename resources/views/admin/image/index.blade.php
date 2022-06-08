@extends('layouts.adminwindow')
@section('title','Product Image Gallery List')
@section('content')
<!-- /. NAV SIDE  -->
<h2>{{$product->title}}</h2>
        <br>
<form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
    @csrf
        <br>
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" name="title" placeholder="Title">
        </div>
        <br>
        <div class="form-group">
            <label>File input</label>
            <input type="file" name="image">
        </div>
        <br>
       <br>
        <button type="submit" class="btn btn-medium" name="save">Save </button>

        <!-- /. ROW  -->
        <div class="col-md-6" style="width: auto">
            <div class="panel panel-default" >
                <div class="panel-heading"> Product İmage List</div>
                <div class="panel-body">
                    <div class="table-responsive" style="width: 800px">
                        <table class="table table-striped table-bordered table-hover" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: auto">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                        </td>

                                    <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}"class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


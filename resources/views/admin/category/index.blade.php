@extends('layouts.adminbase')
@section('title','Category List')
@section('content')
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.category.create')}}" class="btn btn-info" style="width: 200px">Add Category</a>
                <hr>

            </div>
        </div>
        <br>
        <!-- /. ROW  -->
        <div class="col-md-6" style="width: auto">
            <div class="panel panel-default" >
                <div class="panel-heading"> Kitchen Sink</div>
                <div class="panel-body">
                    <div class="table-responsive" style="width: 800px">
                        <table class="table table-striped table-bordered table-hover" >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: auto">Edit</th>
                                <th style="width: auto">Delete</th>
                                <th style="width: auto">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                        </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"class="btn btn-success btn-sm">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('assets')}}/assets/admin/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('assets')}}/assets/admin/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('assets')}}/assets/admin/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('assets')}}/assets/admin/js/custom.js"></script>

    </div>
@endsection

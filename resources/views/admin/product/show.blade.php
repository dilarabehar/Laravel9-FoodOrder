@extends('layouts.adminbase')
@section('title','Show Product : '.$data->title)
@section('content')
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2> {{$data->title}}</h2>
            </div>
        </div>

        <!-- /. ROW  -->

        <div class="panel-body" >

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table" >
                        <thead>
                        <tbody>
                        <h4>Detail Data</h4>

                        <tr class="success" >
                            <th>#ID</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr class="success">
                            <th>Category</th>
                            <td>{{$data->category_id}}</td>
                        </tr>
                        <tr class="success">
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr class="success">
                            <th>Keywords</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr class="success">
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr class="success">
                            <th>Quantity</th>
                            <td>{{$data->quantity}}</td>
                        </tr>
                        <tr class="success">
                            <th>Minimum Quantity</th>
                            <td>{{$data->minquantity}}</td>
                        </tr>
                        <tr class="success">
                            <th>Tax</th>
                            <td>{{$data->tax}}</td>
                        </tr>
                        <tr class="success">
                            <th>Image</th>
                            <td>@if($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height: 200px">
                                @endif</td>
                        </tr>
                        <tr class="success">
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr class="success">
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr class="success">
                            <th>Updated Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        </thead>
                        </tbody>

                    </table>
                    <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-success" style="width: 200px">Edit</a>
                    <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-danger" style="width: 200px">Delete</a>
                </div>
            </div>

        <!-- /. PAGE INNER  -->

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

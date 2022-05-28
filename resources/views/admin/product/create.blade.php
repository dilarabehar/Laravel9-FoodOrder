@extends('layouts.adminbase')
@section('title','Add Product')
@section('content')
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Product</h2>
            </div>
        </div>

        <!-- /. ROW  -->

        <div class="panel-body">

            <div class="panel-heading"></div>
            <div class="row">
                <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="col-md-6">
                    <h3>Product Elements</h3>
                    <br>
                    <label>Parent Category</label>

                    <select class="form-control select2" name="category_id" >
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}" >{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                    </select>
                    <br>
                    <div class="form-group">
                        <label>User_id</label>
                        <input class="form-control" name="title" placeholder="User_id">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Restaurant_id</label>
                        <input class="form-control" name="title" placeholder="Restaurant_id">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" placeholder="Title">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Keywords</label>
                        <input class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="detail">

                        </textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" value="0">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="0">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Minimum Quantity</label>
                        <input type="number" class="form-control" name="minquantity" value="0">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Tax %</label>
                        <input type="number" class="form-control" name="tax" value="0">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>File input</label>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option>True</option>
                        <option>False</option>
                    </select>
                    <br><br>
                    <button type="submit"  class="btn btn-medium" name="save">Save </button>

        <!-- /. PAGE INNER  -->
    </div>
                </form>
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

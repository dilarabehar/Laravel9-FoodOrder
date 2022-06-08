@extends('layouts.adminbase')
@section('title','Add Category')

@section('content')
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Category</h2>
            </div>
        </div>

        <!-- /. ROW  -->

        <div class="panel-body">

            <div class="panel-heading"></div>
            <div class="row">
                <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="col-md-6">
                    <h3>Category Elements</h3>
                    <br>
                    <label>Parent Category</label>

                    <select class="form-control select2" name="parent_id" >
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}" >{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                    </select>
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
                        <textarea class="form-control" id="detail" name="detail" placeholder="Description">
                        </textarea>

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
                    <button type="submit" class="btn btn-medium" name="save">Save </button>

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

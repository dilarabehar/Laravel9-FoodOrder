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
                <form role="form" action="{{route('admin.category.store')}}" method="post">
                    @csrf
                <div class="col-md-6">
                    <h3>Category Elements</h3>
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
                        <input class="form-control" name="description" placeholder="Description">
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
                    <button type="submit" class="btn btn-default" name="save">Save Button</button>

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

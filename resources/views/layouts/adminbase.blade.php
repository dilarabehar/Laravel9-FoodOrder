<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.min.css">
    @yield("head")
</head>

<body>

@include("admin.header")

@section('sidebar')
    @include("admin.sidebar")
@show
@yield('content')
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
</div>

@include("admin.footer")
@yield('foot')



</body>
</html>

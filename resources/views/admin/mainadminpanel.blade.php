<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Admin Panel</title>
    @include('admin.base.head')
</head>

<body class="sidebar-mini layout-fixed" style="height: auto;">
<div class="wrapper">

    @include('admin.base.navbar')
    @include('admin.base.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 712px;">
        @yield('content')
    </div>

    @include('admin.base.footer')

</body>
</html>

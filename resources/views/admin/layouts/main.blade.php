<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
         @include('admin.layouts.header')
         @yield('main-section')
    </div>
    <!-- /Main Wrapper -->
    @include('admin.layouts.footer')
</body>

</html>

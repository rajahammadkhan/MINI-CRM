@include('management.layouts.header')
@include('management.layouts.sidebar')
<section class="content">
@include('management/layouts/error')
@yield('content')
</section>
@include('management.layouts.footer')

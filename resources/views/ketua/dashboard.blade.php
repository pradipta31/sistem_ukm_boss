@extends('.layouts.app',['activeMenu' => 'home'])
    @section("content")
        @include('layouts.breadcrumb')
        <div class="container-fluid">
          @include('layouts.alert')
          @include('layouts.card')
        </div>
    @endsection

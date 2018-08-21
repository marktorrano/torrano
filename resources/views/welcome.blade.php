@extends('layouts.app')

@section('content')

    <div class="wrapper container-fluid">

        <div class="row">
            <div class="col-md-12">
                @include('home.corousel')
            </div>
        </div>
    </div>

    <div class="wrapper container-fluid" id="home-vue">
        <div class="row">
            <div class="text-center">
                <h1>Content</h1>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>

        $(document).ready(function () {

        });
    </script>
@endpush
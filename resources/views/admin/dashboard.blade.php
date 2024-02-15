@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Dashboard')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <script>
                @if (Session::has('success'))
                    toastr.options = {
                        "closeButton": true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.success("{{ session('success') }}");
                @endif
            </script>
       
@endsection

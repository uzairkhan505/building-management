@extends('superadmin.layout.master')
@section('page-title')
{{ _('Add Flat Area') }}
@endsection
@section('main-content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        @include('superadmin.flat.edit_form')
    </div>
</div>
<!--end page wrapper -->
@endsection
@extends('superadmin.layout.master')
@section('page-title')Invoice
@endsection
@section('main-content')
<div class="page-wrapper">
    <div class="page-content">
        @include('superadmin.invoice.table')
    </div>
</div>
@endsection

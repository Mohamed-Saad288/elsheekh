@extends('layouts.dashboard')

@section('title','الرئيسية')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الرئيسية</li>
@endsection

@section('content')
    @include('dashboard._dashboard-content')
@endsection

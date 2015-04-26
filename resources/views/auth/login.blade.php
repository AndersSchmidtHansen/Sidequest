@extends('app')

@section('page-title')Login -@endsection
@section('page-class')u-headless u-footless @endsection

@section('content')
  @include('modules.forms.login')
@endsection

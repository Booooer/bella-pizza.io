@extends('layouts.app')
@section('title',"Bella Pizza")
@section('content')
    @include('modules.video')
    @include('modules.menu')
    @include('modules.recipe')
    @include('modules.about')
    @include('modules.deals')
    @include('modules.company')
    @include('modules.footer')
    <script src="{{ asset('js/svg.js')  }}"></script>
@endsection

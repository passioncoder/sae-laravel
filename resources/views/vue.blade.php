@extends('layouts.master')

@section('title', 'Vue.js')

@section('container')

    <div id="vue-app"></div>
    <script src="{{ mix('/js/vue-app.js') }}"></script>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

@endsection

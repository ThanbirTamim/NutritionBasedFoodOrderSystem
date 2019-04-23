@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <h3>If you Invest: {{$newx}} tk</h3>
        <h3>Cell cost can be: {{$y}} tk</h3>

    </div>
@endsection

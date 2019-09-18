@extends('appinstance::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('appinstance.name') !!}
    </p>
@stop

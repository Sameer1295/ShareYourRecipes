@extends('layouts.app')

@section('content')
    Hello, {{ $name }}.
    The current UNIX timestamp is {{ time() }}.

    @if(20/20 == 1)
        <i>This is even number</i>
        <input type="text" name="Msg">
    @else
        This is odd number
    @endif
@endsection
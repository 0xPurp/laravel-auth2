@extends('template.back')

@section('contentBO')

    <h1>Modifier Header</h1>
    <br>
    <form action="{{route('headers.update', $headers->id)}}" method="POST">
        @csrf
        @method('PUT')
        Icon: <input type="text" name="icon" value="{{$headers->icon}}">
        Description: <input type="text" name="description" value="{{$headers->description}}">
        <button type="submit">Submit</button>
    </form>

@endsection


@extends('template.back')

@section('contentBO')

    <h1>Modifier About</h1>
    <br>
    <form action="{{route('updateAbout', $abouts->id)}}" method="POST">
        @csrf
        @method('PUT')
        Birthday: <input type="text" name="birthday" value="{{$abouts->birthday}}">
        <button type="submit">Submit</button>
    </form>

@endsection


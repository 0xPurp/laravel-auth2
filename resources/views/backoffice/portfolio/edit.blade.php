@extends('template.back')

@section('contentBO')

    <h1>Modifier Portfolio</h1>xcd
    <br>
    <form action="{{route('portfolios.update', $portfolio->id)}}" method="POST">
        @csrf
        @method('PUT')
        Image: <input type="text" name="img" value="{{$portfolio->img}}">
    </form>

@endsection


@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier About</h1>
        <br>
        <form action="{{route('abouts.update', $about->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="p1">
                Text: <textarea type="text" name="text" class="main" value="{{$about->text}}">{{$about->text}}</textarea>
            </p>
            <p>
                Text Bouton: <input type="text" name="bouton" class="monT" value="{{$about->bouton}}">
            </p>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection


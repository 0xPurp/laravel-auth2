@extends('template.back')

@section('contentBO')
<h1 class="titresBO">PARTIE PORTFOLIO</h1>

    <div class="buttonsBO">
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataPort as $item)
        <div class="maDiv">
            <p>titre:{{$item->url}}</p>
                <div class="buttonDelEd">
                    <a href="{{route('portfolios.edit', $item->id)}}">
                        <button class="btnEd" type="submit">
                            EDIT
                        </button>
                    </a>
                </div>
        </div>
        @endforeach
    </div>

@endsection
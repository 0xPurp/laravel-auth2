@extends('template.back')

@section('contentBO')
<h1 class="titresBO">PARTIE CONTACT</h1>

    <div class="buttonsBO">
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataContact as $item)
        <div class="maDiv">
            <p>titre:{{$item->titre}}</p>
            <p>lien image:{{$item->img}}</p>
            <p>description:{{$item->description}}</p>
                <div class="buttonDelEd">
                    <a href="{{route('contacts.edit', $item->id)}}">
                        <button class="btnEd" type="submit">
                            EDIT
                        </button>
                    </a>
                </div>
        </div>
        @endforeach
    </div>

@endsection
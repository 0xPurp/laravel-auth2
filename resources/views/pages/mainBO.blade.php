@extends('template.back')

@section('contentBO')

  <h1 class="title_home">BACKOFFICE HOME</h1>
  <div class="globaleHome" >
    <div class="row globale2">

      <div class="col-12 skills">
        <h3 class="text-center">Modification HEADER</h3>
        <a href="{{route('titres.index')}}"> 
          <button class="btn btn-danger"type="submit">DIRECTION TITRE</button>
        </a>
      </div>
      <div class="col-6 about">
        <h3 class="text-center">Modification ABOUT</h3>
        <a href="{{route('abouts.index')}}">
        <button class="btn btn-danger"type="submit">DIRECTION ABOUT</button>
        </a>
      </div>
      <div class="col-6 contact">
        <h3 class="text-center">Modification CONTACT</h3>
        <a href="{{route('contacts.index')}}">
          <button class="btn btn-danger"type="submit">DIRECTION CONTACT</button>
        </a>
      </div>
      <div class="col-6 portfolio">
          <h3 class="text-center">Modification PORTFOLIO</h3>
          <a href="{{route('portfolios.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION PORTFOLIO</button>
          </a>
      </div>
      <div class="col-6 skills">
          <h3 class="text-center">Modification TITRE</h3>
          <a href="{{route('titres.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION TITRE</button>
          </a>
      </div>
    </div>
  </div>

@endsection


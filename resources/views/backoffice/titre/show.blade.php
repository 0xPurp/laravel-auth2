@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE TITRE</h1>

    <div class="buttonsBO">
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataTitre as $item)

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>UI/UX Designer &amp; Web Developer.</h3>
              <p class="font-italic">
                Texte: {{$item->titre}}
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Titre:</strong>{{$item->titre}}</li>
                  </ul> 
                </div>
              </div>
            </div>
          </div>

          <div class="buttonDelEd">
            <a href="{{route('titres.edit', $item->id)}}">
              <button class="btnEd" type="submit">
                  EDIT
              </button>
            </a>
          </div>

        @endforeach
    </div>

@endsection
@extends("layouts.miLayout")

@section("contenido")
    <title>Testimonios</title>
    	<div class="container main" id="color">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            <h2>Testimonios</h2>
            {{-- <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div> --}}
            @if (count($posteos))
              <i class="fa fa-quote-left fa-4x"></i>
                  {{-- <div class="item"> --}}
                      @foreach($posteos as $key => $posteo)
                      <div class="row posteos">
                        <div class="class-sm-3 col-sm-3">
                          <img class="img-circle" src="{{ asset('storage/' . $posteo->avatarpath) }}" width="150px" >
                        </div>
                        <div class="class-sm-9 col-sm-9">
                          <p>"{{$posteo->message}}"</p>
                          <p class="firmaClientIndex">{{$posteo->name}}</p>
                        </div>
                      </div>
                      @endforeach
                  {{-- </div> --}}
            @endif
            <div class="cd-md-8 cd-md-offset-2">
                {{$posteos->links()}}
            </div>
    			</div>
    		</div>

        <h2><span class="fa fa-comment fa-x"></span>Dejá tu commentario aqui</h2>
        @include('layouts.posteos.formPosteo')
    	</div>
@endsection

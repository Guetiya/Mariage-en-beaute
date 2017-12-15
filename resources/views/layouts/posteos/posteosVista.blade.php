<div class="testimonios col-sm-4">
  {{-- <a href="/posteos" style="text-decoration:none;"> --}}
  <h2 class=""><a href="/posteos" style="text-decoration:none;">Testimonios</a></h2>
    @if (count($posteos))
          {{-- <div class="item"> --}}
          <i class="fa fa-quote-left fa-2x"></i> <br>
                @foreach($posteos as $key => $posteo)
                  <div class="row posteos">
                    <div class="class-sm-3 col-sm-3" >
                      <img src="{{ asset('storage/' . $posteo->avatarpath) }}" width="60px" class="img-circle">
                      {{-- <img class="profile-circle" src="images/Nelly.jpg"> --}}
                    </div>
                    <div class="class-sm-9 col-sm-9">
                      {{-- <blockquote> --}}
                      <p>{{$posteo->message}}</p> <br>
                      <p class="firmaClient">{{$posteo->name}}</p>
                      {{-- </blockquote> --}}
                    </div>
                  </div>
                @endforeach
          {{-- </div> --}}
    @endif
    <div class="col-md-8 col-md-offset-2">
      {{$posteos->links()}}
    </div>
</div>

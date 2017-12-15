@extends("layouts.miLayout")

@section("contenido")
<title>Galería</title>
<div class="container main" id="color">
	<div class="row">
		<div class='list-group gallery'>
				@foreach ($fotos as $key => $foto)
					<div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
							<a class="fancybox thumbnail" rel="ligthbox" href="/galeria/{{$foto->id}}">
									<img class="img-responsive" src="{{ asset('storage/' . $foto->foto) }}" width="" >
							</a>
					</div> <!-- col-6 / end -->
				@endforeach
            {{-- <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Angeline.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Angeline.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Abril.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Abril.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Severine.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Severine.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Severine1.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Severine1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Severine2.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Severine2.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Severine3.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Severine3.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Severine4.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Severine4.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Alix.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Alix.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/galeria/Romane.jpg">
                    <img class="img-responsive" alt="" src="images/galeria/Romane.jpg" />
                </a>
            </div> <!-- col-6 / end -->  --}}
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->
@endsection

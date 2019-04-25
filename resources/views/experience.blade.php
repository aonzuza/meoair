@extends('layouts.app')


@section('content')



<div class="experience-page-wrapper">

  <div class="experience-container-wrapper">

    <div class="container">

        <div class="row">

    @foreach( $experiences as $experience)

              <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-4 offset-lg-0">

                <div class="experince-card-wrapper">
                  <div class="card border-0" >
                      <div class="experince-card-image-wrapper text-center">
                          <img class="card-img-top" style="width:80px;height:80px;" src="{{$experience->image}}" alt="Card image cap">
                      </div>

                      <div class="card-body">
                        <h2 class="text-center">{{$experience->name}}</h2>
                        <p class="card-text">
                          {{ $experience->comment}}
                         </p>
                      </div>
                    </div>
                </div>


              </div>

    @endforeach

          </div>

        </div>
      </div>


    <div class="d-flex my-4">
         <div class="mx-auto">
             {{$experiences->links("pagination::bootstrap-4")}}
         </div>
     </div>



</div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Reviews</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach(  $reviews as $review)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <p> {{$review->customer->formatedname()}}  </p >
                                        <p>  Product :{{$review->product->title}}  </p>
                                        <p>  Stars :
                                            @for($i = 0 ; $i<$review->stars;$i++)
                                                <i class="fas fa-star"></i>
                                                @endfor
                                        </p>
                                        <p>  review :{{$review->review}}  </p>
                                        <p> Date : {{  $review->humanFormatedDate()  }} </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            {{$reviews->links()}}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach(  $products as $product)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <h5> {{$product->title}}  </h5 >
                                        <p> Price:{{ $cur  }} {{$product->price}}   </p>
                                        {!! (count($product->images) > 0) ? '<img style="max-with=100px";class="img-thumbnail card-img" src="'.$product->images[0]->url.'"/>':''  !!}

                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

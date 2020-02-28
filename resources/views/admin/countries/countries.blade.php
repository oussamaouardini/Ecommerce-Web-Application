@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Countries</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach(  $countries as $country)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <h5> {{$country->name}}  </h5 >
                                        <p> Currency :  {{$country->currency }}</p>
                                        <p> Capital :  {{$country->capital }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            {{$countries->links()}}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Support</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach(  $supports as $support)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">

                                        <h5>{{$support->user->formatedname()}}</h5>
                                        <p>Status {{$support->status}}</p>
                                        <p> Title : {{$support->title}} </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            {{$supports->links()}}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Roles</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach(  $roles as $role)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">

                                        <h5>{{$role->role}}</h5>

                                    </div>
                                </div>
                            @endforeach
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">

        @if (Session::has('success'))
            <div class="alert alert-success">
                 dd
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Units</div>
                    <div class="card-body">

                            <form action="{{route('units')}}" method="POST"  class="row" >
                                {{csrf_field()}}
                                <div class="form-group col-md-6 ">
                                    <label for="unit_name">Unit Name</label>
                                    <input type="text"  id="unit_name" name="unit_name" placeholder="Unit Name" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="unit_code">Unit Code</label>
                                    <input type="text"  id="unit_code" name="unit_code" placeholder="Unit Code" required >
                                </div>

                                <div class="form-group col-md-12">

                                    <button type="submit" class="btn btn-primary" > Save New Unit </button>

                                </div>

                            </form>


                        <div class="row">
                            @foreach(  $units as $unit)
                                <div class="col-md-3">
                                   <div class="alert alert-primary" role="alert">
                                       <span class="buttons-span">
                                           <span><a class="edit-unit" href=""><i class="fas fa-edit"></i></a> </span>
                                           <span><a class="delete-unit" href=""><i class="fas fa-trash-alt"></i></a></span>
                                       </span>
                                       <p> {{$unit->unit_name}} , {{$unit->unit_code}} </p >
                                   </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            {{$units->links()}}
                        </div>
                    </div>
                  </div>
             </div>
     </div>
    </div>
@endsection



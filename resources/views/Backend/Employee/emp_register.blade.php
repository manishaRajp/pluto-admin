@extends('Backend.Admin.layouts.master')
@section('content')
<head>
    <link href="{{ asset('Admin/asset/css/login.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <h3 class="title2">Employee Register</h3>

                    <div class="card-body">
                        <form class="form-container-emp" method="POST" action="{{ route('admin.change_pass') }}">
                            @csrf
                            <br>
                            <br>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label class="inputEmail4" for="inputEmail4">Email</label>
                                   <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                               </div>
                               <div class="form-group col-md-6">
                                   <label class="inputEmail4" for="inputPassword4">Password</label>
                                   <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="inputEmail4" for="inputAddress">Address</label>
                               <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                           </div>
                           <div class="form-group">
                               <label class="inputEmail4"  for="inputAddress2">Address 2</label>
                               <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label class="inputEmail4" for="inputCity">City</label>
                                   <input type="text" class="form-control" id="inputCity">
                               </div>
                               <div class="form-group col-md-4">
                                   <label class="inputEmail4" for="inputState">State</label>
                                   <select id="inputState" class="form-control">
                                       <option selected>Choose...</option>
                                       <option>...</option>
                                   </select>
                               </div>
                               <div class="form-group col-md-2">
                                   <label class="inputEmail4"  for="inputZip">Zip</label>

                                   <input type="text" class="form-control" id="inputZip">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="gridCheck">
                                   <label class="form-check-label" for="gridCheck">
                                       Check me out
                                   </label>
                               </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Sign in</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

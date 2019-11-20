@extends('layout.app')
@section('content')

    <div class="col-md-4 offset-md-4">
            @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                 </div>
             @endif
            <h1 class="text-center"> Add Patient </h1>
            <form action="" method="">
                {{csrf_field()}}
                <label for="firstname">Firstname</label>
                <div class="form-group">
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" id="lastname">
                </div>
                <div class="form-group"> 
                    <label for="marital_status">Marital Status</label>
                    <select name="marital_status" class="form-control" id="marital_status">
                        <option></option>
                        <option value="">single</option>
                        <option>Married</option>
                        <option>Other</option>
                    <select>
                </div>
                <div class="form-group">
                    <label for="date_birth"></label>
                    <input type="date" name="date_birth" class="form-control" id="date_birth"> 
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="+234">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation">
                </div>
            </form>
    </div>
                
    </div>
    
@endsection
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
            <h1 class="text-center"> Select Diagnosis </h1>
            <form action="" method="">
                {{csrf_field()}}
                <label for="diarrhorea">Diarrhorea</label>
                <div class="form-group">
                    <select name="diarrhorea" class="form-control" id="diarrhorea">
                        <option></option>
                        <option value="mild">Mild</option>
                        <option value="moderate">Moderate</option>
                        <option value="severe">Severe</option>
                    </select>
                </div>
                <label for="vomiting">Vomiting</label>
                <div class="form-group">
                    <select name="vomiting" class="form-control" id="vomiting">
                        <option></option>
                        <option value="mild">Mild</option>
                        <option value="moderate">Moderate</option>
                        <option value="severe">Severe</option>
                    </select>
                </div>
                <label for="dehydration">Dehydration</label>
                <div class="form-group">
                    <select name="dehydration" class="form-control" id="dehydration">
                        <option></option>
                        <option value="mild">Mild</option>
                        <option value="moderate">Moderate</option>
                        <option value="severe">Severe</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
                
    </div>
    
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <form action='/p' enctype='multipart/form-data' method='post'>
        @csrf
   <div class="row">
       <div class="col-8 offset-2">
           <div class="row">
               <h1> Create Post</h1>
           </div>
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label ">Post description</label>

                <input id="caption" 
                type="text" 
                class="form-control @error('caption') is-invalid @enderror" 
                name='caption'
                value="{{ old('caption') }}" 
                required autocomplete="caption" autofocus>

                @error('caption')
                        <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="form-group row">
                <label for="serial_number" class="col-md-4 col-form-label ">Serial Number</label>
    
                    <input id="serial_number" 
                    type="number" 
                    class="form-control @error('serial_number') is-invalid @enderror" 
                    name='serial_number'
                    value="{{ old('serial_number') }}" 
                    required autocomplete="serial_number" autofocus>
    
                    @error('serial_number')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                {{-- <div class="form-group row">
                    <label for="date" class="col-md-4 col-form-label ">Post date</label>
        
                        <input id="date" 
                        type="date" 
                        class="form-control @error('date') is-invalid @enderror" 
                        name='date'
                        value="{{ old('date') }}" 
                        required autocomplete="date" autofocus>
        
                        @error('date')
                                <strong>{{ $message }}</strong>
                        @enderror
                    </div> --}}

                    <div class="form-group row">
                        <label for="cost" class="col-md-4 col-form-label ">Post cost</label>
            
                            <input id="cost" 
                            type="number" 
                            class="form-control @error('cost') is-invalid @enderror" 
                            name='cost'
                            value="{{ old('cost') }}" 
                            required autocomplete="cost" autofocus>
            
                            @error('cost')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    
                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label ">Post quantity</label>
                
                                <input id="quantity" 
                                type="number" 
                                class="form-control @error('quantity') is-invalid @enderror" 
                                name='quantity'
                                value="{{ old('quantity') }}" 
                                required autocomplete="quantity" autofocus>
                
                                @error('quantity')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">
                    Add new Post
                </button>
            </div>
        </div>
    </div>
    </form>
   </div>
@endsection

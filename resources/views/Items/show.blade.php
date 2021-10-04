@extends('base')
<img src="/images/bg.png" alt="" class="bg">
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-6 offset-md-3">
            <div class="create" id="createitems">

                <h1 class="itemtitle text-warning">View Items</h1>
                <hr/>

                <div class=" text-white rounded p-3">
                    <h5 class="text-white">Name: {{ $item->name }}</h5>
                    
                    <h5 class="text-white">Price: {{ $item->price }}</h5>
                    
                    <h5 class="text-white">Quantity: {{ $item->quantity }}</h5>

                    <h5 class="text-white">Description: {{ $item->description }}</h5> 
                </div>
                <br>
                <a class="btn btn-primary" href="{{ route('items.index') }}" id="back">Back</a>

            </div>
        </div>
    </div>
</div>

@endsection
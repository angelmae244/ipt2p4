@extends('base')
<img src="/images/bg.png" alt="" class="bg">
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        
            <div class="create" id="createitems">

                <h1 class="itemtitle">Update an Items</h1>
                <br>
                <hr/>
                <form action="{{ route('items.update', $item->id) }}" method="post">
                    @csrf
                    @method('put')
                    <label for="name" class="text-white">Name</label>
                    <input type="text" name="name" class="form-control mb-3" value="{{ $item->name }}"/>

                    <label for="price" class="text-white">Price</label>
                    <input type="number" name="price" class="form-control mb-3" value="{{ $item->price }}"/>

                    <label for="quantity" class="text-white">Quantity</label>
                    <input type="number" name="quantity" class="form-control mb-3" value="{{ $item->quantity }}"/>

                    <label for="description" class="text-white">Description</label>
                    <input type="text" name="description" class="form-control mb-3" value="{{ $item->description }}"/>

                    <a class="btn btn-primary" href="{{ route('items.index') }}" id="back">Back</a>
                    <button class="btn btn-success float-end px-5" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
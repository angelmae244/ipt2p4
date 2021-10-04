@extends('base')

<img src="/images/bg.png" alt="" class="bg">

@section('content')

@if (session('success'))
    <div class="alert alert-success fixed-bottom">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <div class="row">
        
        <div class="col-md-10 offset-md-1">

            <h1 class="itemtitle">List of Items</h1>
            <a class="btn btn-primary float-end" href="{{ route('items.create') }}" id="btnitem">Add Item</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr></tr>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Item Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($items as $item) {{-- Loop items --}}
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td><a class="btn btn-warning" href="{{ route('items.show', $item->id) }}">View</a>
                            <a class="btn btn-info" href="{{ route('items.edit', $item->id) }}">Edit</a><br>
                            <form action="{{ route('items.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
@extends('base')
<img src="/images/bg.png" alt="" class="bg">
@section('content')
<br><br><br>
<div class="container">
    <h1 style="text-align:center; color:white; font-size:90px; position:relative;">Welcome to the Dashboard</h1>
    <a class="btn btn-warning" href="{{ route('items.index') }}" id="viewitems">View Items</a>
        
</div>

@endsection
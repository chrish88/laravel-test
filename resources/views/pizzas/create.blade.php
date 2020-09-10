@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1 class="create-heading">create a pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Your Pizza:</label>
        <select name="type" id="type">
            <option value="select">-select-</option>
            @foreach($pizzas as $pizza)
            <option value="{{ $pizza['type'] }}">{{ $pizza['type'] }}</option>
            @endforeach
        </select>
        <label for="base">Choose Your Base:</label>
        <select name="base" id="base">
            <option value="select">-select-</option>
            @foreach($pizzas as $pizza)
            <option value="{{ $pizza['base'] }}">{{ $pizza['base'] }}</option>
            @endforeach
        </select>
        <input type="submit" id="submit" value="Place Order">
    
    </form> 
</div>
@endsection

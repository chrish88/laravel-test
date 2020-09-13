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
            <option value="{{ $pizza['crust'] }}">{{ $pizza['crust'] }}</option>
            @endforeach
        </select>
        <fieldset>
            <label>Extra Toppings:</label><br>
            @foreach($pizzas as $pizza)
            <input type="checkbox" name="toppings[]" value="{{ $pizza['toppings'] }}">{{ $pizza['toppings'] }}<br>
            @endforeach
        </fieldset>
        <input type="submit" id="submit" value="Place Order">
    
    </form> 
</div>
@endsection

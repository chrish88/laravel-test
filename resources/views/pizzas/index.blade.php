@extends('layouts.app')
@section('content')

<div class="full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <header class="headerpppppp">
        <div class="title m-b-md">
            Pizzas
        </div>
    </header>
    <div class="content">
        
        <div class="">
        @foreach($pizzas as $pizza)
            <p>{{ $pizza['name'] }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
            @if($pizza['toppings'])
            <p>Toppings:</p>
        
            <ul>
                @foreach($pizza['toppings'] as $topping)
                <li>{{ $topping }}</li>
                @endforeach
            </ul>
            @endif
        @endforeach
        </div>

      
    </div>
</div>
@endsection

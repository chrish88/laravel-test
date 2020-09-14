@extends('layouts.app')
@section('content')

<div class="full-height">
 <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="mssg">{{ session('message') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection

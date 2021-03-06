<?php

namespace App\Http\Controllers;

use App\Pizzas;
use App\PizzaTypes;
use Illuminate\Http\Request;


class PizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all pizza records
        // $pizzas = Pizzas::all();

        // $pizzas = Pizzas::orderBy('name')->get();
        $pizzas = Pizzas::all();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pizzas = PizzaTypes::all();
        return view('pizzas.create', ['pizzas' => $pizzas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pizza = new Pizzas();

        $pizza->name        = request('name');
        $pizza->type        = request('type');
        $pizza->base        = request('base');
        $pizza->toppings    = request('toppings');

        $pizza->save();
        
        return redirect('/')->with('message', 'Thank you for placing an order');

        //return request('toppings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizza = Pizzas::find($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizzas $pizzas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizzas $pizzas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Pizzas::findOrFail($id);

        $pizza->delete();
        
        return redirect('/pizzas');
    }
}

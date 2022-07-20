@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="row mb-4">
        <div class="col-md-12 col-xs-12">
            <h1>Superlógica App</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <a href="{{ route('ex1.index') }}" class="btn btn-primary mb-2">Exercício 1</a>
            <a href="{{ route('ex2.index') }}" class="btn btn-primary ms-2 mb-2">Exercício 2</a>
            <a href="{{ route('ex3.index') }}" class="btn btn-primary ms-2 mb-2">Exercício 3</a>
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('title', 'Exercício 2')

@section('content')

    <!-- Título da página -->
    <div class="row mb-4">
        <div class="col-md-6 col-xs-12">
            <h2>Exercício 2</h2>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="d-flex justify-content-end">
                <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-10 col-xs-12">
            <div class="border p-4">
                <p>
                    Array original: {{ $digitosToString }}
                </p>
                <p>
                    3ª posição do array: {{ $digitos[2] }}
                </p>
                <p>
                    Existe o dígito 14 no array? {{ $hasValor14 ? __('SIM') : __('NÃO') }}
                </p>
                <p>
                    Array com posições removidas pela regra <span class="fw-bold">7</span>: {{ $digitosRemovidos }}
                </p>
                <p>
                    Array sem a última posição: {{ $digitosWithoutLast }}
                </p>
                <p>
                    Quantidade de elementos: {{ count($digitos) }} 
                </p>
                <p>
                    Array Stranger Things (invertido): {{ $digitosReversos }} 
                </p>
            </div>
        </div>
    </div>

@endsection
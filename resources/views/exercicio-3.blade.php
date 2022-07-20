@extends('layouts.app')

@section('title', 'Exercício 3')

@section('content')

    <!-- Título da página -->
    <div class="row mb-4">
        <div class="col-md-6 col-xs-12">
            <h2>Exercício 3</h2>
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
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Usuário</th>
                                <th scope="col" class="text-center">Maior_50_anos</th>                           
                            </tr>                    
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>                                    
                                    <td>{{ $usuario->nome }} - {{ $usuario->genero }}</td>
                                    <td class="text-center">{{ $usuario->maior_50_anos ?? '' }}</td>                                    
                                </tr>                        
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('title', 'Exercício 1')

@section('content')
    <!-- Título da página -->
    <div class="row mb-4">
        <div class="col-md-6 col-xs-12">
            <h2>Exercício 1</h2>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="d-flex justify-content-end">
                <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
            </div>
        </div>
    </div>

    <!-- Formulário de cadastro -->
    <div class="row mb-4">
        <div class="col-md-10 col-xs-12">
            <div class="border p-4">            
                <h3 class="mb-3">Formulário de cadastro</h3> 
                <form method="POST" action="{{ route('ex1.cadastrar') }}">
                    @csrf
                    
                    <!-- Nome completo -->
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Nome completo:') }}</label>
                        <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            name="name"
                            value="{{ old('name') }}"
                            autofocus
                        >                                                     

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror            
                    </div>  

                    <!-- Nome de login -->
                    <div class="mb-3">
                        <label for="userName" class="form-label">{{ __('Nome de login:') }}</label>
                        <input 
                            type="text" 
                            class="form-control @error('userName') is-invalid @enderror" 
                            id="userName" 
                            name="userName" 
                            value="{{ old('userName') }}" 
                        >                                                     

                        @error('userName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror            
                    </div>  

                    <!-- CEP -->
                    <div class="mb-3">
                        <label for="zipCode" class="form-label">{{ __('CEP:') }}</label>
                        <input 
                            type="text" 
                            class="form-control @error('zipCode') is-invalid @enderror" 
                            id="zipCode" 
                            name="zipCode" 
                            value="{{ old('zipCode') }}" 
                        >                                                     

                        @error('zipCode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror            
                    </div>  
                    
                    <!-- E-mail -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email:') }}</label>
                        <input 
                            type="text" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                        >                                                     

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror            
                    </div>

                    <!-- Senha -->
                    <div class="mb-4">
                        <label for="password" class="form-label">{{ __('Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número):') }}</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password"                        
                        >                                                     

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror            
                    </div>      
                    
                    <!-- Botão submit form -->
                    <div class="d-flex justify-content-end">                    
                        <button class="btn btn-success ms-2" type="submit">Cadastrar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Listagem de usuários cadastrados -->
    <div class="row mb-3">
        <div class="col-md-10 col-xs-12">
            <div class=" border p-4">            
                <h3 class="mb-4">Usuários cadastrados</h3>    
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome completo</th>
                            <th scope="col">Login</th>
                            <th scope="col">CEP</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Data de criação</th>
                        </tr>                    
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $index => $usuario)
                            <tr>
                                <th scope="col">{{ $index+1 }}</th>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->userName }}</td>
                                <td>{{ $usuario->zipCode }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>        
            </div>
        </div>
    </div>
@endsection
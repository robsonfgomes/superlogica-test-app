<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Superlógica App - @yield('title')</title>

    <script src="{{ mix('/js/app.js') }}" defer></script>    
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />    
    </script>
</head>
<body>    
    <div class="container py-5">      
        <!-- Notificações push -->
        <div class="row mb-3">
            <div class="col-md-12 col-xs-12">
                @if (session('success') || session('danger'))                        
                    <div class="toast-container position-fixed top-0 start-50 translate-middle-x mt-3">
                        <div
                            class="toast align-items-center text-white bg-{{ session('success') ? 'success':'danger' }} border-0"
                            role="alert"
                            aria-live="assertive"
                            aria-atomic="true"
                            id="liveToast"   
                            data-bs-delay="10000"                         
                        >
                            <div class="d-flex">
                                <div class="toast-body">
                                    <i class="bi bi-check-circle-fill"></i> {!! session('success') ?? session('danger') !!}
                                </div>
                                <button
                                    type="button"
                                    class="btn-close btn-close-white me-2 m-auto"
                                    data-bs-dismiss="toast"
                                    aria-label="Close"
                                ></button>
                            </div>
                        </div>
                    </div>
                @endif                               
            </div>
        </div>

        <!-- Conteúdo do App -->      
        <div class="row">
            <div class="col-md-12 col-xs-12">                    
                @yield('content')                    
            </div>
        </div>
    </div>
</body>
</html>
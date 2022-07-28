@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 1</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
    rel="stylesheet"
    />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@400;600;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    
    
        <style>
            body{
                font-family: 'Open Sans';
                font-weight: bold;
            }
        </style>
</head>
<body>

<div class="container ">
    <div class="row text-center justify-content-center">
        <!-- <div class="col-md-4"></div> -->
        <div class="col-md-5 text-center mt-5">
        

            <form class="mt-5" method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-outline ">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    <label class="form-label" for="form1Example2">{{ __("Nom d'utilisateur") }}</label>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                    <p class="fw-normal">*champ requis</p> 
                </div>



                <!-- Email input -->
                <div class="form-outline ">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                <label class="form-label" for="form1Example1">{{ __('Email') }} </label>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                   <p class="fw-normal">*champ requis</p> 
                </div>
            
                <!-- Password input -->
                <div class="form-outline ">
                <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required />
                <label class="form-label" for="form1Example2">{{ __('Mot de passe') }}</label>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                    <p class="fw-normal">*champ requis</p> 
                </div>

                <!-- Password input -->
                <div class="form-outline ">
                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" required/>
                    <label class="form-label" for="form1Example2">{{ __('Télephone portable') }}</label>
                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div id="textExample1" class="form-text px-3 mb-3 text-start">
                    <p class="fw-normal">*champ requis</p> 
                </div>
            
                <div class="row mb-3">
                
            
                    <div class="text-start ">
                        <!-- Simple link -->
                      <p class="fw-normal">Connectez-vous ou créez un compte pour déposter votre annonce </p>  
                    </div>
                </div>
            
                <!-- Submit button -->
                <button type="submit" class="btn  btn-block shadow-none" style="background:#757575 !important; color:white;">{{ __('Créer un compte') }}</button>
                             

            </form>




            <!-- MDB -->

        </div>
       <!--  <div class="col-md-4"></div> -->
    </div>
</div>    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>


@endsection

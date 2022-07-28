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
            .bonjour{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-size: 36px;
                line-height: 49px;
                /* identical to box height */

                text-align: center;
                letter-spacing: 0.15px;
            }
            .txt{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                display: flex;
                align-items: center;
                text-align: center;
                letter-spacing: 0.15px;
            }
        </style>
</head>
<body>
<!--Start Chat-->
<div class=" m-5 position-absolute bottom-70 end-0" style="margin-top: 554px!important; z-index: 99 !important;">
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="30" cy="30" r="30" fill="#00B57A"/>
        <path d="M25.178 37.294L19.0803 42.5708C18.9508 42.6829 18.7494 42.5909 18.7494 42.4196V37.294H16.5352C15.9829 37.294 15.5352 36.8462 15.5352 36.294V19.75C15.5352 19.1977 15.9829 18.75 16.5352 18.75H40.2494C40.8017 18.75 41.2494 19.1977 41.2494 19.75V36.294C41.2494 36.8462 40.8017 37.294 40.2494 37.294H25.178Z" stroke="white" stroke-width="2"/>
        <path d="M28.6602 41.5179H44.0351C44.8636 41.5179 45.5351 40.8464 45.5351 40.0179V23.8394" stroke="white" stroke-width="2" stroke-linecap="round"/>
    </svg>
</div>
<!--End Chat-->
<div class="container ">
    <div class="row text-center justify-content-center">
        <!-- <div class="col-md-4"></div> -->
        <div class="col-md-5 text-center mt-5">
            <h2 class="mt-4 bonjour">Bonjour !</h1>
            <p class="txt">Connecter-vous pour découvrir toutes nos fonctionnalités</p>

            <form method="POST" action="{{ route('login') }}">
            @csrf

                <!-- Email input -->
                <div class="form-outline mb-4">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                <label class="form-label" for="email">{{ __('Email') }}</label>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
            
                <!-- Password input -->
                <div class="form-outline mb-4">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                <label class="form-label" for="form1Example2">{{ __('Mot de passe') }}</label>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
            

            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block shadow-none">{{ __('Se Connecter') }}</button>
                
                                <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                
            
                        <div class="justify-content-center text-center mt-4">
                            <!-- Simple link -->
                            @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                          <p>Envie de nous rejoindre?  <a href="{{ route('register') }}">Créer un compte</a> </p>  

                        </div>
                    </div>
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



@endsection

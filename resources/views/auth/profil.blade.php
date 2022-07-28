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
            .upload{
                width:100px;
                position:relative;
            }
            .upload img{
               border-radius:50%;
            }
            .upload .round{
                position :absolute;
                bottom:0;
                right:0;
                background:rgb(173, 171, 171);
                width:32px;
                height:32px;
                line-height:33px;
                overflow:hidden;
                border-radius:50%;
                text-align:center;
            }
            .upload .round input[type='file' ]{
                position: absolute;
                transform:scale(2);
                opacity:0;
            }
            input[type=file]::-webkit-file-upload-button{
                cursor:pointer;
            }
        

        </style>
</head>
<body>

<div class="container p-4 mt-4 py-2 border shadow-2 col-md-8 " style="border-radius: 4px;">

  <h5 class=" mb-3 fw-bolder mt-3">Profil</h5>

   <div class="row">
       <div class="col-md-4">
            <form action="{{route('ProfilUpdate')}}" method="post" enctype="multipart/form-data">
            @csrf 
            {{ method_field('PUT') }}
                <div class="upload">
                   <img src="{{asset('images/user.png')}}" width="100" height="100">
                   <div class="round">
                       <input type="file" name="file">
                       <i class="fas fa-plus text-white"></i>
                   </div>
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="name" id="form1Example1"  class="form-control" />
                    <label class="form-label" for="form1Example1">{{Auth::user()->name}}</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">{{Auth::user()->email}}</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="number" name="phone" id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">{{Auth::user()->phone}}</label>
                </div>
                  <!-- Submit button -->
                <button type="submit" class="btn btn-block mb-4 shadow-none text-white" style="background: rgb(173, 171, 171);">Enregistrer la modification</button>



            </form>
       </div>
       <div class="col-md-5">

       </div>
       <div class="col-md-3">
         <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">Voir mon profil public</button>

         <br><br><br>
         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif




         <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
            <div class="toast-header">
              <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img">
                <rect fill="#007aff" width="100%" height="100%" /></svg>
              <strong class="mr-auto">Bootstrap</strong>
              <small class="text-muted">just now</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
              See? Just like this.
            </div>
          </div>
          





          <div class="toast fade show bg-white text-gray" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-white text-center text-gray justify-content-center">
              
               




              <div class="text-center ">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 32H22V34H12V32Z" fill="#3782E8"/>
                            <path d="M20 34L20 27H22L22 34H20Z" fill="#3782E8"/>
                            <path d="M12 34L12 27H14L14 34H12Z" fill="#3782E8"/>
                            <path d="M17.0099 7C14.3578 7 11.8142 8.05357 9.93887 9.92893C8.0635 11.8043 7.00993 14.3478 7.00993 17C6.94231 18.4533 7.22071 19.902 7.82223 21.2267C8.42375 22.5514 9.3312 23.7144 10.4699 24.62C11.4699 25.55 12.0099 26.08 12.0099 27H14.0099C14.0099 25.16 12.8999 24.13 11.8199 23.14C10.8853 22.4243 10.1404 21.4903 9.65051 20.4198C9.16062 19.3494 8.94067 18.1752 9.00993 17C9.00993 14.8783 9.85279 12.8434 11.3531 11.3431C12.8534 9.84285 14.8882 9 17.0099 9C19.1317 9 21.1665 9.84285 22.6668 11.3431C24.1671 12.8434 25.0099 14.8783 25.0099 17C25.078 18.176 24.8566 19.3508 24.3649 20.4213C23.8732 21.4918 23.1264 22.4253 22.1899 23.14C21.1199 24.14 20.0099 25.14 20.0099 27H22.0099C22.0099 26.08 22.5399 25.55 23.5499 24.61C24.6879 23.706 25.5949 22.5447 26.1964 21.2217C26.798 19.8987 27.0768 18.4518 27.0099 17C27.0099 15.6868 26.7513 14.3864 26.2487 13.1732C25.7462 11.9599 25.0096 10.8575 24.081 9.92893C23.1524 9.00035 22.05 8.26375 20.8368 7.7612C19.6235 7.25866 18.3232 7 17.0099 7Z" fill="#3782E8"/>
                            <path d="M5.84436 4L4.13464 5.72532L6.67857 8.29488L8.38586 6.56957L5.84314 4H5.84436ZM28.1569 4L25.6129 6.56957L27.3214 8.29488L29.8641 5.72654L28.1569 4ZM0 15.7729V18.2271H3.64286V15.7729H0ZM30.3571 15.7729V18.2271H34V15.7729H30.3571Z" fill="#3782E8"/>
                            <rect x="16" width="2" height="4" fill="#3782E8"/>
                        </svg>
                    
              </div>
            </div>
            <div class="toast-body text-center" style="font-size: 0.7em;">
              Avec une photo, vous avez de quoi personaliser votre profil et rassurer les autres members!
            </div>
          </div>



       </div>
   </div>







<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
<script>
    function Back()
{
    window.history.back();
}
</script>
</body>
</html>
@endsection

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
        *{
            font-family: 'Open Sans';
        }
        .bc{
            background:#00b57954;
            color:#00B57A;
        }
        .bg{
            background: #C4C4C4;
        }
        .fl{
            display: flex;
        }
        .inp{
            margin: auto;
        }
        .title{
            font-family: 'Open Sans';
            font-style: normal;
            font-size: 17px;
            line-height: 28px;
            color: #3782E8;
            margin-bottom: 0;
            margin-top: 0px !important;
        }
        .price{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 19px;
            line-height: 33px;
            display: flex;
            align-items: center;
            letter-spacing: 0.15px;    
            margin-bottom: 0;        
        }
        .coloc{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 25px;
            /* identical to box height */

            display: flex;
            align-items: center;
            letter-spacing: 0.15px;
            color: #848484;
        }
        .cend{
            text-align: end;
        }
        .ico{
            color:#C4C4C4;
        }
        .ico:hover{
            color:#060606;
        }
        .ico2{
            color:#060606;
        }
        .ico2:hover{
            color:#060606;
        }
        .icons{
            text-align: end;
            margin-top: 55px;
        }
        .spn{
            font-size: 0.8em;
        }
        @media only screen and (max-width: 1000px) {
           .cent{
               text-align:center !important;
               padding:60px;
           }
        }

 
    </style>
</head>
<body>



 <div class="container">
     <div class="mt-4 d-flex justify-content-between">
        <h5><span class="badge bc py-2 px-3 ">Annonces en ligne (4)</span></h5>
        <p class="fw-bolder">Trier par: <span class="text-primary">Date</span> </p>
     </div>

     <div class="mt-4 d-flex justify-content-between bg py-2 px-3 rounded-2">
         <input type="checkbox" class="mt-2 " >
         <a href="" class="fw-bolder" style="color:#848484;"><i class="fas fa-trash"></i> Supprimer</a>
     </div>



     <div class="card  shadow-sm mt-5 rounded-1"  >
        <div class="row rowpad">
            <div class="col-md-3 fl py-2">
                <input type="checkbox" class="inp mx-3">
                <a class="ripple" href="#!">
                    <img
                      alt="example"
                      class="img-fluid rounded"
                      src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp"
                    />
                </a>
            </div>
            <div class="col-md-6 cent py-2">
              <h6 class=" fw-bolder mt-2 title">Colocation étudiante à Cergy </h6>
              <p class="price">480 €</p>
              <p class="coloc">Colocations</p>
              <a  href="{{Route('EditAnnoce' ,['id' =>'1'])}}" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Modifier</a>
              <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Supprimer</button>
            </div>
            <div class="col-md-3 py-2 px-4">
                <div class="cend">
                    <i class="fas fa-camera mx-4 my-2"></i>
                    <p class="mx-4 fw-bolder">Date: <span class="spn"> 23 avr 15:22</span></p>
                </div>
                <div class="icons">
                    <a class="mx-2 ico2"><i class="fas fa-eye"></i>250</a>
                    <a class="mx-2 ico"><i class="fas fa-phone"></i>200</a>
                    <a class="mx-2 ico"><i class="fas fa-envelope"></i>111</a>
                </div>
            </div>
        </div>
    </div> 
    <div class="card  shadow-sm mt-5 rounded-1"  >
        <div class="row rowpad">
            <div class="col-md-3 fl py-2">
                <input type="checkbox" class="inp mx-3">
                <a class="ripple" href="#!">
                    <img
                      alt="example"
                      class="img-fluid rounded"
                      src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp"
                    />
                </a>
            </div>
            <div class="col-md-6 cent py-2">
              <h6 class=" fw-bolder mt-2 title">Colocation étudiante à Cergy </h6>
              <p class="price">480 €</p>
              <p class="coloc">Colocations</p>
              <a  href="" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Modifier</a>
              <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Supprimer</button>
            </div>
            <div class="col-md-3 py-2 px-4">
                <div class="cend">
                    <i class="fas fa-camera mx-4 my-2"></i>
                    <p class="mx-4 fw-bolder">Date: <span class="spn"> 23 avr 15:22</span></p>
                </div>
                <div class="icons">
                    <a class="mx-2 ico2"><i class="fas fa-eye"></i>250</a>
                    <a class="mx-2 ico"><i class="fas fa-phone"></i>200</a>
                    <a class="mx-2 ico"><i class="fas fa-envelope"></i>111</a>
                </div>
            </div>
        </div>
    </div> 
 </div>



 








<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>
@endsection

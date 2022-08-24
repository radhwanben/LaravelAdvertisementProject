
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
            .border{
                border: solid 1px #e7e7e7 !important;
                border-radius: 4px !important;
            }
            .form-input input{
                display:none;
            }
            .form-input label{
                display:block;
                background:#fdfdfd;
                border:1px solid #eee;
                text-align:center;
                padding:15px;
              
            }
            .form-input label:hover{
                border:2px solid #3782E8;
                border-radius: 4px !important;
            }
            input:checked + label{
                border: solid 2px #3782E8 !important;
                box-shadow: 1px 1px 2px 1px #60a0f36b;
                border-radius: 4px !important;
            }
            .titleb{
                color : #3782E8 ;
                margin-bottom: 0;
            }
            .smoll{
                font-size: 0.8em;
                color:#848484;
            }
            .price{
                color : #3782E8 ; 
            }
            .bottom{
                font-size:14px;
            }
            .topbtn{
                background:#3782E8 !important;
            }
            .card{
                height: 249px !important;
            }
            .inline{
                display: inline;
                margin-left: 10px;
                font-size:0.85em;
            }
        </style>
</head>
<body>
    @include('includes.navbarguest')
 <div class="container mt-5">
    <h4 class="fw-bolder text-center my-5">Mes abonnements</h4>
    <form class="form">
        <div class="row">
            <div class="col-md-4 mb-2">
              <div class="card  ">
                <div class="form-input ">
                    <input type="radio" name="plan" id="plan-free" value="free" checked>
                    <label for="plan-free" class=" position-relative position-relative-example border">
                        <button type="button" class="btn btn-primary btn-rounded position-absolute shadow-none top-0 start-50 translate-middle">Recommandé</button>
                       <h6 class="fw-bolder mt-4">Abonnement 12 mois</h6>
                       <h4 class=" titleb fw-bolder">20 000 FCFA (35 €) </h4>
                       <p class="fw-light smoll">Pauable en une fois</p>
                       <h4 class=" price fw-bolder">+ <br>
                        7 000 FCFA (15 €)</h4>
                        <p class="fw-bolder bottom">Par titre foncier recherché</p>
                    </label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card  ">
                  <div class="form-input ">
                      <input type="radio" name="plan" id="plan-abonnement" value="abonnement" >
                      <label for="plan-abonnement" class="  border">
                         <br>
                         <h6 class="fw-bolder mt-4">Pas d’abonnement</h6>
                         <br>
                         <h4 class=" titleb fw-bolder">20 000 FCFA (35 €) </h4>
                         
                          <p class="fw-bolder mt-3 mb-4 ">Par titre foncier recherché</p>
                          <br>
                      </label>
                  </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card  ">
                  <div class="form-input ">
                      <input type="radio" name="plan" id="plan-mois" value="mois">
                      <label for="plan-mois" class="  border">

                         <h6 class="fw-bolder mt-4">Abonnement 12 mois</h6>
                         <h4 class=" titleb fw-bolder">100 000 FCFA (150 €)  </h4>
                         <p class="fw-light smoll">Par mois</p>
                         <h4 class=" price fw-bolder">+ <br>
                            2 000 FCFA (5 €)</h4>
                          <p class="fw-bolder bottom">Par titre foncier recherché</p>
                      </label>
                  </div>
                </div>
            </div>
        </div>
        <input type="checkbox" class="mt-5">
        <p class="inline fw-bolder">Je reconnais avoir lu accepté les <a href=""> Conditions Générales de Vente </a>(nos CGV ont évolué, n’hésitez pas à les consulter) et renonce à mon droit de rétractation. En validant ma commande j’accepte le commencement immédiat de la prestation.</p>
        <div class="content-align-center text-center py-4">
            <button type="button" class="btn btn-primary shadow-none mt-2">Souscrire au pack booster</button>
        </div>
        
    </form>
 </div>



 @include('includes.footer')
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>
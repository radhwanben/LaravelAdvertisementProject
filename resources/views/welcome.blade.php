
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
        .btnclr{
            background-color:#00B57A !important;
            color:white;
            font-family: 'Open Sans';
 
        }
        .btnclr:hover{
            background-color:#00B57A !important;
            color:white;
            font-family: 'Open Sans';
 
        }
        .texttitle{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 610 !important;
            font-size: 39px;
            line-height: 65px;
            text-align: center;
            letter-spacing: 0.15px;

            /* black / 100 */

            color: #060606;
        }
        .fwinfo{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 9px;
            /* identical to box height */

            text-align: center;
            letter-spacing: 0.15px;

            color: #000000;
        }
        .bg1{
            background: #00000085;
            border: 0px;
        }
        .svg{
            margin-right:-7px;
            opacity: 0.5 !important;
        }
        @media only screen and (max-width: 1000px) {
        .tt1 {
            font-size:1.5em;
        }
        .tt2{
            font-size: 1em;
            line-height: 9px;
            line-height: 20px;
        }

}
        @media only screen and (max-width: 767px) {
            .here{
            display:none !important;

           }
           .texttitle{
            line-height: 36px !important;
           }
}
    </style>
</head>
<body>


    @include ('includes.navbarguest')
    <!--/////////////////Start Content here///////////////-->

    <div class=" p-5" style="background-image: url(images/bg.png); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <div class="row my-5 text-center justify-content-center">
                <div class="col-md-9">
                    <br>
                    <p class="fw-bolder texttitle tt1">Protégez votre terrain</p>
                     <p class="text-center fwinfo tt2">Le 1er annuaire collaboratif des titres fonciers au Cameroun</p>
                     <!--Search Bar-->
                     <div class="input-group input-group-lg mt-5 here">
                        <span class="input-group-text bg1"> 
                            <svg class="svg" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6.5" y="10.5" width="19" height="14" rx="0.5" stroke="white"/>
                            <path d="M11.5 7C11.5 6.72386 11.7239 6.5 12 6.5H20C20.2761 6.5 20.5 6.72386 20.5 7V10.5H11.5V7Z" stroke="white"/>
                            <line x1="6" y1="16.3184" x2="25.6364" y2="16.3184" stroke="white"/>
                            </svg>
                            </span>
                        <input type="text"  placeholder="N°du titre foncier ou n° téléphone " aria-label="First name" class="form-control bg1">
                        <span class="input-group-text bg1"> 
                            <svg class="svg" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0003 28.2515L16.9618 27.168C18.0528 25.9185 19.0342 24.733 19.9073 23.6054L20.6281 22.6545C23.6376 18.5997 25.1431 15.3814 25.1431 13.0027C25.1431 7.92538 21.0502 3.80957 16.0003 3.80957C10.9504 3.80957 6.85742 7.92538 6.85742 13.0027C6.85742 15.3814 8.36295 18.5997 11.3725 22.6545L12.0932 23.6054C13.3389 25.2014 14.6421 26.7516 16.0003 28.253V28.2515Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 16.7621C18.1039 16.7621 19.8095 15.0565 19.8095 12.9526C19.8095 10.8486 18.1039 9.14307 16 9.14307C13.896 9.14307 12.1904 10.8486 12.1904 12.9526C12.1904 15.0565 13.896 16.7621 16 16.7621Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                
                        </span>
                        <input type="text"  placeholder="Nom et prénom du propriétaire" aria-label="Last name" class="form-control bg1">
                        <button class="btn btnclr" type="button" id="button-addon2"><i class="fas fa-search"></i></button>

                     </div>





                                          <!-- Mobile Search Bar -->
                                          <div class="input-group d-md-none input-group-lg mt-5">

                                              
                                            <!-- <input type="text"  placeholder="N°du titre foncier ou n° téléphone " class="form-control bg1 w-100"> -->

                                            <div class="input-group flex-nowrap mb-2">
                                                <input type="text" class="form-control bg1 w-100" placeholder="N°du titre foncier ou n° téléphone "  aria-label="First name" >
                                            </div>

                                            <div class="input-group flex-nowrap mb-2">
                                                <input type="text" class="form-control bg1 w-100" placeholder="Nom et prénom du propriétaire "  aria-label="First name" >
                                            </div>

                                            <button type="button" class="btn btn-success btnclr rounded w-100">REcherche</button>
                    
                                         </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>


     <div class=" justify-content-center text-center mt-5">
       <button class="btn btnclr  shadow-none">Rechercher</button>
     </div>















<br>
<br>
<br>
<br>


@include ('includes.footer')
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>
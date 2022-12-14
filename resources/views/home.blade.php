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
            .border{
                border: solid 1px #e7e7e7 !important;
                border-radius: 4px !important;
            }
            .mtt{
                margin-top: 8px;
            }
            .inn{
                padding: inherit;
            }
            .prf{
                padding: 11px; 
                margin-top: 9px; 
                margin-bottom: 9px;
            }
            .urlink{
                color:black 
            }
            .avatar{
                width: 55px;
                height: 40px;
            }
        </style>
</head>
<body>
 <div class="container">
     <div class="row">
            <div class="col-md-12 mt-4 ">
                <div class="px-4 py-2 border shadow-2 d-flex justify-content-between">
                    <div class="mtt" >
                        @if(!empty(Auth::user()->avatar))
                            <img class="avatar" src="storage/{{Auth::user()->avatar}}" /> <h3>{{Auth::user()->name}}</h3>
                        @else
                        <svg width="185" height="60" viewBox="0 0 185 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="28" stroke="#848484" stroke-width="4"></circle>
                            <circle cx="30" cy="22.5" r="11.125" fill="#848484" stroke="#848484" stroke-width="4"></circle>
                            <path d="M19.061 53.3462C16.5256 52.2376 14.2997 50.9673 12.6842 49.9105C16.2867 44.5851 22.6692 41 30 41C37.3308 41 43.7133 44.5851 47.3158 49.9105C45.7003 50.9673 43.4744 52.2376 40.939 53.3462C37.4834 54.8571 33.6062 56 30 56C26.3938 56 22.5166 54.8571 19.061 53.3462Z" fill="#848484" stroke="#848484" stroke-width="4"></path>
                            <h3>{{Auth::user()->name}}</h3>
                            </svg> 
                        @endif()
                     </div>
                    <div class="inn" >
                        <button type="button" class="btn prf btn-outline-info" data-mdb-ripple-color="dark">Voir Mon Profile Public</button>
                    </div>    
                </div>
            </div>
            <div class="col-md-6 mt-4 ">
            <a class="urlink" href="/Annonces">
              <div class="p-4 border shadow-2">
                  <div class="row">
                      <div class="col-md-2">
                        <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.1111 51.4357L11.7655 62.9848C11.1177 63.5454 10.1111 63.0852 10.1111 62.2287V51.4357H6.61108C4.40195 51.4357 2.61108 49.6449 2.61108 47.4357V8.4165C2.61108 6.20737 4.40194 4.4165 6.61108 4.4165H58.6111C60.8202 4.4165 62.6111 6.20736 62.6111 8.4165V47.4357C62.6111 49.6449 60.8202 51.4357 58.6111 51.4357H25.1111Z" fill="#3782E8"/>
                            <path d="M34.8568 32.359C34.8041 32.8687 34.3746 33.256 33.8622 33.256H31.2392C30.7287 33.256 30.3001 32.8714 30.245 32.3638L28.1062 12.6337C28.0421 12.0422 28.5054 11.5259 29.1003 11.5259H35.905C36.498 11.5259 36.9607 12.039 36.8997 12.6289L34.8568 32.359ZM29.707 39.8999C29.707 39.0959 29.968 38.4329 30.4899 37.911C31.0118 37.3749 31.7241 37.1069 32.6269 37.1069C33.5297 37.1069 34.242 37.3749 34.764 37.911C35.2859 38.4329 35.5468 39.0959 35.5468 39.8999C35.5468 40.6757 35.2929 41.3246 34.7851 41.8465C34.2773 42.3684 33.5579 42.6294 32.6269 42.6294C31.6959 42.6294 30.9765 42.3684 30.4687 41.8465C29.9609 41.3246 29.707 40.6757 29.707 39.8999Z" fill="white"/>
                        
                        </svg>
                      </div>
                      <div class="col-md-10">
                        <div >
                            <h3>Annonces</h3>
                            <p>G??rer mes annonces d??pos??es</p>
                        </div>
                      </div>
                  </div>

                  </a>
                    
              </div>
            </div>
            <div class="col-md-6 mt-4 ">
            <a class="urlink" href="/Abonnements">
                <div class="p-4 border shadow-2">
                    <div class="row">
                        <div class="col-md-2">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 63H59C61.2091 63 63 61.2091 63 59V17.9192C63 16.3671 62.3985 14.8754 61.3219 13.7574L51.7701 3.83815C50.639 2.66362 49.0787 2 47.4482 2H6C3.79086 2 2 3.79086 2 6V59C2 61.2091 3.79086 63 6 63Z" fill="#67BD3F"/>
                                <path d="M34.9474 43.5526C32.7575 43.5546 30.6093 42.9542 28.7379 41.817C26.8665 40.6799 25.3439 39.0498 24.3368 37.1053H34.3293C34.7081 37.1053 35.0544 36.8913 35.2238 36.5525L36.0659 34.8683C36.3983 34.2034 35.9148 33.4211 35.1714 33.4211H23.1211C23.0289 32.8132 22.9737 32.2053 22.9737 31.579C22.9737 30.9526 23.0289 30.3447 23.1211 29.7368H34.3293C34.7081 29.7368 35.0544 29.5228 35.2238 29.1841L36.0659 27.4999C36.3983 26.835 35.9148 26.0526 35.1714 26.0526H24.3368C25.3457 24.1096 26.8687 22.4808 28.7397 21.3438C30.6107 20.2069 32.758 19.6055 34.9474 19.6053C37.5822 19.6053 40.0281 20.4631 42.0137 21.9204C42.4354 22.23 43.0253 22.2115 43.3952 21.8416L45.2548 19.982C45.6599 19.5769 45.6441 18.9125 45.1948 18.5571C42.2859 16.2565 38.6766 14.9966 34.9474 15C27.7263 15 21.6105 19.6237 19.3263 26.0526H13.4601C13.0814 26.0526 12.7351 26.2666 12.5657 26.6054L11.7236 28.2896C11.3912 28.9545 11.8747 29.7368 12.618 29.7368H18.4789C18.3298 30.9604 18.3298 32.1975 18.4789 33.4211H13.4601C13.0814 33.4211 12.7351 33.6351 12.5657 33.9738L11.7236 35.6581C11.3912 36.323 11.8747 37.1053 12.618 37.1053H19.3263C21.6105 43.5342 27.7263 48.1579 34.9474 48.1579C38.822 48.1579 42.3759 46.8291 45.1919 44.6027C45.6423 44.2466 45.6574 43.5804 45.2502 43.1755L43.3797 41.3154C43.0083 40.9462 42.4175 40.9299 41.9964 41.2412C40.0277 42.6962 37.5964 43.5526 34.9474 43.5526Z" fill="white"/>
                            </svg>
                                
                        </div>
                        <div class="col-md-10">
                          <div >
                              <h3>Abonnement</h3>
                              <p>Suivre mon abonnement</p>
                          </div>
                        </div>
                    </div>
            </a>
                 
                      
                </div>
            </div>
            <div class="col-md-6 mt-4 ">
            <a class="urlink" href="/Profil">
                <div class="p-4 border shadow-2">
                    <div class="row">
                        <div class="col-md-2">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="33" cy="33" r="28" stroke="#32AFA9" stroke-width="4"/>
                                <circle cx="33" cy="25.5" r="11.125" fill="#32AFA9" stroke="#32AFA9" stroke-width="4"/>
                                <path d="M22.873 56.822C20.1544 55.6533 17.5953 54.2295 15.6842 53.0293C19.2979 47.864 25.6683 44.375 33.0003 44.375C40.2416 44.375 46.545 47.7783 50.181 52.8385C48.2749 53.7748 45.8018 54.9056 43.1771 55.9514C39.5058 57.4143 35.6908 58.6481 32.7522 59.0154C30.1085 59.3459 26.5175 58.3887 22.873 56.822Z" fill="#32AFA9" stroke="#32AFA9" stroke-width="4"/>
                            </svg>
                                
                                
                        </div>
                        <div class="col-md-10">
                          <div >
                              <h3>Profil</h3>
                              <p>Modifier mon profil public, acceder a mes reccomandarions et a lespace candidat</p>
                          </div>
                        </div>
                    </div>
            </a>
                 
                      
                </div>
            </div>
            <div class="col-md-6 mt-4 ">
            <a class="urlink" href="/Parametres">
                <div class="p-4 border shadow-2">
                    <div class="row">
                        <div class="col-md-2">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M38.7517 5.36503C36.7086 4.90882 34.6235 4.66685 32.5303 4.64307C30.3853 4.66628 28.2983 4.91003 26.2531 5.36503C25.817 5.46259 25.4223 5.69407 25.1243 6.02707C24.8262 6.36008 24.6398 6.77794 24.591 7.22217L24.1058 11.5795C24.0363 12.1941 23.8238 12.7839 23.4855 13.3016C23.1471 13.8194 22.6923 14.2508 22.1573 14.5612C21.6223 14.8717 21.0221 15.0526 20.4047 15.0895C19.7873 15.1264 19.1698 15.0183 18.6017 14.7738L14.6088 13.0165C14.2036 12.838 13.7528 12.79 13.3191 12.879C12.8853 12.968 12.4899 13.1896 12.1876 13.5132C9.29986 16.6032 7.14978 20.3073 5.89884 24.3474C5.76705 24.7727 5.77089 25.2285 5.90982 25.6515C6.04876 26.0746 6.3159 26.4439 6.6742 26.7082L10.219 29.3199C10.7176 29.6868 11.123 30.1658 11.4023 30.7183C11.6817 31.2707 11.8273 31.8811 11.8273 32.5002C11.8273 33.1193 11.6817 33.7297 11.4023 34.2821C11.123 34.8346 10.7176 35.3136 10.219 35.6806L6.6742 38.2991C6.31636 38.5634 6.04952 38.9323 5.9106 39.3548C5.77169 39.7774 5.76758 40.2327 5.89884 40.6577C7.1472 44.7013 9.29571 48.4094 12.183 51.5034C12.485 51.8274 12.8802 52.0495 13.314 52.1389C13.7478 52.2283 14.1987 52.1807 14.6042 52.0025L18.6156 50.2406C19.1804 49.9939 19.7953 49.8835 20.4107 49.9182C21.026 49.9528 21.6246 50.1317 22.1581 50.4402C23.2399 51.067 23.9619 52.1697 24.1035 53.414L24.5863 57.7713C24.6348 58.2095 24.8174 58.6222 25.109 58.9529C25.4007 59.2836 25.7872 59.5162 26.216 59.6191C30.3467 60.604 34.6511 60.604 38.7819 59.6191C39.2106 59.5162 39.5972 59.2836 39.8889 58.9529C40.1805 58.6222 40.363 58.2095 40.4115 57.7713L40.8944 53.407C40.9599 52.792 41.1696 52.2012 41.5065 51.6825C41.8433 51.1639 42.2979 50.732 42.8331 50.4221C43.3683 50.1122 43.969 49.933 44.5866 49.899C45.2041 49.8651 45.8209 49.9773 46.3869 50.2266L50.396 51.9886C50.8015 52.1667 51.2524 52.2144 51.6862 52.125C52.12 52.0356 52.5152 51.8135 52.8172 51.4895C55.7029 48.3988 57.8513 44.6948 59.1013 40.6554C59.2331 40.2301 59.2293 39.7743 59.0904 39.3512C58.9514 38.9282 58.6843 38.5589 58.326 38.2945L54.7858 35.6806C54.2871 35.3138 53.8815 34.8349 53.602 34.2826C53.3224 33.7302 53.1766 33.1199 53.1764 32.5008C53.1762 31.8817 53.3215 31.2713 53.6007 30.7187C53.8798 30.1661 54.285 29.687 54.7835 29.3199L58.3237 26.7036C58.6811 26.4391 58.9475 26.07 59.086 25.6475C59.2245 25.2249 59.2282 24.7698 59.0967 24.345C57.8466 20.3051 55.6973 16.601 52.8103 13.5109C52.508 13.1873 52.1126 12.9657 51.6788 12.8767C51.245 12.7877 50.7943 12.8357 50.389 13.0141L46.3962 14.7715C45.8993 14.9926 45.3614 15.1065 44.8176 15.1057C43.8451 15.104 42.9075 14.7434 42.1844 14.0931C41.4613 13.4429 41.0036 12.5486 40.899 11.5818L40.4115 7.21985C40.3629 6.77654 40.177 6.35948 39.8799 6.02694C39.5827 5.69439 39.1891 5.46298 38.754 5.36503H38.7517ZM32.5001 41.7859C30.0374 41.7859 27.6755 40.8076 25.9341 39.0662C24.1927 37.3248 23.2144 34.9629 23.2144 32.5002C23.2144 30.0375 24.1927 27.6756 25.9341 25.9342C27.6755 24.1928 30.0374 23.2145 32.5001 23.2145C34.9628 23.2145 37.3247 24.1928 39.0661 25.9342C40.8075 27.6756 41.7858 30.0375 41.7858 32.5002C41.7858 34.9629 40.8075 37.3248 39.0661 39.0662C37.3247 40.8076 34.9628 41.7859 32.5001 41.7859Z" fill="#F2A737"/>
                            </svg>
                                
                                
                                
                        </div>
                        <div class="col-md-10">
                          <div >
                              <h3>Parametres</h3>
                              <p>Compl??ter et modifier mes informations priv??es et pr??f??rences</p>
                          </div>
                        </div>
                    </div>
            </a>
                 
                      
                </div>
            </div>
            <div class="col-md-6 mt-4 ">
                <div class="p-4 border shadow-2">
                    <div class="row">
                        <div class="col-md-2">
                            <svg width="80" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7095 11.919C21.5866 11.919 23.919 10.594 23.919 8.9595C23.919 7.32501 21.5866 6 18.7095 6C15.8323 6 13.5 7.32501 13.5 8.9595C13.5 10.594 15.8323 11.919 18.7095 11.919Z" fill="#3782E8"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7871 13.6213C15.0611 13.6213 13.5776 12.0598 13.5776 11.1553V15.0298C13.5776 16.6648 15.9101 17.9878 18.7871 17.9878C21.6671 17.9878 23.9996 16.6648 23.9996 15.0298V11.2483C23.9996 12.1543 22.5146 13.6213 18.7871 13.6213Z" fill="#3782E8"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7871 19.6078C15.4541 19.6078 13.5776 18.1063 13.5776 17.2018V21.0403C13.5776 22.6753 15.9101 23.9998 18.7871 23.9998C21.6671 23.9998 23.9996 22.6753 23.9996 21.0403V17.1553C23.9996 18.0598 22.1216 19.6078 18.7871 19.6078Z" fill="#3782E8"/>
                                <path d="M5.9055 5.919C9.16702 5.919 11.811 4.59399 11.811 2.9595C11.811 1.32501 9.16702 0 5.9055 0C2.64399 0 0 1.32501 0 2.9595C0 4.59399 2.64399 5.919 5.9055 5.919Z" fill="#3782E8"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.093 7.62127C1.8705 7.62127 0.1875 6.05977 0.1875 5.15527V9.02977C0.1875 10.6648 2.832 11.9878 6.093 11.9878C9.357 11.9878 12 10.6648 12 9.02977V5.24827C12 6.15427 10.3155 7.62127 6.093 7.62127Z" fill="#3782E8"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.093 13.6078C2.3145 13.6078 0.1875 12.1063 0.1875 11.2018V15.0403C0.1875 16.6753 2.832 17.9998 6.093 17.9998C9.357 17.9998 12 16.6753 12 15.0403V11.1553C12 12.0598 9.87 13.6078 6.093 13.6078Z" fill="#3782E8"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.093 19.6078C2.3145 19.6078 0.1875 18.1063 0.1875 17.2018V21.0403C0.1875 22.6753 2.832 23.9998 6.093 23.9998C9.357 23.9998 12 22.6753 12 21.0403V17.1553C12 18.0598 9.87 19.6078 6.093 19.6078Z" fill="#3782E8"/>
                            </svg>
                                
                                
                                
                                
                        </div>
                        <div class="col-md-10">
                          <div >
                              <h3 class="text-primary">Acheter des cr??dits</h3>
                            
                          </div>
                        </div>
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

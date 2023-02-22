<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <title> @yield('title')</title>
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap4.6/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-home-css.css"> 
    <link href="css/fontawesome/solid.css" rel="stylesheet">
    <link href="css/fontawesome/all.css" rel="stylesheet">

    <script src="js/jquery/jquery-3.6.1.min.js"></script>
    {{-- <link href="css/fontawesome/all.min.css" rel="stylesheet"> --}}


  </head>
  <body>



  

    
    {{-- @include('/views.inicio') --}}

  
      
    <section id="content-wrapper" class="d-flex">


      <!-- sidebar-->

    
      
      <div id="sidebar-container" class="bg-light">
        <div class="sidebar-head" style="background-color: aquamarine">
          <div class="sidebar-head-logo">
            <h4 class="font-weight-bold mb-0">logo</h4>
          </div>
          <div class="sidebar-head-content">
            Lorem ipsum dolor sit
            lorem
          </div>
        </div>
      

        <div class="sidebar-menu list-group-flush" style="">
      
      
      
          <div class="accordion accordion-sidebar" id="accordionExample">
              <div class="card card-border-none">
      
                <div class="card-header p-0 card-border-none" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <a href="{{route('inicio')}}" class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-house mr-2"></i> Inicio </a>              
                </div>      
                {{-- <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div> --}}
      
                <div class="card-header p-0 card-border-none" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-masks-theater mr-2"></i> Anuncios </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>
                
                <div class="card-header p-0 card-border-none" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-bars-progress mr-2"></i> Matriculas </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>
      
                <div class="card-header p-0 card-border-none" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-user-graduate mr-2"></i> Estudiantes </span>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">


                  <div class="div-list-sidebar">
                    <ul class="div-list-sidebar__ul">
                      <li class="div-list-sidebar__li"><a href="{{route('students-new')}}">Nuevo</a></li>
                      <li class="div-list-sidebar__li"><a href="#">Editar</a></li>
                      <li class="div-list-sidebar__li"><a href="#">Eliminar</a></li>
                      <li class="div-list-sidebar__li"><a href="{{route('students-history')}}">Historico</a></li>                                                           
                    </ul>
                  </div>
                </div>
      
                <div class="card-header p-0 card-border-none" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-chalkboard-user mr-2"></i> Maestros </span>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>
          
                <div class="card-header p-0 card-border-none" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-school-flag mr-2"></i> Sedes </span>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>
      
                <div class="card-header p-0 card-border-none" id="headingEven" data-toggle="collapse" data-target="#collapseEven" aria-expanded="true" aria-controls="collapseOne">                
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-box-archive mr-2"></i> Boletin </span>
                </div>
                <div id="collapseEven" class="collapse" aria-labelledby="headingEven" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>
      
                <div class="card-header p-0 card-border-none" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseOne">                                
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid fa-users mr-2"></i> Usuarios </span>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>
                
                <div class="card-header p-0 card-border-none" id="headingNine" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseOne">                                
                  <span class="list-group-item list-group-item-action border-0"><i class="fa-solid  fa-gears mr-2"></i> Ajustes </span>
                </div>
                {{-- <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                  <div class="card-body list-ul">            
                    <ul>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>
                      <li><a href="#"> item </a></li>                    
                    </ul>
                  </div>
                </div>    --}}                         
      
              </div>
          </div>  
      
      
        </div>
      </div>
      
      <!-- fin sidebar-->


      <!-- page content  nav -->
      <div id="page-content-wrapper" class="w-100 bg-light-blue">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">      
          <div class="container-fluid">
            {{-- <a id="menu-toggle" class="navbar-brand" href="#"><i class="fa-solid fa-sliders"></i></a> --}}  
            <a id="menu-toggle" class="navbar-brand" href="#"><i class="fa-solid fa-bars"></i></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
              
                <li class="nav-item">
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item dropdown">          
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Suscripciones</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Cerrar Sección</a>
                </li>
              </ul>
          
            </div>
          </div>
          <!-- fin container -->

        </nav> 
        <!--  fin nav -->


        <section class="section-wraper-content">

          @yield('content')
          
          {{-- <div class="billing-content">
            <div class="row">

              <div class="col-md-12">
                <div class="col-12 "> <!--content-sombras-->
                    <div class="card-body ">
  

                      <div class="col-md-12 text-center">
                        <div class="d-flex justify-content-center">
                            <h4 class="mt-0 color-mascontrol rounded header-title text-uppercase font-weight-bold text-fontsize-23">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi doloribus
                            </h4>
                        </div>
                      </div>

                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni perspiciatis quia non rem. Ullam, itaque. Aliquam, labore. Quae, praesentium? Maxime, a animi! Facere delectus earum laudantium dolorem, ducimus ab maiores?
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem omnis nihil eum, labore commodi nisi vero eligendi ipsam mollitia assumenda quis eius debitis asperiores reprehenderit temporibus repellat facere magnam! Nesciunt?
  
                    </div>
                </div>
              </div>        

            </div>
          </div> --}}

        </section>



      </div>
      <!-- fin  page content -->


    </section>

    



    </section>

  
  

    {{-- @yield('content') --}}


    





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> --}}

    <script src="js/bootstrap4.6/jquery.slim.min.js"></script>  
    <script src="js/bootstrap4.6/popper.min.js"></script>
    <script src="js/bootstrap4.6/bootstrap.min.js"></script>

    <script src="js/sweetalert2/sweetalert2.js"></script>
    <script src="{{asset('js/app/script-home-layout.js?lastV1=1.0')}}"></script>
    
    

    <script>
      $(document).ready(function(){  
        $("#menu-toggle").click(function (e) {
          e.preventDefault();
          console.log('1');
          
          $("#content-wrapper").toggleClass("toggled");
        });
        
        //alert('anmico');
      });

    </script>

    @yield('content_script')


    
    
  </body>
</html>

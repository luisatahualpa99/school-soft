
@extends('layout.home')
@section('title', 'Nuevo Estudiante')

@section('content')

    <div class="billing-content ">
        <div class="row">

            <div class="col-md-12">
            <div class="col-12 "> <!--content-sombras-->
                <div class="card-body {{-- content-sombras --}}">

                    @include('views.students.navbar-student')
                    <br>
                    <div class="col-md-12 text-center">
                    <div class="d-flex justify-content-center">
                        <h4 class="mt-0 color-mascontrol rounded header-title text-uppercase font-weight-bold text-fontsize-23">
                            Registro de estudiantes
                        </h4>
                    </div>
                    </div>

                    <div class="container-form-new-student justi"> 
                        <form action="#">
                            
                            
                        </form>
                    </div>
                        
        

                </div>
            </div>
            </div>
        </div>
    </div>

    
    @endsection()



    @section('content_script')
        <script type="text/javascript" src="js/app/students/script-students-new.js?lastV1=1.0"></script>
    @endsection()
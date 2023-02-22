
@extends('layout.home')
@section('title', 'Historico de estudiantes')

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
                            Historico de estudiantes
                        </h4>
                    </div>
                    </div>

        

                </div>
            </div>
            </div>
        </div>
    </div>

@endsection()
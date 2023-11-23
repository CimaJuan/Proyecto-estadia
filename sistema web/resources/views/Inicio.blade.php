@extends('layouts.Base')

@section('nav')
@endsection

@section('contenido')
    <div class="container col lg-12 col-md-6 col xs-12">
        <div style="text-align: center">
            <img class="seafi" src="{{ asset('assets/img/seafi.svg') }}" alt="">
        </div>
    </div>

    <br>
    <br>

    <div class="container">

        <section style="text-align: center">
            <h2>
                <p>Servicios que ofrecemos</p>
            </h2>
        </section>
        <div class="row row-cols-1 row-cols-md-3 lg-4" style="text-align:center">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/img/img-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">PAGO VEHICULAR</h5>
                        <p class="card-text">Aqui podras realizar el pago de emplacamiento de un vehiculo
                            y saber información extra acerca de pagos vehiculares</p>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        <a href="https://seafi.campeche.gob.mx/comunicados/130-refrendo-2023" class="btn btn-success">Visitar Página</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/img/img-2.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">GESTION DE REDES</h5>
                        <p class="card-text">Nosotros creamos y optimizamos tus perfiles en las Redes Sociales. Importantes para que tu presencia online sea completa.
                        </p>
                    </div>
                    <div class="card-footer" style="text-align:center">
                        <a href="https://www.facebook.com/profile.php?id=100091860857796&mibextid=ZbWKwL" class="btn btn-success">Visitar Página</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/img/img-3.jpg') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">PÁGINA SEAFI</h5>
                        <p class="card-text">Si quieres saber información acerca de los demas departamentos gubernamentales
                            o quieres realizar otros tramites te recomendamos visitar esta página</p>
                    </div>
                    <div class="card-footer" style="text-align:center" p-2>
                        <a href="https://seafi.campeche.gob.mx/" class="btn btn-success">Visitar Página</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection

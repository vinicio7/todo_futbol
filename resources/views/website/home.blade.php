@extends('website.navbar')
@section('title', 'Inicio')
@section('content')
<div class="loader">
</div>
    <div data-bss-parallax-bg="true" id="parallax-container" data-bs-parallax-bg="true" >
        <div class="bg-success d-flex align-items-center">
            <div class="text-center w-100 text-white header-content" ><img class="tada animated" src="{{ asset('assets/img/logo-tf.png') }}" />
                <h4 style="color: rgb(251,251,251);font-family: Montserrat, sans-serif;">¡El Talento no lo es todo!</h4>
                <br>
                <button class="btn btn-primary tada animated" type="button" style="background: #00cffa;font-family: Montserrat, sans-serif;">¡Reserva Hoy!</button>
            </div>
        </div>
    </div>
@endsection
@extends('perfil.menu')

@section('title', 'Evaluación')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-body text-center">
            <i class="ph-archive ph-3x text-success mt-1 mb-3"></i>
            <h6>Subir CV</h6>
            <p class="mb-3">Click Para ingresar tu cv</p>
            <div class="row mb-3">
               
                <div class="col-lg-12">
                    <input type="file" class="form-control" id="archivo">
                    <div class="form-text text-muted">Archivos maximo de 5mb</div>
                </div>
            </div>
            <a href="#" id="enviar_archivo">Ingresar &rarr;</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <i class="ph-file-arrow-down ph-3x text-danger mt-1 mb-3"></i>
            <h6>Decargar CV</h6>
            <p class="mb-3">Click para descargar CV</p>
            <a href="#" id="ver_archivo">Descargar &rarr;</a>
        </div>
    </div>
<form>



   
  
    
</form>


</div>

@endsection
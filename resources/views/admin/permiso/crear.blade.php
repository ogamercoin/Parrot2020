@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section("scripts")
<script src="{{asset('assets/pages/scripts/admin/permiso/crear.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">

        @include('includes.mensaje')
        <hr class="top-rojo">
        <div class="card ">
            <div class="card-header with-border">
                <h3 class="card-title">Crear Permisos</h3>
                    <div class="card-tools pull-right">
                <a href="{{route('permiso')}}" class="btn btn-info btn-sm pull-right">Listado</a>
                    </div>
            </div>

            <form action=" {{route('guardar_permiso')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('admin.permiso.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

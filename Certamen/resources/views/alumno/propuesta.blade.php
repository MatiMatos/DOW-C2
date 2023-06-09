@extends('layouts.master')

@section('contenido-principal')

    <div class="container-fluid" style="width: 20rem;">
        <div class="row">
            <div class="col">
                <h3>Rada</h3>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="">
                        <div class="row">
                            <div class="col">
                                <label for="" >Rut del Alumno</label>
                                <input type="text" class="form-control" style="width: 12rem" placeholder="Sin puntos y con gion" aria-label="Sin puntos y con gion">
                            </div>
                            <div class="col">
                                <label for="">Nombre Propuesta</label>
                                <input type="text" class="form-control" placeholder="Nombre de la propuesta" aria-label="Nombre de la propuesta">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Ingrese Propuesta</label>
                                <textarea name="" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        </form>
                        <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type="reset" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
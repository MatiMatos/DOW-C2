@extends('layouts.master')

@section('contenido-principal')
    
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Propuestas</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8 order-last order-lg-first">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>N° de la Propuesta</th>
                        <th>Alumno</th>
                        <th>Nombre Propuesta</th>
                        <th>Profesor guia</th>
                        <th>Comentario</th>
                        <th>Accion Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">1</td>
                        <td class="align-middle">Matias Castillo - Matias Arancibia</td>
                        <td class="align-middle">Gestor de cotizacion</td>
                        <td class="align-middle">Hernan Saavedra</td>
                        <td class="aline-middle"><p>Cualquier informacion de la empresa es bien deseada</p></td>
                        <td class="text-center" style="width: 1rem">
                            <span data-bs-toggle="tooltip" data-bs-title="Borrar">
                                <button type="button" class="btn bt-sm btn-danger pb-0" data-bs-toggle="modal">
                                    <span class="material-icons">Eliminar </span>
                                </button>
                            </span>
                            <a class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip" style="width: 5rem">
                                <span class="material-icons">Editar</span>
                            </a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-12 col-lg-4 order-first order-lg-last">
            <div class="card">
                <div class="card-header bg-dark text-white">Agregar Comentario</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="NPropuesta" class="form-label">Numero de propuesta</label>
                                <input type="text" id="NPropuesta" name="NPropuesta" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="comentario" class="form-label">Comentario</label>
                                <input type="text" id="comentario" name="comentario" class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type="reset" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-success">Agregar Comentario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
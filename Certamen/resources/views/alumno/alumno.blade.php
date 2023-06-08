@extends('layouts.master')

@section('contenido-principal')

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Propuestas</h3>
            </div>
        </div>

        <div class="row">
            <div class="order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N° de la Propuesta</th>
                            <th>Alumno</th>
                            <th>Nombre Propuesta</th>
                            <th>Detalle de la Propuesta</th>
                            <th colspan="2">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Matias Castillo - Matias Arancibia</td>
                            <td class="align-middle">Gestor de cotizacion</td>
                            <td class="align-middle"><p>rada rada - koko koko - rada rada- koko koko ko</p></td>
                            <td class="text-center" style="width: 1rem">
                                <span class="text-center text-black bg-danger-subtle border border-danger-subtle rounded-2">
                                    <span class="material-icons">Rechazado</span>
                                </span>
                                <a class="text-center text-black bg-success-subtle border border-success-subtle rounded-2">
                                    <span class="material-icons">Aceptado</span>
                                </a>
                                <a class="text-center text-black bg-info-subtle border border-info-subtle rounded-2">
                                    <span class="material-icons">Modificar</span>
                                </a>
                                <a class="text-center text-black bg-secondary-subtle border border-secondary-subtle rounded-2" style="width: 1rem">
                                    <span class="material-icons">Esperando</span>
                                </a>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <span data-bs-toggle="tooltip">
                                    <button type="button" class="btn bt-sm btn-secondary pb-0">
                                        <span class="material-icons">Editar</span>
                                    </button>
                                </span>
                            </td>
                    </tbody>
                </table>
        </div>
    </div>

@endsection
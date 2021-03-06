@extends('admin.layout')
@section('content')
<div class="container col-md-8 col-md-offset-2"
<div class="panel-heading">
<h2>Empresas</h2>
</div>
@if($empresas->isEmpty())
<p>No hay Empresas.</p>
@else
<table class="table">
<thead>
<tr>

<th>Nombre</th>
<th>Dirección</th>
<th>Contacto</th>
<th>Telefono</th>
<th>Correo</th>
<th>WEB</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($empresas as $empresa)
<tr>
<td>{!! $empresa -> nombre !!}</td>
<td>{!! $empresa -> direccion !!}</td>
<td>{!! $empresa -> nombre_contacto !!}</td>
<td>{!! $empresa -> telefono !!}</td>
<td>{!! $empresa -> email !!}</td>
<td>{!! $empresa -> web !!}</td>
<td class="actions">
                    
                    <button class="btn btn-sm btn-icon btn-pure btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-sm btn-icon btn-pure btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@stop
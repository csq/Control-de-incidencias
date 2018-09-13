@extends('layouts.app')



@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Editar Proyecto</div>
    <div class="panel-body">

        <!–– seccion para visualizar las notificaciones y errores ––>
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="" method="POST">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $project->name)}}">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" name="description" class="form-control" value="{{old('description',  $project->description)}}">
            </div>
            <div class="form-group">
                <label for="start">Fecha de inicio</label>
                <input type="date" name="start" class="form-control" value="{{old('start', $project->start)}}">
            </div>
           
            <div class="form-group">
                <button class="btn btn-primary">Guardar proyecto</button>
            </div>
        </form>


        <div class="row">
            <div class="col-md-6">
                <p>Categorías</p>

                <form action="/categorias" method="POST" class="form-inline">
                    <div class="form-group">
                        <input type="text" placeholder="Ingrese nombre" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-defaul">+</button>
                </form>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Proyecto A</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary" title="Editar">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="" class="btn btn-sm btn-danger" title="Baja">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <p>Niveles</p>

                <form action="/niveles" method="POST" class="form-inline">
                    <div class="form-group">
                        <input type="text" placeholder="Ingrese nombre" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-defaul">+</button>
                </form>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nivel</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>N1</td>
                            <td>Atención básica</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary" title="Editar">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="" class="btn btn-sm btn-danger" title="Baja">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>
     
@endsection     
        
           

                 
   
 


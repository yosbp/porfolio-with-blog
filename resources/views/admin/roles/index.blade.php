@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
{{--     @can('admin.categories.create') --}}
    <a class="btn btn-secondary btn-sm float-right mr-2" href="{{route('admin.roles.create')}}">Crear Rol</a>    
{{--     @endcan --}}
    <h1>Lista de Roles</h1>
@stop

@section('content')
    
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>    
</div>        
@endif

<div class="card">

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>

                        <td width="10px">
                            {{-- @can('admin.categories.edit') --}}
                                <a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit', $role)}}">Editar</a>                                
                            {{-- @endcan --}}

                        </td>
                        <td width="10px">
                           {{--  @can('admin.categories.destroy') --}}
                                    <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            {{-- @endcan --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

<div class="card">

    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un o correo de un usuario">
    </div>

    @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2"></th>
                </tr>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>

    @else
        <strong class="my-4 mx-auto">No hay ningun registro</strong>
    @endif
    

</div>
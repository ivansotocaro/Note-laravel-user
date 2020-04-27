@extends('layout')


@section('content')
    <div class="row">

        <div class="col-md-12 mt-5">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">

                <table class="table table-sm">

                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Acción</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($users as $usu)
                    <tr>
                      <td>{{ $usu->id }}</td>
                      <td>{{ $usu->name }}</td>
                      <td>{{ $usu->email }}</td>
                      <td>
                          <input type="button" value="Editar" class="btn btn-primary">

                          <input type="button" value="Eliminar" class="btn btn-danger">
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
            </div>

        </div>

    </div>
@endsection
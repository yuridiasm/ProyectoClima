@extends('layouts.main', ['activePage' => 'user-management', 'titlePage' => __('Usuarios')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
               
                <p class="card-category"> Lista de usuarios del sistema</p>
              </div>
              <div class="card-body">
                 
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                          Nombre
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Fecha de registro
                      </th>
                     
                    </tr></thead>
                    <tbody>
                      @foreach($usuarios as $usuario)
                                              <tr>
                          <td>
                           {{$usuario->name}}
                          </td>
                          <td>
                            {{$usuario->email}}
                          </td>
                          <td>
                            {{$usuario->created_at}}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           
        </div>
      </div>
    </div>
  </div>
   
@endsection
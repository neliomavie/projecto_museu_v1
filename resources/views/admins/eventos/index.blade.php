@extends('layouts.master-admin')

@section('content')
<div class="row">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Eventos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Público Alvo</th>
                                <th>Estado</th>
                                <th>Imagem</th>
                                <th>Data de Realização</th>
                                <th>Hora de Realização</th>
                                <th>Acção</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)
                            <tr class="odd gradeX">
                                <td>{{$evento->descricao}}</td>
                                <td>{{$evento->publico}}</td>
                                <td>{{$evento->estado}}</td>
                                <td>
                                   <img style="max-width: 40px;" src="/evento_upload/{{$evento->imagem}}">
                               </td>
                               <td>{{$evento->data}}</td>
                               <td>{{$evento->hora}}</td>
                               <td>
                                   <a href="/admins/eventos/{{ $evento->id }}/edit">
                                      <button class="btn btn-success">Editar</button>

                                  </a>
                                  {{-- <td> <button class="btn btn-danger">Apagar</button></td> --}}

                              </td>

                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
                  
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  @stop
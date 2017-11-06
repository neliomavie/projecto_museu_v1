@extends('master-admin')

@section('content-admin')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Adicionar Eventos</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar Evento
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

             <form method="post" action="/admins/eventos">

                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="PUT">

                {{-- PUBLICO ALVO --}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Público Alvo</label>
                        {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                        <select id="publico" name="publico" class="form-control" >
                            <option value="Adultos">Adultos</option>
                            <option value="Adolescentes">Adolescentes</option>
                            <option value="Crianças">Crianças</option>
                            <option value="Idosos">Idosos</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPublico">Público Alvo Actual</label>
                        <input type="text" class="form-control" id="inputPublico" value="{!! $evento->publico !!}" readonly>
                    </div>
                </div>




                {{-- DATA DO EVENTO --}}




                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputdata">Hora do Evento</label>
                        <input type="time" class="form-control" id="inputdata" value="{!! $evento->hora !!}" name="hora">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPublico">Hora do Evento Actual</label>
                        <input type="text" class="form-control" id="inputPublico" value="{!! $evento->hora !!}" readonly>
                    </div>
                </div>


                {{-- HORA --}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputdata">Data do Evento</label>
                        <input type="date" class="form-control" id="inputdata" value="{!! $evento->data !!}" name="data">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPublico">Data do Evento Actual</label>
                        <input type="text" class="form-control" id="inputPublico" value="{!! $evento->data !!}" readonly>
                    </div>
                </div>



                {{-- Descricao do Evento --}}



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputdescricao">Descricao do Evento</label>

                        <textarea name="descricao" cols="10" rows="4" class="form-control" id="inputdescricao">{!! $evento->descricao !!}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputdescricao">Descricao do Evento Actual</label>

                        <textarea  cols="10" rows="4" class="form-control" id="inputdescricao" readonly>{!! $evento->descricao !!}</textarea>
                    </div>
                </div>



                {{-- PARTE DA IMAGEM --}}




                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputdescricao">Escolher Imagem do Evento</label>

                        <input type="file" name="imagem" class="form-control" value="{!! $evento->imagem !!}" name="imagem">
                    </div>

                    <div class="form-group col-md-6">

                        <label for="inputdescricao">Estado do Evento</label>

                        <select id="publico" name="estado" class="form-control" >
                            <option value="active">On</option>
                            <option value="off">Off</option>
                        </select>


                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Actualizar
                        </button>
                    </div>
                </div>


            </form>








        </div>
        <!-- /.panel-body -->

    </div>
    <!-- /.panel -->



</div>
<!-- /.col-lg-12 -->
</div>
@stop

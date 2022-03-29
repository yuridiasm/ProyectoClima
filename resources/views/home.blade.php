@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="Paises">
                <span class="nav-tabs-title">PAISES DISPONIBLES</span> 
              </div>
            </div>
            <div class="card-body">
              <p class="card-category">
            </div>
            <div class="card-footer">
              <div class="stats">
              @if(isset($paises))                
                <select  data-size="5" id="pais" name="pais" class="form-control" data-live-search="true">
                  <option value="0">Seleccione un Pais</option>
                  @foreach($paises as $pais)
                    <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                  @endforeach
                </select>
              @endif
              </div>
            </div>
          </div>
        </div>
      </div>
     <div id="climaDatos" >
       
     </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
  $("#pais").change(function(){
    console.log("Entrando");

    const removeAccents = (str) => {
      return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    } 
   
    var pais = removeAccents($("#pais").val());
    var url ='/clima/'+pais;
    $.get(url, function(data){
                $('#climaDatos').empty().append(data);
            });
   
   });

   
  </script>
@endpush
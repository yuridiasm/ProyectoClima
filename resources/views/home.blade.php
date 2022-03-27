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
                @foreach ($paises as $pais)
                 <li>
                   <a class="pais" href="#">  {{$pais->nombre}} </a>
                 </li>
                @endforeach
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
   $(".pais").click(function(){
    console.log("Entrando");
    var url ='/clima';
    $.get(url, function(data){
                $('#climaDatos').empty().append(data);
            });
   
   });

   
  </script>
@endpush
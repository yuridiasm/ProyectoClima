<div class="row">        
  <div class="col-md-4">
    <div class="card card-chart">
      <div class="card-header card-header-warning">
        <div class="ct-chart" id="websiteViewsChart">
          <span class="nav-tabs-title">PAÍS SELECCIONADO</span> 
        </div>
      </div>
      <div class="card-body">
        @foreach ($datos->location as $item)
           
            <label>  {{$item}}
            </label>
                        
        @endforeach
        
       <label> </label>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">access_time</i> campaign sent 2 days ago
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-chart">
      <div class="card-header card-header-danger">
        <div class="ct-chart" id="clima">
          <span class="nav-tabs-title">CLIMA</span> 
        </div>
      </div>
      <div class="card-body">
        
        <p class="card-category"></p>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons"></i> 
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <span class="nav-tabs-title">Tareas Pendientes:</span>                  
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked>
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>Crear Api</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>                     
              </tbody>
            </table>
          </div>              
         
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
 
  <div class="col-md-4">
    <div class="card">
      <div class="card-header card-header-warning">
        <h4 class="card-title">HORA</h4>              
      </div>
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-category">
      </div>
    </div>          
  </div>
  <div class="col-md-4">
    <div class="card card-chart">
      <div class="card-header card-header-success">
        <div class="ct-chart" id="Paises">
          <span class="nav-tabs-title">TAREAS TERMINADAS</span> 
        </div>
      </div>
      <div class="card-body">
        <p class="card-category">
      </div>
      <div class="card-footer">
        <div class="stats">
          HACER LOGIN
        </div>
      </div>
    </div>
  </div>
</div>
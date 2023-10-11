
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <title>Productos</title>
</head>
<body>
<div class="header">He</div>
  <div class="container">
      <div>1</div>
                  <div >2
                    
                    <div class=" justify-content ">
                      <h1>Productos</h1>  
                      <a class="btn btn-primary " href="{{ url('/') }}" id="btn_prod">Agregar</a>
                    </div>
                        <table class="table table-bordered table-striped" id="productos-table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Descripcion</th>
                              <th>Cantidad</th>
                              <th>Precio</th>
                            </tr>
                          </thead>
                          <tbody>   
                            <script type="text/javascript">
                              $(document).ready(function (){
                                var table = $('#productos-table').DataTable({
                                  "pageLength": 10,
                                    processing:true,
                                    serverSide:true,
                                    url:"{{route('tprod')}}",
                                    type: "GET",
                                    columns: [
                                    {data:'nombre',name:'nombre'},
                                    {data:'descripcion',name:'descripcion'},          
                                    {data: 'precio',name:'precio'},
                                    {data: 'cantidad',name:'cantidad'},
                                    ]          
                                  });      
                              });
                            </script>        
                          </tbody>
                    </table>
                  </body>
            </div>
      <div>3</div>
    </div>
<div class="footer">Fo</div>
</html>

    
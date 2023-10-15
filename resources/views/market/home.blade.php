
<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      
    </head>
    <body>
      <div class="header">He</div>
              <div class="container border ">
                      <div class="col_izq">1</div>
                      <div class="col_cen">2
                        {{-- Inicia Form --}}

                        <form  id="form_data"  name="form_data" action="">
                          @csrf
                          <div>                        
                          <div class="img_box">

                            <img src="{{asset('/img/logo.png')}} " class="img">
                          </div>
                          <div class="div_form label_form">
                            <div>

                              <label class="form-label ">Producto</label>
                              <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto"  value="" required> 

                            </div>                          
                              <div >
                                <label class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="" required>
                              </div>
                          
                            <div >
                              <label class="form-label">Cantidad</label>
                              <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="" required>
                            </div>                          
  
                            <div >
                              <label class="form-label">Precio</label>
                              <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio" value="" required>
                            </div>
                          </div>
                          <div class="d-grid gap-2 col-6 mx-auto button_form">                      
                            </div>
                          </div>                        
                          <button type="submit" class="btn btn-primary mx-auto d-block" id="btn_data">Agregar</button>                          
                      </form>
                         {{-- Termina Form --}}
                         
                      </div>
<<<<<<< HEAD

                      <div class="col_cen">3
                        
                      </div>                   

                      <div class="col_cen" id="productos">212                    
                      <table class="table-productos" id="productos-table">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>        
=======
                      <div class="col_cen" id="productos">3   
                        <h2>Productos</h2>                
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
                                    ],  
                                            
                                  });      
                              });
                            </script>        
                          </tbody>
                    </table>

                    </div>                                              
>>>>>>> 1f5eae7a24937b16dbb0ca9cbb6d0f25fe7c82b7
              </div>               
        <div class="footer">
          Fo
         
        </div>
        
    </body>  

    <script type="text/javascript">    
    
    $('#form_data').submit(function(e) {
      e.preventDefault();

      let registrar = "{{route('registrar')}}";          

    var producto = $('#producto').val();
    var descripcion = $('#descripcion').val();
    var cantidad = $('#cantidad').val();
    var precio = $('#precio').val();
    var table = $('#productos-table').DataTable();

        $.ajax({
          headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },    
                             
          url:"{{route('registrar')}}",
          data: {
            producto:producto,
            descripcion:descripcion,
            cantidad:cantidad,
            precio:precio
          },
          type:'POST',                 
          success:function(data){          
            alert("Datos Agregados");

            
             clear();

          },
          error: function() {
        alert('There was some error performing the AJAX call!');
      }  
        });    

            clear();
            console.log(data);
            table.ajax.reload();
            
            },
          error: function() {
        alert('There was some error performing the AJAX call!');
               

        });       
        
           
        function clear(){
          $('#producto').val('');
          $('#descripcion').val('');
          $('#cantidad').val('');
          $('#precio').val('');
        }

<<<<<<< HEAD
       
</script>  
                  
                    @if(isset($products))
                    @foreach ($products as $data)                         
                             <h1> {{$data->id==[1]}}</h1>
                    @endforeach
                          @else
                              <h1>
                              @php echo("No hay data de BD"); @endphp 
                              </h1>  
                          @endphp
                        @endif


    
    <script type="text/javascript">

    $(document).ready(function (){
      var table = $('#productos-table').DataTable({
        "pageLength": 10,
          processing:true,
          serverSide:true,
          url:"{{route('table')}}",
          "type": "GET"
          columns: [
          {data: null},
          {data:'nombre',name:'nombre'},
          {data:'descripcion',name:'descripcion'},          
          {data: 'precio',name:'precio'},
          {data: 'cantidad',name:'cantidad'},
          ]           
        });         
    
    });
     
</script>    

=======
    </script>
    
>>>>>>> 1f5eae7a24937b16dbb0ca9cbb6d0f25fe7c82b7
    </html>
   
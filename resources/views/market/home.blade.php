
<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
      <link  href="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
      <link  href="cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"> 

      <script  type="text/javascript"  src="{{ asset('/js/mk.js')}}"></script>

      <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />
      
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
                          <br>

                      </form>
                         {{-- Termina Form --}}
                         
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
            console.log(data);
            },
          error: function() {
        alert('There was some error performing the AJAX call!');
      }      

        });       
        
      }); 
        function clear(){
          $('#producto').val('');
          $('#descripcion').val('');
          $('#cantidad').val('');
          $('#precio').val('');
        }

    </script>
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
    </html>
   
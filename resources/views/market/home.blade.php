
<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script  type="text/javascript"  src="{{ asset('/js/mk.js')}}"></script>

      <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />
      
    </head>
    <body>
      <div class="header">He</div>

              <div class="container border ">
                      <div class="col_izq">1</div>
                      <div class="col_cen">2
                        {{-- Inicia Form --}}

                        <form  id="form_data"  name="form_data">
                          <div>                        
                          <div class="img_box">

                            <img src="{{asset('/img/logo.png')}} " class="img">
                          </div>
                          <div class="div_form label_form">
                            <div>

                              <label class="form-label ">Producto</label>
                              <input type="text" class="form-control" id="producto" name="producto" value=""> 

                            </div>                          
                              <div >
                                <label class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="">
                              </div>
                          
                            <div >
                              <label class="form-label">Cantidad</label>
                              <input type="text" class="form-control" id="cantidad" name="cantidad" value="">
                            </div>                          
  
                            <div >
                              <label class="form-label">Precio</label>
                              <input type="text" class="form-control" id="precio" name="precio" value="">
                            </div>
                          </div>
                          <div class="d-grid gap-2 col-6 mx-auto button_form">
                      
                            <button type="submit" class="btn btn-primary " id="btn_data"  onclick="add_form()">Agregar</button>

                            </div>
                          </div>
                      </form>
                         {{-- Termina Form --}}
                      </div>
                      <div class="col_cen">3</div>
              </div>               
        <div class="footer">Fo</div>
    </body>  

    <script type="text/javascript">     

            let registrar = "{{route('registrar')}}";        
            let producto = document.getElementById('producto').value;
            let descripcion = document.getElementById('descripcion').value;
            let cantidad = document.getElementById('cantidad').value;
            let precio = document.getElementById('precio').value;
            let form_data = producto+descripcion+cantidad+precio;

          let prueba=1;

    $.ajax({
      headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
             
              url:registrar,
              data:{prueba},
              type:'POST',
              datatype:'json',
              success:function(resultData){
                console.log(resultData);
              },
              statusCode: {
                  404: function() {
                     alert('web not found');
                  }
               },
               error:function(x,xs,xt){
                  window.open(JSON.stringify(x));
               }
            });   
          
    </script>
    </html>

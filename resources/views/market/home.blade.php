
<html>
    <head>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />
      <script  type="text/javascript"  src="{{ asset('/js/mk.js')}}"></script>

    </head>
    <body>
      <div class="header">He</div>

              <div class="container border ">
                      <div class="col_izq">1</div>
                      <div class="col_cen">2
                        {{-- Inicia Form --}}
<<<<<<< HEAD
                        <form action="" name="form_data" id="form_data">
                          <div>
=======
                        <form>
                          <div class="img_box">
>>>>>>> 85162de743e6503d37909868947bb433508e5df0
                            <img src="{{asset('/img/logo.png')}} " class="img">
                          </div>
                          <div class="div_form label_form">
                            <div>
<<<<<<< HEAD
                              <label class="form-label ">Nombre</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" value="">
=======
                              <label class="form-label ">Producto</label>
                              <input type="text" class="form-control">
>>>>>>> 85162de743e6503d37909868947bb433508e5df0
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
<<<<<<< HEAD

                          

                            </div>
                            <button type="submit" class="btn btn-primary " onclick="add_producto(form_data)">Agregar</button>
=======
                          <button type="submit" class="btn btn-primary " onclick="pr()">Agregar</button>
                          </div>
>>>>>>> 85162de743e6503d37909868947bb433508e5df0
                            
                        </form>
                         {{-- Termina Form --}}
                      </div>
                      <div class="col_cen">3</div>
              </div>               
        <div class="footer">Fo</div>
    </body>    
</html>

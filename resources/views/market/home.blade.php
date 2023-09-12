
<html>
    <head>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script  type="text/javascript"  src="{{ asset('/js/mk.js')}}"></script>
      <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    </head>
    <body>
      <div class="header">He</div>

              <div class="container border ">
                      <div class="col_izq">1</div>
                      <div class="col_cen">2
                        {{-- Inicia Form --}}
                        <form>
                          <div class="img_box">
                            <img src="{{asset('/img/logo.png')}} " class="img">
                          </div>
                          <div class="div_form label_form">
                            <div>
                              <label class="form-label ">Nombre</label>
                              <input type="text" class="form-control">
                            </div>                          
                              <div >
                                <label class="form-label">Descripcion</label>
                                <input type="text" class="form-control">
                              </div>
                          
                            <div >
                              <label class="form-label">Cantidad</label>
                              <input type="text" class="form-control">
                            </div>                          
  
                            <div >
                              <label class="form-label">Precio</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="d-grid gap-2 col-6 mx-auto button_form">

                          <button type="submit" class="btn btn-primary " onclick="pr()">Agregar</button>

                            </div>
                            
                        </form>
                         {{-- Termina Form --}}
                      </div>
                      <div class="col_cen">3</div>
              </div>               
        <div class="footer">Fo</div>
    </body>    
</html>

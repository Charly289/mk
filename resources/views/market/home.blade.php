
<html>
    <head>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script  type="text/javascript"  src="{{ asset('/js/mk.js')}}"></script>
      <link  href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    </head>
    <body>
      <div class="border">He</div>

              <div class="container border ">
                      <div class="col_izq">1</div>
                      <div class="col_cen">2
                        {{-- Inicia Form --}}
                        <form>
                          <label >Nombre</label>
                          <input type="text">

                          <label>Descripcion</label>
                          <input type="text">

                          <label>Cantidad</label>
                          <input type="text">

                          <label>Precio</label>
                          <input type="text">
                        </form>
                         {{-- Termina Form --}}
                      </div>
                      <div class="col_cen">3</div>
              </div>               
        <div class="border">Fo</div>
    </body>    
</html>

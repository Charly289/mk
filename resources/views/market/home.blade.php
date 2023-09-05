<html>
    <head>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="WebBurger/public/js/mostrarContrasena.js"></script>
      <script  src="public/mk.js"></script>
    </head>
    <body>
      <div>He</div>

        <div class="container text-center">
            <div class="row">
              <div class="col">
                1
              </div>
              <div class="col">                
                <?
                foreach (products::all() as $productos) {
                    echo $productos->nombre;
                }
                ?>               
                  <button type="button"  onclick="pr()">Pr</button>
              </div>
              <div class="col">
                3
              </div>
            </div>
          </div>
<div>Fo</div>
    </body>
    
</html>

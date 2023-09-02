<html>
    <head>

    </head>
    <body>

        <div class="container text-center">
            <div class="row">
              <div class="col">
                1
              </div>
              <div class="col">                
                <?
                foreach (products::all() as $productos) {
                    echo $productos->name;
                }
                ?>
              </div>
              <div class="col">
                3
              </div>
            </div>
          </div>

    </body>
</html>

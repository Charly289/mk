
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
   
    <title>DataTable</title>

</head>
<body>
    <h1>Data</h1>   

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
</body>
</html>
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
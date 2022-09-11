<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BUSQUEDA DE DNI POR NOMBRE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body >
    <header>
        <h3 class="mx-3">TRABAJO DEL CURSO CLOUD COMPUTING</h3>
    </header>
   
    <main>
      <div class="container btn-group">
         <div id="form1" class="form my-5">
            <p>Buscar por DNI </p>
            <label for="dni"  class="form-label">DNI:</label>
            <input type="text" id="identidad" name="dni" class="form-control">
           
            <button type="button" form="form1"  class="btn btn-primary my-3" id="busqueda">BUSCAR</button>

          </div>
       

        <div  id="form2" class="form2 my-5 "  >
          <p>Resultados</p>
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" placeholder="nombres" class="form-control my-3"disabled>
          
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control my-3"disabled placeholder="apellidos">
          </div>
      </div>

       <style>
      body{
          background:linear-gradient(red , white);
          height: 100%;
        }
        h3{
          color:white;
          font-size: 40px;
          text-decoration:underline ;
          font-family: 'Tiro Bangla', serif;
          background:linear-gradient(blue,black);
          box-shadow: 10px 5px 5px black;
          text-align: center;
         
        }
        #form1{
          background: #FFE333 ;
          padding: 12px;
          border-bottom: 2px solid black;
          box-shadow: 10px 5px 5px black;
          border-right: 2px solid white;
          
        }

        #form2{
          background: #FFE333 ;
          padding: 12px;
          border-bottom: 2px solid black;
          box-shadow: 10px 5px 5px black;
          border-left: 4px solid white;
        }
        p{
          text-align: center;
          font-family: 'Tiro Bangla', serif;
          font-size: 29px;
        }
        footer{
          background: linear-gradient(blue,black);
          color: white;
          position: absolute;
          bottom: 0;
          width: 100%;
        }

        .container{
          height: 100%;
          display: flex;
          justify-content: center;
        }
       </style>
       

       
    </main>
    <footer>
      <p>BY SNAYDER CARDENAS.</p>
    </footer>

  </body>
  <script>
    $('#busqueda').click(function(){
      dni=$('#identidad').val();
      $.ajax({
      url:'Controlador/busquedaDNI.php',
      type:'post',
      data:'dni='+dni,
      dataType:'json',
      success:function(r){
        if(r.numeroDocumento==dni){
          $('#nombres').val(r.nombres);
          $('#apellidos').val(r.apellidoMaterno);
        }else{
          alert('error');
        }
      }
});
  });
  </script>

</html>

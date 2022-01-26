<?php

include('../protect.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Top5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
   

  </head>
  <body>
      

    


          
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Conseg Enterprise <br> Sistema Administrativo</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Desconectar</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Painel de Vendas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Sistema Financeiro
            </a>
          </li>
          
          
            <li class="nav-item">
              <span data-feather="shopping-cart"></span>
              -Lojas
            
          </li>
          
           <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Guarapuava
            </a>
          </li>
          
             <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              BB-Fonado
            </a>
          </li>
         
            <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Guarapuava Site
            </a>
          </li>
          
         <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              União da Vitoria
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Cruz Machado
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Cambé
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Londrina
            </a>
          </li>
          
           <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              ADM
            </a>
          </li>
            <li class="nav-item">
          
              <span data-feather="shopping-cart"></span>
              -Graficos
            
          </li>
          
          
            <li class="nav-item">
            <a class="nav-link" href="/sistema-interno/chart_mysql/">
              <span data-feather="shopping-cart"></span>
              Top 5
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/sistema-interno/chart_mysql2/">
              <span data-feather="shopping-cart"></span>
              Lojas
            </a>
            
          </li>
          
           <li class="nav-item">
          <a class="nav-link" href="/sistema-interno/chart_mysql3/">
              <span data-feather="shopping-cart"></span>
              Parcial do Dia(Vendedores)
            </a>
          </li>
           <li class="nav-item">
          <a class="nav-link" href="/sistema-interno/chart_mysql4/">
              <span data-feather="shopping-cart"></span>
              Top 5 do Dia
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/sistema-interno/chart_mysql5/">
              <span data-feather="shopping-cart"></span>
              Parcial do Dia (Lojas)
            </a>
          </li>
         
         
        
        

        </ul>

        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Conseg Enterprise</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <hr> 
      <center><h2 class="h2"> Parcial Diario </h2></center> 
    <canvas id="myChart" style="position: relative; height: 40vh; width: 80vw; "></canvas>
    
    
   <table class="table table-striped"> 
          <tr>
               
                <th> <strong> Nome</strong> </th>
                <th> <strong> Valor </strong> </th>
             
</tr>
   <?php
    
    include("cone.php"); 
    $consulta = "SELECT * FROM `valordiario` order by Valor desc";
    $resultado = mysqli_query($conexion, $consulta); 
?>  
<link rel="stylesheet" type="text/css" href="css/recib.css" media="screen" />
<?php
while($fila = mysqli_fetch_array($resultado))
{
?>
                <tr>
                
                <td><?php echo ($fila['Nome']);?></td>
                <td><?php echo ($fila['Valor']);?></td>
              
               
              
               <td>
                       
                        
                        </td>
                     
<?php

}
?> 
     
    


</main>
</div>

    
    
     <script>
        var ctx2 = document.getElementById('myChart2')
        var myChart2 = new Chart2(ctx2, {
            type:'bar',
            data:{
                datasets: [{
                    label: 'Vendas do Mes',
                    backgroundColor: [ '#85C1E9'],
                    borderColor: ['black'],
                    borderWidth:3,
                    
                    
                }]
            },
            options:{
                scales:{
                    y:{
                        beginAtZero:true
                    }
                }
            }
        })

        let url = 'URL OF THE API BY WHICH THE GRAPHICS WORK/sistema-interno/chart_mysql3/graficos.php'
        fetch(url)
            .then( response2 => response2.json() )
            .then( datos2 => mostrar2(datos) )
            .catch( error2 => console.log(error) )


        const mostrar2 = (articulos) =>{
            articulos.forEach(element => {
                myChart2.data['labels'].push(element.Nome)
                
                myChart2.data['datasets'][0].data.push(element.Valor)
                
                
                myChart2.update()
            });
            console.log(myChart2.data)
            
        
        }    
        
        
        
        



    </script>
    
    
    
    
  
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
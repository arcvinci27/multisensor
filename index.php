<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mwah Sinta Wally</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <!--otomatis load/realtime-->
    <script type="text/javascript">
      $(document).ready( function() {

        setInterval( function() {
          $("#cektds").load("cektds.php");
          $("#cekph").load("cekph.php");
          $("#cekaliran").load("cekaliran.php");
        }, 1000 );

      } );
    </script>

  </head>
  <body background="https://events.rumah123.com/news-content/img/2020/04/08093119/8161.jpg">
  
        <div class="container" style="text-align: center; margin-top: 150px">
      <h2>Monitoring IoT Hidroponik</h2>

    
     <div style="display: flex;">
         <!-- nilai tds -->
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title" style="font-size: 90px"> <span id="cektds"> 0 </span> </h5>
    <br>
    <h6 class="card-subtitle mb-2 text-muted">Part Per Milion</h6>
    <br><br>
    <p class="card-text">Tingkat kandungan yang terlarut dalam air nutrisi</p>
    
  </div>
</div>
    
    <!--  tds akhir -->

          <!-- nilai ph -->
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title" style="font-size: 90px"><span id="cekph">0</span></h5>
    <br>
    <h6 class="card-subtitle mb-2 text-muted">pH</h6>
    <br><br>
    <p class="card-text">Tingkat kebasaan yang terlarut dalam air nutrisi</p>
    
  </div>
</div>

    <!--  ph akhir -->
    <!-- nilai flow -->
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title" style="font-size: 90px"><span id="cekaliran">0</span></h5>
    <br>
    <h6 class="card-subtitle mb-2 text-muted">Liter per Second</h6>
    <br><br>
    <p class="card-text">Kecepatan aliran air pada sistem</p>
    
  </div>
</div>

    <!--  flow akhir -->
    <!-- nilai suhu -->
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title" style="font-size: 90px"><span id="ceksuhu">0</span></h5>
    <br>
    <h6 class="card-subtitle mb-2 text-muted">Celsius</h6>
    <br><br>
    <p class="card-text">Suhu pada air nutrisi</p>
    
  </div>
</div>
 <!--  suhu akhir -->

  </div>
    </div>
   
    
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once 'includes/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Home</title>
  </head>
  <body>
    <?php
    include_once 'includes/nav.php'; 
    include_once 'includes/db.inc.php';
    ?>
    <br>
    <h1 align="center">Shop your Products</h1>
    <div style="margin-top: 50px;">
      
       <div class="card-deck" style="width: 1200px; margin-left: 64px;">
    <a href="allopathy.php" class="btn">
      <div class="card" style="width: 300px;">
        <img src="../images/allopathic/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Allopathy Products</h5>
          <p class="card-text">Buy the allopathy products right now!!</p>
        </div>
      </div>
    </a>
      <a href="ayurvedic.php" class="btn">
        <div class="card" style="width: 300px; margin-left: 60px;">
        <img src="../images/ayurveda/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ayurvedic Products</h5>
          <p class="card-text">Buy the ayurvedic products right now!!</p>
        </div>
      </div>
      </a>
      <a href="homeopathy.php" class="btn">
        <div class="card" style="width: 300px; margin-left: 60px;">
        <img src="../images/homeopathy/5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Homeopathy Products</h5>
          <p class="card-text">Buy the homeopathy products right now!!</p>
        </div>
      </div>
      </a>
    </div>
             <div class="card-deck" style="width: 1200px; margin-left: 264px; margin-top: 30px;">
              <a href="babycare.php" class="btn">
                <div class="card" style="width: 300px;">
                  <img src="../images/baby/4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Baby Care Products</h5>
                    <p class="card-text">Buy the baby care products right now!!</p>
                  </div>
                </div>
              </a>
                <a href="dailycare.php" class="btn">
                  <div class="card" style="width: 300px; margin-left: 60px;">
                  <img src="../images/daily/6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Daily Care Products</h5>
                    <p class="card-text">Buy the daily care products right now!!</p>
                  </div>
                </div>
                </a>
              </div>
      
    </div>



    <?php include_once 'includes/footer.php'; ?> 
  </body>
</html>
<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8" />
  <meta name="description" content="Candy Shop, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Candy Shop, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Candy Shop, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Screenshot 2025-05-08 3.27.41 PM.png" alt="candy shop image" width="300" />
      </div>
      <div class="page-content-answer">
        <div name="answer">
          <?php
          // tax rate
          $TAX_RATE = 0.18;
          $bagType = "";
          $subTotal = 0;

          // input
          $userCandy = $_GET["user-candy"];
          $typeOfBag = $_GET["type-of-bag"];


          // process` 
          if ($typeOfBag == "1") {
            $subTotal = $subTotal + 5;
            $bagType = "Single-size bag";
          } else {
            $subTotal = $subTotal + 15;
            $bagType = "Family-size bag";
          }

          // tax calculation
          $tax = $subTotal * $TAX_RATE;
          $totalPrice = $subTotal + $tax;

          // output
          echo 'You selected ' . $userCandy . ' in a ' . $bagType . '.<br>';
          echo 'Sub Total: $' . $subTotal . '<br>';
          echo 'Tax: $' . $tax . '<br>' ;
          echo 'Total Price: $' . $totalPrice . '.';
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>

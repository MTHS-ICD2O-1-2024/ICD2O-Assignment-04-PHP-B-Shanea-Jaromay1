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
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-yellow.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Candy Shop, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Candy Shop, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Screenshot 2025-05-08 3.27.41 PM.png" alt="candy shop image" />
      </div>
      <form action="./answer.php" method="GET">
        <br />
        <div class="page-content-guide">
          Select the size of the bag for your candies. YAY!
        </div>
        <div class="page-options">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-single-bag">
            <input type="radio" name="option-single-bag" value="1" checked />
            <span class="mdl-radio__label">Single-size bag - $5 (10 pieces of candy)</span>
          </label>
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-family-bag">
            <input type="radio" name="option-family-bag" value="2" />
            <span class="mdl-radio__label">Family-size bag - $15 (20 pieces of candy)</span>
          </label>
        </div>
        <br />
        <!-- https://www.w3schools.com/tags/tag_select.asp -->
        <div class="mdl-textfield mdl-js-textfield">
          <label for="user-candy">Select your candy</label>
          <select class="mdl-textfield__input" name="user-candy">
            <option value="gummy-bears">Gummy Bears</option>
            <option value="gummy-worms">Gummy Worms</option>
            <option value="lollipop">Lollipop</option>
            <option value="candy-cane">Candy Cane</option>
          </select>
        </div>
        <br />
        <!-- Raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          CANDY
        </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id='answer'></div>
      </div>
    </main>
  </div>
</body>

</html>
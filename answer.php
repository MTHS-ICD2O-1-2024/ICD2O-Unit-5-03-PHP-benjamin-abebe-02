<!DOCTYPE html>
<!-- ICS2O-Unit5-03-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a Movie, in JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css">

  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Watch a Movie, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Watch a Movie, in JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./movie_ratings.jpg" alt="computer user" />
      </div>

      <!--  using a new div to prevent all the elements from sticking on the sides -->
      <div class="center-content">
        <div class="page-content">results.</div>
        <br />
        <form action="#">
      </div>
      </form>
      <br />
      <div class="page-content-answer">
        <?php
        $userAge = $_GET["user-age"];
        // proccess
        if ($userAge <= 3) {
          echo "<h4>Your to young so you can only waych G rated movies alone.</h4>";
        } elseif ($userAge <= 9) {
          echo "<h4>You can only watch G or PG rated movies alone.</h4>";
        } elseif ($userAge <= 13) {
          echo "<h4>You can only watch PG-13 rated movies alone.</h4>";
        } else {
          echo "<h4>You can only watch R rated movies alone.</h4>";
        }
        ?>
      </br>
        <a
          href="./index.php"
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          onclick="myButtonClicked()"
          type="button">
          Return!
      </a>
      </div>
  </div>
  </main>
  </div>
</body>

</html>
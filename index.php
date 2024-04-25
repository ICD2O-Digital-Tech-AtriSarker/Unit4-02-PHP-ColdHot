<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Asks user for temperature in Celsius and returns output of whether it is hot or cold, Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- MDL -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Title -->
  <title>Hot or Cold in PHP</title>
</head>

<body>

  <!-- Header -->
  <h1>Hot or Cold in JS</h1>

  <!-- FORM -->
  <form id="inputForm" method="post" action="results.php" target="resultFrame">
    <!-- Table For Layout -->
    <table>
      <tr>
        <td>
          <!--  Celsius Degrees Input -->
          <label for="celsiusInput">Enter degrees Celsius (<sup>o</sup>C):</label>
          <input id="celsiusInput" type="number" name="celsius" value="" step="0.01" min="" max="" />
          <br>
        </td>
        <td>
          <!-- Image of JS LOGO -->
          <img class="contentImg" src="./images/jsLogo.png" alt="javascript Logo!">
          <br>
        </td>
      </tr>
    </table>

    <!-- Results Button -->
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit"
      value=":)" id="resultBtn">Get Result!</button>
  </form>

  <!-- Result -->
  <iframe name="resultFrame" src="./results.php">
  </iframe>

</body>

</html>
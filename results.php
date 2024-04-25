<b>
  <?php
    // Code
    if(isset($_POST['celsius'])) 
    {

      // Get user input, degrees Celsius
      $celsius = floatval($_POST['celsius']);

      // if the number is less than 15, tell them it is cold outside
      // otherwise, tell them it is hot
      if ($celsius < 15) {
        echo "It is cold outside.";
      } else {
        echo "It is hot outside.";
      }

    }
    else {
      // Default
      echo "Results will be shown here...";
    }
  ?>
</b> 
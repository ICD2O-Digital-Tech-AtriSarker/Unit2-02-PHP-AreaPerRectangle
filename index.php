<!-- USE DEV URL to run -->
<html>
  <head>
    <title>Area & Perimeter of a Rectangle with PHP</title>
  </head>
  <body>
    <!-- Script -->
    <script defer src="./js/script.js"></script>
  
    <!-- Header -->
    <h1>Area & Perimeter of a Rectangle with PHP</h1>
  
    <!-- Input Form | Default values of 5 and 3 -->
    <form method = "post">   
      <label for="length">Length (m):</label>
      <input id="LengthInput" type="number" name="length" value="5" min="0" />
      <br>
      <label for="width">Width (m):</label>
      <input id="WidthInput" type="number" name="width" value="3" min="0" />
      <br>
      <input type = "submit" name = "submit" value="Calculate">   
    </form>
  
  </body>
</html>

<?php   
if(isset($_POST['submit']))  
  {   
    $width = $_POST['width'];   
    $length = $_POST['length'];   
    $area = $width*$length;   
    echo "The area of a rectangle with $width m x $length m is $area m²";   
    echo '<br>';
    $perimeter = $width+$length+$width+$length;   
    echo "The perimeter of a rectangle with $width m x $length m is $perimeter m";  
  }   
?> 
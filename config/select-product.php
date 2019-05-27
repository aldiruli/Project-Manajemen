<?php
require './config/connection.php';

$selectproduct = mysqli_query($connection, "SELECT * FROM product ORDER BY 1 DESC");

if ($selectproduct) {
  while ($row = mysqli_fetch_assoc($selectproduct)) {
    echo '<div class="col-sm-4" style="background-color:cyan;border:2px solid deeppink;text-align:center;padding:10px">';
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>';
    ?>
    <img src="./img/product/<?php echo $row['product_image']?>" alt="<?php echo $row['product_image']?>" width="50%" draggable="false" style="pointer-events:none">
    <?php
    echo '</td>';
    echo '</tr>';
    echo '<tr>'.'<td>'.$row["product_name"].'</td>'.'</tr>';
    echo '<tr>'.'<td>'.$row["product_quantity"].'</td>'.'</tr>';
    echo '<tr>'.'<td>'."IDR. ".$row["product_price"].'</td>'.'</tr>';
    echo '<tr>'.'<td>'.$row["product_description"].'</td>'.'</tr>';
    echo '</table>';
    echo '</div>';
  }
}else {
  echo "string";
}

mysqli_close($connection);
 ?>

<?php
session_start();
include('./dbconn.php');

if (mysqli_connect_error()) {
  echo "<script>
  alert('cannot connect to database');
    window.location.href='./mycart.php';
  </script>";
  exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST")    //checking the server method is post or not
{
  $total = 0;
  if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
      $sr = $key + 1;
      if (isset($_POST['purchase']))   //checking make purchse button
      {
        $query1 = "INSERT INTO order_manager(fullname, phoneno, address, payment_mod) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if (mysqli_query($mysqli, $query1)) {
          //prepared statement -> creates templates    //preparing query once and executing it multiple times
          $Order_Id = mysqli_insert_id($mysqli);
          $sqli = "SELECT users.id FROM users LEFT JOIN order_manager ON order_manager.user_id = users.id";
          $query2 = "INSERT INTO orders(item_name, price, quantity, order_id, user_id) VALUES ('$value[Item_name]','$value[price]','$value[Quantity]','$sqli')";
          $stmt = mysqli_prepare($mysqli, $query2,);
          if ($stmt) {
            // mysqli_stmt_bind_param($stmt, $Order_Id, $Item_Name, $Price, $Quantity);       //binding the prepare statement with parameters '?''
            foreach ($_SESSION['cart'] as $key => $values) {
              $Item_Name = $values['Item_name'];   //values = form names
              $Price = $values['price'];
              $Quantity = $values['Quantity'];
              mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['cart']);
            echo "<script>
  alert('Order Placed');
    window.location.href='./index.php';
  </script>";
          } else {

            echo "<script>
    alert('SQL query prepared error');
      window.location.href='./mycart.php';
    </script>";
          }
        } else { {
            echo "<script>
    alert('SQL error');
      window.location.href='./mycart.php';
    </script>";
          }
        }
      }
    }
  }
}

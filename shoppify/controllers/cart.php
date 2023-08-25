<?php

// $cart={num, item_id, item_price,item_name,item_name, quantity, unit_total};

include('./config/database.php');
$cart = array();
$newCart = array();
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
    case 'add':
      # add to cart
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = 'SELECT * FROM `items` WHERE `id`=' . $id;
        $item = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        if (!empty($_SESSION['cart_items'])) {
          $cart = $_SESSION['cart_items'];

          foreach ($cart as $itm) {
            if ($itm['item_id'] === $id) {
              var_dump($itm);
              $quantity += $itm['quantity'];
              $unit_total = $itm['item_price'] * $quantity;
              $newItem = [
                'num' => $itm['num'], 'item_id' => $itm['item_id'], 'item_price' => $itm['item_price'], 'item_name' => $itm['item_name'],
                'quantity' => $quantity, 'unit_total' => $unit_total
              ];
              //array_replace($cart, $newItem);
              array_push($newCart, $newItem);
              $_SESSION['cart_items'] = $newCart;
            } else {
              $newItem = [
               'num' => count($cart) + 1, 'item_id' => $id, 'item_price' => $item['price'], 'item_name' => $item['name'], 'item_image' => $item['image'],
               'quantity' => 1, 'unit_total' => $item['price']
              ];
              //array_push($cart, $newItem);
              array_pop($cart, $itm);

              array_push($cart, $newItem);
              $_SESSION['cart_items'] = $cart;
            }
          }
        } else {
          $newItem = [
            'num' => count($cart) + 1, 'item_id' => $id, 'item_price' => $item['price'], 'item_name' => $item['name'], 'item_image' => $item['image'],
            'quantity' => 1, 'unit_total' => $item['price']
          ];
          array_push($newCart, $newItem);
          $_SESSION['cart_items'] = $newCart;
        }
      }

      break;
    case 'increase':
      # increase
      break;
    default:
      $newCart = $_SESSION['cart_items'];
      break;
  }
}
//  else {

//  if (isset($_SESSION['cart_items'])) {
//   $cart = $_SESSION['cart_items'];
//  } else {
//   header('location:index.php?msg=Add Items to cart to continue purchase');
//  }
// }

$_SESSION['cart_items'] = $newCart;
$_SESSION['name'] = 'shopify';
$CartCount = isset($_SESSION['cart_items']) ? count($_SESSION['cart_items']) : 0;
$cart = $_SESSION['cart_items'];

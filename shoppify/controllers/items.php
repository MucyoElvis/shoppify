<?php
include('./config/database.php'); 

if (isset($_GET['action'])) {

 $action = $_GET['action'];
 //`id`, `name`, `slug`, `price`, `last_price`, `image`, `seller_id`, `description`, `instock`, `date_created`, `spex`, `created_at`, `status`
 switch ($action) {
  case 'search_1':
   $text = $_POST['search_text'];
   // OR / AND & LIKE, BETWEEN, JOIN, 
   $sql = "SELECT * FROM `items` WHERE `name` LIKE '%" . $text . "%' OR `description` LIKE '%" . $text . "%' OR `spex` LIKE '%" . $text . "%'";
   $results = mysqli_query($conn, $sql);
   //$results = mysqli_fetch_assoc($query);  
   //header('location:results.php');
   break;

  default:
   # code...
   break;
 }
}
$datalist=array();
$sql1 = "SELECT * FROM `items`";
$datalist = mysqli_query($conn, $sql1);
//$datalist = mysqli_fetch_row($query1);

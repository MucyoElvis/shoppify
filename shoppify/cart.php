<?php
include('./components/navbar.php');
?>

<section class=" pt-5  mt-5 text-center  text-sm-start">
 <h1 class="text-center text-dark mt-1" style="font-family: Marshmallow personal use regular;">The Generics Store</h1>


 <div class="container col-sm-12">
  <h3 class="d-flex justify-content-center align-items-center mt-5" style="font-family:  caranda personal use; font-size: 3rem;">Cart</h3>

  <table class="table" class="cart-items">
  <thead>
     <th>Items</th>
     <th>Price</th>
     <th>Quantity</th>
    </thead>
    <tbody>
   <?php $sum=0;
  // var_dump($_SESSION);
   foreach($cart as $item):
    $sum+=$item['unit_total'];?>
   <tr class="cart-row">
    
     <td class="d-block">
      <p class="px-5  lead"><?=$item['item_name']?></p>
      <img src="assets/images/<?=$item['item_image']?>" class="img-fluid" style="width: 10rem; border-radius: 10px;">

     </td>

     <td class="p-4" style="position: relative; top: 3rem;">
      <span class="cart-price">
       <strong><?=$item['item_price']?></strong>
       <h4><?=$item['unit_total']?></h4>
      </span>
     </td>

     <td>
      <div class="form-group d-flex">
       <input type="number" class=" form-control mt-5" style="width: 4rem;" class="cart-quantity-input" value="<?=$item['quantity']?>">
       <a href="cart.php?action=remove&id=<?=$item['item_id']?>" class="btn btn-lg btn-danger mt-5 " style="position: relative; left: 1rem; height: 3rem; width: 7rem;">Remove</a>
      </div>
     </td>



   </tr>
   <?php endforeach?>
   
   </tbody>
   <!-- end of first row -->
   <!-- <tr class="cart-row">
    <tbody>
     <td class="d-block">
      <p class="lead px-5">laptop-2</p>
      <img src="assets/images/laptop-4.webp" class="img-fluid" style="width: 10rem; border-radius: 10px;">

     </td>

     <td class="p-4" style="position: relative; top: 3rem;">
      <span class="cart-price">
       <h4>$350.99</h4>
      </span>
     </td>

     <td>
      <div class="form-group d-flex">
       <input type="number" class=" form-control mt-5" style="width: 4rem;" class="cart-quantity-input" value="2">
       <button class="btn btn-lg btn-danger mt-5" style="position: relative; left: 1rem; height: 3rem; width: 7rem;">Remove</button>
      </div>
     </td>
    </tbody>
   </tr> -->
   <!-- end of second row -->
   <tfoot style="position: relative;">
    <td>
     <h2>Total</h2>
    </td>

    <td>
     <span class="cart-total-price">
      <h1><?=$sum;?></h1>
     </span>
    </td>
   </tfoot>

  </table>
  <button class="btn btn-lg btn-info m-5">Purchase</button>
 </div>

</section>

<?php include('./components/footer.php'); ?>
</body>

</html>
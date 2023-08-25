<?php include('controllers/items.php');
include('./components/navbar.php');

?>

<section class=" p-5  text-center  text-sm-start">
  <div class="container ">
    <!-- <img src="assets/images/dark-blur-abstract-4k-2560x1600.jpg" class="img-fluid p-0 w-100 h-50"> -->
    <h1 class="text-center text-dark" style="font-family: Marshmallow personal use regular;">The Generics</h1>

    <form action="results.php?action=search_1" method="post" id="searchform">
      <div class="form-group">
        <input type="search" name="search_text" id="search_text" onkeyup="search()" class="form-control text-center mt-5  offset-3" placeholder="search Any Product" style="width: 50%; border-radius: 1rem;">
        <img src="assets/images/s.png" onclick="search()" class="img-fluid offset-8 col-sm-d-none" style="position: relative;  top: -2rem; width: 2rem; cursor: pointer;" id="image">

      </div>
    </form>
    <?php
    if (isset($_GET['action'])) :
      if (mysqli_num_rows($result) > 0) : ?>
        <div class="row py-5">
          <div class="col-12">
            <h2>Results: </h2>
          </div>
          <?php foreach ($results as $item) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 px-5">
              <h3><?= $item['name']; ?></h3>
              <img src="assets/images/<?= $item['image']; ?>" class="img-fluid " style="width: 20rem; height: 10rem; border-radius: 10px;">
              <div class="button d-flex p-3">
                <p class="lead" style="position: relative; left: -1rem;">$<?= $item['price']; ?></p>
                <a href="cart.php?action=add&id=<?= $item['id']; ?>&n=<?= $item['name']; ?>&p=<?= $item['price']; ?>" class="btn btn-info btn-md px-2 gx-5">Add to cart</a>
                <!-- <button onclick="addToCart(<?= $item['id']; ?>)" class="btn btn-info btn-md px-2 gx-5">Add to cart</button> -->
              </div>
            </div>

          <?php endforeach ?>
        <?php else : ?>
          <h2>No Results found</h2>
        <?php endif ?>
      <?php endif ?>

        </div>
        <div class="row py-5">
          <div class="col-12">
            <h2>Results: </h2>
          </div>
          <?php foreach ($datalist as $item) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 px-5">
              <h3><?= $item['name']; ?></h3>
              <img src="assets/images/<?= $item['image']; ?>" class="img-fluid " style="width: 20rem; height: 10rem; border-radius: 10px;">
              <div class="button d-flex p-3">
                <p class="lead" style="position: relative; left: -1rem;">$<?= $item['price']; ?></p>
                <a href="cart.php?action=add&id=<?= $item['id']; ?>&n=<?= $item['name']; ?>&p=<?= $item['price']; ?>" class="btn btn-info btn-md px-2 gx-5">Add to cart</a>
                <!-- <button onclick="addToCart(<?= $item['id']; ?>)" class="btn btn-info btn-md px-2 gx-5">Add to cart</button> -->
              </div>
            </div>

          <?php endforeach ?>
        </div>



  </div>
</section>

<!-- end of Grid -->

<?php include('./components/footer.php');  ?>

</body>
<script>
  function search() {
    const field = document.getElementById('search_text');
    const form = document.getElementById('searchform');
    const text = field.value;
    if (text.length > 2) {
      form.submit();
    }
  }
</script>

</html>
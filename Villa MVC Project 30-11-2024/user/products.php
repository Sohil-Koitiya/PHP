<?php

include 'header.php';

?>

<div class="page-heading header-text">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <span class="breadcrumb"><a href="#">Home</a> /
          <h3>

          </h3>
      </div>
    </div>
  </div>
</div>

<div class="section properties">
  <div class="container">

    <div class="row properties-box">
      <?php
      while ($fetch = $run->fetch_object()) { ?>
        <!-- echo $fetch->prd_name; -->
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <form action="addtocart?subcate_id" method="post">
            <div class="item">
              <a href="property-details?prdId=<?php echo $fetch->prd_id ?>"><img
                  src="assets/images/<?php echo $fetch->prd_image ?>" alt="<?php echo $fetch->prd_image ?>"></a>
              <span class="category"><?php echo $fetch->prd_name; ?></span>
              <h6>$<?php echo $fetch->prd_price; ?></h6><br>
              <input type="hidden" name="prd_id" value="<?php echo $fetch->prd_id ?>">
              <input type="hidden" name="subcate_id" value="<?php echo $fetch->subcate_id_fk ?>">
              <h4><a href="property-details">18 Old Street Miami, OR 97219</a></h4>
              <ul>
                <li>Bedrooms: <span>8</span></li>
                <li>Bathrooms: <span>8</span></li>
                <li>Area: <span>545m2</span></li>
                <li>Floor: <span>3</span></li>
                <li>Parking: <span>6 spots</span></li>
              </ul>
              <!-- <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div> -->
              <div>
                <input type="number" max="5" min="1" name="qty" value="1">
              </div>
              <div class="my-3">
                <button type="submit" name="addtocart" class="btn btn-warning">Add to Cart</button>
              </div>
            </div>
          </form>
        </div>
        <?php
      }
      ?>


    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a class="is_active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">>></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php

include 'footer.php';

?>
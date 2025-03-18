<?php

include 'header.php';

?>

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb"><a href="#">Home</a> / <?php
        echo $fetch->cate_name;
        ?></span>
        <h3>
          <?php
          echo $fetch->cate_name;
          ?>
        </h3>
      </div>
    </div>
  </div>
</div>

<div class="section properties">
  <div class="container">

    <div class="row properties-box">

      <?php
      while ($fetch = $run->fetch_object()) {


        ?>

        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details?singleprd=<?php echo $fetch->subcate_id; ?>"><img
                src="assets/images/<?php echo $fetch->subcate_img ?>" alt="<?php echo $fetch->subcate_img ?>"></a>
            <span class="category"><?php echo $fetch->subcate_name; ?></span>
            <h6>$
              <?php
              echo $fetch->subcate_price;
              ?>
            </h6>
            <h4><a href="property-details.html">18 Old Street Miami, OR 97219</a></h4>
            <ul>
              <li>Bedrooms: <span>8</span></li>
              <li>Bathrooms: <span>8</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>6 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="products?subcate_id=<?php echo $fetch->subcate_id ?>">View All
                <?php echo $fetch->subcate_name ?></a>
            </div>
          </div>
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
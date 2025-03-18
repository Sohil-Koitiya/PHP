<?php

include 'header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-8 cart">
                        <div class="title">
                            <div class="row">
                                <div class="col">
                                    <h4><b>Shopping Cart</b></h4>
                                </div>
                                <div class="col align-self-center text-right text-muted"><?php echo count($cart_arr) ?> items</div>
                            </div>
                        </div>
                        <?php

                            if(!empty($cart_arr))
                            {

                            

                            foreach($cart_arr as $cart_product)
                            {?>
                             <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="assets/images/<?php echo $cart_product->prd_image ?>"></div>
                                <div class="col">
                                    <div class="row text-muted">Shirt</div>
                                    <div class="row"><?php echo $cart_product->prd_name ?></div>
                                </div>
                                <div class="col">
                                    <input type="number" max="5" min="1" class="text-center" readonly value="<?php echo $cart_product->quantity ?>">
                                </div>
                                
                                <div class="col">&euro; <?php echo $cart_product->prd_price ?> <span class="close">&#10005;</span></div>
                                <div class="col">
                                    <div class="text-center">
                                        <?php 
                                            $dbQty = $cart_product->quantity; 
                                            $dbPrice = $cart_product->prd_price;
                                            $subTotal = $dbQty * $dbPrice;
                                            
                                            echo $subTotal;

                                            $total[] = $subTotal;
                                            
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <?php       
                            }
                        }
                        else
                        { ?>
                        
                            <h1 class="text-center">Cart is empty</h1>

                        <?php
                        }
                        ?>
                        
                        <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to
                                shop</span></div>
                    </div>
                    <div class="col-md-4 summary">
                        <div>
                            <h5><b>Summary</b></h5>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col" style="padding-left:0;">ITEMS <?php echo count($cart_arr) ?></div>
                            <div class="col text-right">&euro; 132.00</div>
                        </div>
                        <form>
                            <p>SHIPPING</p>
                            <select>
                                <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                            </select>
                            <p>GIVE CODE</p>
                            <input id="code" placeholder="Enter your code">
                        </form>
                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <h5 class="col">TOTAL PRICE</h5>
                            <h5 class="col text-right">&euro; <?php print_r(array_sum($total)) ?></h5>
                        </div>
                        <form action="checkout" method="post">
                            <input type="hidden" name="cart_amt" value="<?php print_r(array_sum($total))?>">
                            <input type="submit" class="btn btn-warning" style="font-weight: bold" name="submit" value="CHECKOUT">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

include 'footer.php';

?>
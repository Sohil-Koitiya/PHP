<?php

include 'header.php';

?>

<div class="container border border_dark rounded p-4">
    <div class="row p-4 text-center justify-content-center">
        <div class="col-6">
            <h3>Checkout</h3>
            <div>
                <label for="">Amount</label>
                <div>
                    <?php
                    if (!empty($total)) {
                        echo $total;
                    } else {
                        echo 0;
                    }
                    ?>
                </div>

                <form action="">
                    <div>
                         <input type="text" id="name" value="<?php echo $user ?>">
                    </div>
                    <div>
                        <input type="text" id="amt" value="<?php echo $total ?>" >
                    </div>
                    <button type="button" onclick="MakePayment()">Pay</button>
                </form>

                
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                <script>
                    function MakePayment() {
                        var name = $('#name').val();
                        var amount = $('#amt').val();
                        var options = {
                            "key": "rzp_test_dB2xf9DUEbHXJz", // Enter the Key ID generated from the Dashboard
                            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                            "currency": "INR",
                            "name": name, //your business name
                            "description": "Test Transaction",
                            "image": "https://example.com/your_logo",
                            
                            // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                            "handler": function (response) {
                                // console.log(response.razorpay_payment_id);
                                // alert(response.razorpay_payment_id);
                                // alert(response.razorpay_order_id);
                                // alert(response.razorpay_signature)
                                $.ajax({
                                    type:'post',
                                    url:'payment',
                                    data:"payId="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                                    success:function(result)
                                    {
                                        window.location.href = "success"
                                    }
                                })
                                
                            },
                            "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
                                "name": name, //your customer's name
                                "email": "gaurav.kumar@example.com",
                                "contact": "9000090000"  //Provide the customer's phone number for better conversion rates 
                            },
                            "notes": {
                                "address": "Razorpay Corporate Office"
                            },
                            "theme": {
                                "color": "#3399cc"
                            }
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.on('payment.failed', function (response) {
                            alert(response.error.code);
                            alert(response.error.description);
                            alert(response.error.source);
                            alert(response.error.step);
                            alert(response.error.reason);
                            alert(response.error.metadata.order_id);
                            alert(response.error.metadata.payment_id);
                        });
                        // document.getElementById('rzp-button1').onclick = function (e) {
                        rzp1.open();
                        // e.preventDefault();
                        // }
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<?php

include 'footer.php';

?>
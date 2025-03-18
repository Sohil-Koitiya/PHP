<?php

include 'model.php';
class control extends model
{
    function __construct()
    {
        session_start();

        model::__construct();

        $url = $_SERVER['PATH_INFO'];

        $cate_arr = $this->select('category');

        switch ($url) {
            case '/index':
                include 'index.php';
                break;

            case '/contact':
                include 'contact.php';
                break;

            case '/login':

                if (isset($_POST['login'])) {
                    $uemail = $_POST['email'];
                    $upassword = $_POST['password'];

                    if (isset($_REQUEST['remember'])) {
                        setcookie('email', $uemail, time() + 10);
                        setcookie('password', $upassword, time() + 10);
                    }



                    // echo $uemail.' '.$upassword;exit;

                    $where = array('user_email' => $uemail, 'user_password' => $upassword);

                    $run = $this->select_where('users', $where);

                    $fetch = $run->fetch_object();

                    $dbEmail = $fetch->user_email;
                    $dbUserId = $fetch->user_id;
                    $dbUser = $fetch->user_name;
                    $dbPassword = $fetch->user_password;




                    if ($dbEmail == $uemail && $dbPassword == $upassword) {
                        $_SESSION['email'] = $dbEmail;
                        $_SESSION['uid'] = $dbUserId;
                        $_SESSION['user'] = $dbUser;
                        echo "<script>
                            alert('Welcome User...!');
                            window.location.href = 'index'
                        </script>";
                    } else {
                        echo "<script>
                            alert('Invalid Useremail/Password...!');
                        </script>";
                    }
                }

                include 'login.php';
                break;

            case '/category':
                if (isset($_REQUEST['cate_id'])) {
                    $cate_id = $_REQUEST['cate_id'];

                    $where = array('cate_id' => $cate_id);

                    $run = $this->select_where('category', $where);

                    $fetch = $run->fetch_object();

                    // $dbCateName = $fetch->cate_name;

                    $where = array('cate_id_fk' => $cate_id);

                    $run = $this->select_where('subcategory', $where);

                    // $fetch = $run->fetch_object();

                }

                include 'category.php';
                break;

            case '/products':
                if (isset($_REQUEST['subcate_id'])) {
                    $uid = $_SESSION['uid'];

                    // echo $uid;exit;

                    $subcateId = $_REQUEST['subcate_id'];

                    $where = ['subcate_id_fk' => $subcateId];

                    $run = $this->select_where('products', $where);


                }

                include 'products.php';
                break;

            case '/cart':

                $uid = $_SESSION['uid'];
                $where = ['user_id_fk' => $uid];
                $cart_arr = $this->select_join('cart', 'products', 'cart.prd_id_fk = products.prd_id', $where);

                include 'cart.php';
                break;

            case '/checkout':
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user'];
                    if (isset($_REQUEST['submit'])) {
                        $total = $_REQUEST['cart_amt'];

                    }
                }

                include 'checkout.php';
                break;

            case '/success':
                echo "<script>
                            alert('Payment Done...!');
                            window.location.href = 'payment';
                        </script>";
                include 'success.php';
                break;

                case '/payment':

                    if(isset($_REQUEST['payId']) && isset($_REQUEST['name']) && isset($_REQUEST['amount']))
                    {
                        $payid = $_REQUEST['payId'];
                        $user = $_REQUEST['name'];
                        $amount = $_REQUEST['amount'];

                        $data = ["user_name"=>$user,"amount"=>$amount,"razorpay_id"=>$payid];
                        $this->insert('payment',$data);

                        
                    }

                    echo "<script>
                            alert('Payment Successfully Done...!');
                            window.location.href = 'emptycart';
                            </script>";

                    
                    break;

                    case '/emptycart':
                        $uid = $_SESSION['uid'];
                        $where = ['user_id_fk' => $uid];
                        $cart_arr = $this->select_join('cart', 'products', 'cart.prd_id_fk = products.prd_id', $where);
                        
                        break;

            case '/addtocart':

                if (isset($_REQUEST['subcate_id'])) {
                    $subcate_id = $_REQUEST['subcate_id'];

                    if (isset($_REQUEST['addtocart'])) {

                        $uid = $_SESSION['uid'];
                        $prd_id = $_REQUEST['prd_id'];
                        $qty = $_REQUEST['qty'];

                        $where = ['subcate_id' => $subcate_id];
                        $run = $this->select_where('subcategory', $where);
                        $fetch = $run->fetch_object();

                        $where = array('prd_id_fk' => $prd_id, 'user_id_fk' => $uid);
                        $run = $this->select_where('cart', $where);
                        $fetch = $run->fetch_object();

                        if (!empty($fetch)) {
                            $dbQty = $fetch->quantity;
                            $totalQty = $dbQty + $qty;

                            $data = ['quantity' => $totalQty];
                            $where = array('prd_id_fk' => $prd_id, 'user_id_fk' => $uid);

                            $run = $this->update('cart', $data, $where);

                            if ($run) {
                                echo "<script>
                                        alert('Cart Updated...!');
                                        window.location.href = 'products?subcate_id=$subcate_id';
                                    </script>";
                            }
                        } else {
                            $data = ['prd_id_fk' => $prd_id, 'user_id_fk' => $uid, 'quantity' => $qty];
                            $run = $this->insert('cart', $data);

                            if ($run) {
                                echo "<script>
                                        alert('Added to cart...!');
                                        window.location.href = 'products?subcate_id=$subcate_id';
                                    </script>";
                            }
                        }
                    }
                }





                break;

            case '/forgot':

                include 'forgot.php';
                break;

            // case '/villa-house' : 

            //     include 'villa-house.php';
            // break;

            // case '/pent-house' : 

            //     include 'pent-house.php';
            // break;

            case '/logout':
                // session_destroy();
                unset($_SESSION['email']);

                echo "<script>
                alert('Logout Success...!');
                window.location.href='index';
            </script>";

                break;

            case '/properties':
                include 'properties.php';
                break;

            case '/property-details':
                if (isset($_REQUEST['prdId'])) {
                    $prd_id = $_REQUEST['prdId'];

                    $where = ['prd_id' => $prd_id];

                    $run = $this->select_where('products', $where);

                    $fetch = $run->fetch_object();
                }
                include 'property-details.php';
                break;

            case '/register':
                if (isset($_REQUEST['submit'])) {
                    $uname = $_POST['name'];
                    $uemail = $_POST['email'];
                    $upass = $_POST['password'];
                    $ugender = $_POST['gender'];

                    $ulanguage = $_POST['chk'];

                    $ulang = implode(',', $ulanguage);

                    $ufile = $_FILES['file']['name'];

                    $dupfile = $_FILES['file']['tmp_name'];

                    move_uploaded_file($dupfile, "images/$ufile");

                    $data = array('user_name' => $uname, 'user_email' => $uemail, 'user_password' => $upass, 'user_gender' => $ugender, 'user_language' => $ulang, 'user_file' => $ufile);


                    $insert = $this->insert('users', $data);

                    if ($insert) {
                        echo "<script>
                            alert('Record Inserted...!');
                        </script>";
                    }
                }
                include 'register.php';
                break;
        }
    }
}

$obj = new control;


?>
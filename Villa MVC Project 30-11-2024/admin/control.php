<?php

include 'model.php';
class control extends model
{
    function __construct()
    {
        session_start();

        model::__construct();

        $url = $_SERVER['PATH_INFO'];

        // $cate_arr = $this->select('category');

        switch ($url) {
            case '/index':

                if (isset($_POST['login'])) {
                    $uemail = $_POST['admin_email'];
                    $upassword = $_POST['admin_password'];

                    if (isset($_REQUEST['remember'])) {
                        setcookie('admin_email', $uemail, time() + 10);
                        setcookie('admin_password', $upassword, time() + 10);
                    }



                    // echo $uemail.' '.$upassword;exit;

                    $where = array('admin_email' => $uemail, 'admin_password' => $upassword);

                    $run = $this->select_where('admin', $where);

                    $fetch = $run->fetch_object();

                    $dbEmail = $fetch->admin_email;
                    $dbUserId = $fetch->user_id;
                    $dbPassword = $fetch->admin_password;




                    if ($dbEmail == $uemail && $dbPassword == $upassword) {
                        $_SESSION['email'] = $dbEmail;
                        $_SESSION['uid'] = $dbUserId;
                        echo "<script>
                                alert('Welcome Admin...!');
                                window.location.href = 'dashboard'
                            </script>";
                    } else {
                        echo "<script>
                                alert('Invalid Useremail/Password...!');
                            </script>";
                    }
                }


                include 'index.php';
                break;

            case '/dashboard':

                include 'dashboard.php';
                break;

            case '/add-user':
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
                include 'add-user.php';
                break;

            case '/manage-users':
                // $uid = $_SESSION['user_id'];
                $arr = $this->select('users');
                // $data = [''];
                // $this->update('users', $data, $where);

                include 'manage-users.php';
                break;

            case '/add-category':
                if(isset($_REQUEST['submit']))
                {
                    $cate = $_REQUEST['name'];
                    $data = ['cate_name'=>$cate];
                    $sql = $this->insert('category',$data);
                    if($sql)
                    {
                        echo "<script>
                            alert('Category Inserted...!');
                        </script>";
                    }
                }
                include 'add-category.php';
                exit;

            case '/manage-categories':
                $arr = $this->select('category');
                include 'manage-categories.php';
                exit;

            case '/add-subcategory':
                include 'add-subcategory.php';
                exit;

            case '/manage-subcategories':
                include 'manage-subcategories.php';
                exit;

            case '/add-products':
                include 'add-products.php';
                exit;

            case '/manage-products':
                include 'manage-products.php';
                exit;

                case '/logout' : 
                    // session_destroy();
                    unset($_SESSION['email']);
    
                    echo "<script>
                    alert('Logout Success...!');
                    window.location.href='index';
                </script>";
    
                break;

            // case '/contact' : include 'contact.php';
            // break;

            // case '/login' : 

            //     if(isset($_POST['login']))
            //     {
            //         $uemail = $_POST['email'];
            //         $upassword = $_POST['password'];

            //             if(isset($_REQUEST['remember']))
            //             {
            //                 setcookie('email', $uemail, time()+10);
            //                 setcookie('password', $upassword, time()+10);
            //             }



            //         // echo $uemail.' '.$upassword;exit;

            //         $where = array('user_email'=>$uemail,'user_password'=>$upassword);

            //         $run = $this->select_where('users',$where);

            //         $fetch = $run->fetch_object();

            //         $dbEmail = $fetch->user_email;
            //         $dbUserId = $fetch->user_id;
            //         $dbPassword = $fetch->user_password;




            //         if($dbEmail == $uemail && $dbPassword == $upassword)
            //         {
            //             $_SESSION['email'] = $dbEmail;
            //             $_SESSION['uid'] = $dbUserId;
            //             echo "<script>
            //                 alert('Welcome User...!');
            //                 window.location.href = 'index'
            //             </script>";
            //         }

            //         else
            //         {
            //             echo "<script>
            //                 alert('Invalid Useremail/Password...!');
            //             </script>";
            //         }
            //     }

            //     include 'login.php';
            // break;

            // case '/category' :  
            //         if(isset($_REQUEST['cate_id']))
            //         {
            //             $cate_id = $_REQUEST['cate_id'];

            //             $where = array('cate_id'=>$cate_id);

            //             $run = $this->select_where('category',$where);

            //             $fetch = $run->fetch_object();

            //             // $dbCateName = $fetch->cate_name;

            //             $where = array('cate_id_fk'=>$cate_id);

            //             $run = $this->select_where('subcategory',$where);

            //             // $fetch = $run->fetch_object();

            //         }

            //         include 'category.php';
            //     break;

            //     case '/products' : 
            //         if(isset($_REQUEST['subcate_id']))
            //         {
            //             $uid = $_SESSION['uid'];

            //             // echo $uid;exit;

            //             $subcateId = $_REQUEST['subcate_id'];

            //             $where = ['subcate_id_fk'=>$subcateId];

            //             $run = $this->select_where('products',$where);


            //         }

            //         include 'products.php';
            //         break;

            //     case '/cart' : 

            //         $uid = $_SESSION['uid'];
            //         $where = ['user_id_fk'=>$uid];
            //         $cart_arr = $this->select_join('cart','products','cart.prd_id_fk = products.prd_id',$where);

            //         include 'cart.php';
            //     break;

            //     case '/checkout':
            //         if(isset($_REQUEST['submit']))
            //         {
            //             $total = $_REQUEST['cart_amt'];

            //         }
            //         include 'checkout.php';
            //         break;

            //     case '/addtocart' :

            //         if(isset($_REQUEST['subcate_id']))
            //         {
            //             $subcate_id = $_REQUEST['subcate_id'];

            //             if(isset($_REQUEST['addtocart']))
            //             {

            //                 $uid = $_SESSION['uid'];
            //                 $prd_id = $_REQUEST['prd_id'];
            //                 $qty = $_REQUEST['qty'];

            //                 $where = ['subcate_id'=>$subcate_id];
            //                 $run = $this->select_where('subcategory',$where);
            //                 $fetch = $run->fetch_object();

            //                 $where = array('prd_id_fk'=>$prd_id,'user_id_fk'=>$uid);
            //                 $run = $this->select_where('cart',$where);
            //                 $fetch = $run->fetch_object();

            //                 if(!empty($fetch))
            //                 {
            //                     $dbQty = $fetch->quantity;
            //                     $totalQty = $dbQty + $qty;

            //                     $data = ['quantity'=>$totalQty];
            //                     $where = array('prd_id_fk'=>$prd_id,'user_id_fk'=>$uid);

            //                     $run = $this->update('cart',$data,$where);

            //                     if($run)
            //                     {
            //                         echo "<script>
            //                             alert('Cart Updated...!');
            //                             window.location.href = 'products?subcate_id=$subcate_id';
            //                         </script>";
            //                     }
            //                 }
            //                 else
            //                 {
            //                     $data = ['prd_id_fk'=>$prd_id,'user_id_fk'=>$uid,'quantity'=>$qty];
            //                     $run = $this->insert('cart',$data);

            //                     if($run)
            //                     {
            //                         echo "<script>
            //                             alert('Added to cart...!');
            //                             window.location.href = 'products?subcate_id=$subcate_id';
            //                         </script>";
            //                     }
            //                 }
            //             }
            //         }





            //     break;

            // // case '/apartment' : 

            // //     include 'apartment.php';
            // // break;

            // // case '/villa-house' : 

            // //     include 'villa-house.php';
            // // break;

            // // case '/pent-house' : 

            // //     include 'pent-house.php';
            // // break;

            // case '/logout' : 
            //     // session_destroy();
            //     unset($_SESSION['email']);

            //     echo "<script>
            //     alert('Logout Success...!');
            //     window.location.href='index';
            // </script>";

            // break;

            // case '/properties' : include 'properties.php';
            // break;

            // case '/property-details' : 
            //     if(isset($_REQUEST['prdId']))
            //     {
            //         $prd_id = $_REQUEST['prdId'];

            //         $where = ['prd_id'=>$prd_id];

            //         $run = $this->select_where('products',$where);

            //         $fetch = $run->fetch_object();
            //     }
            //     include 'property-details.php';
            // break;

            // case '/register' : 
            //     if(isset($_REQUEST['submit']))
            //     {
            //         $uname = $_POST['name'];
            //         $uemail = $_POST['email'];
            //         $upass = $_POST['password'];
            //         $ugender = $_POST['gender'];

            //         $ulanguage = $_POST['chk'];

            //         $ulang = implode(',',$ulanguage);

            //         $ufile = $_FILES['file']['name'];

            //         $dupfile = $_FILES['file']['tmp_name'];

            //         move_uploaded_file($dupfile,"images/$ufile");

            //         $data = array('user_name'=>$uname,'user_email'=>$uemail,'user_password'=>$upass,'user_gender'=>$ugender,'user_language'=>$ulang,'user_file'=>$ufile);


            //         $insert = $this->insert('users',$data);

            //         if($insert)
            //         {
            //             echo "<script>
            //                 alert('Record Inserted...!');
            //             </script>";
            //         }
            //     }
            //     include 'register.php';
            // break;
        }
    }
}

$obj = new control;


?>
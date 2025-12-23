<?php
session_start();
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Cart</title>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='css/add_to_cart.css'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
<style>
.btn-red {
    background-color: red !important;
}

.login-button:hover {
    background-color: #03AC13 !important;
    color: #FFFFFF !important;
}

</style>
</head>
<body>

<div class="container pb-5 mt-n2 mt-md-n3">
    <div class="row">
        <div class="col-xl-9 col-md-8">
            <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 bg-secondary"><span>Products</span><a class="font-size-sm" href="item_exchange_demo.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h2>
            <?php
            if (isset($_SESSION['item_card'])) {
                foreach ($_SESSION['item_card'] as $key => $value) {
                    if (isset($value['item_name'])) {
                        ?>
                        <div id="cartContainer" class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="<?php echo $value['Image']; ?>" alt="Product"></a>
                                <div class="media-body pt-3">
                                    <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#"><?php echo $value['item_name']; ?></a></h3>
                                    <div class="font-size-lg text-primary pt-2">Price : <?php echo $value['item_price']; ?><input type="hidden" class="iprice" value="<?php echo $value['item_price']; ?>"></div>
                                    <div class="font-size-lg text-primary pt-2">Total price : <p class="itotal"></p></div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                                <div class="form-group mb-2">
                                    <label for="quantity3">Quantity</label>
                                    <form action="manage_item.php" method="POST">
                                        <input class="form-control form-control-sm iquantity" name="Mod_Quantity" onchange="this.form.submit();" type="number" min="1" id="quantity3" value="<?php echo $value['item_quantity']; ?>">
                                        <input type="hidden" value="<?php echo $value['item_name']; ?>" name="item_name">
                                    </form>
                                </div>
                                <form action="manage_item.php" method="POST">
                                    <button name="Remove_item" class="btn btn-outline-danger btn-sm btn-block mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>Remove
                                    </button>
                                    <input type="hidden" value="<?php echo $value['item_name']; ?>" name="item_name">
                                </form>
                                <!--<form action="upload_images.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="scrap_name" value="<?php echo $value['item_name']; ?>">
                                    <input type="file" name="image" accept="image/*">
                                    <button class="btn btn-outline-primary btn-block" type="submit">Upload Image</button>
                                </form>-->
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
             
            </div>
        </div>
        <!-- Sidebar-->
      <div class="col-xl-3 col-md-4 pt-3 pt-md-0">
    <h2 class="h6 px-4 py-3 bg-secondary text-center">Subtotal</h2>
    <div class="h3 font-weight-semibold text-center py-3" id="gtotal"></div>
    <hr>
    <form action="item_exchange_db.php" method="POST" enctype="multipart/form-data">
        <?php
        // if (!isset($_SESSION['user_name']) || !isset($_SESSION['mobile_number']) || !isset($_SESSION['email_id'])) {
        //     echo "<script>
        //     if(confirm('Please login to continue.')) {
        //         window.location.href = 'cpp_login_demo.php';
        //     }
        //     </script>";
        //     exit;
        // }
        
        // $user_name = $_SESSION['user_name'];
        // $mobile_number = $_SESSION['mobile_number'];
        // $email_id = $_SESSION['email_id'];
        ?>
        <!-- <input type="hidden" name="user_name" value="<?php //echo $user_name; ?>">
        <input type="hidden" name="mobile_number" value="<?php //echo $mobile_number; ?>">
        <input type="hidden" name="email_id" value="<?php //echo $email_id; ?>"> -->
        <button class="btn btn-outline-primary btn-block" name="item_db" value="Next">Next</button>
    </form>
</div>

<script>
var gt = 0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');
function subTotal()
{
    gt = 0;
    for(i=0;i<iprice.length;i++)
    {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt = gt + (iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText = gt;
}

subTotal();

</script>
</body>
</html>

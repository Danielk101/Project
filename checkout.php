
<?php include('./includes/header.php'); 
include('./includes/include.php'); 

$total_price = 0;

$item_details = '';

$order_details = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th>Product Name</th>  
            <th>Quantity</th>  
            <th>Price</th>  
            <th>Total</th>  
        </tr>
';

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $order_details .= '
  <tr>
   <td>'.$values["item_name"].'</td>
   <td>'.$values["item_quantity"].'</td>
   <td align="right">$ '.$values["item_price"].'</td>
   <td align="right">$ '.number_format($values["item_quantity"] * $values["item_price"], 2).'</td>
  </tr>
  ';
  $total_price = $total_price + ($values["item_quantity"] * $values["item_price"]);

  $item_details .= $values["item_name"] . ', ';
 }
 $item_details = substr($item_details, 0, -2);
 $order_details .= '
 <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>
    </tr>
 ';
}
$order_details .= '</table>';

?>

  <div class="container">
   <br />
   <h3 align="center"><a>Checkout</a></h3>
   <br />
   <span id="message"></span>
   <div class="panel panel-default">
    <div class="panel-body">
     <form method="post" id="order_process_form" action="https://www.paypal.com/cgi-bin/webscr">
      <div class="row">
       <div class="col-md-8" style="border-right:1px solid #ddd;">
        <h4 align="center">Customer Details</h4>
        <div class="form-group">
         <label><b>Card Holder Name <span class="text-danger" >*</span></b></label>
               <input type="text" name="customer_name" id="customer_name" class="form-control" value="" required/>
               <span id="error_customer_name" class="text-danger"></span>
           </div>
           <div class="form-group">
            <label><b>Email Address <span class="text-danger">*</span></b></label>
            <input type="email" name="email_address" id="email_address" class="form-control" value="" required/>
            <span id="error_email_address" class="text-danger"></span>
           </div>
           <div class="form-group">
            <label><b>Address <span class="text-danger">*</span></b></label>
            <textarea name="customer_address" id="customer_address" class="form-control" required></textarea>
            <span id="error_customer_address" class="text-danger"></span>
           </div>
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>City <span class="text-danger">*</span></b></label>
              <input type="text" name="customer_city" id="customer_city" class="form-control" value="" required/>
              <span id="error_customer_city" class="text-danger"></span>
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>Zip <span class="text-danger">*</span></b></label>
              <input type="text" name="customer_pin" id="customer_pin" class="form-control" value="" required/>
              <span id="error_customer_pin" class="text-danger"></span>
             </div>
            </div>
           </div>
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>State </b></label>
              <input type="text" name="customer_state" id="customer_state" class="form-control" value="" required/>
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>Country <span class="text-danger">*</span></b></label>
              <input type="text" name="customer_country" id="customer_country" class="form-control" required/>
              <span id="error_customer_country" class="text-danger"></span>
             </div>
            </div>
           </div>
           <hr />
           <h4 align="center">Payment Details</h4>
           <div class="form-group">
                  <label>Card Number <span class="text-danger">*</span></label>
                  <input type="text" name="card_holder_number" id="card_holder_number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="" required/>
                  <span id="error_card_number" class="text-danger"></span>
              </div>
              <div class="form-group">
                 <div class="row">
                  <div class="col-md-4">
                   <label>Expiry Month</label>
                   <input type="text" name="card_expiry_month" id="card_expiry_month" class="form-control" placeholder="MM" maxlength="2" onkeypress="return only_number(event);" required/>
                   <span id="error_card_expiry_month" class="text-danger"></span>
                  </div>
                  <div class="col-md-4">
                   <label>Expiry Year</label>
                   <input type="text" name="card_expiry_year" id="card_expiry_year" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return only_number(event);" required/>
                   <span id="error_card_expiry_year" class="text-danger"></span>
                  </div>
                  <div class="col-md-4">
                   <label>CVC</label>
                   <input type="text" name="card_cvc" id="card_cvc" class="form-control" placeholder="123" maxlength="4" onkeypress="return only_number(event);" required/>
                   <span id="error_card_cvc" class="text-danger"></span>
                  </div>
                 </div>
              </div>
              <br />
        <div align="center">
         <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
         <input type="hidden" name="currency_code" value="USD" />
         <input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
                <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

                <!-- Specify a Buy Now button. -->
                <input type="hidden" name="cmd" value="_xclick">

                <!-- Specify details about the item that buyers will purchase. -->
                <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle">
                <input type="hidden" name="amount" value="5.95">
                <input type="hidden" name="currency_code" value="USD">

                <!-- Display the payment button. -->
                <input type="image" name="submit" border="0"
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                alt="Buy Now">
                <img alt="" border="0" width="1" height="1"
                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
        </div>
        <br />
       </div>
       <div class="col-md-4">
        <h4 align="center">Order Details</h4>
        <?php
        echo $order_details;
        ?>
       </div>
      </div>
     </form>
    </div>
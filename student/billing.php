<?
$servername = "localhost";
$username = "zachd29";
$password = "carmella1";
$dbname = "jaxcode54";

?>
<!DOCTYPE html>
<html>
<head>

  

<title>Law School Registraion Page</title>
<link rel="stylesheet" href="mystyles.css">
<meta name="description" content="This is a registration form for guests">
<meta name="keywords" content="RSVP, Register, Event">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
#checkoutsteps {list-style: none; margin: 0; padding: 0;}
#checkoutsteps li {font-size: small; display: inline; color: #aaa; padding: 0 10px; border-right: 1px solid #999;}
#checkoutsteps li.currentstep {color: #000;}
#checkoutsteps li.last {border-right: none;}
table.form-tbl {width: 100%;}
table.form-tbl td, table.form-tbl th {padding: 4px 2px;}
table.form-tbl th {width: 160px;}
table.form-tbl input[type="text"], table.form-tbl textarea {width: 75%;}

</style>


</head>
<body style="background-color:black;"> 

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
  	<li class="nav-item">
      <a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/dashboard.php">Dashboard</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/billing.php">Billing</a>
      <li class="nav-item">
      <a class="nav-link" href="http://jaxcode54.zachd29.webfactional.com/college/student/logout.php">Logout</a>
    </li>
       
  </ul>
</nav>
  <br><br>

  <div class="container" style="background-color:white;opacity:.97;">
    <div class="row">
      <div class="col-lg-12">
        <br><br>

        <div class="text-center"><h1>Billing & Payment</h1><br></div>


<h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;">Checkout</h3> 
<p><em>*</em> = required field </p>
{if #billing.form.errors}
  <ul class="errors">
    {loop items="#billing.form.errors" value="error"}
      <li>{#error.message}</li>
    {/loop}
  </ul>
{/if}
<ul id="checkoutsteps">
  <li><a href="{#billing.urls.cart}">Shopping Cart</a></li>
  <li><a href="{#billing.urls.checkoutShipping}">Shipping Address</a></li>
  <li class="currentstep">Billing &amp; Payment</li>
  <li>Confirmation</li>
  <li class="last">Receipt</li>
</ul>
{#billing.form.tag.open}
  {if #billing.form.fields.shippingOptions.options}
    <h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;">Shipping</h3>
    {#billing.form.fields.shippingOptions.tag}
  {/if}
  <h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;">Billing Information</h3>
  <table class="form-tbl" cellspacing="0">
    <tbody>
      <tr>
        <th>&nbsp;</th>
        <td>
          <input type="checkbox" name="populateinfo" value="1" id="populateinfo" />
          <label for="populateinfo">My billing information is the same as my shipping information</label>
        </td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billFirstName.id}">First Name <em>*</em></label></th>
        <td>{#billing.form.fields.billFirstName.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billLastName.id}">Last Name <em>*</em></label></th>
        <td>{#billing.form.fields.billLastName.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billAddress.id}">Address <em>*</em></label></th>
        <td>{#billing.form.fields.billAddress.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billCity.id}">City <em>*</em></label></th>
        <td>{#billing.form.fields.billCity.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billStateText.id}">State/Region/Province<em>*</em></label></th>
        <td>{#billing.form.fields.billStateText.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billZipCode.id}">Zip/Postal Code<em>*</em></label></th>
        <td>{#billing.form.fields.billZipCode.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billCountry.id}">Country <em>*</em></label></th>
        <td>{#billing.form.fields.billCountry.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billPhone.id}">Phone <em>*</em></label></th>
        <td>{#billing.form.fields.billPhone.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billEmail.id}">Email <em>*</em></label></th>
        <td>{#billing.form.fields.billEmail.tag}</td>
      </tr>
      <tr>
        <th><label>Confirm Email <em>*</em></th>
        <td><input id="email2" type="text" name="email2" /></td>
      </tr>
    </tbody>
  </table>
  <h3 align="center" style="border:3px lightgray solid;background-color:#f1f1f1;padding:10px 10px 10px 10px;">Payment Information</h3>
  <table class="form-tbl" cellspacing="0">
    <tbody>
      <tr>
        <th><label for="{#billing.form.fields.billCreditCardType.id}">Credit Card Type <em>*</em></label></th>
        <td>{#billing.form.fields.billCreditCardType.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billCreditCardNumber.id}">Card Number <em>*</em></label></th>
         <td>{#billing.form.fields.billCreditCardNumber.tag}</td>
      </tr>
       <tr>
         <th><label for="{#billing.form.fields.billCreditCardExpirationMonth.id}">Expiration <em>*</em></label></th>
         <td>{#billing.form.fields.billCreditCardExpirationMonth.tag} {#billing.form.fields.billCreditCardExpirationYear.tag}</td>
      </tr>
      <tr>
        <th><label for="{#billing.form.fields.billCreditCardCode.id}">Security Code <em>*</em></label></th>
        <td>{#billing.form.fields.billCreditCardCode.tag}<div class="smallText">3 or 4 digit code from the back of your credit card</div></td>
      </tr>
       <tr>
         <th>&nbsp;</th>
        <td><input type="submit" name="submit" value="Continue &raquo" /></td>
      </tr>
    </tbody>
  </table>
{#billing.form.tag.close}
</div>

</div>
</div>






</body>
</html>
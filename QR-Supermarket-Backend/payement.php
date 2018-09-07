 <?php
 $page_title = 'Home Page';
 require_once('includes/load.php');
 include_once('layouts/header.php'); ?>

 <form action="" method="post">

<table>
<tr>
<td>Cardholder's First Name:</td>
<td><input type="text" name="First_Name"></td>
</tr><tr>
<td>Cardholder's Last Name:</td>
<td><input type="text" name="Last_Name"></td>
</tr><tr>
<td>Credit Card Number:</td>
<td><input type="text" name="Card_Num"></td>
</tr><tr>
<td colspan="2" align="center">
<small>Please enter the expiration date as follows:
two digits of month and two digits of year.
For instance, January 2008 has to be entered as 0108:</small></td>
</tr><tr>
<td>Exp. date (mmyy):</td>
<td><input type="text" name="Exp_Date" maxlength="4"></td>
</tr><tr>
<td colspan="2" align="center">
<small>The Card Verification Code (Card ID or CVV2)
is required for American Express,Visa and MasterCard.
Please enter: for American Express - 4 digits on front of card;
for Visa and Mastercard - last 3 digits on back of card:</small>
</td>
</tr><tr>
<td>Card Number:</td>
<td><input type="text" name="Card_Code"></td>
</tr><tr>
<td colspan="2" align="center"><small>
Please enter the address at which the credit card bills are received:
</small></td>
</tr><tr>
<td>Street Address:</td>
<td><input type="text" name="Address"></td>
</tr><tr>
<td>City:</td>
<td><input type="text" name="City"></td>
</tr><tr>
<td>State/Province:</td>
<td><input type="text" name="State"></td>
</tr><tr>
<td>Zip/Postal Code:</td>
<td><input type="text" name="Zip"></td>
</tr><tr>
<td>Country:</td>
<td><input type="text" name="Country"></td>
</tr><tr>
<td colspan="2" align="center">
<input type="submit" value="Submit payment">
</td>
</tr>
</table>
</form>

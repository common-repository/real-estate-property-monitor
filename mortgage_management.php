
<div class="postcontent"> 
        <form name="create_user" action="" method="post" > 
	<table border="0" width="585"> 
  <tbody> 
  
     
	 
	 <tr> 
  <td width="101" >Username</td> 
	 <td width="181"><input class="bor" name="username" value="" type="text"></td> 
    <td width="101">&nbsp;</td> 
	 <td width="174">&nbsp;</td> 
  </tr> 
  
  <tr> 
    <td colspan="4" style="border-bottom: 1px solid rgb(156, 167, 182); padding-bottom: 10px;"></td> 
	 </tr> 
	 
   <tr> 
    <td width="101">Borrower</td> 
	 <td width="181">
	 
	   <input name="borrower_name" type="text" class="bor" id="borrower_name" value="" /></td> 
	 <td width="101">Phone No.</td> 
	 <td width="174"><input class="bor" name="phone_no1" value="" type="text" /></td> 
  </tr> 
  <tr> 
  <td width="101">Last 4 of Social</td> 
	 <td width="181"><input class="bor" name="lastsocial" value="" type="text"></td> 
    <td width="101">Email-Id</td> 
	<td width="174"><input class="bor" name="email" value="" type="text"></td> 
  </tr> 
  <tr> 
 
   <td width="101" valign="top">Property Address</td> 
	
	 <td><textarea class="bor" name="propertyaddress"></textarea></td> 
	 <td>Street Name</td> 
	 <td><input class="bor" name="street_name" value="" type="text"></td> 
  </tr> 
  <tr> 
  <td width="101" valign="top">Mailing Address</td> 
	 <td colspan="3"><textarea class="bor" name="mailingaddress"></textarea></td> 
	
	  </tr> 
  
  <tr> 
  <td width="101">Buyers Agent</td> 
	 <td width="181"><input class="bor" name="buyer_agent" value="" type="text"></td> 
    <td width="101">Phone No.</td> 
	 <td width="174"><input class="bor" name="phone_no2" value="" type="text"></td> 
  </tr> 
  
  <tr> 
  <td width="101">Buyer</td> 
	 <td width="181"><input class="bor" name="buyer" value="" type="text"></td> 
    <td width="101">Purchase Price</td> 
	 <td width="174"><input class="bor" name="purchase_price" value="" type="text"></td> 
  </tr> 
 
 
   <tr> 
    <td colspan="4" style="border-bottom: 1px solid rgb(156, 167, 182); padding-bottom: 10px;"><strong>Email Address to receive auto note entries</strong></td> 
	 </tr> 
 
 
 <tr> 
  <td width="101">Buyer Agent</td> 
	 <td width="181"><input class="bor" name="buyer_agent_email" value="" type="text"></td> 
    <td width="101">Seller's Email</td> 
	 <td width="174"><input class="bor" name="seller_email" value="" type="text"></td> 
  </tr> 
 
   <tr> 
  <td width="101">Buyer</td> 
	 <td width="181"><input class="bor" name="buyer_email2" value="" type="text"></td> 
    <td width="101">Escrow Officer</td> 
	 <td width="174"><input class="bor" name="escrow_officer" value="" type="text"></td> 
  </tr> 
 
   <tr> 
  <td width="101">Buyers Lender</td> 
	 <td width="181"><input class="bor" name="buyers_lender_email" value="" type="text"></td> 
    <td width="101">Negotiator Email 1</td> 
	 <td width="174"><input class="bor" name="negotiator_email_1" value="" type="text"></td> 
  </tr> 
   <tr> 
     <td style="border-bottom: 1px solid rgb(156, 167, 182); padding-bottom: 10px;">Negotiator Email 2</td> 
     <td style="border-bottom: 1px solid rgb(156, 167, 182); padding-bottom: 10px;"><input class="bor" name="negotiator_email_2" value="" type="text" /></td> 
     <td style="border-bottom: 1px solid rgb(156, 167, 182); padding-bottom: 10px;">Negotiator Email 3</td> 
     <td style="border-bottom: 1px solid rgb(156, 167, 182); padding-bottom: 10px;"><input class="bor" name="negotiator_email_3" value="" type="text" /></td> 
   </tr> 

   <tr> 
     <td ><input type="submit" name="submit_mortgage" value="Submit" /></td> 
     <td ></td> 
     <td ></td> 
     <td ></td> 
   </tr> 

	 
  
  </tbody>
  </table></form></div>
  <?php 
  if(isset($_POST['submit_mortgage']) && $_POST['submit_mortgage']=='Submit'){
  $username = $_POST['username'];
  $borrower_name = $_POST['borrower_name'];
  $phone_no1 = $_POST['phone_no1'];
  $lastsocial = $_POST['lastsocial'];
  $email = $_POST['email'];
  $propertyaddress = $_POST['propertyaddress'];
  $street_name = $_POST['street_name'];
  $mailingaddress = $_POST['mailingaddress'];
  $buyer_agent = $_POST['buyer_agent'];
  $phone_no2 = $_POST['phone_no2'];
  $buyer = $_POST['buyer'];
  $purchase_price = $_POST['purchase_price'];
  $buyer_agent_email = $_POST['buyer_agent_email'];
  $seller_email = $_POST['seller_email'];
  $buyer_email2 = $_POST['buyer_email2'];
  $escrow_officer = $_POST['escrow_officer'];
  $buyers_lender_email = $_POST['buyers_lender_email'];
  $negotiator_email_1 = $_POST['negotiator_email_1'];
  $negotiator_email_2 = $_POST['negotiator_email_2'];
  $negotiator_email_3 = $_POST['negotiator_email_3'];
  
  
$user_id = username_exists( $username );
if ( !$user_id ) {
	$random_password = wp_generate_password( 12, false );
	$user_id = wp_create_user( $username, $random_password, $email );

  global $wpdb;
  $insert_data = $wpdb->insert( $wpdb->prefix.'rep_mortgage', array( 
  'borrower' => $borrower_name,
  'phone' => $phone_no1,
  'last_4_of_social' => $lastsocial,
  'email' => $email,
  'property_address' => $propertyaddress,
  'street_name' => $street_name,
  'mailing_address' => $mailingaddress,
  'buyers_agent' => $buyer_agent,
  'phone_no' => $phone_no2,
  'buyer' => $buyer,
  'purchase_price' => $purchase_price,
  'buyer_agent' => $buyer_agent_email,
  'seller_email' => $seller_email,
  'buyer2' => $buyer_email2,
  'escrow_officer' => $escrow_officer,
  'buyers_lender' => $buyers_lender_email,
  'nemail1' => $negotiator_email_1,
  'nemail2' => $negotiator_email_2,
  'nemail3' => $negotiator_email_3,
  'username' => $username

  ), array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ) );	
	echo "<div id='message' class=\"updated\" style='width:150px;'>Added Successfully</div>";
} else {
	 echo "<div class='error' style='width:150px;'>Duplicate Username</div>";
}

  } 
  ?>

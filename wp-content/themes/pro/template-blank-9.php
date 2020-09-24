<?php

// =============================================================================
// TEMPLATE NAME: Blank - No Container | Header, Footers
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "template-blank-4.php," where you'll be able to
// find the appropriate output.
// =============================================================================

?>



<?php get_header(); ?>

<center>

<!-- CSS -->
<style>
.myForm {
width: 100% !important;
font-size: 1.2em;
width: 70em;
padding: 1em;

}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 1.0em;
font-weight: normal;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select
 {
display: block;
width: 98%;
border: 1px solid #ccc;

font-size: 0.9em;
padding: 0.3em;
}
.myForm textarea{
	width: 99%;
}

.myForm textarea {
height: 100px;
}

.myForm button {
padding: 1em;
border-radius: 0.7em;
background: #eee;
border: none;
font-weight: bold;
margin-top: 1em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}
.error
{
	color:red;
}


.form-row {
    display: flex;
}
.col1 {
    flex-basis: 100%;
}
.col2 {
    flex-basis: 100%;
}
.col3 {
    flex-basis: 100%;
}
button.form-btn {
    background: rgb(92,183,217);
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
}
</style>

</head>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<?php
	if(isset($_POST['submit'])){
		global $wpdb;
		$investigation_table = "wp_investigations";
		  $wpdb->insert( 
			$investigation_table, 
			array( 
				'business_name' => $_POST['business_name'],
				'contact_name' => $_POST['contact_name'],
				'phone' => $_POST['phone'],
				'fax' => $_POST['fax'],
				'postal_address' => $_POST['postal_address'],
				'physical_address' => $_POST['physical_address'],
				'physical_mobile' => $_POST['physical_mobile'],
				'email_id' => $_POST['email_id'],
				'business_description' => $_POST['business_description'],
				'debtor_company_name' => $_POST['debtor_company_name'],
				'legal_entity' => $_POST['legal_entity'],
				'personal_guarantor_name' => $_POST['personal_guarantor_name'],
				'date_of_birth' => $_POST['date_of_birth'],
				'debtor_physical_address' => $_POST['debtor_physical_address'],
				'post_address' => $_POST['post_address'],
				'debtor_phone_number' => $_POST['debtor_phone_number'],
				'debtor_fax' => $_POST['debtor_fax'],
				'debtor_mobile' => $_POST['debtor_mobile'],
				'debtor_email' => $_POST['debtor_email'],
				'amount_of_debt' => $_POST['amount_of_debt'],
				'date_debt_range' => $_POST['date_debt_range'],
				'cost_agreement' => $_POST['cost_agreement'],
				'guarantee_account' => $_POST['guarantee_account'],
				'description_of_debt' => $_POST['description_of_debt'],
				'additional_descriptiom' => $_POST['additional_descriptiom'],
				'term_of_trade' => $_POST['term_of_trade'],
			)
		  );
		  $lastid = $wpdb->insert_id;
		  $success = '';
		  $error = '';
		  if(!empty($lastid)){
			  $success = $lastid;
		  }else{
			$error = 0;
		  }
	}
?>
<script>
jQuery(document).ready(function(){
	jQuery("#investigations").validate({
	  rules: {
		business_name: {required:true},
		contact_name:{required:true},
		phone:{required:true},
		fax:{required:true},
		postal_address:{required:true},
		physical_mobile:{required:true},
		email_id:{required:true,email:true},
		business_description:{required:true},
		debtor_company_name:{required:true},
		personal_guarantor_name:{required:true},
		date_of_birth:{required:true},
		debtor_physical_address:{required:true},
		debtor_phone_number:{required:true},
		debtor_fax:{required:true},
		debtor_mobile:{required:true},
		debtor_email:{required:true,email:true},
		amount_of_debt:{required:true},
		date_debt_range:{required:true},
		description_of_debt:{required:true},
		additional_descriptiom:{required:true},
		term_of_trade:{required:true}
	  },
	  messages: {
		
	  },
	  submitHandler: function(form) {
		form.submit();
	  }
	});
});
</script>
<body>
<?php
	if(isset($success)){?>
		<h3>Form submit successfully</h3>
		<button class="form-btn">Download PDF</button>
		<button class="form-btn">Print</button>
	<?php }
?>
<form class="myForm" method="post" action="/demo" id="investigations">

<fieldset>
	<legend>Your Details:</legend>
		<div class="form-row">
			<div class="col1">
				Business Name: <input type="text" name="business_name"/> 
				Phone: <input type="text" name="phone"/> 
			</div>
			<div class="col2">
				Contact Name: <input type="text" name="contact_name"/>
				Fax: <input type="text" name="fax"/>
			</div>
		</div>
	
	Postal Address : <textarea cols="50" rows="4" name="postal_address"> </textarea>
	Physical Address: <input checked="checked" name="physical_address" type="radio" value="Physical Address" /> 
	Same as Above: <input name="physical_address" type="radio" value="Same as Above" /> 
	Enter Physical Address 

		<div class="form-row">
			<div class="col1">
				Mobile: <input type="text" name="physical_mobile"/> 
			</div>
			<div class="col2">
				Email: <input type="text" name="email_id" />
			</div>
		</div>
	
	Brief Description of Business: <textarea cols="50" rows="4" name="business_description"> </textarea>
</fieldset>

<fieldset>

	<legend>Debtor Details:</legend>

		<div class="form-row">
			<div class="col1">
				Debtor Company Name: <input type="text" name="debtor_company_name"/>
			</div>
			
			<div class="col2">
				Debtor Contact or Personal Guarantor (Full Name): <input type="text" name="personal_guarantor_name" />
			</div>
		</div>



				Legal Entity of Debtor Company:
				<input checked name="legal_entity" type="radio" value="Limited Company" /> Limited Company
				<input name="legal_entity" type="radio" value="Trust" /> Trust
				<input name="legal_entity" type="radio" value="Partnership" /> Partnership
				<input name="legal_entity" type="radio" value="Sole Trader" /> Sole Trader
				<input name="legal_entity" type="radio" value="Individual" /> Individual
	

	<div class="form-row">
			<div class="col1">
				Debtor Date of Birth (If Known): <input type="text" name="date_of_birth" />
			</div>
			
			<div class="col2">
				Debtor Fax: <input type="text" name="debtor_fax" /> 
			</div>
		</div>

	


	
	Debtor Physical Address: <textarea cols="50" rows="4" name="debtor_physical_address"> </textarea>
	Postal Address:<input checked="checked" name="post_address" type="radio" value="Postal Address" /> 
	Same as Above<input name="post_address" type="radio" value="Same as Above" /> 
	Enter Postal Address Debtor Phone Number: <input type="text" name="debtor_phone_number"/> 
	
	
	

	<div class="form-row">
			<div class="col1">
				Debtor Mobile: <input type="text" name="debtor_mobile"/>
			</div>
			
			<div class="col2">
				Debtor Email: <input type="text" name="debtor_email" />
			</div>
		</div>


</fieldset>

<fieldset>

	<legend>Debt Details:</legend>
<div class="form-row">
			<div class="col1">
				Amount of Debt(Contact us for clarification if necessary): <input type="text" name="amount_of_debt" value="">
			</div>
			
			<div class="col2">
				Date Debt Due (or Range): <input type="text" name="date_debt_range">
			</div>
		</div>
	
	

	Are you covered by a collection costs agreement?:<input type="radio" checked name="cost_agreement" value="Yes">Yes<input type="radio" name="cost_agreement" value="No">No

	Is there a Personal Guarantee on this account?:<input type="radio" checked name="guarantee_account" value="Yes">Yes<input type="radio" name="guarantee_account" value="No">No

	
	
<div class="form-row">
			<div class="col1">
				Description of Debt: <textarea cols="50" rows="4" name="description_of_debt"></textarea>
			</div>
			
			<div class="col2">
				Additional Information: <textarea cols="50" rows="4" name="additional_descriptiom"></textarea>
			</div>
		</div>
</fieldset>

Submitting this form is considered accepting our <a href="" style="color: #000 !important;">Terms of Trade </a><input type="checkbox" name="term_of_trade" value="Yes">
<input type="submit" name="submit" value="Submit" />
</form>

<!-- Default form register --></center>

<?php get_footer(); ?>
<?php x_get_view( x_get_stack(), 'template', 'blank-4' ); ?>


<link rel="stylesheet" href="<?php echo base_url();?>assets/css/registration.css">

</head>
<body>
		<center>
	<!--	<h1><font face="Agency FB">CHAITANYA BHARATHI INSTITUTE OF TECHNOLOGY</font></h1>-->
		<h3> <font face="Calibiri">Faculty Registration</font></h3>
	<?php echo form_open('home/registration',array('class'=>'form-registration','role'=>'form')); ?>
		
	
				<div id="wrap">
				<div class="registration-form">
				<br/><br/>
					<label>User ID</label><br/>
					<input type="text" name="user_id" id="user_id" class="form-control" value="<?= $this->input->post('user_id') ?>" data-bv-notempty="true" data-bv-notempty-message="UserID is required and cannot be empty">
				<br/><br/>

				<label>Username</label><br/>
				<input type="text" name="username" id="username" class="form-control" value="<?= $this->input->post('username') ?>" data-bv-notempty="true" data-bv-notempty-message="username is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z ]+$" data-bv-regexp-message="First Name should not contain numbers and special characters.">
				<br/><br/>

				<label>Mail ID</label><br/>
				<input type="email" name="email" id="email" class="form-control" value="<?= $this->input->post('email') ?>" data-bv-notempty="true" data-bv-notempty-message="Email is required and cannot be empty" data-bv-emailaddress="true" data-bv-emailaddress-message=" " data-bv-regexp="true" data-bv-regexp-regexp="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$" data-bv-regexp-message="Please enter a valid email address.">
				<br/><br/>
				
				<label>Phone Number</label><br/>
				<input id="phone" type="tel" name="phone" maxlength="15" class="form-control" value="<?= $this->input->post('phone') ?>" data-bv-notempty="true" data-bv-notempty-message="Phone Number is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[0-9]+$" data-bv-regexp-message="Phone Number can only consist of numbers" data-bv-stringlength="true" data-bv-stringlength-min="10" data-bv-stringlength-max="15" data-bv-stringlength-message="Invalid Phone number"/>	
				<br/><br/>

				<label>Password</label><br/>
				<input type="password" placeholder=""/>	
				<br/><br/>
		
				<label>Confirm Password</label><br/>
				<input type="password" placeholder=""/>	
				<br/><br/>

				<label>Department</label><br/> 	
				<select >
				<option value="1">--SELECT--</option>
				<option value="2">CSE</option>
				<option value="3">IT</option>
				</select> 	
				<br/><br/>

				<button class ="btn btn-lg btn-primary btn-block" type="submit" >submit</button>

				
			<?php echo form_close(); ?>
			
			</center>
		</div>



</body>

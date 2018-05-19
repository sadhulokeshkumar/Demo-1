<?php $this->load->view('templates/header'); ?>

<br>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>


<style>
	body{
		background: 
	}
	</style>
<section class="container">
<h2 class="text-center">Create <strong>Account</strong></h2>
<style>
	.form-control {
    padding-right: 50px;
}
	</style>
<hr class="half-margins"/>
<br>
<?php echo form_open('',array('class' => 'registerForm', 'data-bv-message' => 'This value is not valid', 'data-bv-feedbackicons-valid' => 'glyphicon glyphicon-ok', 'data-bv-feedbackicons-invalid' => 'glyphicon glyphicon-remove', 'data-bv-feedbackicons-validating' => 'glyphicon glyphicon-refresh')); ?>
<?php if ($reg_validation_errors) { ?>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-danger"><center><i class="fa fa-frown-o"></i>Registration Failed!!</center>
                    <ul>
                        <?php echo validation_errors('<li>', '</li>'); ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>

<div class="row">
	<div class="col-md-10 col-md-offset-1 col-sm-12 ">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
						<label>First Name*</label>
						<input type="text" name="firstname" id="firstname" class="form-control" value="<?= $this->input->post('firstname') ?>" data-bv-notempty="true" data-bv-notempty-message="Firstname is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z ]+$" data-bv-regexp-message="First Name should not contain numbers and special characters.">
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
					<label>Last Name*</label>
					<input type="text" name="lastname" id="lastname" class="form-control"
							value="<?= $this->input->post('lastname') ?>" data-bv-notempty="true" data-bv-notempty-message="Lastname is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z ]+$" data-bv-regexp-message="Last Name should not contain numbers and special characters.">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
					<label>Email Address*</label><br/>
					<input type="email" name="email" id="email" class="form-control" value="<?= $this->input->post('email') ?>" data-bv-notempty="true" data-bv-notempty-message="Email is required and cannot be empty" data-bv-emailaddress="true" data-bv-emailaddress-message=" " data-bv-regexp="true" data-bv-regexp-regexp="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$" data-bv-regexp-message="Please enter a valid email address.">
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
					<label>Mobile No.</label><br/>
					<input id="phone" type="tel" name="phone" maxlength="15" class="form-control" value="<?= $this->input->post('phone') ?>" data-bv-notempty="true" data-bv-notempty-message="Phone Number is required and cannot be empty" data-bv-regexp="true" data-bv-regexp-regexp="^[0-9]+$" data-bv-regexp-message="Phone Number can only consist of numbers" data-bv-stringlength="true" data-bv-stringlength-min="10" data-bv-stringlength-max="15" data-bv-stringlength-message="Invalid Phone number"/>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
					<label>Department*</label><br/>
					<select class="form-control" id="department" required="required" class="form-control " name="department">
						<option disabled="disabled" selected="selected">Select</option>
						<?php
							foreach($departments as $a){
								echo "<option value='".$a['DepartmentID']."'";
								if($this->input->post('department') && $this->input->post('department') == $a['DepartmentID']) echo " selected ";
								echo ">".$a['Department']."</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Gender*</label>
						<select name="gender" id="gender" class="form-control " required="required">
							<option disabled="disabled" selected="selected">Select</option>
							<option
								value="M" <?php echo ($this->input->post('gender') == 'M') ? 'selected' : ''; ?>>
								Male
							</option>
							<option
								value="F" <?php echo ($this->input->post('gender') == 'F') ? 'selected' : ''; ?>>
								Female
							</option>
				<option
					value="O" <?php echo ($this->input->post('gender') == 'O') ? 'selected' : ''; ?>>
					Other
				</option>
						</select>
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Password* (Minimum 8 characters)</label>
						<input type="password" name="password" id="password" required="required"
								class="form-control"
							data-bv-notempty="true"
				data-bv-notempty-message="The password is required and cannot be empty"   
								data-bv-identical="true"
				data-bv-identical-field="confirmPassword"
				data-bv-identical-message="The password and its confirm are not the same"

				data-bv-different="true"
				data-bv-different-field="username"
				data-bv-different-message="The password cannot be the same as username"
				data-bv-stringlength="true" data-bv-stringlength-min="8"
				data-bv-stringlength-message="Password must be of minimum 8 characters"
				>
					</div>
				</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label>Confirm Password*</label>
							<input type="password" name="password_re" id="password_re"
								class="form-control"
								data-bv-notempty="true"
					data-bv-notempty-message="The confirm password is required and cannot be empty"

					data-bv-identical="true"
					data-bv-identical-field="password"
					data-bv-identical-message="The password and its confirm are not the same"

					data-bv-different="true"
					data-bv-different-field="username"
					data-bv-different-message="The password cannot be the same as username" 
					data-bv-stringlength="true" data-bv-stringlength-min="8"
					data-bv-stringlength-message="Confirm password must be of minimum 8 characters">    
						</div>
					</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<button type="submit"style=" position:relative; left:300px;"class="btn btn-primary btn-block btn-lg pull-right" name="submit_user">
					Register
				</button>
			</div>
		</div>			
	</div>
	
	</div>
	
</section>	
<?php echo form_close(); ?>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

<script>
$(document).ready(function(){
	$('.registerForm').bootstrapValidator();
});
</script>
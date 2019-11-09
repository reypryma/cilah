<h2>Register Form</h2>
<?php
//class is css class,add form in autoload 'url','form'
$attributes = array('id' => 'register_form', 'class' => 'form-horizontal');
?>
<!--HOW this happen without $this??-->
<?php echo validation_errors("<p class='bg-danger'>");?>
<?php
//attribut pass info form, id, class declared above
echo form_open('users/register', $attributes);
?>

<div class="form-group">
	<?php echo form_label('First Name') ?>
	<br>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'first_name',
		'placeholder' => 'Enter First Name',
		'value' => set_value('first_name')
	)
	?>
	<!--	pass input-->
 	<?php echo form_input($data) ?>
</div>

<div class="form-group">
	<?php echo form_label('Last Name') ?>
	<br>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'last_name',
		'placeholder' => 'Enter Last Name',
		'value' => set_value('last_name')
	)
	?>
	<!--	pass input-->
	<?php echo form_input($data) ?>
</div>

<div class="form-group">
	<?php echo form_label('Email') ?>
	<br>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'email',
		'placeholder' => 'Enter Email',
		'value' => set_value('email')
	)
	?>
	<!--	pass input-->
	<?php echo form_input($data) ?>
</div>

<div class="form-group">
	<?php echo form_label('Username') ?>
	<br>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'username',
		'placeholder' => 'Enter username',
		'value' => set_value('username')
	)
	?>
	<!--	pass input-->
	<?php echo form_input($data) ?>
</div>
<div class="form-group">
	<?php echo form_label('Password') ?>
	<br>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'password',
		'placeholder' => 'Enter Password'
	)
	?>
	<!--	pass input-->
	<!--	built in form password-->
	<?php echo form_password($data) ?>
</div>
<div class="form-group">
	<?php echo form_label('Confirm Password') ?>
	<br>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'confirm_password',
		'placeholder' => 'Confirm Password'
	)
	?>
	<?php echo form_password($data) ?>
</div>
<div class="form-group">
	<?php
	$data = array(
		'class' => 'btn btn-primary',
		'name' => 'submit',
		'value' => 'Register'
	);
	?>
	<!--	dont forget to echo-->
	<?php echo form_submit($data) ?>
</div>
<?php
echo form_close();
?>


<?php if ($this->session->userdata('logged_in')): ?>
	<h2>Logout</h2>
	<?php echo form_open('users/logout'); ?>
	<?php if ($this->session->userdata('username')):?>
		<?php echo "logged as ". $this->session->userdata('username')?>
	<?php endif;?>

	<?php
	$data = array(
		'class' => 'btn btn-primary',
		'name' => 'submit',
		'value' => 'Logout'
	)
	?>
	<br>
	<?php echo form_submit($data) ?>
	<?php form_close() ?>

<?php else: ?>
	<h2>Login User</h2>
	<?php
	//class is css class,add form in autoload 'url','form'
	$attributes = array('id' => 'login_form', 'class' => 'form-horizontal');
	?>
	<?php if ($this->session->flashdata('errors')): ?>
		<?php echo $this->session->flashdata('errors'); ?>
	<?php endif; ?>

	<?php
//attribut pass info form, id, class declared above
	echo form_open('users/login', $attributes);
	?>


	<div class="form-group">
		<?php echo form_label('Username') ?>
		<br>
		<?php
		$data = array(
			'class' => 'form-control',
			'name' => 'username',
			'placeholder' => 'Enter username'
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
			'value' => 'Login'
		);
		?>
		<!--	dont forget to echo-->
		<?php echo form_submit($data) ?>
	</div>
	<?php
	echo form_close();
	?>
<?php endif; ?>

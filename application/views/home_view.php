<p class="bg-success">
	<?php if ($this->session->flashdata('login_success')):?>
	<?php echo $this->session->flashdata('login_success')?>
	<?php endif;?>

	<?php if ($this->session->flashdata('user_registered')):?>
		<?php echo $this->session->flashdata('user_registered')?>
	<?php endif;?>
</p>

<p class="bg-danger">
	<?php if ($this->session->flashdata('login_failed')):?>
		<?php echo $this->session->flashdata('login_failed')?>
	<?php endif;?>
</p>

<h1>This is a home view</h1>

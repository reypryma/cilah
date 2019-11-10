<div class="col-xs-9">
	<!--Get from projects controller $data['project_data'] = $this->projects_model->get_project($project_id);-->
	<h1 class="text-primary"><?php echo $project_data->project_name; ?></h1>
	<p>Date Created: <?php echo $project_data->date_created; ?></p>
	<h3>Description</h3>
	<p><?php echo $project_data->project_body?></p>
</div>
<div class="col-xs-3 pull-right">
	<ul class="list-group">
		<li class="list-group-item list-group-item-heading"><h4 class="text-primary">Project Actions</h4></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>/tasks/create/">Create Task</a></li>
		<li class="list-group-item"><a href="">Edit Task</a></li>
		<li class="list-group-item"><a href="">Delete Task</a></li>
	</ul>
</div>


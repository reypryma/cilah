<h1>Projects</h1>
<table class="table table-responsive table-hover">
	<a href="<?php echo base_url();?>projects/create" class="btn btn-primary pull-right">Create Project</a>
	<thead>
	<tr>
		<th>Project Name</th>
		<th>Project Body</th>
	</tr>
	</thead>
	<tbody>
	<!--	projects model $data-->
	<?php foreach ($projects as $project): ?>
		<!--	Dont forget mark the separator html and php with . -->
		<tr>
			<!--<td><a href="<?php /*echo base_url().'projects/display'*/?>"><?php /*$project->project_name*/?></a></td>-->
			<?php echo "<td><a href='" .base_url()."projects/display/".$project->id."'>".$project->project_name . "</a></td>"; ?>
			<?php echo "<td>" . $project->project_body . "</td>"; ?>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<!-- 
	* File name: Views/Backend/user.php
	* Loai file: file view trong mo hinh MVC
 -->
<div class="col-md-12">
	<div style="margin-bottom:5px;">
		<a href="index.php?area=admin&controller=user&action=add" class="btn btn-primary">Add user</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">List User</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th style="width:100px;"></th>
				</tr>
				<?php foreach($list_record as $rows): ?>
				<tr>
					<td><?php echo $rows->fullname; ?></td>
					<td><?php echo $rows->email; ?></td>
					<td style="text-align:center;">
						<a href="index.php?area=admin&controller=user&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
						<a href="index.php?area=admin&controller=user&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="page-item disabled"><a class="page-link" href="#">Trang</a></li>
				<?php for($i = 1; $i <= $num_page; $i++): ?>
				<li class="page-item"><a class="page-link" href="index.php?area=admin&controller=user&action=listUser&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
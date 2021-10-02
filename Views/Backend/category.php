<!-- 
	* File name: Views/Backend/category.php
	* Loai file: file view trong mo hinh MVC
 -->
<div class="col-md-12">
	<div style="margin-bottom:5px;">
		<a href="index.php?area=admin&controller=category&action=add" class="btn btn-primary">Add category</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">List category</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Name</th>
					<th style="width:100px;"></th>
				</tr>
				<?php foreach($list_record as $rows): ?>
				<tr>
					<td><?php echo $rows->name; ?></td>
					<td style="text-align:center;">
						<a href="index.php?area=admin&controller=category&action=edit&id=<?php echo $rows->category_id; ?>">Edit</a>&nbsp;
						<a href="index.php?area=admin&controller=category&action=delete&id=<?php echo $rows->category_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
				<li class="page-item"><a class="page-link" href="index.php?area=admin&controller=category&action=listcategory&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
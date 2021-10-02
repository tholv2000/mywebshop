<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=admin&controller=news&action=add" class="btn btn-primary">Add news</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List news</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Image</th>
                    <th>Title</th>
                    <th style="width: 100px;">Hot news</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($list_record as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->img != "" && file_exists("Assets/Upload/News/".$rows->img)): ?>
                            <img src="Assets/Upload/News/<?php echo $rows->img; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align: center;">
                        <?php if($rows->hotnews == 1): ?>
                        <span class="glyphicon glyphicon-check"></span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?area=admin&controller=news&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?area=admin&controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                <li class="page-item"><a class="page-link" href="index.php?area=admin&controller=news&action=listNews&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
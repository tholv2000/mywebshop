<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=admin&controller=ads&action=add" class="btn btn-primary">Add ads</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List ads</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">img</th>
                    <th>name</th>
                    <th style="width: 200px;">type</th>
                    
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($list_record as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->img != "" && file_exists("Assets/Upload/".$rows->type."/".$rows->img)): ?>
                            <img src="Assets/Upload/<?php echo $rows->type; ?>/<?php echo $rows->img; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                       <?php echo $rows->type; ?>
                    </td>
                    
                    
                    
                    <td style="text-align:center;">
                        <a href="index.php?area=admin&controller=ads&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?area=admin&controller=ads&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                <li class="page-item"><a class="page-link" href="index.php?area=admin&controller=ads&action=listAds&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
    
</div>
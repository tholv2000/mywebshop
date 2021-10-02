<div class="col-md-12">
    
    <div class="panel panel-primary">
        <div class="panel-heading">List message</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Name</th>
                    <th>Email</th>
                    <th style="width: 200px;">Subject</th>
                    <th style="width: 100px;">Message</th>
                    <th>Date</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($list_record as $rows): ?>
                <tr>
                    <td>
                       <?php echo $rows->name; ?> 
                    </td>
                    <td> <?php echo $rows->email; ?></td>
                    <td>
                        <?php echo $rows->subject; ?>
                    </td>
                    <td>
                        <?php echo $rows->message; ?>
                    </td>
                    <td>
                        <?php echo $rows->date; ?>
                    </td>
                    <td style="text-align:center;">
                        
                        <a href="index.php?area=admin&controller=message&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                <li class="page-item"><a class="page-link" href="index.php?area=admin&controller=message&action=listMessages&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
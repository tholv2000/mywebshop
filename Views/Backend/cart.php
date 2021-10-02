<div class="col-md-12">
    
    <div class="panel panel-primary">
        <div class="panel-heading">List order</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">order_id</th>
                    
                    <th style="width: 200px;">name</th>
                    <th style="width: 100px;">total</th>
                    <th>date</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($list_record as $rows): ?>
                <tr>
                    <td>
                       <?php echo $rows->order_id; ?>
                    </td>
                    <td>
                        <?php 
                            $conn = connection::getInstance();
                            $query=$conn->prepare("select * from tbl_order where $rows->order_id=order_id");
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            $query->execute();
                            $result = $query->fetch();

                            $query1 = $conn->prepare("select * from tbl_customer where $result->customer_id=customer_id");
                            $query1->setFetchMode(PDO::FETCH_OBJ);
                            $query1->execute();
                            $result1 = $query1->fetch();
                            
                         ?>
                         <?php echo $result1->name; ?>
                    </td>
                    <td>
                        <?php 
                            $conn=connection::getInstance();
                            $query = $conn->prepare("select * from tbl_order_detail where order_id=$rows->order_id");
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            $query->execute();
                            $result = $query->fetchAll();
                            $total = 0;
                            foreach($result as $rows){
                                $total += $rows->price;
                            }
                         ?>
                        <?php echo $total; ?>
                    </td>
                    <td>
                        <?php 
                            $conn=connection::getInstance();
                            $query = $conn->prepare("select * from tbl_order where order_id=$rows->order_id");
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            $query->execute();
                            $result = $query->fetch();
                        ?>
                        <?php echo $result->date; ?>
                    </td>
                    
                    <td style="text-align:center;">
                        
                        <a href="index.php?area=admin&controller=cart&action=delete&id=<?php echo $rows->order_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                <li class="page-item"><a class="page-link" href="index.php?area=admin&controller=cart&action=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
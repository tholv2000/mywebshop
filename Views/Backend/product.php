<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=admin&controller=product&action=add" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List product</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Image</th>
                    <th>Title</th>
                    <th style="width: 200px;">Category</th>
                    <th style="width: 100px;">Hot product</th>
                    <th>News</th>
                    <th style="width: 100px;">Price</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($list_record as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->img != "" && file_exists("Assets/Upload/Product/".$rows->img)): ?>
                            <img src="Assets/Upload/Product/<?php echo $rows->img; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php 
                            //lay doi tuong ket noi
                            $db = connection::getInstance();
                            //------
                            //PDO
                            //truy van de lay ve mot ban ghi trong table tbl_category
                            //chuan bi truy van
                            $query = $db->prepare("select name from tbl_category where category_id=:id");
                            //set kieu duyet phan tu
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            //thuc thi truy van -> truyen tham so vao
                            $query->execute(array("id"=>$rows->category_id));
                            //lay mot ban ghi
                            $category = $query->fetch();
                            //------
                            echo isset($category->name)?$category->name:"";
                         ?>
                    </td>
                    
                    <td style="text-align: center;">
                        <?php if($rows->hotproduct == 1): ?>
                        <span class="glyphicon glyphicon-check"></span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if($rows->new == 1): ?>
                        <span class="glyphicon glyphicon-check"></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php  echo number_format($rows->price); ?>₫
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?area=admin&controller=product&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?area=admin&controller=product&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
            <li class="page-item"><a class="page-link" href="index.php?area=admin&controller=product&action=listProduct&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
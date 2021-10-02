   <div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit ads</div>
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Type</div>
                <div class="col-md-10">
                    <select name="ads_id" class="form-control" style="width: 300px;">
                    <?php 
                        //lay bien ket noi csdl
                        $db = connection::getInstance(); //core/connection.php
                        //chuan bi truy van
                        $result = $db->prepare("select * from tbl_type_ads");
                        //set kieu lay du lieu
                        $result->setFetchMode(PDO::FETCH_OBJ);
                        //thuc thi truy van
                        $result->execute();
                        //duyet cac gia tri gan vao bien array
                        $arr = $result->fetchAll();
                     ?>
                     <?php foreach($arr as $rows): ?>
                        <option <?php if(isset($record->type) && $record->type == $rows->type): ?> selected <?php endif; ?> value="<?php echo $rows->type; ?>"><?php echo $rows->type; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
           
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Upload image</div>
                <div class="col-md-10">
                    <input type="file" name="img">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>
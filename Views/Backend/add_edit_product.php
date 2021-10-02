<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit products</div>
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
                <div class="col-md-2">Price</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->price)?$record->price:""; ?>" name="price" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <select name="category_id" class="form-control" style="width: 300px;">
                    <?php 
                        //lay bien ket noi csdl
                        $db = connection::getInstance(); //core/connection.php
                        //chuan bi truy van
                        $result = $db->prepare("select * from tbl_category");
                        //set kieu lay du lieu
                        $result->setFetchMode(PDO::FETCH_OBJ);
                        //thuc thi truy van
                        $result->execute();
                        //duyet cac gia tri gan vao bien array
                        $arr = $result->fetchAll();
                     ?>
                     <?php foreach($arr as $rows): ?>
                        <option <?php if(isset($record->category_id) && $record->category_id == $rows->category_id): ?> selected <?php endif; ?> value="<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Descripition</div>
                <div class="col-md-10">
                    <textarea name="description" id="description">
                        <?php echo isset($record->description)?$record->description:""; ?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Content</div>
                <div class="col-md-10">
                    <textarea name="content" id="content">
                         <?php echo isset($record->content)?$record->content:""; ?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("content");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->hotproduct) && $record->hotproduct == 1): ?> checked <?php endif; ?> name="hotproduct" id="hotnews"> <label for="hotnews">Hot product</label>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->new) && $record->new == 1): ?> checked <?php endif; ?> name="newproduct" id="hotnews"> <label for="hotnews">New</label>
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
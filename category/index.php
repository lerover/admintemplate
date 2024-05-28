<?php
    $stmt = $con->prepare("SELECT * From categories");
    $stmt->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<!-- Content Row -->
             
                <div class="row">
                    <div class="card shadow mb-4 col-md-12">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            <a href="admin.php?page=category-create" class='btn btn-primary'>+ Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Actions</th>                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            foreach($categories as $category):
                                        ?>
                                        <tr>
                                            <td><?php echo $category->id?></td>
                                            <td><?php echo $category->name?></td>
                                            <td>
                                                <a href="" class='btn btn-success btn-sm'>Edit</a>
                                                <a href="" class='btn btn-danger btn-sm'>Delete</a>
                                            </td>
                                            
                                        </tr> 
                                        <?php
                                            endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>


<?php
    if(isset($_REQUEST['btnsubmit'])){
        $name = $_REQUEST['name'];
        
        if($name !== ''){
            $stmt = $con->prepare("INSERT INTO categories(name) VALUES('$name')");
            $stmt->execute();
        }
    }
?>
    <!-- Content Row -->
                <div class="row">
                    <div class='col-md-12'>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Category Creation Form</h6>
                            <a href="admin.php?page=category" class='btn btn-primary'>< Back</a>
                        </div>
                        <div class="card-body">

                            <form action="" method='post'>

                                <?php
                                    if(isset($_REQUEST['name'])):
                                ?>
                                <div class='d-flex justify-content-center align-item-center '>
                                    
                                        <i class='fa-solid fa-circle-check text-success d-block mr-2 mt-1'></i>
                                        <p class='text-success'>Your name successfully added!</p>
                                    
                                </div>
                                <?php
                                    endif;
                                ?>

                                <?php
                                    if(!isset($_REQUEST['name'])):
                                ?>
                                <div class="mb-2">
                                    <label for="">Name</label>
                                    <input type="text" name='name' class="form-control" required>
                                </div>

                                <button name='btnsubmit' class="btn btn-primary">Submit</button>
                                <?php
                                    endif;
                                ?>
                            </form>

                        </div>
                    </div>
                    </div>

                </div>

<?php
ini_set('display_errors','1');
require_once('../config/db.php');
$stmt = $con->prepare('SELECT * FROM signinandup');
$stmt->execute();
$signin = $stmt->fetchAll(PDO::FETCH_OBJ);

// echo $signin[0]->email;

if(isset($_POST['submit'])){
    if($signin[0]->email===$_POST['username'] && $signin[0]->password===$_POST['password']){
        header('location:admin.php');
    };
};



?>

<?php
    require_once('./layout/header.php');
?>
<body>
    
    <div class='row' style='height:100vh'>
        <div class='container d-flex flex-column justify-content-around m-auto ct-background rounded p-4 col-md-6 border' style='background: color #f9f9f9;'>
            <h1>Log In To Your Admin Account</h1>

            <div>
                <form action='' method='post'>
                    <label class='input-label'>Username</label>
                    <input type='text' name='username' id='' class='form-control shadow-none mb-3' placeholder='username@gmail.com'/>

                    <label class='input-label'>Password</label>
                    <input type='password' name='password' id='' class='form-control shadow-none mb-3' placeholder='Enter Your Password'/>


                    <div class='row'>
                    <div class='col-12'>
                        <?php
                            if(isset($_POST['username']) && isset($_POST['password'])){
                                if($signin[0]->email!==$_POST['username'] || $signin[0]->password!==$_POST['password']){
                                    echo "<p class='text-danger'>Your username or password is wrong!!</p>";
                                }
                            };
                        ?>
                    </div>
                    <button type='submit' class='btn btn-primary col-md-12' name='submit'>Submit</button>
                </div>
                </form>
            </div>
    </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
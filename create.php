<?php
include 'header.php';
include 'config.php';
include 'Database.php';
?>
<?php 
$db = new Database();
if(isset($_POST['submit'])){
    $name  = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
    if($name == "" || $email == "" || $skill == ""){
        $error = "<div class='alert alert-danger'>Field Must not be Empty.</div>";
    }else{
        $query = "INSERT INTO tbl_user(name,email,Skill)values('$name','$email','$skill')";
        $create = $db->insert($query);
    }
}
?>
     
            <div class="panel-body">
           <div style="width:600px; margin:0 auto;">
           <?php
            if(isset($error)){
                echo $error;
            }   
            ?>
            <form action="" method="post">
                <div class="form-group">
                     <label for="name">Name</label>
                     <input placeholder="Enter Your Name" type="text" name="name" class="form-control">
                 </div> 
                 <div class="form-group">
                     <label for="email">Email</label>
                     <input placeholder="Enter Your Email" type="text" name="email" class="form-control">
                 </div> 
                 <div class="form-group">
                     <label for="password">Skill</label>
                     <input placeholder="Enter Your Skill" type="text" name="skill" class="form-control">
                 </div>
                 <button class="btn btn-success" name="submit" type="submit">Submit</button> 
                 <input class="btn btn-danger" type="reset" name="" value="Cancel">
                 <a class="btn btn-info" href="index.php">Go Back</a>
              </form>
                   
              </div>
       </div>
       
<?php
include 'footer.php';
?>
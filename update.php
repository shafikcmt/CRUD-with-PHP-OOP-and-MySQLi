<?php
include 'header.php';
include 'config.php';
include 'Database.php';
?>
<?php 
$id = $_GET['id'];
$db = new Database();
$query = "SELECT * FROM tbl_user WHERE id=$id";
$getData = $db->select($query)->fetch_assoc();
if(isset($_POST['submit'])){
    $name  = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
    if($name == "" || $email == "" || $skill == ""){
        $error = "<div class='alert alert-danger'>Field Must not be Empty.</div>";
    }else{
        $query = "UPDATE tbl_user
        SET
        name = '$name',
        email = '$email',
        Skill = '$skill'
        WHERE id = $id";
        $update = $db->update($query);
    }
}
?>
    <?php
if(isset($_POST['delete'])){
    $query = "DELETE FROM tbl_user WHERE id =$id";
    $deleteData = $db->delete($query);
}
    ?>
     
            <div class="panel-body">
           <div style="width:600px; margin:0 auto;">
           <?php
            if(isset($error)){
                echo $error;
            }   
            ?>
            <form action="update.php?id=<?php echo $id; ?>" method="post">
                <div class="form-group">
                     <label for="name">Name</label>
                     <input value="<?php echo $getData['name'] ?>" type="text" name="name" class="form-control">
                 </div> 
                 <div class="form-group">
                     <label for="email">Email</label>
                     <input value="<?php echo $getData['email'] ?>" type="text" name="email" class="form-control">
                 </div> 
                 <div class="form-group">
                     <label for="password">Skill</label>
                     <input value="<?php echo $getData['Skill'] ?>" type="text" name="skill" class="form-control">
                 </div>
                 <button class="btn btn-success" name="submit" type="submit">Update</button> 
                 <input class="btn btn-danger" type="reset" name="" value="Cancel">
                 <a class="btn btn-info" href="index.php">Go Back</a>
              </form>
                  
              </div>
       </div>
       
<?php
include 'footer.php';
?>
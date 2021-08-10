<?php
include 'header.php';
include 'config.php';
include 'Database.php';
?>
<?php
$db = new Database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);
?>
            <div class="panel-body">
                 <?php
                if(isset($_GET['msg'])){
                    echo "<div class='alert alert-success'>".$_GET['msg']."</div>";  
                }
                ?>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th width="20%">Serial</th>
                        <th width="20%">Name</th>
                        <th width="20%">Email</th>
                        <th width="20%">Skill</th>
                        <th width="20%">Action</th>
                    </tr>
                        <?php if($read){ ?>
                        <?php 
                        $i=0;              
                        while($row = $read->fetch_assoc()){ 
                        $i++;
                        ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['Skill']; ?></td>
                        
                        <td>
                            <a class="btn btn-primary" href="update.php?id=">Edit</a>
                        </td>
                    </tr>
                      
                    <?php } ?>
                    <?php }else{ ?>
                    <p>Data is not Found!</p>
                    <?php } ?>
                </table>
                <a class="btn btn-primary" href="create.php">Create</a>  
            </div>
        </div>
       <?php
include 'footer.php';
?>
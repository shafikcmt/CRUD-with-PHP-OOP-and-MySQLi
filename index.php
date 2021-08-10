<?php
include 'header.php';

?>


            <div class="panel-body">
             
                <table class="table table-striped table-bordered">
                    <tr>
                        <th width="20%">Serial</th>
                        <th width="20%">Name</th>
                        <th width="20%">Email</th>
                        <th width="20%">Skill</th>
                        <th width="20%">Action</th>
                    </tr>
                  
                    <tr>
                        <td>Serial</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Action</td>
                        
                        <td>
                            <a class="btn btn-primary" href="update.php?id=">Edit</a>
                        </td>
                    </tr>
                    
                   
                    
                 
                  
                </table>
                
                            <a class="btn btn-primary" href="create.php">Create</a>
                      
            </div>
        </div>
       <?php
include 'footer.php';
?>
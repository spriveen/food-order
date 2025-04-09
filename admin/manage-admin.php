<?php include('partials/menu.php'); ?> 

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Document</title>
</head>
<body>
    
<!-- Main Content Section start -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        
    <br />
            <?php
             if(isset($_SESSION['add'])) //checking whether the session is set or not
             {
                echo $_SESSION['add']; //Displaying Session Message
                unset($_SESSION['add']); //removing the session message
                 
             }
                if(isset($_SESSION['delete'])) //checking whether the session is set or not
                {
                    echo $_SESSION['delete']; //Displaying Session Message
                    unset($_SESSION['delete']); //removing the session message
                }
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update']; //Displaying Session Message
                    unset($_SESSION['update']); //removing the session message
                }


            ?>
            <br><br ><br>

        <!-- Button to Add Admin -->
         <a href="add-admin.php" class="btn-primary">Add Admin</a>
         
        
        </br><br /><br />
        
        
         <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Actions</th>
            </tr>

            <?php
            //Query to Get all Admins
            $sql = "SELECT * FROM tbl_admin"; //Query to Get all Admins
            //Execute the Query
            $res = mysqli_query($conn, $sql);

            // Checked whe6her the query is executed or not
            if($res==TRUE)
            {
                // Count the rows to check whether we have data in database or not
                $count = mysqli_num_rows($res); //Function to get the no. of rows

                $sn=1; //Create a variable and assign the value as 1
               
                //Check the number of rows
                if($count>0)
                {
                    // We have data in database
                      while($row=mysqli_fetch_assoc($res))
                      {
                        //  Using while loop to get all the data from database
                        // And while loop will run as long as we have data in database

                        // Get the individual Data
                        $id = $row['id'];
                        $full_name = $row['full_name'];
                        $username = $row['username'];
                        // Display the values in our table
                        ?>
                         
                         <tr >
                <td><?php echo $sn++; ?></td>
                <td><?php echo $full_name;?></td>
                <td><?php echo $username ?></td>
                <td >
                 <a href=""class="btn-primary">Change Password</a>   
                <a href="<?php echo SITEURL;?>admin/updateadmin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                <a href="<?php echo SITEURL;?>admin/deleteadmin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                
                </td>
              </tr>
                        <?php

                      }
                }
                else
                {
                    // We do not have data in database
                }
            }
            ?>


            
        </table>
    </div>
</div>
<!-- Main Content Section End-->

<?php include('partials/footer.php'); ?>

</body>
</html>
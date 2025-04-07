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
        
    <br /><br />

        <!-- Button to Add Admin -->
         <a href="#" class="btn-primary">Add Admin</a>
         </br><br /><br />
        
        
         <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Actions</th>
            </tr>

            <tr >
                <td>1.</td>
                <td>Riveen Peanuka</td>
                <td>riveenpeanuka</td>
                <td >
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
                </td>

                <tr >
                <td>2.</td>
                <td>Riveen Peanuka</td>
                <td>riveenpeanuka</td>
                <td >
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
            <tr >
                <td>3.</td>
                <td>Riveen Peanuka</td>
                <td>riveenpeanuka</td>
                <td >
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
                </td>
        </table>
    </div>
</div>
<!-- Main Content Section End-->

<?php include('partials/footer.php'); ?>

</body>
</html>
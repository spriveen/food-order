<?php
// Include constants.php for SITEURL and DB connection
include('../config/constants.php');

// 1.get the ID of admin to be deleted
$id = $_GET['id'];

// 2. Create SQL query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//  Execute the query
$res = mysqli_query($conn, $sql);

//  Check whether the query executed successfully or not
if ($res ==true)
{
//   Quert Execurted Successfully and Admin Deleted
// echo "Admin Deleted Successfully";
// Create Session Variable to Display Message
$_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";


// Redirect to manage admin page
header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
//   Failed to Delete Admin
//  echo "Failed to Delete Admin";

$_SESSION['delete'] = "<div class='error'>Failed to delete admin. Try again later.</div>";

header('location:'.SITEURL.'admin/manage-admin.php');
}

// 3. Redirect to manage admin page with message




?>

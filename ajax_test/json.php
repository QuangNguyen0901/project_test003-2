<?php include('../includes/mysqli_connect.php'); ?>

<?php
$query = mysqli_query($conn,'select user_id,username from user ');

if (mysqli_num_rows($query)>0)
{
    while ($row = mysqli_fetch_array($query, MYSQL_ASSOC)){
        $result[] = array(
            'user_id' => $row['user_id'],
            'username' => $row['username']
        );
    }
}

die (json_encode($result));
?>
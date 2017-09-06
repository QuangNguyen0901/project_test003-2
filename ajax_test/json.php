<?php include('../includes/mysqli_connect.php'); ?>

<?php
$query = mysqli_query($conn,'select user_id,username from user ');

if (mysqli_num_rows($query)>0)
{
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        $result[] = array(
            'user_id_json' => $row['user_id'],
            'username_json' => $row['username']
        );
    }
}
//print_r($result);
print_r($row);
die (json_encode($result));
?>




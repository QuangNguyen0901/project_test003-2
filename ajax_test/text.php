<?php include('../includes/mysqli_connect.php'); ?>

<?php
$query = mysqli_query($conn,'select user_id,username from user ');

if (mysqli_num_rows($query)>0)
{
    echo '<table border="1" cellspacing="0" cellpadding="10">';
    echo '<tr>';
    echo '<td>';
    echo 'ID';
    echo '</td>';
    echo '<td>';
    echo 'User Name';
    echo '</td>';
    echo '<tr>';
}

while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    echo '<tr>';
    echo '<td>';
    echo $row['user_id'];
    echo '</td>';
    echo '<td>';
    echo $row['username'];
    echo '</td>';
    echo '<tr>';
}
echo '</table>';
?>


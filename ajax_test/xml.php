<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="utf-8" ?>'; //Dinh nghia nay phai dat tren dau trang,chu y file include
?>

<?php include('../includes/mysqli_connect.php'); ?>
<?php
$query = mysqli_query($conn,'select user_id,username from user ');

echo '<root>';
if (mysqli_num_rows($query)>0)
{
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        echo '<items>';
            echo '<user_id>'.$row['user_id'].'</user_id>';
            echo '<username>'.$row['username'].'</username>';
        echo '</items>';
    }
}
echo '</root>';
?>
<?php
	include_once 'includes/db.inc.php';
?>
<html>
<head>
</head>
<body>
    <?php
    $sql = "SELECT * FROM games;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0)
    {
       while($row = mysqli_fetch_assoc($result))
       {
           echo $row['name'];
       }
    }
    ?>
</body>
</html>
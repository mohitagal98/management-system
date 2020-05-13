<?php
include 'include/db_config.php';

$query = "select * from baate order by id desc";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) :
    ?>
    <div class = "chat9-show">
        <span style="color:skyblue;"><?php echo $row['name'].": ";?></span>
        <span style="color:black;"><?php echo $row['msg'];?></span>
        <span style="color:blue;float:right;"><?php echo formatedate($row['date']);?></span>
    </div>
<?php endwhile;?>
<?php
$con=new mysqli('localhost','root','','sona');

if($con->connect_errno)
{
    echo $con->connect_error;
    die();
}
else
{
    echo "Database connected <br><hr>";
}

?>
<html>
<link rel="stylesheet" href="table.css"/>
<?php
if(isset($_POST['submit']))
{
    $regno=$_REQUEST['regno'];
    //$DOB=$_POST['DOB'];
    //$DOB=strval($DOB);
    $sql="select * from ads where regno=$regno";
    if($result=$con->query($sql))   
    {
        if($row=$result->fetch_object())
        {
            ?>
            <table>
            <tr>
            <th>Name</th>
            <th>RegNo</th>
            <th>DOB</th>
            <th>CIE-1</th>
            <th>CIE-2</th>
            <th>CIE-3</th>
            <th>M1</th>
            <th>M2</th>
            <th>M3</th>
            <th>Assignment</th>
            <th>Seminar</th>
            <th>Attendance</th>
            <th>Internal-mark</th>
            </tr>
            <tr>
            <td><?php echo $row->name;  ?></td>
            <td><?php echo $row->regno; ?></td>
            <td><?php echo $row->dob; ?></td>
            <td><?php echo $row->t1; ?></td>
            <td><?php echo $row->t2; ?></td>
            <td><?php echo $row->t3; ?></td>
            <td><?php echo $row->m1; ?></td>
            <td><?php echo $row->m2; ?></td>
            <td><?php echo $row->m3; ?></td>
            <td><?php echo $row->assignment; ?></td>
            <td><?php echo $row->seminar; ?></td>
            <td><?php echo $row->attendance; ?></td>
            <td><?php echo $row->internalmark; ?></td>
            </tr>
            </table>
            <?php
        }
    }
    else
    {
        echo "data needed";
    }
}
else{
    echo "PLease Enter all the Data";
}
?>
</html>
<?php
$con=new mysqli('localhost','root','','sona');
// Check connection
if ($con->connect_error) {
  die("Connection failed: ");
}

//if(isset($_REQUEST['regno']))
//{
    session_start();
    $_SESSION[$regno]
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
        <?php }?>
//$one= echo $regno;
//$regno=include('index');

/*$sql = "SELECT * FROM ads WHERE regno=$regno";
$result = $con->query($sql);
if ($result->num_rows) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
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
            </table><?php
  }
//} else {
  echo "DATA NEEDED";
//}
$con->close();
?>
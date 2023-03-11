<?php
$con=new mysqli('localhost','root','','sona');
// Check connection
if ($con->connect_error) {
  die("Connection failed: ");
}
session_start();
$regno=$_SESSION["regnoo"];
$sql="select * from dl where regno=$regno";
    if($result=$con->query($sql))   
    {
        if($row=$result->fetch_object())
        {
            ?>
            <html>
                <head>
            <style>
                table,th,td,tr{
                    border: 1px solid black;
                    width: 100%;
                    padding:30px;
                    text-align: center;
                    border-collapse: collapse;
                    /*margin: 10px;*/
                    align-items: center;
                }
            </style>
                </head>
                <body>
            <table>
            <tr>
            <th>Name</th>
            <th>RegNo</th>
            <th>CIE_1</th>
            <th>CIE_2</th>
            <th>CIE_3</th>
            <th>M1</th>
            <th>M2</th>
            <th>M3</th>
            <th>Assignment</th>
            <th>Seminar</th>
            <th>Attendance</th>
            <th>Internal_mark</th>
            </tr>
            <tr>
            <td><?php echo $row->name;  ?></td>
            <td><?php echo $row->regno; ?></td>
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
        </body>
            </html>
            <?php 
        }
    }
    ?>
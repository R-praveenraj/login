
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>table,tr,td,th{
    border: 2px solid black;
    width: 50%;
    margin:20px;
    padding: 20px;
    text-align: center;
}


a{
  text-decoration: none;
}

</style>
</head>
<body>
<?php
$con=new mysqli('localhost','root','','sona');
if(isset($_POST['submit']))
{
    $regno=$_POST['regno'];
    $dob=$_POST['dob'];
    session_start();
    $_SESSION["regnoo"]=$regno;
   // $_SESSION['$regno']='$regno';
    //$regno=$_SESSION['$regno'];
  //$qw = date_format($dob, "%Y-%m-%d");
  //$dob = $_POST[date_format(dob, "%Y-%m-%d")];
    $sql="select * from ads_main where regno=$regno and dob='$dob' ;";
    $result = $con->query($sql);
    $row=$result->fetch_object()?>
            <table>
            <tr>
            <th>Name</th>
            <th>RegNo</th>
            </tr>
            <tr>
            <td><?php echo $row->name;  ?></td>
            <td><?php echo $row->regno; ?></td>
            </tr>
            </table>
            <?php
}
?>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      SEMESTER-1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body"><a href="b2.php">DEEP LEARNING</a></div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      SEMESTER-2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
        <li><a href="insert.php">Communication skills in english 2</a></li><BR>
        <li><a href="insert.php">Data structure and algorithms 1</a></li><BR>
        <li><a href="insert.php">Intro to AI</a></li><BR>
        <li><a href="insert.php">programming in C</a></li><BR>
        <li><a href="insert.php">Probability & Statistics 1</a></li><BR>
        </ul>
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      SEMESTER-3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
        <li><a href="insert.php">Operating System</a></li><BR>
        <li><a href="insert.php">Digital Logic Design</a></li><BR>
        <li><a href="insert.php">Advanced Python</a></li><BR>
        <li><a href="insert.php">Data structures & Algorithms 2</a></li><BR>
        <li><a href="insert.php">Computer Architecture</a></li><BR>
        <li><a href="insert.php">Probability & Statistics 2</a></li><BR>
        </ul>
      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
      SEMESTER-4
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
        <li><a href="insert.php">Computer Networks</a></li><BR>
        <li><a href="insert.php">Agile Software development</a></li><BR>
        <li><a href="insert.php">Java Programming</a></li><BR>
        <li><a href="insert.php">Database Management System</a></li><BR>
        <li><a href="insert.php">Intro to Data science</a></li><BR>
        <li><a href="insert.php">Discrete Mathematics</a></li><BR>
        </ul>

      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
      SEMESTER-5
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
        <li><a href="insert.php">Cloud Computing</a></li><BR>
        <li><a href="insert.php">Theory of Computation</a></li><BR>
        <li><a href="insert.php">Machine Learning</a></li><BR>
        <li><a href="bdt.php">Big Data Technology</a></li><BR>
        <li><a href="insert.php">Internet of Things</a></li><BR>
        </ul>

      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
      SEMESTER-6
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul>
        <li><a href="insert.php">Deep Learning</a></li><BR>
        <li><a href="insert.php">Full stack development</a></li><BR>
        <li><a href="insert.php">Total Quality MANAGEMENT</a></li><BR>
        <li><a href="insert.php">ROBOTIC PROCESS AUTOMATION</a></li><BR>
        <li><a href="insert.php">CRYPTOGRAPHY</a></li><BR>
        <li><a href="insert.php">OPEN ELECTIVE</a></li><BR>
        </ul>
        </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
      SEMESTER-7
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body"></div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
      SEMESTER-8
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body"></div>
    </div>
  </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
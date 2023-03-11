<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index2-demo.css">
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
    $sql="select * from ads_main where regno=$regno and dob='$dob' ;";
    $result = $con->query($sql);
    $row=$result->fetch_object()
?>
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
&nbsp;


<div class="tab">
  <button class="tablinks" onclick="sem(event, 'SEMESTER-1')" id="defaultOpen">SEMESTER-1</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-2')">SEMESTER-2</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-3')">SEMESTER-3</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-4')">SEMESTER-4</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-5')">SEMESTER-5</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-6')">SEMESTER-6</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-7')">SEMESTER-7</button>
  <button class="tablinks" onclick="sem(event, 'SEMESTER-8')">SEMESTER-8</button>
</div>

<div id="SEMESTER-1" class="tabcontent">
<a href="dl.php">DEEP LEARNING</a>
</div>

<div id="SEMESTER-2" class="tabcontent">
<ul>
  <li><a href="dl.php">Data structure and algorithms 1</a></li><BR>
  <li><a href="dl.php">Intro to AI</a></li><BR>
  <li><a href="dl.php">programming in C</a></li><BR>
  <li><a href="dl.php">Probability & Statistics 1</a></li><BR>
  <li><a href="dl.php">Communication skills in english 2</a></li><BR>
</ul>
</div>

<div id="SEMESTER-3" class="tabcontent">
  <ul>
    <li><a href="dl.php">Operating System</a></li><BR>
    <li><a href="dl.php">Digital Logic Design</a></li><BR>
    <li><a href="dl.php">Advanced Python</a></li><BR>
    <li><a href="dl.php">Data structures & Algorithms 2</a></li><BR>
    <li><a href="dl.php">Computer Architecture</a></li><BR>
    <li><a href="dl.php">Probability & Statistics 2</a></li><BR>
  </ul>
</div>
<div id="SEMESTER-4" class="tabcontent">
  <ul>
    <li><a href="dl.php">Computer Networks</a></li><BR>
    <li><a href="dl.php">Agile Software development</a></li><BR>
    <li><a href="dl.php">Java Programming</a></li><BR>
    <li><a href="dl.php">Database Management System</a></li><BR>
    <li><a href="dl.php">Intro to Data science</a></li><BR>
    <li><a href="dl.php">Discrete Mathematics</a></li><BR>
  </ul>
</div>

<div id="SEMESTER-5" class="tabcontent">
  <ul>
    <li><a href="dl.php">Cloud Computing</a></li><BR>
    <li><a href="dl.php">Theory of Computation</a></li><BR>
    <li><a href="dl.php">Machine Learning</a></li><BR>
    <li><a href="dl.php">Big Data Technology</a></li><BR>
    <li><a href="dl.php">Internet of Things</a></li><BR>
        </ul>
      </div>
      
      <div id="SEMESTER-6" class="tabcontent">
        <ul>
          <li><a href="dl.php">Deep Learning</a></li><BR>
          <li><a href="dl.php">Full stack development</a></li><BR>
          <li><a href="dl.php">Total Quality MANAGEMENT</a></li><BR>
          <li><a href="dl.php">ROBOTIC PROCESS AUTOMATION</a></li><BR>
          <li><a href="dl.php">CRYPTOGRAPHY</a></li><BR>
          <li><a href="dl.php">OPEN ELECTIVE</a></li><BR>
        </ul>
      </div>
      <div id="SEMESTER-7" class="tabcontent">
        <a href="dl.php">DEEP LEARNING</a>
      </div>
      
      <div id="SEMESTER-8" class="tabcontent">
        <a href="dl.php">DEEP LEARNING</a>
      </div>
      
      <script>
function sem(evt, sem) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(sem).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

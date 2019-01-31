<html>
<body>
<div align="right">
    <button class="button2" onclick="window.location.href='/PhysicsPHP/getFormoul.php'">get Formoul</button>
    <button class="button2" onclick="window.location.href='/PhysicsPHP/homepage.php'">Home page</button>
</div>
<?php
$username = "root";
$password = "";
$database = "formoul_db";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM formouls";
$cont = 0;



echo '<table border="3" cellspacing="1" align="center"> 
      <tr> 
          <td> <span style="font-family: Arial; font-size: large;color: darkblue"; > id </span> </td> 
          <td> <span style="font-family: Arial;font-size: large; color: darkblue";> title </span> </td> 
          <td> <span style="font-family: Arial; font-size: large; color: darkblue";> content </span> </td> 
          <td> <span style="font-family: Arial; font-size: large; color: darkblue";> image </span> </td> 
          <td> <span style="font-family: Arial; font-size: large; color: darkblue";> class </span> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cont++;
        $field1name = $row["id"];
        $field2name = $row["title"];
        $field3name = $row["content"];
        $field4name = $row["image"];
        $field5name = $row["class"];

        echo '<tr> 
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field4name . '</td> 
                  <td>' . $field5name . '</td> 
              </tr>';
    }
    $result->free();
}
echo " تعداد فرمول ها:", $cont;
?>


</body>
<style>
    td, th {
        border: 1px solid #af5744;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .button2 {
        background-color: #4466af;
        border: none;
        color: white;
        text-align: center;
        font-size: 16px;
        margin: 3px 3px;
        height: 35px;
        width: 120px;
        border-radius: 25px;

    }

    div {
        background: #07d6a0;
    }
</style>

</html>
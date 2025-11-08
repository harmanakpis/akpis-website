<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Latest 100 Leads</h1>
 
<?php 
  
  $servername = "159.89.163.228"; 
  $username = "ntysncanmj"; 
  $password = "TQbjxd87bB"; 
  $databasename = "ntysncanmj"; 
  
  // CREATE CONNECTION 
  $conn = new mysqli($servername, 
    $username, $password, $databasename); 
  
  // GET CONNECTION ERRORS 
  if ($conn->connect_error) { 
      die("Connection failed: " . $conn->connect_error); 
  } 
  
  // SQL QUERY 
  //$query = "SELECT * FROM `leads`;"; 
  $query = "SELECT * FROM `leads` ORDER BY `id` DESC LIMIT 100"; 
  ?>
<div class="table-responsive" id="employee_table">  
   <table  id="customers">
     
  <tr>
    <th>Sr. No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Date</th>
  </tr>
   <?php
   $i = 0;
  // FETCHING DATA FROM DATABASE 
  $result = $conn->query($query); 
  if ($result->num_rows > 0)  
    { 
        // OUTPUT DATA OF EACH ROW 
        while($row = $result->fetch_assoc()) 
        {
  ?>
  <tr>
    <td><?php echo ++$i;?></td>
    <td><?php echo $row["fullname"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["phone"];?></td>
    <td><?php echo $row["message"];?></td>
    <td><?php echo $row["created_at"];?></td>
  </tr>

  
  <?php
        } 
    }  
    else { 
        echo "0 results"; 
    } 
  
   $conn->close(); 
  
?>
</table>
</div> 
</body>
</html>
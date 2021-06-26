
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// $sql = "INSERT INTO balance (name, bal)
// VALUES ('John', 'Doe')";

// if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//  } else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//  }

?>


     <table border = 3>
  
     <thead>
       
     <tr>
        <td>Name</td>
        <td>Balance</td>
  </tr>
  </thead>
  <tbody>
 
 <?php
  $sql = "SELECT * from balance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
  ?>
  
  <tr>
  <td><?php echo $row['name']?></td>
  <td width=30%><?php echo $row['bal']?></td>
  </tr>
<?php } ?>
  </tbody>
   </table>
     <?php
  
 
} else {
  echo "0 results";
}


?>
<!-- </body>
</html> -->

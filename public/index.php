<!doctype html>

<html lang='en'>
  <head>
    <title>Sample Problem</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' media='all' href='styles.css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:200,400,700' rel='stylesheet'>
  </head>
  
  <body>
    <div class='brand'>
      <h1><a href='ficktastic.com'>barbara fick</a></h1>
    </div>
  
<?php
include 'db_connection.php';
$conn = OpenCon();
echo 'Connected to the Database Successfully Yo';
?>

<?php 

function categoryTree($subItemOfID, $sub_mark){

    global $conn;
    $query = $conn->query("SELECT * FROM categories WHERE subItemOfID = $subItemOfID ORDER BY Item ASC");

    if($query->num_rows > 0){
         while($row = $query->fetch_assoc()){
            echo '<br />';
            echo $sub_mark.$row['Item'];
            categoryTree($row['itemID'], $sub_mark.'---');
        }
    }
  }

?>


<?php categoryTree(0, ''); ?>

<?php
echo '
<h1>ASSIGNMENT</h1>
<p>
Please provide a simple solution to the following problem in a language of your choice:
</p>
We want to be able to output a nested list of items &mdash; items in the list can be sub-items of other items in the list.  A simple database table would have the following fields:

<ul>
<li>Create Database Table</li>
<li>Connect to Database</li>
<li>Retrieve Data</li>
<li>Figure out Displaying the List</li>
<li>Seperate out Data</li>
<li>From Printing?</li>
</ul>
</p>

<p>
Initially, I wrote a solution in JavaScript 
since that is the language I am most comfortable in at the moment.
I created an object of objects and then realized that the 
best data structure is a tree.

</p>
<p>
Then I rewrote the function in php and created this page.  I am using 
</p>

';
?>
<?php 
CloseCon($conn);
?>
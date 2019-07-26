<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,900" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?php echo url_for('style.css'); ?>" />
  </head>
  
  
<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
?>

<?php 
    global $conn;
    $query = $conn->query("SELECT * FROM categories");

    if($query->num_rows > 0){
         while($row = $query->fetch_assoc()){
            echo $row['Item'];
            echo '<br />';
        }
    }

?>
<?php
echo "
<p>
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
best data structure is a tree. I perhaps shouldn't admit that,
since this php solution works.
</p>
<p>
Then I rewrote the function in php and created this page.
</p>
";
?>
<?php 
CloseCon($conn);
?>
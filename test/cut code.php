<?php INCLUDE 'Connextion.php'; ?>
<?php
echo "ssss";
var_dump($_REQUEST);

if(isset($_REQUEST['delete'])){
  var_dump($_REQUEST);

 $PKID = $_REQUEST['delete'];
  
    include 'Connextion.php'


  $delete_query = "DELETE FROM details WHERE sid = '$PKID'";

  $sql_query = mysqli_query($conn, $delete_query);
  echo "sssss";

if($sql_query ==TRUE){
  echo "successfully deleted";
}else{
  echo "error";
}

}
?>
  

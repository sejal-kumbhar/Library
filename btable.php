 <?php include 'header.php';
include 'dbconnect.php';
if(isset($_POST['delete']))
{

  $sql="delete from class where id='".$_POST['id']."'";
  if(mysqli_query($conn,$sql))
  {

    echo "Deleted";
  }
  else
  {

    echo "not deleted";
  }
}


 ?>


    
        <h2 class="mb-4">Library</h2>

        <div class="container">
         <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book name</th>
      <th scope="col">Description</th>
      
       <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $counter=1;
    $sql=mysqli_query($conn,"select * from library");
    while ($row=mysqli_fetch_assoc($sql)) 
{
    echo '<tr>
    <form action="add_book.php" method="post">
    <input type="hidden" name="id" value="'.$row['id'].'">
      <th scope="row">'.$counter++.'</th>
      <td>'.$row['book_name'].'</td>
       <input type="hidden" name="book_name" value="'.$row['book_name'].'">
       <td>'.$row['book_desc'].'</td>
       <input type="hidden" name="book_desc" value="'.$row['book_desc'].'">
     
        <td><input type="submit" value="Edit" class="btn btn-success" name="edit"></td>
        
        </form>
         <form action="btable.php" method="post">
    <input type="hidden" name="id" value="'.$row['id'].'">
        <td><input type="submit" value="Delete" class="btn btn-danger" name="delete"></td>
        </form>
    </tr>';
  }
    ?>
    
  </tbody>
</table>
        </div>
      


        
      </div>
    </div>
<?php include 'footer.php'; ?>
 
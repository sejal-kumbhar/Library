<?php include 'header.php';
error_reporting(0);
include 'dbconnect.php';
if(isset($_POST['btnsubmit']))
{

    $sql="insert into library(book_name,book_desc)values('".$_POST['book_name']."','".$_POST['bdesc']."')";
    if(mysqli_query($conn,$sql))
    {
      echo "<script>alert('Book Added')</script>";
    }
    else
    {
        echo "Record not inserted";
    }
}

//update

if(isset($_POST['btnedit']))
{

    $sql="update library set book_name='".$_POST['book_name']."',book_desc='".$_POST['bdesc']."' where id='".$_POST['id']."'";
    if(mysqli_query($conn,$sql))
    {
       echo '<script type="text/javascript">
                 alert("library updated");
                 location="btable.php";
            </script>';
    }
    else
    {
        echo "Record not updated";
    }
}
 ?>


    <form action="add_book.php" method="POST"> 
        <h2 class="mb-4">Add Book</h2>
         <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
        <div class="container">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-12">
                        <label>Book Name <span style="color: red">*</span></label>
                        <input type="text" name="book_name" onkeypress="javascript:return isString(event)" value="<?php echo $_POST['book_name'] ?>" placeholder="Enter Book Name" class="form-control" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <label>Book Decription</label>
                        <input type="text" name="bdesc" onkeypress="javascript:return isString(event)" value="<?php echo $_POST['book_desc'] ?>" placeholder="Enter Decription" class="form-control" required="">
                    </div>
                </div>
                <br>
               
                <div class="row">
                    <div class="col-sm-12">
                        <?php 

                        if(!$_POST['edit'])
                        {
                        echo '<input type="submit" name="btnsubmit" value="Submit" class="btn btn-primary">';
                        }
                        else
                        {
                        echo '<input type="submit" name="btnedit" value="Edit" class="btn btn-warning">';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        </form>


        
      </div>
        </div>
<?php include 'footer.php'; ?>

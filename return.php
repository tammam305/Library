<?php
$page="Return Loan";
include("header.php");
include("db.php");

 $loanid=$_GET['loanid'];

if(isset($_GET['return']))
{
   $query="UPDATE `loan` SET `returnDate`='".date('Y-m-d H:i:s')."'WHERE id=$loanid;";
    $result=mysqli_query($con,$query);

    if($result)
    {
      
    }else
    {
        
    }
}  

if(!isset($_GET['isbn'],$_GET['stdid'],$_GET['loanid']))
{
    header("Location: loan_list.php");
    exit();

}
$isbn=$_GET["isbn"];
$stdid=$_GET['stdid'];

?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="loan_list.php">Loans</a></li>
              <li class="breadcrumb-item active">Return Loan</li>
            </ul>
          </div>
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">                           
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Return Loan Form</h3>
                    </div>
                    <div class="card-body">
                      <form name="loan" action="return.php?loanid=<?php echo $loanid;?>" method="GET" class="form-inline">
                        <div class="form-group">
                          <label for="inlineFormInput" class="sr-only">ISBN</label>
                          <input id="inlineFormInput" type="text" class="form-control" disabled value="<?php echo $isbn;?>">
                        </div>
                        <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">Student ID</label>
                          <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mx-sm-3 form-control" disabled value="<?php echo $stdid;?>">
                        </div>
                        <input type="hidden" name="loanid" value="<?php echo $loanid;?>">
                        <div class="form-group">
                          <input type="submit" name="return" value="Return" class="mx-sm-3 btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

            </div>
           </div>
          </section>
          
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>&copy; 2017, CCSIT Web-based Systems Project First Semester 2017-18 </p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
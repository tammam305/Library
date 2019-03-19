<?php
$page="Loans";
include("header.php");
include("db.php");
$queryPR="SELECT  loan.id as id,book.isbn, book.title,book.author,loan.studentID as stdid,loan.studentName,DATE_FORMAT(loan.date, '%d %M %Y') AS date FROM
book inner JOIN loan on book.isbn=loan.bookISBN
where loan.returnDate is  NULL;";

$queryR="SELECT loan.id,book.isbn, book.title,book.author,loan.studentID as stdid,loan.studentName,DATE_FORMAT(returnDate, '%d %M %Y') AS returnDate FROM
book inner JOIN loan on book.isbn=loan.bookISBN
where loan.returnDate is NOT NULL;";

$result1=mysqli_query($con,$queryPR);
$result2=mysqli_query($con,$queryR);
$loan=[];
while($row=mysqli_fetch_assoc($result1))
{
	$loan[$row['id']]=["id"=>$row['id'],"isbn"=>$row['isbn'],"title"=>$row['title'],"author"=>$row['author'],"sid"=>$row['stdid'],"name"=>$row['studentName'],"date"=>$row['date']];
}
$loan2=[];
while($row=mysqli_fetch_assoc($result2))
{
	$loan2[$row['id']]=["isbn"=>$row['isbn'],"title"=>$row['title'],"author"=>$row['author'],"sid"=>$row['stdid'],"name"=>$row['studentName'],"returnDate"=>$row['returnDate']];
}
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Loans</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">List of Loans (Pending Return)</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ISBN</th>
                            <th>Book Title</th>
                            <th>Main Author</th>
                            <th>Loaned By</th>
                            <th>Student Name</th>
                            <th>Loan Date</th>
                            <th>Return Control</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($loan as $k=>$item){?>
                          <tr>
                            <th scope="row"><a href="book.php?"><?php echo $item['isbn'];?></a></th>
                            <td><?php echo $item['title'];?></td>
                            <td><?php echo $item['author'];?></td>
                            <td><?php echo $item['sid'];?></td>
                            <td><?php echo $item['name'];?></td>
                            <td><?php echo $item['date'];?></td>
                            <td><a href="return.php?isbn=<?php echo $item['isbn'];?>&stdid=<?php echo $item['sid'];?>&loanid=<?php echo $item['id'];?>" class="btn btn-primary">Return Book</a></td>
                          </tr>
                                          <?php }?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 
          
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">List of Loans (Returned)</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ISBN</th>
                            <th>Book Title</th>
                            <th>Main Author</th>
                            <th>Loaned By</th>
                            <th>Student Name</th>
                            <th>Return Date</th>
                          </tr>
                        </thead>
                        <tbody>
                                 <?php foreach($loan2 as $k=>$item){?>
                          <tr>
                            <th scope="row"><a href="book.php?"><?php echo $item['isbn'];?></a></th>
                            <td><?php echo $item['title'];?></td>
                            <td><?php echo $item['author'];?></td>
                            <td><?php echo $item['sid'];?></td>
                            <td><?php echo $item['name'];?></td>
                            <td><?php echo $item['returnDate'];?></td>
                          </tr>
                                          <?php }?>

                        </tbody>
                      </table>
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
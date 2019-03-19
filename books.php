<?php
$page="Books";
include("header.php");
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Books</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">List of Books</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ISBN</th>
                            <th>Book Title</th>
                            <th>Main Author</th>
                            <th>Year</th>
                            <th>Quantity</th>
                            <th>Loaned</th>
                            <th>Loan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="book.php">9781491918661</a></th>
                            <td>Learning PHP, MySQL and JavaScript</td>
                            <td>Robin Nixon</td>
                            <td>2014</td>
                            <td>20</td>
                            <td>5</td>
                            <td><a href="loan.php" class="btn btn-primary">Loan Book</a></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="book.php">9781449370190</a></th>
                            <td>Learning Web App Development</td>
                            <td>Semmy Purewal</td>
                            <td>2014</td>
                            <td>5</td>
                            <td>0</td>
                            <td><a href="loan.php" class="btn btn-primary">Loan Book</a></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="book.php">9781493692613</a></th>
                            <td>A Software Engineer Learns HTML5, JavaScript and jQuery</td>
                            <td>Dane Cameron</td>
                            <td>2013</td>
                            <td>10</td>
                            <td>9</td>
                            <td><a href="loan.php" class="btn btn-primary">Loan Book</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Add New Book</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="row">
                          <label class="col-sm-3 form-control-label">Please Enter Book Details</label>
                          <div class="col-sm-9">
                            <div class="form-group-material">
                              <input id="isbn" type="text" name="isbn" class="input-material">
                              <label for="isbn" class="label-material">ISBN Number</label>
                            </div>
                            <div class="form-group-material">
                              <input id="bookname" type="text" name="bookname" class="input-material">
                              <label for="bookname" class="label-material">Book Title</label>
                            </div>
                            <div class="form-group-material">
                              <input id="author" type="text" name="author" class="input-material">
                              <label for="author" class="label-material">Main Author Name</label>
                            </div>
                            <div class="form-group-material">
                              <input id="publisher" type="text" name="publisher" class="input-material">
                              <label for="publisher" class="label-material">Publisher Name</label>
                            </div>
                            <div class="form-group-material">
                              <input id="year" type="text" name="year" class="input-material">
                              <label for="year" class="label-material">Publication Year</label>
                            </div>
                            <div class="form-group-material">
                              <input id="edition" type="text" name="edition" class="input-material">
                              <label for="edition" class="label-material">Edition</label>
                            </div>
                            <div class="form-group-material">
                              <input id="qty" type="text" name="qty" class="input-material">
                              <label for="qty" class="label-material">Quantity Available</label>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Book Cover Page</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Add Book</button>
                          </div>
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
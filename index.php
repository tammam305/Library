<?php
$page="Home";
include("header.php");
include("db.php");
$query="SELECT COUNT(ISBN) , SUM(quntity) FROM book;";
$row=mysqli_fetch_assoc(mysqli_query($con,$query));
$bksNum=$row['COUNT(ISBN)'];
$bksQuntity=$row['SUM(quntity)'];
$query="SELECT COUNT(ID) FROM LOAN WHERE returnDate IS NOT NULL;";
$bksLoaned=mysqli_fetch_assoc(mysqli_query($con,$query))['COUNT(ID)'];
$query="SELECT COUNT(ID) FROM LOAN WHERE returnDate IS NULL;";
$bksOut=mysqli_fetch_assoc(mysqli_query($con,$query))['COUNT(ID)'];
?>

          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-bars"></i></div>
                    <div class="title"><span>Total<br>Books</span>
                    </div>
                    <div class="number"><strong><?php echo $bksNum;?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Total<br>Quantity</span>
                    </div>
                    <div class="number"><strong><?php echo $bksQuntity;?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-list-1"></i></div>
                    <div class="title"><span>Total<br>Loaned</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $bksLoaned;?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>All<br>Out</span>
                    </div>
                    <div class="number"><strong><?php echo $bksOut;?></strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>3</strong><br><small>Loaned Today</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong>20</strong><br><small>Loaned This Week</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>45</strong><br><small>Loaned This Month</small></div>
                  </div>
                </div>
                <!-- Bar Chart   -->               
                <div class="chart col-lg-6 col-12">
                  <div class="bar-chart has-shadow bg-white">
                    <div class="title"><small>YEARLY BOOK LOAN DISTRIBUTION</small></div>
                    <canvas id="barChartHome"></canvas>
                  </div>
                </div>
                <div class="chart col-lg-3 col-12">
                  <div class="work-amount card">
                     <div class="card-body">
                      <h3>No. Students</h3><small>Number of Unique Students</small>
                      <div class="chart text-center">
                        <div class="text"><strong>100</strong><br><span>Students</span></div>
                        <canvas id="pieChart"></canvas>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Feeds Section-->
          <section class="feeds no-padding-top">
            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-6">
                  <div class="articles card">
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Trending Books (Top Five)</h2>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/book_covers/9781491918661.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="book.php">
                            <h3 class="h5">Learning PHP, MySQL and JavaScript</h3></a><small>Loaned 20 times</small></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/book_covers/9781593275846.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="book.php">
                            <h3 class="h5">Eloquent JavaScript</h3></a><small>Loaned 15 times</small></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/book_covers/9781118531648.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="book.php">
                            <h3 class="h5">JavaScript and JQuery</h3></a><small>Loaned 10 times</small></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/book_covers/9780134291253.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="book.php">
                            <h3 class="h5">PHP for the Web</h3></a><small>Loaned 9 times</small></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/book_covers/9780984782864.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="book.php">
                            <h3 class="h5">Cracking the Coding Interview</h3></a><small>Loaned 5 times</small></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Check List -->
                <div class="col-lg-6">
                  <div class="recent-activities card">
                    <div class="card-header">
                      <h3 class="h4">Recent Loans (Last Five)</h3>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item">
                        <div class="row">
                          <div class="col-4 date-holder text-right">
                            <div class="icon"><i class="icon-clock"></i></div>
                            <div class="date"> <span>1:00 PM</span><br><span class="text-info">29 November 2017</span></div>
                          </div>
                          <div class="col-8 content">
                            <h5>JavaScript and JQuery</h5>
                            <p>Was loaned by Mr. Ahmed</p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row">
                          <div class="col-4 date-holder text-right">
                            <div class="icon"><i class="icon-clock"></i></div>
                            <div class="date"> <span>12:00 pm</span><br><span class="text-info">29 November 2017</span></div>
                          </div>
                          <div class="col-8 content">
                            <h5>Python Machine Learning</h5>
                            <p>Was loaned by Mr. Mohammed</p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row">
                          <div class="col-4 date-holder text-right">
                            <div class="icon"><i class="icon-clock"></i></div>
                            <div class="date"> <span>8:00 am</span><br><span class="text-info">27 November 2017</span></div>
                          </div>
                          <div class="col-8 content">
                            <h5>Human Computer Interaction</h5>
                            <p>Was loaned by Dr. Majed</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!--page footer-->
          <?php
			include("footer.php");
			?>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!--<script src="js/charts-home.js"></script>-->
    <script src="js/front.js"></script>
    <script>
    // ------------------------------------------------------- //
    // Bar Chart
    // ------------------------------------------------------ //
    var BARCHARTHOME = $('#barChartHome');
    var barChartHome = new Chart(BARCHARTHOME, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: true
                }],
                yAxes: [{
                    display: true
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "November", "December"],
            datasets: [
                {
                    label: "2017",
                    backgroundColor: [
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)'
                    ],
                    borderColor: [
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)'
                    ],
                    borderWidth: 1,
                    data: [35, 49, 55, 68, 81, 95, 85, 40, 30, 27, 22, 15]
                }
            ]
        }
    });
    </script>
  </body>
</html>
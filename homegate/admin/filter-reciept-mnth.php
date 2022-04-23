
<?php

include("./header.php");
include("../config.php");



function filterTable($query)
{
    include("../config.php");
    $filter_Result = mysqli_query($mysqli, $query);
    return $filter_Result;
}

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Search Reciepts By Month</h4>
                  <p class="card-category"></p><br>
                  
                </div>
                <div class="card-body">
                  <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                                   
                          <select name="valueToSearch" class="form-control">
                                <option>Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>

                          </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                        <div class="input-group-append">
                           <button type="submit" name="search" class="btn btn-primary mr-2">Submit</button>
                        </div>
                          </div>
                        </div>

                      </div>
                      </form>

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <tr>

                            <td> Reciept No </td>
                            <td> Order Source </td>
                            <td> Staff </td>
                            <td> Item Description </td>
                            <td> Quantity</td>
                            <td> Price</td>
                            <td> Total Price</td>
                            <td>  </td>

                          </tr>
                        </thead>
                        <tbody>
                              <?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = mysqli_query($mysqli, "SELECT * FROM accounting_invoices WHERE month LIKE '%".$valueToSearch."%' AND  year = YEAR(CURRENT_DATE) GROUP BY inv_number");

                                while($rows=mysqli_fetch_array($query)){

                              echo'
                              <tr>
                              <td>'.$rows['inv_number'].'</td>
                              <td>'.$rows['source'].'</td>
                              <td>'.$rows['staff'].'</td>
                              <td>'.$rows['item_desc'].'</td>
                              <td>'.$rows['quantity'].'</td>
                              <td>'.$rows['price'].'</td>
                              <td>'.$rows['total'].'</td>
                              
                              <td>
                                 <a href="reciept-view.php?inv_num='.$rows['inv_number'].'"><i class="fa fa-eye"style="color: green"></i></a>
                                 &nbsp;&nbsp;
                                 <a onclick="return confirm(\'sure to DELETE ROOM !\');" href="scripts/receipt_del.php?inv_num='.$rows['inv_number'].'"><i class="fa fa-trash" style="color: red"></i></a>
                              </td>
                              </tr>
                              ';                              }   
} else {

        echo '<tr><td>No record Searched </td></tr>';
}




                              ?>
                              

                        </tbody>
                      </table>


                    </div>
                  </div>
                </div>
              </div>
            </div>                      
                    <div class="clearfix"></div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>
      </div>

<?php

include("./footer.php");

?>
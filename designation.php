

<?php include "./Extra/Header.php" ;?>
<?php include "./Database/Connection.php";?>
<?php
if(isset($_GET['add']))
{
  $emp_designation =$_GET['emp_designation'];
  $query ="insert into designation values(null,$emp_designation)";
$result =  mysqli_query($data->Connect(),"insert into designation values (NULL,'$emp_designation')");
  if($result==null)
  {
    die('error');
  }
}

if(isset($_GET['delete']))
{
  $emp_designation =$_GET['emp_designation'];

$result =  mysqli_query($data->Connect(),"delete from designation where emp_designation='$emp_designation'");
  if($result==null)
  {
    die('error');
  }
}

?>

<style>

.span4
{
  position: relative;
  top:100px;
}
</style>
          <div class="row-fluid">
            <div class="span12">
              <ul class="breadcrumb-beauty">
                <li>
                  <a href="index.html"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
                </li>
                <li>
                  <a href="#">Dashboard</a>
                </li>
              </ul>
            </div>
          </div>

          <br>

<h3 class='text-info'style='opacity:.5;text-align:center'>Designation</h3>
          <hr>
<div class='row-fluid'>
<div class='span2'></div>
<div class='span4 '>
  <div class='widget'>

  <div class='widget-header'>
<div class='title '>Create New Designation</div>
  </div>

  <div class='widget-body'>
            <form action='' method='get' class="form-horizontal">
<div class="control-group success input-append">
<br>
&nbsp;<input type='text' class='input-xlarge' name='emp_designation' placeholder='enter designation'>
<button type='submit' class='btn btn-success' name='add'>Add</button>
</div>

              </form>

</div>
</div>
</div>

<div class='span4 '>
  <div class='widget'>

  <div class='widget-header'>
<div class='title '>Delete site name</div>
  </div>

  <div class='widget-body'>
            <form action='' method='get' class="form-horizontal">
<div class="control-group warning input-append">
<br>
&nbsp;<select name='emp_designation'>

  <?php include './Extra/designation_option.php'?>
</select>
<button type='submit' class='btn btn-danger' name='delete'>delete</button>
</div>

              </form>
</div>
</div>
</div>
<div class='span2'></div>
</div>





    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

    <!-- morris charts -->
    <script src="js/morris/morris.js"></script>
    <script src="js/morris/raphael-min.js"></script>

    <!-- Flot charts -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.min.js"></script>

    <!-- Calendar Js -->
    <script src="js/fullcalendar.js"></script>

    <!-- Tiny Scrollbar JS -->
    <script src="js/tiny-scrollbar.js"></script>

    <!-- custom Js -->
    <script src="js/custom-index.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>

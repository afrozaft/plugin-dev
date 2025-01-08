<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo EMS_PLUGIN_URL?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo EMS_PLUGIN_URL?>/css/dataTables.dataTables.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>List Employee</h2>
                <div class="panel panel-primary">
                    <div class="panel-heading">List of All Employee</div>
                    <div class="panel-body">
                        <table class="table" id="tbl-employee">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>#Name</th>
                            <th>#Email</th>
                            <th>#Phone No.</th>
                            <th>#Gender</th>
                            <th>#Designation</th>
                            <th>#Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>9874563216</td>
                            <td>Male</td>
                            <td>Wordpress Developer</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-danger">Delete</a>
                                <a href="javascript:void(0)" class="btn btn-info">View</a>
                            </td>
                        </tr>
                       
                        </tbody>
                        </table>
                        </div>
                    </div>   
        </div>
    </div>
</div>

<script src="<?php echo EMS_PLUGIN_URL?>js/jquery.min.js"></script>
<script src="<?php echo EMS_PLUGIN_URL?>js/bootstrap.min.js"></script>
<script src="<?php echo EMS_PLUGIN_URL?>js/dataTables.min.js"></script>
<script>
    
    $(function(){
        // List employee data table
        new DataTable('#tbl-employee');
    });
</script>
</body>
</html>

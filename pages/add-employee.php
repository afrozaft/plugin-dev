
 
<div class="container">
  <div class="row">
    <div class="col-sm-8">
        <h2>Add Employee</h2>
        <div class="panel-group">
            <div class="panel panel-primary">
            <div class="panel-heading">Add New Employee</div>
            <div class="panel-body">
                <form action="javascript:void(0)" method="post" id="ems-frm-add-employee">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNo">Phone No:</label>
                        <input type="text" class="form-control" id="phoneNo" placeholder="Enter phone no" name="phoneNo">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation:</label>
                        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>

    
     </div>
    </div>
  </div>
</div>



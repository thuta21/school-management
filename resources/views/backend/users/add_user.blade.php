<x-admin.admin-master>
    <div class="content-wrapper">
        <div class="container-full">  
          <!-- Main content -->
          <section class="content">
  
           <!-- Basic Forms -->
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">User Add</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col">
                      <form method="post" action="{{ route('users.store') }}">
                        @csrf
                        <div class="row">
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Username <span class="text-danger">*</span></h5>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Email <span class="text-danger">*</span></h5>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Password <span class="text-danger">*</span></h5>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>User Role <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="user_type" id="select" class="form-control">
                                                <option value="">Select Your Role</option>
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="SUBMIT" >
                            </div>
                      </form>
  
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
          </section>
          <!-- /.content -->
        </div>
    </div>
</x-admin.admin-master>
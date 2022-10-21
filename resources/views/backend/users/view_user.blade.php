<x-admin.admin-master>
    <div class="content-wrapper">
        <div class="container-full">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="d-flex align-items-center">
                  <div class="mr-auto">
                      <h3 class="page-title">Data Tables</h3>
                      <div class="d-inline-block align-items-center">
                          <nav>
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                  <li class="breadcrumb-item" aria-current="page">Tables</li>
                                  <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-12">
  
               <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">User Lists</h3>
                    <a href="" style="float: right;" class="btn btn-rounded btn-success mb-5">Add User</a>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Role</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ optional($user)->user_type }}</td>
                                        <td>{{ optional($user)->name }}</td>
                                        <td>{{ optional($user)->email }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input class="btn btn-danger" style="background-color: red" type="submit" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>Name</th>
                                  <th>Position</th>
                                  <th>Office</th>
                                  <th>Age</th>
                                  <th>Start date</th>
                                  <th>Salary</th>
                              </tr>
                          </tfoot>
                        </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>     
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
        
        </div>
    </div>
</x-admin.admin-master>
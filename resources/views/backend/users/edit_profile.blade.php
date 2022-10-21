<x-admin.admin-master>
    <div class="content-wrapper">
        <div class="container-full">  
          <!-- Main content -->
          <section class="content">
  
           <!-- Basic Forms -->
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">User Edit</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col">
                      <form method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="row">
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Username <span class="text-danger">*</span></h5>
                                        <input type="text" name="name" class="form-control" value="{{ $authUser->name }}">
                                    </div>
                                </div>
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Email <span class="text-danger">*</span></h5>
                                        <input type="email" name="email" class="form-control" value="{{ $authUser->email }}">
                                    </div>
                                </div>
                                {{-- <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Password <span class="text-danger">*</span></h5>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div> --}}
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>User Role <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="user_type" id="select" class="form-control">
                                                <option value="">Select Your Role</option>
                                                <option value="user" {{ $authUser->user_type == 'user' ? 'selected' : ''}}>User</option>
                                                <option value="admin" {{ $authUser->user_type == 'admin' ? 'selected' : ''}} >Admin</option>
                                                <option value="editor" {{ $authUser->user_type == 'editor' ? 'selected' : ''}} >Editor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Mobile <span class="text-danger">*</span></h5>
                                        <input type="email" name="email" class="form-control" value="{{ $authUser->mobile }}">
                                    </div>
                                </div>
                                <div class="col-6">						
                                    <div class="form-group">
                                        <h5>Address <span class="text-danger">*</span></h5>
                                        <input type="email" name="email" class="form-control" value="{{ $authUser->address }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>User Role <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="gender" id="select" class="form-control">
                                                <option value="">Select Your Role</option>
                                                <option value="male" {{ $authUser->gender == 'male' ? 'selected' : ''}}>Male</option>
                                                <option value="female" {{ $authUser->gender == 'female' ? 'selected' : ''}} >Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Profile Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control" id="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <img src="{{ !empty($authUser->image)? asset('upload/user_photos/'. $authUser->image) : asset('upload/no_image.jpg') }}" alt="" id="showImage" style="width: 100px; height: 100px; border: 1px solid black;" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="SUBMIT" >
                            </div>
                            <input type="button" class="btn btn-rounded btn-info mb-5" id="inputButton" value="SUBMIT" >
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
            })
        })
    </script>
@endsection

</x-admin.admin-master>


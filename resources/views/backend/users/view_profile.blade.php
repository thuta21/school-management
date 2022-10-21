<x-admin.admin-master>
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="box box-widget widget-user">                            
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="">
                                    <h3 class="widget-user-username">Username : {{ optional($authUser)->name }}</h3>
                                    <h6 class="widget-user-desc">Role : {{ optional($authUser)->user_type }}</h6>

                                    <a href="{{ route('edit-profile', $authUser->id) }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Edit Profile</a>
                                </div>
                                <div class="widget-user-image">
                                    <img class="rounded-circle" src="{{ !empty($user->image)? asset('upload/user_photos/'. $user->image) : asset('upload/no_image.jpg') }}" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                        <h5 class="description-header">Mobile</h5>
                                        <span class="description-text">{{ optional($authUser)->moblie }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                        <h5 class="description-header">Address</h5>
                                        <span class="description-text">{{ optional($authUser)->address }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                        <h5 class="description-header">Gender</h5>
                                        <span class="description-text">{{ optional($authUser)->gender }}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-admin.admin-master>
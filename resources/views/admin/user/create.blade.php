@extends('admin.layouts.app')
@section('main-content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @include('admin.layouts.pageHead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admins</h3>
            </div>

            @include('include.message')
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  action="{{ route('user.store')}}" method="post">

              {{csrf_field() }}
              
              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">

                   <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder=" User Name"
                  value="{{old('name')}}">
                </div>
                
               
            
             
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" value="{{old('phone')}}">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="password" value="{{old('password')}}">
                </div>

                 <div class="form-group"> 
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm password">
                </div>

                <div class="form-group">
                  <label for="confirm_password">Status</label>
                 <div class="checkbox">
                          <label ><input type="checkbox" name="status" @if(old('status')==1) 
                            checked 
                            @endif value="1"> Status</label>
                        </div>
                      </div>

                <div class="form-group">
                <label>Assign Role</label>
                <div class="row">
                  @foreach ($roles as $role)
                      <div class="col-lg-3">
                        <div class="checkbox">
                          <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</label>
                        </div>
                      </div>
                  @endforeach
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href='{{ route('user.index')}}'>Back</a>
                
              </div>
            </form>
          </div>
              </div>
               
             

</div>

              
          <!-- /.box -->

          <div class="box">
           
          </div>

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




@endsection

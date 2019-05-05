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
              <h3 class="box-title">Roles</h3>
            </div>

            @include('include.message')
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  action="{{ route('role.store')}}" method="post">

              {{csrf_field() }}
              
              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">

                   <div class="form-group">
                  <label for="name">Role Title</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder=" Role Title">
                </div>
                <!--Start Selection from here-->
               <div class="row">
               <div class="col-lg-4">
                  <label for="name">Posts Permissions</label>
                  
                  @foreach($permissions as $permission)
                  @if($permission->for=='post')
                  <div class="checkbox">
                      <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                  </div>
                  @endif
                  @endforeach

               </div>  
               <div class="col-lg-4">
                  <label for="name">User Permission</label>
                    @foreach($permissions as $permission)
                  @if($permission->for=='user')
                  <div class="checkbox">
                      <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                  </div>
                  @endif
                  @endforeach
               </div>
               <div class="col-lg-4">
                  <label for="name">User Permission</label>
                    @foreach($permissions as $permission)
                  @if($permission->for=='other')
                  <div class="checkbox">
                      <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                  </div>
                  @endif
                  @endforeach
               </div>
               </div>
               
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href='{{ route('role.index')}}'>Back</a>
                
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

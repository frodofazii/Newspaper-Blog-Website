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
              <h3 class="box-title">Titles</h3>
            </div>

            @include('include.message')
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  action="{{ route('tag.store')}}" method="post">

              {{csrf_field() }}
              
              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">

                   <div class="form-group">
                  <label for="name">Tag Title</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder=" Tag Title">
                </div>
                
               
            
             
                <div class="form-group">
                  <label for="slug">Tag Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href='{{ route('tag.index')}}'>Back</a>
                
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

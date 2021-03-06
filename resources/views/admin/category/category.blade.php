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
            <!-- /.box-header -->
            <!-- form start -->

             @include('include.message')
            <form role="form" action="{{ route ('category.store')}}" method="post">
              {{csrf_field()}}

              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">

                   <div class="form-group">
                  <label for="name">Category Title</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder=" Category Title">
                </div>
                
               
            
             
                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href='{{ route('category.index')}}'>Back</a>
              </div>
            </form>
          </div>
              </div>
               
             

</div>

              
          <!-- /.box -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




@endsection
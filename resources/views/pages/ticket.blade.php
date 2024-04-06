
<!-- Heder -->
@include('layouts.components.pages.header')

<!-- Navbar -->
@include('layouts.components.pages.navbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-5">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-2 text-center welcome-text">Welcome To Suppport Helpdesk</h5>
                </div>
                <div class="card-body my-4">
                <form method="POST" action="{{ route('ticket.creates') }}">
                    @csrf
                    <div class="col-sm-12">

                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->id() }}">
                        <!-- select -->
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="option">
                                @foreach ($options as $option)
                                    <option value="{{ $option->name }}" id="{{ $option->name }}">{{ $option->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>topic</label>
                            <input type="text" class="form-control" id="topic" name="topic" placeholder="tes">
                        </div>

                        <div class="form-group">
                            <label>Select</label>
                            <textarea id="summernote" name="summernote"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="fas fa-download"></i> Seed
                    </button>
                </form>
                </div>
              </div>



          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  @include('layouts.components.pages.footer')

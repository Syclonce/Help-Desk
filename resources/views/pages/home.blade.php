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

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline  text-center">
                <div class="card-header">
                  <h5 class="m-2 text-center welcome-text">Welcome To Suppport Helpdesk</h5>
                </div>
                <div class="card-body my-4">
                <div class="row mb-4">
                   @guest
                    <div class="col mb-2">
                      <a href="{{ url('login') }}" style="text-decoration: none; color: inherit;">
                        <button type="button" class="btn btn-block btn-default btn-lg">
                            <i class="fa-solid fa-address-card"></i>
                            <br>
                            <span class="button-text">Login</span>
                        </button>
                      </a>
                    </div>
                    <div class="col">
                        <a href="{{ url('ticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-solid fa-ticket"></i>
                                <br>
                                <span class="button-text">Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ url('myticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-regular fa-newspaper"></i>
                                <br>
                                <span class="button-text">My Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-block btn-default btn-lg">
                          <i class="fa-regular fa-circle-question"></i>
                            <br>
                            <span class="button-text">Knowledge </span>
                        </button>
                    </div>
                    @endguest
                    @auth
                    <div class="col">
                        <a href="{{ url('ticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-solid fa-ticket"></i>
                                <br>
                                <span class="button-text">Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ url('myticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-regular fa-newspaper"></i>
                                <br>
                                <span class="button-text">My Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-block btn-default btn-lg">
                          <i class="fa-regular fa-circle-question"></i>
                            <br>
                            <span class="button-text">Knowledge </span>
                        </button>
                    </div>
                    @endauth
                  </div>
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

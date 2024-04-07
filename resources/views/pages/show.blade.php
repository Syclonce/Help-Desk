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
                <div class="card-body my-2">

                    <div class="center spacer">
                        <hr>
                        <div class="container" style="width: 80%;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <div style="text-align: left;">Help Topic : {{ $posts->option }}</div>
                                <div style="text-align: left;">Topic : {{ $posts->topic }}</div>
                            </div>
                            <hr>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-top: 10px;">
                                <div style="text-align: left;">Code Ticket : {{ $posts->post_code }}</div>
                                <div style="text-align: left;">Create : {{ $posts->created_at }}</div>
                            </div>

                        </div>
                        <hr>
                    </div>

                    <div class="timeline">
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-blue"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header">{{ $user->name }}</h3>

                            <div class="timeline-body">
                                {!! $posts->content !!}
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->


                        
                        @foreach ($comments as $comment)
                        <div>
                            <i class="fas fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">{{ $user->name }}</h3>
                                <div class="timeline-body">
                                    {!! $comment->body !!} <!-- Menggunakan $comment, bukan $Comment -->
                                </div>
                            </div>
                        </div>
                    @endforeach


                        <button type="button" id="replay-button" class="btn btn-primary float-right" style="margin-right: 5px;">
                            <i class="fas fa-download"></i> Replay
                          </button>
                    </div>
                </div>
            </div>

              <form action="{{ route('user.replay') }}" method="POST" id="response-form" style="display: none;">
                @csrf
                <input type="hidden" name="post_code" value="{{ $posts->post_code }}">
                <div class="form-group">
                    <textarea id="summernote" name="summernote"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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

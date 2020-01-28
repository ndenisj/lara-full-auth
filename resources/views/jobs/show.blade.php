@extends('layouts.master')
@section('PageTitle', $job->job_title)
@section('PageDescription', 'Job ShowPage Description')
@section('content')
    <!-- Page header -->
  <header class="site-header size-lg text-center" style="background-color: #ad78bc;">
  <div class="container">
    <div class="col-xs-12">
      <h2>{{$job->job_title}}</h2>
    </div>
  </div>
</header>
            <div class="container">
    <!-- END Page header -->
    <!-- Main container -->
    <main>
      <!-- Job detail -->
      <section>
        <div class="container">
          <div class="col-md-11 col-lg-12">
            <header class="section-header">
              <h2>Job Description</h2>
            </header>
          <article class="post">
            {{-- <h2>Job Description</h2> --}}
             <div class="blog-content">
          <p>{{ $job->job_description }} </p>
</div>
</div>
</article>
<!-- Sidebar -->

        </div>
      </section>
    </main>
    <!-- END Main container -->
 </div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Start Sidebar --}}
        @include('includes.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s EDit Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('dashboard.update', $job->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="job_title" class="col-sm-2 col-form-label">JOB TITLE</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ $job->job_title }}" class="form-control" id="job_title" name="job_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-sm-2 col-form-label">SLUG</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ old('slug') }}" class="form-control" id="slug" name="slug">
                              @error('slug')
                              <div class="alert alert-danger" style="padding:3px;">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="job_type" class="col-sm-2 col-form-label">JOB TYPE</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ $job->job_type }}" class="form-control" id="job_type" name="job_type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="salary" class="col-sm-2 col-form-label">SALARY</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ $job->salary }}" class="form-control" id="salary" name="salary">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="job_description" class="col-sm-2 col-form-label">JOB DESCRIPTION</label>
                            <div class="col-sm-10">
                              <textarea name="job_description" rows="10" id="job_description" class="form-control">{{ $job->job_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-info">CREATE JOB</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

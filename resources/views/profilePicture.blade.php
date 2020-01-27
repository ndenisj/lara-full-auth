@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Start Sidebar --}}
        @include('includes.sidebar')

        <div class="col-md-9">
            @if (session()->get('message'))
                <div class="alert alert-success">
                <strong>{{ session()->get('message') }}</strong>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Change Profile Picture</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ route('profilepictureupload') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="avatar" class="form-control">
                            @error('avatar')
                            <div class="alert alert-danger">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Upload Picture</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

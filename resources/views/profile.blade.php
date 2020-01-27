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
                <div class="card-header">{{ Auth::user()->name }}'s Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('profileupdate') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">NAME</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" id="name">
                            @error('name') 
                            <div class="alert alert-danger">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" id="email">
                            @error('email') 
                            <div class="alert alert-danger">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

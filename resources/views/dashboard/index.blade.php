@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Start Sidebar --}}
        @include('includes.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s Index Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>JOB TITLE</th>
                                <th colspan="2">ACTIONS</th>    
                            </tr>    
                        </thead>    
                        <tbody>
                            @foreach ($jobs as $job)    
                            <tr>
                                <td>{{ $job->job_title }}</td>
                                <td>
                                    <a href="{{ route('dashboard.edit', $job->id) }}" class="btn btn-sm btn-info">EDIT</a>
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.destroy', $job->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit'" class="btn btn-sm btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

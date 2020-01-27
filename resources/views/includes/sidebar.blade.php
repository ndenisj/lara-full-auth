<div class="col-md-3">
    <div class="card">
        <div class="card-header">SIDEBAR</div>
        <div class="card p-2">
            <img src="/img/avatar/{{Auth::user()->avatar}}" style="width:150px;height:150px;" class="img-fluid mx-auto d-block" alt="">
        </div>
        <div class="card-body">
            <a href="{{ route('home') }}" class="btn btn-primary btn-block">DASHBOARD</a>
            <a href="{{ route('profile') }}" class="btn btn-primary btn-block">PROFILE</a>
            <a href="{{ route('changepassword') }}" class="btn btn-primary btn-block">CHANGE PASSWORD</a>
            <a href="{{ route('profileavatar') }}" class="btn btn-primary btn-block">CHANGE PROFILE PIC.</a>
        </div>
    </div>
</div>
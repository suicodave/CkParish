<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">{{config('app.name')}}</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a id="app" class="navbar-brand mx-auto" href="#">

            <datetime-notifier></datetime-notifier>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{route('auth.logout')}}">
                    <span class="fa fa-sign-out-alt text-white"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
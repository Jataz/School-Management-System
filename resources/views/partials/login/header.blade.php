<!-- Main navbar -->
<?php

use App\Helpers\Qs;  // Import the Qs class here

// Your HTML code or PHP logic
?>
<style>
    .logo {
    height: 40px;
    vertical-align: middle;
    margin-right: 10px; /* Add space between the logo and the text */
}

</style>

<div class="navbar navbar-expand-md navbar-light">
    <div class="mt-2 mr-5">
        <a  class="d-inline-block font-size-lg">
            <img src="{{ asset('global_assets/images/favicon.png') }}" alt="Logo" class="logo" style="height: 40px; vertical-align: middle;">
            {{ Qs::getSystemName() }}
        </a>
    </div>


    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="{{ route('home') }}" class="navbar-nav-link">
                    <i class="icon-home"></i>
                    <span class="d-md-none ml-2">Home</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" class="navbar-nav-link">
                    <i class="icon-user-tie"></i>
                    <span class="d-md-none ml-2">My Account</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-cog3"></i>
                    <span class="d-md-none ml-2">Options</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

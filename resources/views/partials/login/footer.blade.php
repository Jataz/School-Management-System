<?php

use App\Helpers\Qs;  // Import the Qs class here

// Your HTML code or PHP logic
?>
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse text-center d-flex justify-content-center" id="navbar-footer">
        <span class="navbar-text font-size-sm">
            &copy; {{ date('Y') }}. <a href="#">{{ Qs::getSystemName() }}</a> by <a href="#">SWIFT MATRIX NETWORKS ACADEMY</a>
        </span>
    </div>

</div>

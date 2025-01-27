<?php
    sessoin_start();
    print_r($_SESSION);
    // session_unset(); // for remove all session data
    // session_destroy(); // for delete all session data
    unset($_SESSION['hello']); // for delete specific session variable

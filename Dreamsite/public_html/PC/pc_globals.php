<?php
	//pc_globals.php

    // Two colors for doing rows in tables
    $C1 = "#FFFFFF";
    $C2 = "#CEEBF5";

    // Used to alternate colors (ac) between the
    // two main ones for the rows of tables.
    function ac( &$cur ) {

    	if ( $cur == $C1 ) {
    		$cur = $C2;
    	} else {
    		$cur = $C1;
    	}
    	return $cur;
    }

    // Get browser information
    // Example. Planetweb 2.6 returns:
    // Mozilla/3.0 (Planetweb/2.606 JS SSL VoIP US; Dreamcast US)
    $browser = $_SERVER['HTTP_USER_AGENT'];

    // Check if their browser is dreamcast.
    // This allows us the option to serve pages
    // differently to dreamcast than we would to a PC
    if ( strpos( strtolower( $browser ), 'dreamcast' ) !== false ) {
        $dreamBrowser = true;
    } else {
        $dreamBrowser = false;
    }
?>
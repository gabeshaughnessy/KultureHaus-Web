<?php

/* Remove thesis attribution link*/

remove_action('thesis_hook_footer', 'thesis_attribution');



/*Remove Category Line*/

remove_action('thesis_hook_archive_info', 'thesis_default_archive_info' );





/* remove comments link */

remove_action('thesis_hook_after_post', 'thesis_comments_link');

/* Header Customization, mitches! */

remove_action ('thesis_hook_before_header', 'thesis_nav_menu');      // Remove original menu

add_action    ('thesis_hook_after_header',  'thesis_nav_menu');   // Add our new menu below header.

remove_action('thesis_hook_header', 'thesis_default_header');



function custom_header() { ?>

<div id="logoReplacement">

<div id="title_area">

<div class="page">

<div id="logoheader">

<a href="http://kulturehaus.com/wordpress"><span>KultureHaüs</span></a>

<?php thesis_default_header(); ?>

</div>

</div>

</div>

</div>

<?php

}



add_action('thesis_hook_header', 'custom_header');





?>
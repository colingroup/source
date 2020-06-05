<?php
/* (C) Websplosion LTD., 2001-2014

IMPORTANT: This is a commercial software product
and any kind of using it must agree to the Websplosion's license agreement.
It can be found at http://www.chameleonsocial.com/license.doc

This notice may not be removed from the source code. */

$g['set_options'] = array(
    'fields_not_available' => array(454,455,456,457,458,459,460,468,472,485,473,494,552,541,542,708),
    'not_display_module' => array('profile_colum_narrow', 'profile_head', 'profile_photos_init', 'people_nearby_spotlight', 'profile_charts', 'search_filter', 'wall_custom_content'),
    'main_page_by_first_menu_item' => 'Y',
    'hide_profile_settings' => array('set_who_view_profile', 'set_can_comment_photos', 'set_notif_new_msg', 'set_notif_new_comments',
                                     'set_notif_profile_visitors', 'set_notif_mutual_attraction', 'set_notif_want_to_meet_you',
                                     'set_notif_voted_photos', 'set_do_not_show_me_visitors', 'set_hide_my_presence', 'set_notif_push_notifications', 'set_notif_show_my_age'),
);

Common::setOptionRuntime('N', 'no_profiles_without_photos_search');
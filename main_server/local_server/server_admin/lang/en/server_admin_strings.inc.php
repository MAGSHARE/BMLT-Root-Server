<?php
/***********************************************************************/
/** \file	search_results_strings.inc.php
	\brief	The strings displayed in the search results for this language (English)
    
    This file is part of the Basic Meeting List Toolbox (BMLT).
    
    Find out more at: http://bmlt.magshare.org

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this code.  If not, see <http://www.gnu.org/licenses/>.*/
	defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.
	
	$comdef_server_admin_strings = array (  'account_disclosure'                                    =>  'My Account',
	                                        'account_name_label'                                    =>  'My Account Name:',
	                                        'account_login_label'                                   =>  'My Login:',
	                                        'account_type_label'                                    =>  'I Am A:',
	                                        'account_type_1'                                        =>  'Server Administrator',
	                                        'account_type_2'                                        =>  'Service Body Administrator',
	                                        'account_type_3'                                        =>  'Service Body Editor',
	                                        'account_type_4'                                        =>  'Pathetic Luser Who Shouldn\'t Even Have Access to This Page -The Author of the Software Pooched it BAD!',
	                                        'account_type_5'                                        =>  'Service Body Observer',
	                                        'change_password_label'                                 =>  'Change My Password To:',
	                                        'change_password_default_text'                          =>  'Leave This Alone If You Don\'t Want To Change Your Password',
	                                        'account_email_label'                                   =>  'My Email Address:',
	                                        'email_address_default_text'                            =>  'Enter An Email Address',
	                                        'account_description_label'                             =>  'My Description:',
	                                        'account_description_default_text'                      =>  'Enter A Description',
	                                        'account_change_button_text'                            =>  'Change My Account Settings',
	                                        'account_change_fader_success_text'                     =>  'The Account Information Was Successfully Changed',
	                                        'account_change_fader_failure_text'                     =>  'The Account Information Was Not Changed',
	                                        'meeting_editor_disclosure'                             =>  'Meeting Editor',
	                                        'meeting_editor_already_editing_confirm'                =>  'You are currently editing another meeting. Do you want to lose all changes in that meeting?',
	                                        'meeting_change_fader_success_text'                     =>  'The Meeting Was Successfully Changed',
	                                        'meeting_change_fader_failure_text'                     =>  'The Meeting Was Not Changed',
	                                        'meeting_change_fader_success_delete_text'              =>  'The Meeting Was Successfully Deleted',
	                                        'meeting_change_fader_fail_delete_text'                 =>  'The Meeting Was Not Deleted',
	                                        'meeting_change_fader_success_add_text'                 =>  'The New Meeting Was Successfully Added',
	                                        'meeting_change_fader_fail_add_text'                    =>  'The New Meeting Was Not Added',
	                                        'meeting_text_input_label'                              =>  'Search For Text:',
	                                        'access_service_body_label'                             =>  'I Have Access to:',
	                                        'meeting_text_input_default_text'                       =>  'Enter Some Search Text',
	                                        'meeting_text_location_label'                           =>  'This is a Location or PostCode',
	                                        'meeting_search_weekdays_label'                         =>  'Search For Selected Weekdays:',
	                                        'meeting_search_weekdays_names'                         =>  array ( 'All', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),
	                                        'meeting_search_service_bodies_label'                   =>  'Search In Selected Service Bodies:',
	                                        'meeting_search_start_time_label'                       =>  'Search By Meeting Start Time:',
	                                        'meeting_search_start_time_all_label'                   =>  'Any Time',
	                                        'meeting_search_start_time_morn_label'                  =>  'Morning',
	                                        'meeting_search_start_time_aft_label'                   =>  'Afternoon',
	                                        'meeting_search_start_time_eve_label'                   =>  'Evening',
	                                        'meeting_search_no_results_text'                        =>  'No Meetings Found',
	                                        'meeting_editor_tab_specifier_text'                     =>  'Search For Meetings',
	                                        'meeting_editor_tab_editor_text'                        =>  'Edit Meetings',
	                                        'meeting_editor_create_new_text'                        =>  'Create A New Meeting',
	                                        'meeting_editor_location_map_link'                      =>  'Location Map',
	                                        'meeting_editor_screen_match_map_button'                =>  'Set Map to Address',
	                                        'meeting_editor_screen_default_text_prompt'             =>  'Enter Some Text or a Number',
	                                        'meeting_is_published'                                  =>  'Meeting is Published',
	                                        'meeting_editor_screen_meeting_name_label'              =>  'Meeting Name:',
	                                        'meeting_editor_screen_meeting_name_prompt'             =>  'Enter A Meeting Name',
	                                        'meeting_editor_screen_meeting_weekday_label'           =>  'Weekday:',
	                                        'meeting_editor_screen_meeting_start_label'             =>  'Meeting Start Time:',
	                                        'meeting_editor_screen_meeting_am_label'                =>  'AM',
	                                        'meeting_editor_screen_meeting_pm_label'                =>  'PM',
	                                        'meeting_editor_screen_meeting_noon_label'              =>  'Noon',
	                                        'meeting_editor_screen_meeting_midnight_label'          =>  'Midnight',
	                                        'meeting_editor_screen_meeting_duration_label'          =>  'Duration:',
	                                        'meeting_editor_screen_meeting_oe_label'                =>  'Open-Ended',
	                                        'meeting_editor_screen_meeting_cc_label'                =>  'World Committee Code:',
	                                        'meeting_editor_screen_meeting_cc_prompt'               =>  'Enter A World Committee Code',
	                                        'meeting_editor_screen_meeting_contact_label'           =>  'Meeting Email Contact:',
	                                        'meeting_editor_screen_meeting_contact_prompt'          =>  'Enter An Email for A Contact Specific Only to This Meeting',
	                                        'meeting_editor_screen_meeting_sb_label'                =>  'Service Body:',
	                                        'meeting_editor_screen_meeting_sb_default_value'        =>  'No Service Body Selected',
	                                        'meeting_editor_screen_meeting_longitude_label'         =>  'Longitude:',
	                                        'meeting_editor_screen_meeting_longitude_prompt'        =>  'Enter A Longitude',
	                                        'meeting_editor_screen_meeting_latitude_label'          =>  'Latitude:',
	                                        'meeting_editor_screen_meeting_latitude_prompt'         =>  'Enter A Latitude',
	                                        'meeting_editor_screen_meeting_location_label'          =>  'Location:',
	                                        'meeting_editor_screen_meeting_location_prompt'         =>  'Enter A Location Name (Like a Building Name)',
	                                        'meeting_editor_screen_meeting_info_label'              =>  'Extra Info:',
	                                        'meeting_editor_screen_meeting_info_prompt'             =>  'Enter Any Additional Location Information',
	                                        'meeting_editor_screen_meeting_street_label'            =>  'Street Address:',
	                                        'meeting_editor_screen_meeting_street_prompt'           =>  'Enter A Street Address',
	                                        'meeting_editor_screen_meeting_neighborhood_label'      =>  'Neighborhood:',
	                                        'meeting_editor_screen_meeting_neighborhood_prompt'     =>  'Enter A Neighborhood (Not Borough or City Subsection)',
	                                        'meeting_editor_screen_meeting_borough_label'           =>  'Borough/City Subsection:',
	                                        'meeting_editor_screen_meeting_borough_prompt'          =>  'Enter A Borough or City Subsection (Not Neighborhood)',
	                                        'meeting_editor_screen_meeting_city_label'              =>  'City/Town:',
	                                        'meeting_editor_screen_meeting_city_prompt'             =>  'Enter A City or Town Name (Not County or Borough)',
	                                        'meeting_editor_screen_meeting_county_label'            =>  'County/Sub-Province:',
	                                        'meeting_editor_screen_meeting_county_prompt'           =>  'Enter A County or Sub-Province Name',
	                                        'meeting_editor_screen_meeting_state_label'             =>  'State/Province:',
	                                        'meeting_editor_screen_meeting_state_prompt'            =>  'Enter A State or Province Name',
	                                        'meeting_editor_screen_meeting_zip_label'               =>  'Zip Code/Postal Code:',
	                                        'meeting_editor_screen_meeting_zip_prompt'              =>  'Enter A Postal Code',
	                                        'meeting_editor_screen_meeting_nation_label'            =>  'Nation:',
	                                        'meeting_editor_screen_meeting_nation_prompt'           =>  'Enter The Nation Name',
	                                        'meeting_editor_screen_meeting_publish_search_prompt'   =>  'Look For:',
	                                        'meeting_editor_screen_meeting_publish_search_pub'      =>  'Published Meetings Only',
	                                        'meeting_editor_screen_meeting_publish_search_unpub'    =>  'Unpublished Meetings Only',
	                                        'meeting_editor_screen_meeting_visibility_advice'       =>  'This is never displayed in normal meeting searches.',
	                                        'meeting_editor_screen_meeting_publish_search_all'      =>  'All Meetings',
	                                        'meeting_editor_screen_meeting_create_button'           =>  'Create A New Meeting',
	                                        'meeting_editor_screen_delete_button'                   =>  'Delete This Meeting',
	                                        'meeting_editor_screen_delete_perm_checkbox'            =>  'Delete This Meeting Permanently',
	                                        'meeting_editor_screen_delete_button_confirm'           =>  'Are you sure that you want to delete this meeting?',
	                                        'meeting_editor_screen_delete_button_confirm_perm'      =>  'This meeting will be deleted permanently!',
	                                        'meeting_editor_screen_cancel_button'                   =>  'Cancel',
	                                        'logout'                                                =>  'Sign Out',
	                                        'meeting_editor_screen_cancel_confirm'                  =>  'Are you sure that you want to cancel editing this meeting, and lose all changes?',
	                                        'meeting_lookup_failed'                                 =>  'The address lookup failed.',
	                                        'meeting_lookup_failed_not_enough_address_info'         =>  'There is not enough valid address information to do a lookup.',
	                                        'meeting_create_button_name'                            =>  'Save This As A New Meeting',
	                                        'meeting_saved_as_a_copy'                               =>  'Save This Meeting As A Copy (Creates A New Meeting)',
	                                        'meeting_save_buttonName'                               =>  'Save the Changes to This Meeting',
	                                        'meeting_editor_tab_bar_basic_tab_text'                 =>  'Basic',
	                                        'meeting_editor_tab_bar_location_tab_text'              =>  'Location',
	                                        'meeting_editor_tab_bar_format_tab_text'                =>  'Format',
	                                        'meeting_editor_tab_bar_other_tab_text'                 =>  'Other',
	                                        'meeting_editor_tab_bar_history_tab_text'               =>  'History',
	                                        'meeting_editor_result_count_format'                    =>  '%d Meetings Found',
	                                        'meeting_id_label'                                      =>  'Meeting ID:',
	                                        'meeting_editor_default_zoom'                           =>  '13',
	                                        'meeting_editor_default_weekday'                        =>  '2',
	                                        'meeting_editor_default_start_time'                     =>  '20:30:00',
	                                        'meeting_editor_default_duration'                       =>  '01:30:00',
	                                        'login_banner'                                          =>  'Basic Meeting List Toolbox',
	                                        'login_underbanner'                                     =>  'Root Server Administration Console',
											'login'                                                 =>  'Login ID',
                                            'password'                                              =>  'Password',
                                            'button'                                                =>  'Log In',
                                            'cookie'                                                =>  'You must enable cookies in order to administer this server.',
                                            'noscript'                                              =>  'You cannot administer this site without JavaScript.',
                                            'title'                                                 =>  'Please log in to administer the server.',
											'edit_Meeting_object_not_found'                         =>  'ERROR: The meeting was not found.',
 											'edit_Meeting_object_not_changed'                       =>  'ERROR: The meeting was not changed.',
 											'edit_Meeting_auth_failure'                             =>  'You are not authorized to edit this meeting.',
                                            'not_auth_1'                                            =>  'NOT AUTHORIZED',
                                            'not_auth_2'                                            =>  'You are not authorized to administer this server.',
                                            'not_auth_3'                                            =>  'There was a problem with the user name or password that you entered.',
											'email_format_bad'                                      =>  'The email address that you entered was not formatted correctly.',
											'history_header_format'                                 =>  '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">by %s</span></div>',
											'history_no_history_available_text'                     =>  '<h1 class="bmlt_admin_no_history_available_h1">No History Available For This Meeting</h1>',
											'service_body_editor_disclosure'                        =>  'Service Body Administration',
	                                        'service_body_change_fader_success_text'                =>  'The Service Body Was Successfully Changed',
	                                        'service_body_change_fader_fail_text'                   =>  'The Service Body Change Failed',
	                                        'service_body_editor_screen_sb_id_label'                =>  'ID:',
	                                        'service_body_editor_screen_sb_name_label'              =>  'Name:',
	                                        'service_body_name_default_prompt_text'                 =>  'Enter the Name of This Service Body',
	                                        'service_body_editor_screen_sb_admin_user_label'        =>  'Primary Admin:',
	                                        'service_body_editor_screen_sb_admin_description_label' =>  'Description:',
	                                        'service_body_description_default_prompt_text'          =>  'Enter A Description of This Service Body',
	                                        'service_body_editor_screen_sb_admin_email_label'       =>  'Contact Email:',
	                                        'service_body_email_default_prompt_text'                =>  'Enter A Contact Email Address for This Service Body',
	                                        'service_body_editor_screen_sb_admin_uri_label'         =>  'Web Site URL:',
	                                        'service_body_uri_default_prompt_text'                  =>  'Enter A Web Site URL for This Service Body',
	                                        'service_body_editor_screen_sb_admin_full_editor_label' =>  'Full Meeting List Editors:',
	                                        'service_body_editor_screen_sb_admin_full_editor_desc'  =>  'These Users Can Edit Any Meetings In This Service Body.',
	                                        'service_body_editor_screen_sb_admin_editor_label'      =>  'Basic Meeting List Editors:',
	                                        'service_body_editor_screen_sb_admin_editor_desc'       =>  'These Users Can Edit Any Meetings In This Service Body, But Only If They Are Unpublished.',
	                                        'service_body_editor_screen_sb_admin_observer_label'    =>  'Observers:',
	                                        'service_body_editor_screen_sb_admin_observer_desc'     =>  'These Users Can See Hidden Info (Like Email Addresses), But Cannot Edit Anything.',
	                                        'service_body_dirty_confirm_text'                       =>  'You have made changes to this Service Body. Do you want to lose your changes?',
	                                        'service_body_save_button'                              =>  'Save The Changes To This Service Body',
	                                        'service_body_create_button'                            =>  'Create This Service Body',
	                                        'service_body_delete_button'                            =>  'Delete This Service Body',
	                                        'service_body_delete_perm_checkbox'                     =>  'Delete This Service Body Permanently',
	                                        'service_body_delete_button_confirm'                    =>  'Are you sure that you want to delete this Service body?',
	                                        'service_body_delete_button_confirm_perm'               =>  'This Service body will be deleted permanently!',
	                                        'service_body_change_fader_create_success_text'         =>  'The Service Body Was Successfully Created',
	                                        'service_body_change_fader_create_fail_text'            =>  'The Service Body Create Failed',
	                                        'service_body_change_fader_delete_success_text'         =>  'The Service Body Was Successfully Deleted',
	                                        'service_body_change_fader_delete_fail_text'            =>  'The Service Body Delete Failed',
	                                        'service_body_change_fader_fail_no_data_text'           =>  'The Service Body Change Failed, Because There Was No Data Supplied',
	                                        'service_body_change_fader_fail_cant_find_sb_text'      =>  'The Service Body Change Failed, Because The Service Body Was Not Found',
	                                        'service_body_change_fader_fail_cant_update_text'       =>  'The Service Body Change Failed, Because The Service Body Was Not Updated',
	                                        'service_body_cancel_button'                            =>  'Restore To Original',
	                                        'service_body_editor_type_label'                        =>  'Service Body Type:',
	                                        'service_body_editor_type_c_comdef_service_body__GRP__' =>  'Group',
	                                        'service_body_editor_type_c_comdef_service_body__ASC__' =>  'Area Service Committee',
	                                        'service_body_editor_type_c_comdef_service_body__RSC__' =>  'Regional Service Conference',
	                                        'service_body_editor_type_c_comdef_service_body__WSC__' =>  'World Service Conference',
	                                        'service_body_editor_type_c_comdef_service_body__MAS__' =>  'Metro Area',
	                                        'service_body_editor_type_c_comdef_service_body__ZFM__' =>  'Zonal Forum',
	                                        'edit_Meeting_meeting_id'                               =>  'Meeting ID:',
                                            'service_body_editor_create_new_sb_option'              =>  'Create A New Service Body',
                                            'service_body_meeting_editor_note'                      =>  'If you use the meeting editor after this operation, the Service Body popup menu will not be accurate. You must sign out, then sign back in, to ensure that the meeting editor will be accurate.',
	                                        'service_body_editor_screen_world_cc_label'             =>  'World Committee Code:',
	                                        'service_body_editor_screen_world_cc_prompt'            =>  'Enter A World Committee Code',
											'user_editor_disclosure'                                =>  'User Administration',
											'user_editor_create_new_user_option'                    =>  'Create A New User',
											'user_editor_screen_sb_id_label'                        =>  'ID:',
	                                        'user_editor_account_login_label'                       =>  'User Login:',
											'user_editor_login_default_text'                         =>  'Enter the User Login',
	                                        'user_editor_account_type_label'                        =>  'User Is A:',
	                                        'user_editor_account_type_1'                            =>  'Server Administrator',
	                                        'user_editor_account_type_2'                            =>  'Service Body Administrator',
	                                        'user_editor_account_type_3'                            =>  'Service Body Editor',
	                                        'user_editor_account_type_5'                            =>  'Service Body Observer',
	                                        'user_editor_account_type_4'                            =>  'Disabled User',
											'user_editor_account_name_label'                        =>  'User Name:',
											'user_editor_name_default_text'                         =>  'Enter the User Name',
											'user_editor_account_description_label'                 =>  'Description:',
											'user_editor_description_default_text'                  =>  'Enter the User Description',
											'user_editor_account_email_label'                       =>  'Email:',
											'user_editor_email_default_text'                        =>  'Enter the User Email',
	                                        'user_change_fader_success_text'                        =>  'The User Was Successfully Changed',
	                                        'user_change_fader_fail_text'                           =>  'The User Change Failed',
	                                        'user_change_fader_create_success_text'                 =>  'The User Was Successfully Created',
	                                        'user_change_fader_create_fail_text'                    =>  'The User Create Failed',
	                                        'user_change_fader_delete_success_text'                 =>  'The User Was Successfully Deleted',
	                                        'user_change_fader_delete_fail_text'                    =>  'The User Delete Failed',
	                                    );
?>
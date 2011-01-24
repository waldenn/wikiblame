<?php
/** WikiBlame
 *
 */

/** English
 *
 * See the qqq 'language' for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Flominator
 * @author Siebrand
 */

$text_dir = 'ltr';

//Month names
$messages['January'] = 'January';
$messages['February'] = 'February';
$messages['March'] = 'March';
$messages['April'] = 'April';
$messages['May'] = 'May';
$messages['June'] = 'June';
$messages['July'] = 'July';
$messages['August'] = 'August';
$messages['September'] = 'September';
$messages['October'] = 'October';
$messages['November'] = 'November';
$messages['December'] = 'December';

//Form elements
$messages['ui_lang'] = 'Display language';
$messages['lang'] = 'Language';
$messages['lang_example'] = 'en, commons, …';
$messages['project'] = 'Project';
$messages['project_example'] = 'wikipedia, wikisource, wikimedia, …';
$messages['article'] = 'Page';
$messages['needle'] = 'Search for';
$messages['skipversions'] = 'Always skip x versions';
$messages['ignorefirst'] = 'Ignore first x versions';
$messages['limit'] = 'Versions to check';
$messages['start_date'] = 'Start date';
$messages['date_format'] = 'MM DD, YYYY';
$messages['order'] = 'Order';
$messages['newest_first'] = 'latest first';
$messages['oldest_first'] = 'oldest first';
$messages['search_method'] = 'Search method';
$messages['binary'] = 'binary';
$messages['binary_in_wp'] = 'http://en.wikipedia.org/wiki/Binary_search_algorithm';
$messages['linear'] = 'linear';

$messages['interpolated'] = 'binary (faster with more versions)';
$messages['ignore_minors'] = 'ignore minor changes (experimental)';
$messages['force_wikitags'] = 'force searching for wikitext';
$messages['start'] = 'Start';
$messages['reset'] = 'Reset';
$messages['manual'] = 'Manual';
$messages['manual_link'] = 'http://en.wikipedia.org/wiki/User:Flominator/WikiBlame';
$messages['contact'] = 'Contact';
$messages['contact_link'] = 'http://de.wikipedia.org/wiki/Benutzer Diskussion:Flominator/WikiBlame';
$messages['get_less_versions'] = "Your search might query __NUMREVISIONS__ revisions at one time. In order to protect the server, you are only allowed to query for __ALLOWEDREVISIONS__ per call. Please change the settings or switch the search method to binary!";

//Output elements
$messages['wrong_skips'] = 'Wrong settings: If the first __VERSIONSTOSKIP__ versions are skipped, then none of the __VERSIONSTOSEARCH__ versions to be searched will be processed.';

$messages['search_in_progress_text'] = 'The version history of _ARTICLELINK_ is being searched for <b>_NEEDLE_</b> as plain text';

$messages['search_in_progress_wikitags'] = 'The version history of _ARTICLELINK_ is being searched for <b>_NEEDLE_</b> as wiki text';

$messages['no_differences'] = 'No differences found in searched revisions.';
$messages['no_differences_insertion'] = 'No differences found, checking earliest revision found:';
$messages['first_version'] = 'Change must have happened in first or latest revision?';
$messages['execution_time'] = 'Execution time: _EXECUTIONTIME_ seconds';
$messages['versions_found'] = '_NUMBEROFVERSIONS_ versions found';
$messages['please_wait'] = 'Please wait …';
$messages['binary_test'] = 'Comparing differences in _FIRSTDATEVERSION_ between _FIRSTNUMBER_ and _SECONDNUMBER_ while coming from _SOURCENUMBER_:';
$messages['insertion_found'] = 'Insertion found between LEFT_VERSION and RIGHT_VERSION';
$messages['deletion_found'] = 'Deletion found between LEFT_VERSION and RIGHT_VERSION';
$messages['help_translating'] = 'Help translating at translatewiki.net';
$messages['start_here'] = 'Search from here';
$messages['too_much_versions'] = 'You have reached your query limit of __VERSIONLIMIT__ versions. Please try again in __WAITMINUTES__ minutes or switch to binary search. Sorry for the inconvenience.';
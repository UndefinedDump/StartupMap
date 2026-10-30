<?php
$db_host = "localhost";
$db_name = "startupmap_db";
$db_user = "startupmap_user";
$db_pass = "9Pg1w90g!%";
$admin_user = "matbrgz";
$admin_pass = "dnB3eX#3Y5@6CEsDrcBxUAT7er7P@CT!";
$sg_enabled = false;
$sg_auth_code = '';
$sg_location = '';
$sg_frequency = "3600";
$show_events = true;
$eb_app_key = "";
$eb_keywords = implode("%20OR%20", ['startup', 'startups']);
$eb_city = "Belo+Horizonte";
$eb_within_radius = 50;
$head_html = "";
$title_tag = "Startup Map by The Digital One";
$lat_lng = "34.034453,-118.341293";
$domain = "http://startup.thedigital.one";
$twitter = ["share_text" => "Let's put Los Angeles startups on the map:", "username" => "representla"];
$blurb = "This map was made to connect and promote the Los Angeles tech startup community.  Let's put LA on the map!";
$attribution = "
  <span>
    Based on <a href='http://www.represent.la' target='_blank'>RepresentLA</a>
  </span>
";
if($sg_enabled) {
  $attribution .= "
    <br /><br />
    Data from <a target='_blank' href='http://www.startupgenome.com'>StartupGenome</a>
  ";
}
?>

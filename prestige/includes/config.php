<?php if (!defined('FLUX_ROOT')) exit;


# ==========================================================================================================
# [HTML Meta data]
# ==========================================================================================================
# This part handles the info for search engine. For example, it will display the additional infomation when you share your
# FluxCP links via Discord. This option is optional and thus there is no need to define this if you are not sure.
# However, we still provide you with a simple example.
$config['meta_desc'] = "prestige is a fun private Ragnarok Online server.";

# this settings will display the image when sharing via Discord
# recommended size: 1200 x 630 pixels
$config['meta_image'] = $this->themePath('includes/img/og-image.png');

# ==========================================================================================================
# [Preloader Animation]
# ==========================================================================================================
# the template may take some time to load and during this process, some parts might displayed in the wrong
# positions. And thus makes the template looks a bit weird. To prevent this disjointed feeling, the template
# also comes with a preloader animation. Which you can disable in the option below.
$config['enable_preloader_animation'] = true;

# ==========================================================================================================
# [Navigations]
# ==========================================================================================================
# Top navigation bar in this template displays the navigations that you have defined in the flux
# configuration settings in
#
#       config/application.php
#

# ==========================================================================================================
# [Main Section]
# ==========================================================================================================
# The main section or something we usually call it as splash section, are the top most part of the theme.
# these are the links that will be shown to the user after they login.
#
#   title   refers to the name of the link
#   link    refers to the actual link of the page. Take note that the code :
#
#               $this->url('<module>', '<action>');
#
#           refers to links within FluxCP. You can use the normal link you copy from the address bar from
#           your browser as well. Using this option to link to a custom page written using FluxCP, you will
#           need to use:
#
#               $this->url('pages', 'content&path=<PageTitle>');
#
$config['main_account'] = array(
    array(
        'title' => '<i class="fa-solid fa-user-gear fa-sm"></i> My Account',
        'link'  => $this->url('account','view'),
    ),
    // example
    // array(
    //     'title' => '<i class="fa-brands fa-discord fa-sm"></i> Discord',
    //     'link'  => "https://discord.org",
    // ),
    array(
        'title' => '<i class="fa-solid fa-lock fa-sm"></i> Change Password',
        'link'  => $this->url('account', 'changepass'),
    ),
    array(
        'title' => '<i class="fa-solid fa-right-from-bracket fa-sm"></i> Logout',
        'link'  => $this->url('account','logout'),
    ),
);


# ==========================================================================================================
# [News Section]
# ==========================================================================================================
# The following configurations are use to define the news to automatically fetch using RSS feed.
#
# this option displays the "author" for the news. Please take note that RSS from the forum normally does **NOT**
# provide any author details.
# Leave it empty to disable.
$config['fake_author_name'] = "NubsPixel";
#

# You can change the date format in config/application.php
# Find the option: 'DateFormat'
# You might also want to update your timezone: 'DateDefaultTimezone',
# Please refer to http://php.net/timezones for the correct timezone,
#   Example: 'Asia/Singapore'

# the 'category_name' defines the category title displayed as a badge next to the date
# the 'category_img' defines the background image of that particular category
# the 'feed_url' defines the link of your RSS feed.
# The 'feed_type' defines what kind of RSS feed provided to the theme.
# For example, Invasion Power Board forum uses RSS. While, phpBB3 forum uses ATOM.
# You can test it on your feed links, if it doesn't show up, you can use the other type

$config['news_feed'] = array(
    array(
        'category_name'         => 'News',
        'feed_url'              => 'https://rathena.org/board/rss/2-latest-development-announcements.xml/',
        'feed_type'             => 'rss',
    ),
    array(
        'category_name'         => 'Events',
        'feed_url'              => 'https://rathena.org/board/rss/2-latest-development-announcements.xml/',
        'feed_type'             => 'rss',
    ),
    array(
        'category_name'         => 'Patch Notes',
        'feed_url'              => 'https://rathena.org/board/rss/2-latest-development-announcements.xml/',
        'feed_type'             => 'rss',
    ),
);
# ============ IMPORTANT! ============
# This feed system uses caching system. If you deleted a news on the feed source, the news on the website will
# still be displayed normally. To ensure the news in website is displayed correctly, please also delete
# the files inside the cache folder.
#
#       fluxCP/themes/prestige/includes/fcache/*


# ==========================================================================================================
# [About Section]
# ==========================================================================================================
# this option is to edit the text for the about section
$config['about_text'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, ligula sed dapibus vestibulum, ex arcu bibendum ex, quis tempus nisl sem nec magna. Pellentesque ornare, dolor ut euismod porta, dolor nisi semper eros, vitae gravida odio dui quis risus. Aenean ornare facilisis nulla, sed volutpat justo. <a href="#">Read more...</a>';

# this config is to display the statistics in the about section
$config['display_char_stats'] = true;
$config['display_acc_stats'] = false;

# -- fake values --
# This is to increase the number of players displayed on the website
# pad means adding the value
# fold means multiplaying the value
$config['new_acc_pad'] = 0;
$config['new_char_pad'] = 0;

# WARNING! setting the fold value to 0 will result in 0.
$config['new_acc_fold'] = 1;
$config['new_char_fold'] = 1;

# define how many days to keep track of the statistics
# example:
#   30 = from today until the previous 30 days
#   90 = from today until the previous 90 days
$config['statistics_interval'] = 30;

# ==========================================================================================================
# [Streamer (Support) Section]
# ==========================================================================================================
# The main text to attract people to the streamer section

# The text that describe the streamer section
$config['streamer_text'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget ante sed massa egestas vulputate. Cras eget elit et ipsum blandit condimentum eu eu lectus. Nunc leo nibh, scelerisque at fermentum mollis, pulvinar in urna. Praesent consectetur posuere ligula, finibus ullamcorper massa laoreet ac. <a href="#">Read more...</a>';

# The button below the text
$config['streamer_btn_title'] = "Download Now";
$config['streamer_btn_link'] = $this->url('main', 'download'); # this page does not exist.

# The twitch embed player autoplays on load (recommended: false).
# This is a problem with mobile user who use DATA plans. Their bandwidth quota usage will go down the drain quickly
# if left enabled
$config['streamer_autoplay'] = false;

# the twitch embed player is muted on load (recommended: true).
# No body likes the some random audio to pops out when you open a webpage
# If you really want to enable the autoplay, at least make the player muted.
$config['streamer_muted'] = true;

# Add as many streamer as you wish. it will display one at random
# Make sure its the streaming URL you copied from the address bar.
# both twitch and youtube are supported
$config['streamer_channel_name'] = array(
  'https://www.youtube.com/watch?v=_hb0L2t3P3Y',
  'https://www.twitch.tv/admiralbahroo'
);


# ==========================================================================================================
# [Staff Section]
# ==========================================================================================================

# the 'name' defines the name of the staff
# the 'role' defines the role of the staff
# the 'img'  defines the char sprite of the staff
#            note: This can be generated using RMS's Char Simulator: https://ro-character-simulator.ratemyserver.net/

$config['staff'] = [
  [
    'name' => 'Doom',
    'role' => 'Founder',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Gelo',
    'role' => 'Designer',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Virgin',
    'role' => 'Administrator',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Hakd0g',
    'role' => 'Developer',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Nyaw8',
    'role' => 'Police',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Lorem',
    'role' => 'Ipsum',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Lorem',
    'role' => 'Ipsum',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Lorem',
    'role' => 'Ipsum',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Lorem',
    'role' => 'Ipsum',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Lorem',
    'role' => 'Ipsum',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
  [
    'name' => 'Lorem',
    'role' => 'Ipsum',
    'img' => $this->themePath('includes/img/staff/staff-1.png'),
  ],
];


# ==========================================================================================================
# [Ranker Sections]
# ==========================================================================================================
# these options controls the GoTM.
# as for now this is done manually.

# guild ID is required for the emblem
$gotm['guild_id'] = 0;
$gotm['emblem_len'] = ''; # put any value for emblem_len if the guild have any emblem

# the name of the guild
$gotm['guild_name'] = "Unknown Guild";

# the guild master's name
$gotm['guild_master'] = "n/a";

# how much points the guild has
$gotm['guild_points'] = 0;

# Castle Owners
# list the castle ids, based on application/castlenames.php
# ids that are not listed (commented) will not be shown on page
$config['open_castles'] = [
     0 => 'Al de Baran<br >Neuschwanstein',
     1 => 'Al de Baran<br >Hohenschwangau',
     2 => 'Al de Baran<br >Nuenberg',
     3 => 'Al de Baran<br >Wuerzburg',
     4 => 'Al de Baran<br >Rothenburg',

    // 5 => 'Geffen<br >Repherion',
    // 6 => 'Geffen<br >Eeyolbriggar',
    // 7 => 'Geffen<br >Yesnelph',
    // 8 => 'Geffen<br >Bergel',
    // 9 => 'Geffen<br >Mersetzdeitz',

    10 => 'Payon<br >Bright Arbor',
    11 => 'Payon<br >Scarlet Palace',
    12 => 'Payon<br >Holy Shadow',
    13 => 'Payon<br >Sacred Altar',
    14 => 'Payon<br >Bamboo Grove Hill',

    15 => 'Prontera<br >Kriemhild',
    16 => 'Prontera<br >Swanhild',
    17 => 'Prontera<br >Fadhgridh',
    18 => 'Prontera<br >Skoegul',
    19 => 'Prontera<br >Gondul',

    // 20 => 'Novice Aldebaran',
    // 21 => 'Novice Geffen',
    // 22 => 'Novice Payon',
    // 23 => 'Novice Prontera',

    24 => 'Schwaltzvalt<br >Himinn',
    25 => 'Schwaltzvalt<br >Andlangr',
    26 => 'Schwaltzvalt<br >Viblainn',
    27 => 'Schwaltzvalt<br >Hljod',
    28 => 'Schwaltzvalt<br >Skidbladnir',

    // 29 => 'Arunafeltz<br >Mardol',
    // 30 => 'Arunafeltz<br >Cyr',
    // 31 => 'Arunafeltz<br >Horn',
    // 32 => 'Arunafeltz<br >Gefn',
    // 33 => 'Arunafeltz<br >Bandis'
];

# -- clash arena rankings --
# this data are obtained automatically using pvpladder table
# the npc script are included with the theme package

# -- battleground rankings --
# as requested, the bg data are set using "manual" option below
$bg = [
  [
    'rank' => 1,
    'char_id' => 1,
    'name' => 'Lorem',
    'level' => 99
  ],
  [
    'rank' => 2,
    'char_id' => 2,
    'name' => 'Ipsum',
    'level' => 98
  ],
  [
    'rank' => 3,
    'char_id' => 3,
    'name' => 'Dolor',
    'level' => 97
  ],
  [
    'rank' => 4,
    'char_id' => 4,
    'name' => 'Ipsum',
    'level' => 96
  ],
  [
    'rank' => 5,
    'char_id' => 5,
    'name' => 'Ismet',
    'level' => 94
  ],
];

# -- mvp rankings --
# this data are obtained automatically using mvpladder table
# the npc script are included with the theme package
# however, the char image needs to be manually generated using the RMS's Char Simulator: https://ro-character-simulator.ratemyserver.net/
$config['mvp'][0]['img'] = $this->themePath('includes/img/mvp/mvp-1.png');
$config['mvp'][1]['img'] = $this->themePath('includes/img/mvp/mvp-2.png');
$config['mvp'][2]['img'] = $this->themePath('includes/img/mvp/mvp-3.png');
$config['mvp'][3]['img'] = $this->themePath('includes/img/mvp/mvp-4.png');
$config['mvp'][4]['img'] = $this->themePath('includes/img/mvp/mvp-5.png');

# ==========================================================================================================
# [Footer Sections]
# ==========================================================================================================
# The text 'Powered by FluxCP' is removed from this template.
# The render text details is also removed froom this template.
#
# As for the theme settings, leave only 'prestige' in [ThemeName], if you wish to disable the theme select option
# If you wish to leave the option to change theme to the users, make sure 'prestige' is the first option, example
#
#       'ThemeName' => array('prestige', 'default', 'bootstrap'),
#
# Note: Names of the themes you would like list for use in the footer. Themes are in FLUX_ROOT/themes.
#
# This option controls the links inside the footer.
$config['footer_links'] = array(
  'Rules'                 => "https://www.prestige-ro.net/forum/index.php?/forum/52-rules-regulations",
  'Forums'                => "https://www.prestige-ro.net/forum",
  'Information'           => "https://www.prestige-ro.net/main/?module=main&action=info",
);

# this is the copyright text
$config['footer_copyright_text'] = "&copy; Copyright 2020 PrestigeRO. <br />For Gamers By Gamers.";

# this controls the social media buttons
# leave empty to disable
$config['footer_discord']   = "https://discord.com/";
$config['footer_twitch']    = "https://twitch.com/";
$config['footer_facebook']  = "https://www.facebook.com/";
$config['footer_twitter']   = "https://twitter.com/";
$config['footer_youtube']   = "https://www.youtube.com/";

?>
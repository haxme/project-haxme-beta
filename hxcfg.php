<?php

/**
 * Project: HaxMe
 * Release: 1.0.0-beta
 * http://haxme.org/
 *
 * @author     cwade12c
 * @license    GNU
 *
 * HXM Configuration
 */

if (!function_exists('hxm_env')) {
    function hxm_env($key, $default) {
        $value = getenv($key);
        return ($value === false || $value === '') ? $default : $value;
    }
}

if (!function_exists('hxm_base_url')) {
    function hxm_base_url() {
        return rtrim(hxm_env('HXME_BASE_URL', 'http://localhost:8080'), '/');
    }
}

#################################
#
#    @[site]
# -------------------------------
#
  defined('HOME') or DEFINE('HOME', hxm_base_url());
  defined('REDIRECT_404') or DEFINE('REDIRECT_404', HOME);
  defined('TITLE') or DEFINE('TITLE', 'HaxMe');
  defined('NAME') or DEFINE('NAME', TITLE);
  defined('SLOGAN') or DEFINE('SLOGAN', '//Your Security');
  defined('BIO') or DEFINE('BIO', 'HaxMe is an opensource project - offering unlimited knowledge towards computer security, programming and other tech-related fields.');
  defined('AUTHOR') or DEFINE('AUTHOR', 'cwade12c');
  defined('COPYRIGHT') or DEFINE('COPYRIGHT', '&copy HaxMe 2010 - 2012 || All Rights Reserved');
  defined('KEYWORDS') or DEFINE('KEYWORDS', 'HaxMe,Hax,Me,Computer,Hacking,Security,Training,Networking,Programming,Web 2.0,Opensource,Open,Source,Free,Tutorials,Papers,Whitepapers,Videos,Downloads,Forums,Community,Bulletin Board,Penetration,Testing Grounds,Missions,Project,Help,Exploits,Tech,Infosec,Network,Internet');
  defined('DESCRIPTION') or DEFINE('DESCRIPTION', BIO);
  defined('VERSION') or DEFINE('VERSION', '1.0.0-beta');
  defined('LOGOUT') or DEFINE('LOGOUT', HOME . '/logout.php');

  $meta_Tags = array('HaxMe', 'Hax', 'Me', 'Computer', 'Hacking', 'Security', 'Training', 'Networking',
                      'Programming', 'Web 2.0', 'Opensource', 'Open', 'Source', 'Free', 'Tutorials',
                      'Papers', 'Whitepapers', 'Videos', 'Downloads', 'Forums', 'Community', 'Bulletin Board',
                      'Penetration', 'Testing Grounds', 'Missions', 'Project', 'Help', 'Exploits',
                      'Tech', 'Infosec', 'Network', 'Internet'
                    );
#
# -------------------------------
#
#    @[engine]
# -------------------------------
#
  $author = array('cwade12c', 'LycanDarko', 'ryoh', 'LK-');
  defined('TEMPLATE') or DEFINE('TEMPLATE', 'default'); /* If using template module */
  defined('DEF_MOD') or DEFINE('DEF_MOD', 'Home'); /* Default module */
  defined('PARAM_PAGE') or DEFINE('PARAM_PAGE', 'p'); /* _GET parameter class */
  defined('PARAM_ACTION') or DEFINE('PARAM_ACTION', 'act'); /* _GET parameter method */
#
# -------------------------------
#
#    @[database]
#
  defined('DB_PORT') or DEFINE('DB_PORT', 'PDO'); /* mysql, mysqli, PDO */
  defined('DB_DRIVER') or DEFINE('DB_DRIVER', 'mysql'); /* for PDO */
  defined('DB_HOST') or DEFINE('DB_HOST', hxm_env('DB_HOST', 'db'));
  defined('DB_NAME') or DEFINE('DB_NAME', hxm_env('DB_NAME', 'haxme'));
  defined('DB_USER') or DEFINE('DB_USER', hxm_env('DB_USER', 'haxme'));
  defined('DB_PASS') or DEFINE('DB_PASS', hxm_env('DB_PASSWORD', 'haxme'));
#
# -------------------------------
#
#################################


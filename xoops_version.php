<?php
/********************************************************************
 * Block XP-Radio Adapté à Xoops par LLaumgui pour XPerience-Fr
 * http://www.xperience-fr.net
 *
 * Module sous licence gpl
 *********************************************************************/

$modversion['name'] = _MI_XP_NAME;
$modversion['version'] = 1.2;
$modversion['description'] = _MI_XP_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'LLaumgui for <a href="http://www.xperience-fr.net">XPerience-Fr</a>';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'xp_radio.png';
$modversion['dirname'] = 'xp-radio';

// Menu
$modversion['hasMain'] = 0;

// Admin
$modversion['hasAdmin'] = 0;

// Blocks
$modversion['blocks'][0]['file'] = 'radio.php';
$modversion['blocks'][0]['name'] = _MI_XP_RADIO_BNAME;
$modversion['blocks'][0]['description'] = _MI_XP_DESC;
$modversion['blocks'][0]['show_func'] = 'b_xpradio_show';
$modversion['blocks'][0]['edit_func'] = 'b_xpradio_edit';
$modversion['blocks'][0]['options'] = 'fun';

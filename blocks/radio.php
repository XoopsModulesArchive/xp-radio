<?php
/********************************************************************
 * Block XP-Radio Adapté à Xoops par LLaumgui pour XPerience-Fr
 * http://www.xperience-fr.net
 *
 * Module sous licence gpl
 ********************************************************************
 * @param $options
 * @return array
 */

function b_xpradio_show($options)
{
    global $xoopsDB, $xoopsConfig;

    $homeradio = $options[0];

    $block = [];

    $block['title'] = 'XP Radios';

    if (fun == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/fun/fun.asx';
    } elseif (skyrock == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/skyrock/skyrock.asx';
    } elseif (nrj == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/nrj/nrj.asx';
    } elseif (contact == $homeradio) {
        $staradio = 'www.radiocontact.be/fr/Player/streamingRCFR.asx';
    } elseif (CKMF == $homeradio) {
        $staradio = 'www.radioenergie.com/radioendirect/ckmf.asx';
    } elseif (franceinfo == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/franceinfo/franceinfo.asx';
    } elseif (nostalgie == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/nostalgie/nostalgie.asx';
    } elseif (rtl == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/rtl/rtl.asx';
    } elseif (rtl2 == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/rtl2/rtl2.asx';
    } elseif (europe1 == $homeradio) {
        $staradio = 'cache.yacast.fr/V4/europe1/europe1.asx';
    }

    if (rien != $homeradio) {
        $block['content'] = '
<center><img src="' . XOOPS_URL . '/modules/xp-radio/radio.gif"><p>
<object id="NSPlay" width="150" height="50"
classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
standby="Chargement..."
type="application/x-oleobject" align="middle">
  <param name="AudioStream" value="-1">
  <param name="AutoSize" value="0">
  <param name="AutoStart" value="-1">
  <param name="AnimationAtStart" value="-1">
  <param name="AllowScan" value="-1">
  <param name="AllowChangeDisplaySize" value="-1">
  <param name="AutoRewind" value="0">
  <param name="Balance" value="0">
  <param name="BufferingTime" value="5">
  <param name="ClickToPlay" value="-1">
  <param name="CursorType" value="0">
  <param name="CurrentPosition" value="-1">
  <param name="CurrentMarker" value="0">
  <param name="DisplayBackColor" value="0">
  <param name="DisplayForeColor" value="16777215">
  <param name="DisplayMode" value="0">
  <param name="DisplaySize" value="4">
  <param name="Enabled" value="-1">
  <param name="EnableContextMenu" value="-1">
  <param name="EnablePositionControls" value="-1">
  <param name="EnableFullScreenControls" value="0">
  <param name="EnableTracker" value="-1">
  <param name="Filename" value="http://' . $staradio . '">
  <param name="InvokeURLs" value="-1">
  <param name="Language" value="-1">
  <param name="Mute" value="0">
  <param name="PlayCount" value="1">
  <param name="PreviewMode" value="0">
  <param name="Rate" value="1">
  <param name="SelectionStart" value="-1">
  <param name="SelectionEnd" value="-1">
  <param name="SendOpenStateChangeEvents" value="-1">
  <param name="SendWarningEvents" value="-1">
  <param name="SendErrorEvents" value="-1">
  <param name="SendKeyboardEvents" value="0">
  <param name="SendMouseClickEvents" value="0">
  <param name="SendMouseMoveEvents" value="0">
  <param name="SendPlayStateChangeEvents" value="-1">
  <param name="ShowCaptioning" value="0">
  <param name="ShowControls" value="-1">
  <param name="ShowAudioControls" value="-1">
  <param name="ShowDisplay" value="0">
  <param name="ShowGotoBar" value="0">
  <param name="ShowPositionControls" value="0">
  <param name="ShowStatusBar" value="-1">
  <param name="ShowTracker" value="0">
  <param name="TransparentAtStart" value="0">
  <param name="VideoBorderWidth" value="0">
  <param name="VideoBorderColor" value="0">
  <param name="VideoBorder3D" value="0">
  <param name="Volume" value="-890">
  <param name="WindowlessVideo" value="0">
<embed type="application/x-mplayer2"
pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/"
filename=http://cache.yacast.fr/V4/nrj/nrj.asx src= showcontrols="1" showdisplay="0" showstatusbar="1" width="100" height="50" align="middle">
</embed></object><br><center>
<a href="' . XOOPS_URL . '/modules/xp-radio/popup.php?station=' . $homeradio . "\" onClick=\"window.open('','popup','width=175,height=230,scrollbars=0')\" target=\"popup\">Plus de radio!</a> 
";
    } else {
        $block['content'] = '
<center><img src="' . XOOPS_URL . '/modules/xp-radio/radio.gif"><p>
<a href="' . XOOPS_URL . '/modules/xp-radio/popup.php?station=' . $homeradio . "\" onClick=\"window.open('','popup','width=170,height=225,scrollbars=0')\" target=\"popup\">Ecouter la radio!</a>";
    }

    return $block;
}

function b_xpradio_edit($options)
{
    $form .= _MB_XPRADIO_HOME . "&nbsp;<select name='options[]'>";

    $selfun = $selskyrock = $selnrj = $selrien = '';

    switch ($option[0]) {
        case 'franceinfo':
            $selfranceinfo = 'selected';
            break;
        case 'fun':
            $selfun = 'selected';
            break;
        case 'skyrock':
            $selskyrock = 'selected';
            break;
        case 'nostalgie':
            $selnostalgie = 'selected';
            break;
        case 'nrj':
            $selnrj = 'selected';
            break;
        case 'contact':
            $selcontact = 'selected';
            break;
        case 'CKMF':
            $selCKMF = 'selected';
            break;
        case 'rien':
            $selrien = 'selected';
            break;
        case 'rtl':
            $selrtl = 'selected';
            break;
        case 'rtl2':
            $selrtl2 = 'selected';
            break;
    }

    $form .= ''
             . "<option name=homerad value='europe1' $seleurope1>Europe 1</option>"
             . "<option name=homerad value='franceinfo' $selfranceinfo>France Info</option>"
             . "<option name=homerad value='fun' $selfun>Fun</option>"
             . "<option name=homerad value='nostalgie' $selnostalgie>Nostalgie</option>"
             . "<option name=homerad value='nrj' $selnrj>NRJ</option>"
             . "<option name=homerad value='rtl' $selrtl>RTL</option>"
             . "<option name=homerad value='rtl2' $selrtl2>RTL 2</option>"
             . "<option name=homerad value='skyrock' $selskyrock>SkyRock</option>"
             . "<option name=homerad value='contact' $selcontact>Contact</option>"
             . "<option name=homerad value='CKMF' $selCKMF>Radio &eacute;nergie (CKMF)</option>"
             . "<option name=homerad value='rien' $selrien>"
             . _MB_XPRADIO_NULL
             . '</option>'
             . '</select>';

    return $form;
}

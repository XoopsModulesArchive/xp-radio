<?php
/****************************************************************
 * Block XP-Radio Adapté à Xoops par LLaumgui pour XPerience-Fr *
 * http://www.xperience-fr.net                                  *
 *                                                              *
 * Module sous licence gpl                                      *
 ****************************************************************/

?>
    <script language="JavaScript" type="text/JavaScript">
        function MM_jumpMenu(targ, selObj, restore) {
            eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
            if (restore) selObj.selectedIndex = 0;
        }</script>
<?php
if (fun == $station) {
    $staradio = 'cache.yacast.fr/V4/fun/fun.asx';
} elseif (skyrock == $station) {
    $staradio = 'cache.yacast.fr/V4/skyrock/skyrock.asx';
} elseif (nrj == $station) {
    $staradio = 'cache.yacast.fr/V4/nrj/nrj.asx';
} elseif (contact == $station) {
    $staradio = 'www.radiocontact.be/fr/Player/streamingRCFR.asx';
} elseif (CKMF == $station) {
    $staradio = 'www.radioenergie.com/radioendirect/ckmf.asx';
} elseif (franceinfo == $station) {
    $staradio = 'cache.yacast.fr/V4/franceinfo/franceinfo.asx';
} elseif (nostalgie == $station) {
    $staradio = 'cache.yacast.fr/V4/nostalgie/nostalgie.asx';
} elseif (rtl == $station) {
    $staradio = 'cache.yacast.fr/V4/rtl/rtl.asx';
} elseif (rtl2 == $station) {
    $staradio = 'cache.yacast.fr/V4/rtl2/rtl2.asx';
} elseif (europe1 == $station) {
    $staradio = 'cache.yacast.fr/V4/europe1/europe1.asx';
} elseif (rien == $station) {
    $staradio = 'cache.yacast.fr/V4/skyrock/skyrock.asx';
}
echo "
<title>$station</title><body bgcolor=\"#000033\"><body oncontextmenu=\"return false\" ondragstart=\"return false\" onselectstart=\"return false\">
<center><img src=\"radio.gif\"><p><p>
<object id=\"NSPlay\" width=\"150\" height=\"50\"
classid=\"clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95\"
codebase=\"http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701\"
standby=\"Chargement...\"
type=\"application/x-oleobject\" align=\"middle\">
  <param name=\"AudioStream\" value=\"-1\">
  <param name=\"AutoSize\" value=\"0\">
  <param name=\"AutoStart\" value=\"-1\">
  <param name=\"AnimationAtStart\" value=\"-1\">
  <param name=\"AllowScan\" value=\"-1\">
  <param name=\"AllowChangeDisplaySize\" value=\"-1\">
  <param name=\"AutoRewind\" value=\"0\">
  <param name=\"Balance\" value=\"0\">
  <param name=\"BufferingTime\" value=\"5\">
  <param name=\"ClickToPlay\" value=\"-1\">
  <param name=\"CursorType\" value=\"0\">
  <param name=\"CurrentPosition\" value=\"-1\">
  <param name=\"CurrentMarker\" value=\"0\">
  <param name=\"DisplayBackColor\" value=\"0\">
  <param name=\"DisplayForeColor\" value=\"16777215\">
  <param name=\"DisplayMode\" value=\"0\">
  <param name=\"DisplaySize\" value=\"4\">
  <param name=\"Enabled\" value=\"-1\">
  <param name=\"EnableContextMenu\" value=\"-1\">
  <param name=\"EnablePositionControls\" value=\"-1\">
  <param name=\"EnableFullScreenControls\" value=\"0\">
  <param name=\"EnableTracker\" value=\"-1\">
  <param name=\"Filename\" value=http://" . $staradio . ">
  <param name=\"InvokeURLs\" value=\"-1\">
  <param name=\"Language\" value=\"-1\">
  <param name=\"Mute\" value=\"0\">
  <param name=\"PlayCount\" value=\"1\">
  <param name=\"PreviewMode\" value=\"0\">
  <param name=\"Rate\" value=\"1\">
  <param name=\"SelectionStart\" value=\"-1\">
  <param name=\"SelectionEnd\" value=\"-1\">
  <param name=\"SendOpenStateChangeEvents\" value=\"-1\">
  <param name=\"SendWarningEvents\" value=\"-1\">
  <param name=\"SendErrorEvents\" value=\"-1\">
  <param name=\"SendKeyboardEvents\" value=\"0\">
  <param name=\"SendMouseClickEvents\" value=\"0\">
  <param name=\"SendMouseMoveEvents\" value=\"0\">
  <param name=\"SendPlayStateChangeEvents\" value=\"-1\">
  <param name=\"ShowCaptioning\" value=\"0\">
  <param name=\"ShowControls\" value=\"-1\">
  <param name=\"ShowAudioControls\" value=\"-1\">
  <param name=\"ShowDisplay\" value=\"0\">
  <param name=\"ShowGotoBar\" value=\"0\">
  <param name=\"ShowPositionControls\" value=\"0\">
  <param name=\"ShowStatusBar\" value=\"-1\">
  <param name=\"ShowTracker\" value=\"0\">
  <param name=\"TransparentAtStart\" value=\"0\">
  <param name=\"VideoBorderWidth\" value=\"0\">
  <param name=\"VideoBorderColor\" value=\"0\">
  <param name=\"VideoBorder3D\" value=\"0\">
  <param name=\"Volume\" value=\"-890\">
  <param name=\"WindowlessVideo\" value=\"0\">
<embed type=\"application/x-mplayer2\"
pluginspage=\"http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/\"
filename=http://cache.yacast.fr/V4/nrj/nrj.asx src= showcontrols=\"1\" showdisplay=\"0\" showstatusbar=\"1\" width=\"100\" height=\"50\" align=\"middle\">
  </embed>
</object><br>
<form name=\"form1\">
  <select name=\"Radios\" onChange=\"MM_jumpMenu('parent',this,0)\">
  <option selected>Stations</option>
	<option value=\"popup.php?station=europe1\">Europe 1</option>
	<option value=\"popup.php?station=franceinfo\">France Info</option>
	<option value=\"popup.php?station=fun\">Fun Radio</option>
    <option value=\"popup.php?station=nostalgie\">Nostalgie</option>
    <option value=\"popup.php?station=nrj\">NRJ</option>
	<option value=\"popup.php?station=rtl\">RTL</option>
	<option value=\"popup.php?station=rtl2\">RTL 2</option>
	<option value=\"popup.php?station=skyrock\">SkyRock</option>
	<option>--Qu&eacute;bec--</option>
	<option value=\"popup.php?station=CKMF\">Radio &eacute;nergie (CKMF)</option>
	<option>--Belgique--</option>
	<option value=\"popup.php?station=contact\">Contact FM</option>
  </select>
</form>";
?>

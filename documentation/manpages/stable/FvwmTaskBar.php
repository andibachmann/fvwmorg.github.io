<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmTaskBar";
$heading        = "FVWM - Man page - FvwmTaskBar";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmTaskBar";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmTaskBar in stable branch (2.6.4)"); ?>

<H1>FvwmTaskBar</H1>
Section: Fvwm Modules (1)<BR>Updated: 01 February 2012 (2.6.4)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmTaskBar - the fvwm taskbar module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>FvwmTaskBar</u></B> [<I>name</I>]
<P>
FvwmTaskBar is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmTaskBar module provides a taskbar made up of buttons arranged by
rows, each corresponding to a window that fvwm is managing.
Clicking on first button gives focus to the corresponding top level window;
clicking on the middle button will hide a top level window; third mouse button
is reserved for a future extension (context menu).
Like the other modules, FvwmTaskBar only works when fvwm is used as the
window manager.
<P>
When started, the taskbar shows up as a single row of buttons filling the
full width of the screen, but during the work can be resized to accommodate
up to 8 rows. In addition, if the AutoStick option is used, the taskbar
will auto position itself at the top or bottom of the screen, and can be
dragged from one position to another with a normal move operation.
<P>
The first button of the taskbar, labelled &quot;Start&quot; sends a &quot;Popup
StartMenu&quot; command to the fvwm, which can be used to pop-up a
general-purpose menu when the button is pressed.
<P>
The FvwmTaskBar also displays at the right side a window showing the
current time and the built-in incoming mail indicator.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmTaskBar module is derived from Mike Finger's FvwmWinList.
<P>
Copyright 1994, Mike Finger. The author makes no guarantees or warranties of
any kind about the use of this module.  Use this module at your own risk.
You may freely use this module or any portion of it for any purpose as long
as the copyright is kept intact.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmTaskBar</I> gets configuration information
from fvwm to find the options that pertain to it.
These options are discussed in a later section.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmTaskBar can be invoked by fvwm during initialization by inserting the
line 'Module FvwmTaskBar' in the .fvwm2rc file.
<P>
FvwmTaskBar must reside in a directory that is listed in the ModulePath
option of fvwm for it to be executed by fvwm.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

The following options can be placed in the .fvwm2rc file
<P>
<DL COMPACT>
<DT>*FvwmTaskBar: Geometry <I>{+-}&lt;X&gt;{+-}&lt;Y&gt;</I><DD>
Specifies the location and gravity of the FvwmTaskBar window.
Currently, this option is scanned as a normal X geometry string.
You can include the width and the height in addition to the &quot;x&quot; and
&quot;y&quot; offset.  However, only the &quot;x&quot; and &quot;y&quot; offset are used.
To avoid possible future compatibility problems, only code the &quot;x&quot; and
&quot;y&quot; offset.
<P>
The actual width of the taskbar is always the full width of the screen
and the height is controlled by the *FvwmTaskBar: Rows option.
<P>
If the AutoStick option
is specified, the taskbar automatically &quot;sticks&quot; to the top or
the bottom of the screen, whichever is closest to the geometry specification.
<P>
To position the taskbar at the bottom of the screen, use a geometry of
&quot;+0-0&quot;.
<P>
<DT>*FvwmTaskBar: Rows r<DD>
Specifies the initial number in rows of the FvwmTaskBar window. Default
is 1 and the maximum is 8.
<P>
<DT>*FvwmTaskBar: Font <I>font</I><DD>
Specifies the default font to be used for labeling the buttons, when they
are not depressed. If not specified, fixed font is assumed.
<P>
<DT>*FvwmTaskBar: SelFont <I>font</I><DD>
Specifies the font to be used for the depressed buttons. Note that the
Start button will always use this font even if is not pressed. If this
option is not specified, the default font is used instead.
<P>
<DT>*FvwmTaskBar: StatusFont <I>font</I><DD>
Specifies the font to be used for the clock and tip windows. If this
option is not specified, fixed font is used.
<P>
<DT>*FvwmTaskBar: Fore <I>color</I><DD>
Specifies the color to use for the button names.
<P>
<DT>*FvwmTaskBar: Back <I>color</I><DD>
Specifies the background color for the bar and buttons.
<P>
<DT>*FvwmTaskBar: Colorset <I>colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for the window
background and the foreground color of the buttons.  Please refer
to the man page of the FvwmTheme module for details about colorsets.
<P>
<DT>*FvwmTaskBar: IconFore <I>color</I><DD>
Specifies the color to use for the button names which represent iconified
windows.
<P>
<DT>*FvwmTaskBar: IconBack <I>color</I><DD>
Specifies the color to use for the buttons which represent iconified windows.
<P>
<DT>*FvwmTaskBar: IconColorset <I>colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for the
buttons of iconified windows.  Please refer to the man page of
the FvwmTheme module for details about colorsets.
<P>
<DT>*FvwmTaskBar: FocusFore <I>color</I><DD>
Specifies the color to use for the button which represents the window
with the focus.  If not specified the color specified by *FvwmTaskBar: Fore or
*FvwmTaskBar: Colorset is used.
<P>
<DT>*FvwmTaskBar: FocusBack <I>color</I><DD>
Specifies the color to use for the button which represents the window
with the focus. If not specified the color specified by  *FvwmTaskBar: Back or
*FvwmTaskBar: Colorset is used. Note that the button which represents the window
with the focus is also highlighted.  See &quot;*FvwmTaskBar: NoBrightFocus&quot;.
<P>
<DT>*FvwmTaskBar: FocusColorset <I>colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for the button
which represents the window with the focus. Please refer to the man page of
the FvwmTheme module for details about colorsets.
<P>
<DT>*FvwmTaskBar: NoBrightFocus<DD>
By default the button which represents the window with the focus is
highlighted. This option disables this feature.  <I>Note:</I> you will
want this option if you use a pixmap (via FvwmTheme) for the background.
<P>
<DT>*FvwmTaskBar: TipsFore <I>color</I><DD>
Specifies the color to be used for the text in the tips windows.
<P>
<DT>*FvwmTaskBar: TipsBack <I>color</I><DD>
Specifies the background color for the tips windows.
<P>
<DT>*FvwmTaskBar: TipsColorset <I>colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for the tips windows.
Please refer to the man page of the FvwmTheme module for details about
colorsets.
<P>
<DT>*FvwmTaskBar: AutoStick<DD>
This option causes the taskbar to &quot;stick&quot; either to the top or bottom
of the screen, whichever is closest to the initial window placement. Any
further move operation is also subject to that behavior.
<P>
<DT>*FvwmTaskBar: AutoFocus<DD>
This option causes the taskbar to raise a window if the cursor stays on a
button in taskbar and its tip is open.
<P>
<DT>*FvwmTaskBar: AutoHide [<I>pixels</I>]<DD>
This option causes the taskbar to disappear leaving a narrow strip at the
bottom of the screen, and reappear only when the mouse is moved to that
strip.  This option automatically enables AutoStick.  The optional
<I>pixels</I> parameter specifies thickness of a strip (3 pixels by default).
<P>
<DT>*FvwmTaskBar: UseSkipList<DD>
Tells FvwmTaskBar to not show the windows that are listed on a WindowListSkip
line in the configuration file.
<P>
<DT>*FvwmTaskBar: DeskOnly<DD>
Tells FvwmTaskBar to show only windows that are on the current desktop.
When desktops are switched, the list of windows changes accordingly.
<P>
<DT>*FvwmTaskBar: PageOnly<DD>
Tells FvwmTaskBar to show only windows that are on the same page
as the task bar.
When a window enters or leaves the page, the list of windows changes
accordingly.
<P>
<DT>*FvwmTaskBar: ScreenOnly<DD>
Tells FvwmTaskBar to show only windows that are only on the same
Xinerama screen as the task bar.  When a window enters or leaves the
screen, the list of windows changes accordingly.
<P>
<DT>*FvwmTaskBar: UseIconNames<DD>
Tells FvwmTaskBar to use the icon name of the window instead of the full
window name.  This is useful to keep the width of the buttons small.
<P>
<DT>*FvwmTaskBar: ShowTransients<DD>
Tells FvwmTaskBar to show the application transient windows also. By default
they are not shown.
<P>
<DT>*FvwmTaskBar: Action <I>action response</I><DD>
Tells FvwmTaskBar to do <I>response</I> when <I>action</I> is done.  The
currently supported <I>action</I>s are: Click1, Click2, Click3 and so on.
By default the module supports 5 mouse buttons, but it can be compiled
to support more.  The currently
supported <I>response</I>s are any fvwm built-in commands, including modules
and functions.  Warning: Use of the former syntax that allowed to use comma
separated lists of commands is strongly discouraged due to synchronization
problems with fvwm.  Please use complex fvwm functions instead (defined with
the AddToFunc command of fvwm).
<P>
In the <I>response</I> part, you can use a number of predefined
variables: <I>$left</I>, <I>$right</I>, <I>$top</I> and <I>$bottom</I>
are substituted by the left, right, top and bottom coordinates of
the button pressed. <I>$-left</I>, <I>$-right</I>, <I>$-top</I> and
<I>$-bottom</I> are substituted likewise, but the coordinates are
calculated from the bottom or the right edge of the screen instead
(for a button that is 5 pixels away from the right screen border,
$-right will be 5). <I>$width</I> and <I>$height</I> are replaced by
the width or height of the button.  All this is done regardless of
any quoting characters. To get a literal '$' use the string '$$'.
<P>
<DT>*FvwmTaskBar: Button Title <I>title</I>, Icon <I>icon</I>, Action <I>action</I><DD>
Tells FvwmTaskBar to put a shortcut minibutton in the taskbar that does
<I>action</I> when clicked.  The icon can have a caption denoted by <I>title</I>,
an icon denoted by <I>icon</I>, or a combination of the two.  The icons will
appear to the immediate right of the start button, and will appear in the
order that they are declared in the .fvwm2rc file.
<P>
To invoke different commands for different mouse clicks, use this syntax:
<P>
<PRE>

*FvwmTaskBar: Button Title <I>title</I>, Icon <I>icon</I>, \
              Action (Mouse 1) <I>action1</I>, Action (Mouse 2) <I>action2</I>

</PRE>

<P>
<DT>*FvwmTaskBar: ButtonWidth <I>width</I><DD>
Indicates the maximum width that window buttons should reach.
(the minimum is hard coded at 32).
<P>
<DT>*FvwmTaskBar: Pad <I>width</I><DD>
Specifies the space (in pixels) between the window buttons. If this option is
not specified, the default space is 3.
<P>
<DT>*FvwmTaskBar: WindowButtonsLeftMargin <I>margin</I><DD>
Specifies the space (in pixels) between the left side of the left-most window
button and the right side of the start button or right-most shortcut
minibutton.  If this option is not specified, the default margin is 4.
<P>
<DT>*FvwmTaskBar: WindowButtonsRightMargin <I>margin</I><DD>
Specifies the space (in pixels) between the right side of the right-most
window button and the left side of the clock and tip window.  If this option
is not specified, the default margin is 2.
<P>
<DT>*FvwmTaskBar: StartButtonRightMargin <I>margin</I><DD>
Specifies the space (in pixels) between the right side of the start button
and the left side of the left-most shortcut minibutton.  If this option is
not specified, the default margin is 0.
<P>
<DT>*FvwmTaskBar: 3DFvwm<DD>
By default the buttons use a special (asymmetric) 3D look. This option enables
a more classical 3D look (Ie., a la fvwm).
<P>
<DT>*FvwmTaskBar: HighlightFocus<DD>
If the mouse pointer is over the taskbar, the window under the current
button is active. This behavior is like the TVTWM Icon Manager or
FvwmIconMan. <I>Note:</I> If you use this option combined with FollowMouse
focus style, you'll want the taskbar to be ClickToFocus.
<P>
<DT>*FvwmTaskBar: ShowTips<DD>
Enables the tips windows (by default disabled).
<P>
<DT>*FvwmTaskBar: NoIconAction <I>action</I><DD>
Tells FvwmTaskBar to do <I>action</I> is when a NoIcon style window is
iconified or de-iconified. Relevant coordinates are appended to <I>action</I> so
that the icon can be traced to an FvwmTaskBar button. An example action
is &quot;*FvwmTaskBar: NoIconAction SendToModule FvwmAnimate animate&quot;. A blank or
null action turns this feature off.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2></H2>

<P>
The following options deal more specifically with the status indicators
displayed at the right of the taskbar.
<P>
<DL COMPACT>
<DT>*FvwmTaskBar: ClockFormat <I>format-string</I><DD>
This option specifies the time format for the digital clock.
It is a <I><A HREF="/cgi-bin/man/man2html/3+strftime">strftime</A>(3)</I> compatible format string.
By default it is &quot;%R&quot;. There is a 24 character limit for string
expansion. The string depends of locale settings.
<P>
<DT>*FvwmTaskBar: DateFormat <I>format-string</I><DD>
This option specifies the date and/or time format for clock tip.
It is a <I><A HREF="/cgi-bin/man/man2html/3+strftime">strftime</A>(3)</I> compatible format string.
By default it is &quot;%A, %B %d, %Y&quot;. There is 40 characters limit for
string expansion. The string depends of locale settings now.
<P>
<DT>*FvwmTaskBar: UpdateInterval <I>seconds</I><DD>
Specifies how often the clock display should be refreshed, so that times of
the form HH:MM:SS can be used. By default 60 seconds.
<P>
<DT>*FvwmTaskBar: BellVolume <I>volume</I><DD>
This sets the volume of the bell when mail is detected.
It is a value between 0 (no bell) and 100 (maximum volume).
By default it is set to 20.
<P>
<DT>*FvwmTaskBar: MailBox <I>path</I><DD>
This option instructs the module to look for mail at the specified place.
It is a full pathname to the user's mailbox.
By default it is <I>/var/spool/mail/$USER_LOGIN</I>.
A value of 'None' instructs the module not to have a mail indicator.
<P>
<DT>*FvwmTaskBar: MailDir<DD>
By default format of the user's mailbox is mbox. If this option is
specified, the maildir format is used instead.
<P>
<DT>*FvwmTaskBar: MailCommand <I>command</I><DD>
Specifies a <I>fvwm</I> command to be executed when double-clicking
on the mail icon.
<P>
<DT>*FvwmTaskBar: MailCheck <I>seconds</I><DD>
Specifies the interval between checks for new mail. The default is
ten seconds. A value of zero or less switches mail checking off.
<P>
Note, this value is only relable when greater than the <I>UpdateInterval</I>
value. The mail check is done either on any redraw (like a focus change)
or every nearest factor of the <I>UpdateInterval</I> value.
<P>
<DT>*FvwmTaskBar: IgnoreOldMail<DD>
If set, draw no bitmap if there is no new mail.
<P>
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2></H2>

The following options deal with the Start button at the left of the taskbar:
<P>
<DL COMPACT>
<DT>*FvwmTaskBar: StartCommand <I>command</I><DD>
This option specifies a command to run when the start button is
pressed.  Some strings are replaced in the command when it is
executed like for the other buttons.  See
<B>Action</B>

for details.  If both,
<B>StartCommand</B> and <B>StartMenu</B>

have been defined, the command is executed first and the menu is
opened afterwards.  The
<B>StartCommand</B>

can be used to exactly place a menu atop a button.
<P>
<PRE>

*FvwmTaskBar: StartCommand Popup StartMenu rectangle \
        $widthx$height+$left+$top 0 -100m

</PRE>

<P>
To invoke different commands for different mouse clicks, use this syntax:
<P>
<PRE>

*FvwmTaskBar: StartCommand (Mouse 1) Popup Mouse1Menu
*FvwmTaskBar: StartCommand (Mouse 3) Popup Mouse3Menu

</PRE>

<P>
<DT>*FvwmTaskBar: StartName <I>string</I><DD>
This option specifies the string displayed in the Start button.
('Start' by default). If the string is omitted no string is
displayed.
<P>
<DT>*FvwmTaskBar: StartMenu <I>string</I><DD>
This option specifies the pop up menu to invoke when the start button is
pressed. ('StartMenu' by default). The module send a 'Popup StartMenu'
command to the fvwm window manager.
<P>
To invoke different menus for different mouse clicks, use this syntax:
<P>
<PRE>

*FvwmTaskBar: StartMenu (Mouse 1) Mouse1Menu
*FvwmTaskBar: StartMenu (Mouse 3) Mouse3Menu

</PRE>

<P>
<DT>*FvwmTaskBar: StartIcon <I>icon-name</I><DD>
This option specifies the name of the icon to display at the left of the Start
button.
<P>
<DT>*FvwmTaskBar: NoDefaultStartButton<DD>
This option removes the default start button if no start button configuration
options are given. It is useful to remove the start button. Note that this is
the default if you use the Button configuration option.
<P>
</DL>
<A NAME="lbAK">&nbsp;</A>
<H2>SAMPLE CONFIGURATION</H2>

The following are excerpts from a .fvwm2rc file which describe FvwmTaskBar
initialization commands:
<P>
<PRE>

#
# Start the taskbar on fvwm startup and restart
#

AddToFunc &quot;StartFunction&quot; &quot;I&quot; Module FvwmTaskBar

#
# For Click 1 action
#

AddToFunc DeiconifyRaiseAndFocus
+ I Iconify off
+ I Raise
+ I Focus

#
# Set the style for the taskbar window, keep always on top of another
# windows
#

Style &quot;FvwmTaskBar&quot; NoTitle,BorderWidth 4, HandleWidth 4,Sticky,\
StaysOnTop,WindowListSkip,CirculateSkip

#------------------------------------ taskbar
*FvwmTaskBar: Back #c3c3c3
*FvwmTaskBar: Fore black
*FvwmTaskBar: TipsBack bisque
*FvwmTaskBar: TipsFore black
*FvwmTaskBar: Geometry +0-0
*FvwmTaskBar: Font -adobe-helvetica-medium-r-*-*-14-*-*-*-*-*-*-*
*FvwmTaskBar: SelFont -adobe-helvetica-bold-r-*-*-14-*-*-*-*-*-*-*
*FvwmTaskBar: StatusFont fixed

*FvwmTaskBar: Action Click1 DeiconifyRaiseAndFocus
*FvwmTaskBar: Action Click2 Iconify On
*FvwmTaskBar: Action Click3 Lower

*FvwmTaskBar: UseSkipList
*FvwmTaskBar: UseIconNames
*FvwmTaskBar: AutoStick
*FvwmTaskBar: ShowTips
*FvwmTaskBar: NoIconAction SendToModule FvwmAnimate animate

*FvwmTaskBar: ButtonWidth 180
*FvwmTaskBar: BellVolume 20
*FvwmTaskBar: MailBox /var/spool/mail/
*FvwmTaskBar: MailCommand Exec xterm -e mail
*FvwmTaskBar: ClockFormat %I:%M %p

*FvwmTaskBar: StartName Start
*FvwmTaskBar: StartMenu StartMenu
*FvwmTaskBar: StartIcon mini-exp.xpm

*FvwmTaskBar: Button Title Mozilla, Action exec exec /usr/local/mozilla/mozilla
*FvwmTaskBar: Button Icon mini.term.xpm, Action exec exec xterm
*FvwmTaskBar: Button Title Freeamp, Icon mini.cd.xpm, Action exec exec freeamp


</PRE>

<P>
<A NAME="lbAL">&nbsp;</A>
<H2>BUGS</H2>

There is a bug report that FvwmTaskBar doesn't work well with
auto hide turned on.
<P>
<A NAME="lbAM">&nbsp;</A>
<H2>AUTHOR</H2>

<DL COMPACT>
<DT><I>David Barth</I> &lt;<A HREF="mailto:barth@di.epfl.ch">barth@di.epfl.ch</A>&gt;<DD>
<P>
</DL>
<A NAME="lbAN">&nbsp;</A>
<H2>ACKNOWLEDGMENTS</H2>

These people have contributed to <B><u>FvwmTaskBar</u></B>:
<P>
<DL COMPACT>
<DT><I>Danny Dulai</I> &lt;<A HREF="mailto:nirva@ishiboo.com">nirva@ishiboo.com</A>&gt;<DD>
<DT><I>fvwm workers</I> &lt;<A HREF="mailto:fvwm-workers@fvwm.org">fvwm-workers@fvwm.org</A>&gt;<DD>
<P>
</DL>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI"></A><DD>
<DT><A HREF="#lbAJ"></A><DD>
<DT><A HREF="#lbAK">SAMPLE CONFIGURATION</A><DD>
<DT><A HREF="#lbAL">BUGS</A><DD>
<DT><A HREF="#lbAM">AUTHOR</A><DD>
<DT><A HREF="#lbAN">ACKNOWLEDGMENTS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 21:42:21 GMT, February 01, 2012


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Feb-2012 -->

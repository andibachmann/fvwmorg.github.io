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
$title          = "FVWM - Man page - FvwmProxy";
$heading        = "FVWM - Man page - FvwmProxy";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmProxy in unstable branch (2.5.8)"); ?>

<H1>FvwmProxy</H1>
Section: User Commands  (1)<BR>Updated: 20021119<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmProxy - the FVWM Proxy module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmProxy is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmProxy allows the user to locate and control windows obscured
by other windows by using small non-overlapping proxy windows.
The default capabilites include raising and lowering the proxied windows.
<P>
Using the sample configuration, pressing Alt-Tab cycles through the windows
and allows the use of assignable click actions on the proxies.
Releasing the Alt key deactivates the proxy windows.
By default, pressing the left or right mouse buttons on a proxy window
raises or lowers the associated proxied window respectively.
An additional mapping can have the proxies automatically appear by just
holding the Alt key.
<P>
Proxy windows are always on top and try to center on the regular
window they proxy.
A simple collision algorithm tweaks the positions of the proxy windows
to prevent them from overlapping.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmProxy program is original work by Jason Weber.
<P>
Copyright 2002, Jason Weber. No guarantees or warranties or anything
are provided or implied in any way whatsoever. Use this program at your
own risk.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmProxy can be invoked by inserting the line 'Module FvwmProxy' in
the .fvwm2rc file. This can be placed on a line by itself, if FvwmProxy
is to be spawned during fvwm's initialization, or can be bound to a
menu or mouse button or keystroke to invoke it later. Fvwm will search
directory specified in the ModulePath configuration option to attempt
to locate FvwmProxy.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<P>
<DL COMPACT>
<DT>*FvwmProxy: Colorset <I>n</I><DD>
Specifies the color theme for unselected proxy windows.
<P>
<DT>*FvwmProxy: SelectColorset <I>n</I><DD>
Specifies the color theme for the selected proxy window.
<P>
<DT>*FvwmProxy: Font <I>font</I><DD>
Specifies the font used for all proxy window text.
<P>
<DT>*FvwmProxy: Width <I>w</I><DD>
Specifies the size in X of each proxy window.
<P>
<DT>*FvwmProxy: Height <I>h</I><DD>
Specifies the size in Y of each proxy window.
<P>
<DT>*FvwmProxy: Separation <I>d</I><DD>
Specifies the minimum distance between proxy windows when adjusting
for collisions.
<P>
<DT>*FvwmProxy: ShowMiniIcons <I>bool</I><DD>
If true, proxy windows show the mini icon for the window they represent,
if it has a mini icon.  The default is true.
<P>
<DT>*FvwmProxy: EnterSelect <I>bool</I><DD>
If true, a proxy is automatically selected when the mouse is moved
over the proxy, even if no mouse buttons are pressed.
The default is false.
<P>
<DT>*FvwmProxy: ProxyMove <I>bool</I><DD>
If true, moving a proxy window will move the window it represents.
Currently, the proxied window doesn't recognize snap effects during
this operation.
<P>
<DT>*FvwmProxy: Action <I>mouseaction</I> <I>response</I><DD>
Tells FvwmProxy to do the specified <I>response</I> when the given
<I>action</I> is done.
The currently supported mouse actions are: Click1, Click2, Click3 and so on,
representing mouse clicks with various buttons.
By default, the module supports 3 mouse buttons, but it can be
compiled to support more.
The default responses are Raise, Nop, and Lower for Click1, Click2, and Click3,
respectively.
<P>
<DT>*FvwmProxy: Action Select <I>command</I><DD>
This selects an fvwm function to be called during a FvwmProxy Hide command
for the window whose proxy was selected.
The default is WindowListFunc.  WindowListFunc is predefined by the
fvwm install.  You can replace it, add to it,
or supply an independent function.
<P>
<DT>*FvwmProxy: Action Show <I>command</I><DD>
This selects an fvwm function to be called during a FvwmProxy Show command.
The default is Nop.
<P>
<DT>*FvwmProxy: Action Hide <I>command</I><DD>
This selects an fvwm function to be called during a FvwmProxy Hide command.
The default is Nop.
<P>
<DT>*FvwmProxy: Action Abort <I>command</I><DD>
This selects an fvwm function to be called during a FvwmProxy Abort command.
The default is Nop.
<P>
<DT>*FvwmProxy: Action Mark <I>command</I><DD>
This selects an fvwm function to be called on a window after it is marked.
The default is Nop.
<P>
<DT>*FvwmProxy: Action Unmark <I>command</I><DD>
This selects an fvwm function to be called on a marked window just after
another winodw get the mark.
The default is Nop.
<P>
<DT>*FvwmProxy: LogFile <I>pathname</I><DD>
If given, verbose debugging information is logged to a file named
by the argument.  The default is no logging.
<P>
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>COMMANDS</H2>

<P>
<DL COMPACT>
<DT>SendToModule FvwmProxy Show<DD>
Activate proxy windows for all windows on the current desk that
do not use the WindowListSkip option.
If the desk is switched, new proxies are automatically generated.
<P>
<DT>SendToModule FvwmProxy Hide<DD>
Deactivate all proxy windows.
If a proxy is selected (such as with the Next and Prev commands),
the Select Action is call on the window that the proxy represents.
The default action includes raising the window and
warping the mouse to a position over that window.
<P>
<DT>SendToModule FvwmProxy ShowToggle<DD>
If shown, hide.  If hidden, show.
<P>
<DT>SendToModule FvwmProxy Abort<DD>
Deactivate all proxy windows.
This differs from the Hide command in that no action is taken
on any selected window.
<P>
<DT>SendToModule FvwmProxy Circulate <I>command</I><DD>
Tell FvwmProxy to run a conditional command and mark the result.
The imbedded command <I>SendToModule FvwmProxy Mark</I> is automatically
appended after the optional condition, so supplying your own imbedded
command will probably fail.
An example argument to Circulate is
<I>ScanForWindow East South (CurrentPage)</I>.
If the proxies aren't already shown (such as with the Show command),
any Circulate command will automatically show the proxies.
<P>
<DT>SendToModule FvwmProxy Next<DD>
If a proxy window is selected, the next proxy is selected.
Windows with the WindowListSkip option are ignored.
The proxies are sorted left to right during the Show command.
If no proxy is currently selected, but a proxy on this desk was
selected on a recent show, that proxy is selected.
If no proxy on this desk was recently selected,
the leftmost proxy is used.
This nearly duplicates the functionality of
Circulate ScanForWindow East South (CurrentPage).
<DT>SendToModule FvwmProxy Prev<DD>
If a proxy window is selected, the previous proxy is selected.
The starting point is the same as with the Next command, except
that the choice with no recent selection is the rightmost proxy.
This nearly duplicates the functionality of
Circulate ScanForWindow West North (CurrentPage).
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>SAMPLE CONFIGURATION</H2>

The following are excerpts from a .fvwm2rc file which describe
FvwmProxy initialization commands:
<PRE>

Key -Meta_L     A   A   SendToModule    FvwmProxy   Hide
Key Tab         A   M   SendToModule    FvwmProxy   Circulate                                                       ScanForWindow  East South (CurrentPage)
Key Tab         A   SM  SendToModule    FvwmProxy   Circulate                                                       ScanForWindow  West North (CurrentPage)

</PRE>

To have the proxies immediately pop up when you hold the Alt key, add
<PRE>

Key Meta_L      A   N   SendToModule    FvwmProxy   Show

</PRE>

If that's too intrusive, you can assign Alt-Esc to switch the proxies
on and off by adding
<PRE>

Key Escape      A   M   SendToModule    FvwmProxy   ShowToggle

</PRE>

Some platforms have problems where general Alt key combinations becoming
otherwise dysfunctional after defining these mappings.
If this happens, it might be difficult to take full advantage of this module.
<P>
To have the mouse jump to the center instead of the upper left corner,
try adding
<PRE>

AddToFunc WindowListFunc
+ I WarpToWindow 50 50

</PRE>

or just make your own list function from scratch.
<P>
Note that the default configuration does not activate any Next/Prev operations
for Alt-Tab since that sequence is, by default, used by another module.
Adding appropriate key mappings to your .fvwm2rc will switch this
responsibility to FvwmProxy.
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

Jason Weber
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INVOCATION</A><DD>
<DT><A HREF="#lbAG">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAH">COMMANDS</A><DD>
<DT><A HREF="#lbAI">SAMPLE CONFIGURATION</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:07 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Nov-2003 -->

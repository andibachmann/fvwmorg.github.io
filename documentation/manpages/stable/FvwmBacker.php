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
$title          = "FVWM - Man page - FvwmBacker";
$heading        = "FVWM - Man page - FvwmBacker";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmBacker";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmBacker in stable branch (2.6.4)"); ?>

<H1>FvwmBacker</H1>
Section: Fvwm Modules (1)<BR>Updated: 01 February 2012 (2.6.4)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmBacker - the fvwm background changer module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

Module FvwmBacker
<P>
<I>FvwmBacker</I> can only be invoked by fvwm.
Command line invocation of the <I>FvwmBacker</I> module will not work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<P>
The FvwmBacker module provides functionality to change the background
when changing desktops.  Any command can be executed to change the
backgrounds.  Actually, any arbitrary command can be sent to fvwm to
execute, so you could also do things such as changing window border
colors, etc.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmBacker module is the original work of Mike Finger.
<P>
Copyright 1994, Mike Finger. The author makes no guarantees or
warranties of any kind about the use of this module.  Use this module
at your own risk.  You may freely use this module or any portion of it
for any purpose as long as the copyright is kept intact.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmBacker</I> gets config info from
<B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>).

Available options are discussed in a later section.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmBacker can be invoked by fvwm during initialization by inserting
the line
<P>
<PRE>
AddToFunc StartFunction I Module FvwmBacker
</PRE>

<P>
in the .fvwm2rc file.
<P>
FvwmBacker can be started using a 'Module FvwmBacker' command or stopped
using a 'KillModule FvwmBacker' command at any time when fvwm is running.
<P>
FvwmBacker must reside in a directory that is listed in the ModulePath
option of fvwm for it to be executed by fvwm.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

The following options can be placed in the .fvwm2rc file
<P>
<DL COMPACT>
<DT>*FvwmBacker: Command <I>(Desk d, Page x y) command</I><DD>
Specifies the <I>command</I> to execute when the viewport matches the
arguments for the desk d, page x coordinate and y coordinate. Any or all of
these three numeric arguments can be replaced with an asterisk (*) to indicate
that any value matches, in this case Desk or Page parts can be skipped.
<P>
If either the <I>Desk</I> or the <I>Page</I> parts are omitted, the
command is not executed if only the desk or the page is switched.  If
neither is given, the command is executed only once when the module is
started.  This is not the same as using asterisks for the numeric
arguments:  if asterisks are used, the command is always executed when
only the desk or page changes, if the corresponding part is omitted, the
command is never executed when only the desk or page changes.
<P>
If the <I>command</I> is <I>-solid</I> FvwmBacker uses the next
argument as a color in the X database and sets the background to that
color without generating a system call to xsetroot (only single word
color names may be used).
<P>
If the <I>command</I> is <I>colorset</I> FvwmBacker uses the background
specified in colorset <I>n</I> for the given desk.  Please refer to
the man page of the FvwmTheme module for details about colorsets.
<P>
Otherwise the command is sent to fvwm to execute.
<P>
<DT>*FvwmBacker: RetainPixmap<DD>
Causes FvwmBacker to retain and publish the Pixmap with which the background
has been set. This works only for the
<I>-solid</I> or <I>colorset</I>

commands. This is useful for applications which want to use the root
Pixmap on the background to simulate transparency (for example,
Eterm and Aterm use this method). This option should also be used for the
RootTransparent colorset option (see the FvwmTheme man page).
Note: with a colorset background this command may add a lot of memory
to the X server. For example, this adds the pixmap width times height bytes
with a TiledPixmap
image, screen_width times screen_height bytes
with a Pixmap image or a C,B,D,R,S or Y
Gradient and screen_width bytes with
a VGradient or screen height bytes with an HGradient.
<P>
<DT>*FvwmBacker: DoNotRetainPixmap<DD>
Cancels the effect of the previous option. This is the default.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>RUN-TIME CONFIGURATION</H2>

It it possible to replace FvwmBacker's configuration at run-time,
although it is not yet possible to remove existing configuration
lines.  This is done by simply removing the old configuration from
withing fvwm and then read a new one.  This can be done in many
ways, for example by using an fvwm function or one of the modules
<B><a href="<?php echo conv_link_target('./FvwmCommand.php');?>">FvwmCommand</a></B> or <B><a href="<?php echo conv_link_target('./FvwmConsole.php');?>">FvwmConsole</a></B>.

<P>
Example:
<P>
<PRE>

DestroyModuleConfig FvwmBacker*
*FvwmBacker: Command (Desk 0) -solid black
*FvwmBacker: Command (Desk 1) -solid blue

</PRE>

<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>OLD-STYLE OPTIONS</H2>

There is continued support for the now deprecated option:
<P>
<DL COMPACT>
<DT>*FvwmBacker: Desk <I>d command</I><DD>
<P>
It is functionally equivalent to omitting the page coordinates with
<I>*FvwmBacker: Command</I>:
<P>
<PRE>

*FvwmBacker: Command (Desk Id) command

</PRE>

<P>
</DL>
<A NAME="lbAK">&nbsp;</A>
<H2>SAMPLE CONFIGURATION</H2>

The following are excerpts from an .fvwm2rc file which describe
FvwmBacker initialization commands:
<P>
<PRE>

####
# Set Up Backgrounds for different desktop pages (2 desks, 3x2 pages).
####
*FvwmBacker: Command (Page 2 *) -solid steelblue
*FvwmBacker: Command (Desk 0, Page 0 0) Exec fvwm-root $[HOME]/bg2.xpm
*FvwmBacker: Command (Desk 0, Page 0 1) -solid midnightblue
*FvwmBacker: Command (Desk 0, Page 1 *) -solid yellow
*FvwmBacker: Command (Desk 1, Page * 0) -solid navy
*FvwmBacker: Command (Desk 1, Page * 1) Colorset 5

</PRE>

<P>
<A NAME="lbAL">&nbsp;</A>
<H2>AUTHOR</H2>

Mike Finger (<A HREF="mailto:mfinger@mermaid.micro.umn.edu">mfinger@mermaid.micro.umn.edu</A>)
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<A HREF="mailto:Mike_Finger@atk.com">Mike_Finger@atk.com</A>)
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(doodman&nbsp;on&nbsp;IRC,&nbsp;check&nbsp;the&nbsp;#linux&nbsp;channel)
<A NAME="lbAM">&nbsp;</A>
<H2>Modified by</H2>

Andrew Davison (<A HREF="mailto:davison@cs.monash.edu.au">davison@cs.monash.edu.au</A>)
<P>
Michael Han (<A HREF="mailto:mikehan@best.com">mikehan@best.com</A>)
<P>
Mikhael Goikhman (<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>)
<P>

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
<DT><A HREF="#lbAI">RUN-TIME CONFIGURATION</A><DD>
<DT><A HREF="#lbAJ">OLD-STYLE OPTIONS</A><DD>
<DT><A HREF="#lbAK">SAMPLE CONFIGURATION</A><DD>
<DT><A HREF="#lbAL">AUTHOR</A><DD>
<DT><A HREF="#lbAM">Modified by</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 21:42:21 GMT, February 01, 2012


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Feb-2012 -->

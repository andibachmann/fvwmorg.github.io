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
$title          = "FVWM - Man page - FvwmRearrange";
$heading        = "FVWM - Man page - FvwmRearrange";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmRearrange";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmRearrange in stable branch (2.6.4)"); ?>

<H1>FvwmRearrange</H1>
Section: Fvwm Modules (1)<BR>Updated: 01 February 2012 (2.6.4)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmRearrange - rearrange fvwm windows
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmRearrange is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

This module can be called to tile or cascade windows.
<P>
When tiling the module attempts to tile windows on the current screen
subject to certain constraints.  Horizontal or vertical tiling is performed
so that each window does not overlap another, and by default each window
is resized to its nearest resize increment (note sometimes some space
might appear between tiled windows -- this is why).
<P>
When cascading the module attempts to cascade windows on the current screen
subject to certain constraints.  Layering is performed so consecutive
windows will have their window titles visible underneath the previous.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmRearrange is best invoked from a menu, pop up or button.  There are a
number of command line options which can be used to constrain the
layering, these are described below.  As an example case, one could
call FvwmRearrange with the following arguments:


<P>


<blockquote><PRE>FvwmRearrange -tile -h 10 10 90 90</PRE></blockquote>
<P>



or


<P>


<blockquote><PRE>FvwmRearrange -cascade -resize 10 2 80 70</PRE></blockquote>
<P>



<P>
The first invocation will horizontally tile windows with a bounding box
which starts at 10 by 10 percent into and down the screen and ends at
90 by 90 percent into and down the screen.
<P>
The second invocation will cascade windows starting 10 by 2 percent into and
down the screen.  Windows will be constrained to 80 by 70 percent of
the screen dimensions.  Since the <I>resize</I> is also specified,
windows will be resized to the given constrained width and height.
<P>
FvwmRearrange can be called as FvwmTile or FvwmCascade. This is equivalent
to providing the -tile or -cascade option. This form is obsolete and
supplied for backwards compatibility only.
<P>
Command-line arguments passed to FvwmRearrange are described here.
<DL COMPACT>
<DT>-a<DD>
Causes <I>all</I> window types to be affected, even ones with the
WindowListSkip style.
<DT>-animate<DD>
Attempt to do an animated move, this is ignored if <I>-resize</I>
or <I>-maximize</I> are used.
<DT>-cascade<DD>
Cascade windows. This argument must be the first on the command line.
This is the default.
<DT>-desk<DD>
Causes all windows on the desk to be cascaded/tiled instead of the
current screen only.
<DT>-flatx<DD>
Inhibits border width increment. Only used when cascading.
<DT>-flaty<DD>
Inhibits border height increment. Only used when cascading.
<DT>-h<DD>
Tiles horizontally (default is to tile vertically). Used for tiling only.
<DT>-incx <I>arg</I><DD>
Specifies a horizontal increment which is successively added to
cascaded windows.  <I>arg</I> is a percentage of screen width, or pixel
value if a <I>p</I> is suffixed.  Default is zero. Used only for cascading.
<DT>-incy <I>arg</I><DD>
Specifies a vertical increment which is successively added to cascaded
windows.  <I>arg</I> is a percentage of screen height, or pixel value
if a <I>p</I> is suffixed.  Default is zero. Used only for cascading.
<P>
<DT>-m<DD>
Causes maximized windows to also be affected (implied by -a).
<DT>-maximize<DD>
When moving/resizing a window, put it also into maximized state.
<DT>-mn <I>arg</I><DD>
Tiles up to <I>arg</I> windows in tile direction.  If more windows
exist, a new direction row or column is created (in effect, a matrix
is created). Used only when tiling windows.
<DT>-noanimate<DD>
Do not attempt to do an animated move.
<DT>-nomaximize<DD>
Do not put windows into maximized state.
<DT>-noraise<DD>
Inhibits window raising, leaving the depth ordering intact.
<DT>-noresize<DD>
Inhibits window resizing, leaving window sizes intact. This is the default
when cascading windows.
<DT>-nostretch<DD>
If tiling: inhibits window growth to fit tile.  Windows are shrunk to fit the
tile but not expanded.
<P>
If cascading: inhibits window expansion when using the -resize option.  Windows
will only shrink to fit the maximal width and height (if given).
<DT>-r<DD>
Reverses the window sequence.
<DT>-resize<DD>
Forces all windows to resize to the constrained width and height (if
given). This is the default when tiling windows.
<DT>-s<DD>
Causes sticky windows to also be affected (implied by -a).
<DT>-sp<DD>
Causes windows sticky across pages to also be affected (implied by -a).
<DT>-sd<DD>
Causes windows sticky across desks to also be affected (implied by -a).
<DT>-t<DD>
Causes transient windows to also be affected (implied by -a).
<DT>-tile<DD>
Tile windows. This argument must be the first on the command line.
<DT>-u<DD>
Causes untitled windows to also be affected (implied by -a).
<DT>-ewmhiwa<DD>
When rearranging windows, make the calculation ignore the working area, such
as EwmhBaseStruts; by default, FvwmRearrange will honour the working area.
<P>
Up to four numbers can be placed on the command line that are not
switches.  The first pair specify an x and y offset to start the first
window (default is 0, 0).
The meaning of the second pair depends on operation mode:
<P>
When tiling windows it specifies an absolute coordinate reference
denoting the lower right bounding box for tiling.
<P>
When cascading it specifies a maximal width and height for the layered
windows. If an affected window exceeds either this width or height, it
is resized to the maximal width or height.
<P>
If any number is suffixed with the letter p, then it is taken to be a
pixel value, otherwise it is interpreted as a screen percentage.
Specifying zero for any parameter is equivalent to not specifying it.
<P>
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>BUGS</H2>

It is probably not a good idea to delete windows while windows are
being rearranged.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHORS</H2>

Andrew Veliath (original FvwmTile and FvwmCascade modules)
Dominik Vogt (merged FvwmTile and FvwmCascade to FvwmRearrange)
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">BUGS</A><DD>
<DT><A HREF="#lbAG">AUTHORS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 21:42:21 GMT, February 01, 2012


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Feb-2012 -->

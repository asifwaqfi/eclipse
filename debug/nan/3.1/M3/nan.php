<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			November 10, 2006
	#
	# Description: a new and noteworty entry for 3.1M3 debug 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Debug Project New and Noteworthy for 3.1M3";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, new, noteworthy";
	$pageAuthor		= "Debug Team";
	
	include("../../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Locks and deadlocks</b>
		    </td>
		    <td width="70%" valign="top">
		      <p>The locks owned by a thread as well as the lock a thread is waiting for 
		        can be displayed in-line in the Debug view. Toggle the <b>Show Monitors</b> 
		        action in the Debug view drop-down menu to turn the option on/off. Threads 
		        and locks involved in a deadlock are rendered in red with deadlock overlays. 
		      <p><img src="thread_monitor_debug_view.gif" title="Threads &amp; Monitors" alt="A deadlock displayed in the debug view"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Navigating stack traces</b> 
		    </td>
		    <td width="70%" valign="top">
		      <p>Copy and paste stack traces into the Java Stack 
		      Trace Console and use hyperlinks to navigate the traces. The Java Stack 
		      Trace Console can be opened from the <b>Open Console</b> drop-down menu 
		      in the Console view.
		      <p><img src="java_stack_trace_console.gif" title="Java Stack Trace Console" alt="Java Stack Trace Console"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>'toString()' in-line</b> 
		    </td>
		    <td width="70%" valign="top">
		      <p>The 'toString()' for a variable can be displayed 
		      in the Variables view tree as well as in the details area. The Variables 
		      view can be configured to display 'toString()' in-line for all variables, 
		      only for variables that have custom detail formatters, or only in the details 
		      area, by selecting the <b>Variable Details...</b> action in the view drop-down 
		      menu.
		      <p><img src="inline_toString.gif" title="Inline toString" alt="Inline toString example"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Improved breakpoint groups</b> 
		    </td>
		    <td width="70%" valign="top">
		      <p>Breakpoint groups have been enhanced to support 
		      nested groups and prevent the loss of user defined groups when the group 
		      settings are changed in the Breakpoints view. Use the <b>Group By</b> cascade 
		      menu to quickly change between standard groupings - breakpoint types, files, 
		      projects, and custom groups. Custom groups are used to group breakpoints 
		      into arbitrary logical sets that can then be enabled/disabled with one click. 
		      Use the <b>Advanced...</b> option to configure nested groupings.
		      <p><img src="improved_breakpoint_groups.gif" title="Improved Breakpoint Group" alt="Breakpoints display by groups"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Console EOF</b> 
		    </td>
		    <td width="70%" valign="top">The console supports a key binding to signal 
		      end-of-file for programs that accept console input. The key binding is CTRL-Z 
		      on Windows and CTRL-D on Linux platforms, by default.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Console encoding</b> 
		    </td>
		    <td width="70%" valign="top">The console can be configured to display output 
		      in an encoding that differs from the encoding used by the Eclispe SDK. To 
		      set the console encoding for an application, use the <b>Console Encoding</b> 
		      settings on the Common tab of a launch configuration.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>J2SE5.0 varargs</b>
		    </td>
		    <td width="70%" valign="top">The Java debugger supports evaluations using 
		      the J2SE5.0 varargs syntax.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Hyperlink support</b> 
		    </td>
		    <td width="70%" valign="top">
		      <p>The Ant Editor supports hyperlink navigation. It is enabled by default and the key modifier can be set in the Ant Editor <b>Navigation</b> preferences
		      <p><img src="ant_hyperlink.gif" title="Ant Hyperlink Support" alt="Ant hyperlink support"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Annotations for external buildfiles</b> 
		    </td>
		    <td width="70%" valign="top">Annotations (error and warning &quot;squiggles&quot;) are presented for buildfiles that are external to the Eclipse workspace. External buildfiles can be opened using <b>File>Open External File...</b>.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>&quot;Show source of selected elements only&quot;</b> 
		    </td>
		    <td width="70%" valign="top">The Ant Editor and its outline present the <b>Show source of selected elements only</b>  toggle button in the Eclipse toolbar so the you can control the presentation of the buildfile in the Ant Editor.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Folding context menu</b> 
		    </td>
		    <td width="70%" valign="top">The Ant Editor now has a editor ruler menu so you can more quickly control folding presentation of the buildfile.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		    <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Improved navigation</b> 
		    </td>
		    <td width="70%" valign="top">Open declaration support (F3) in the Ant editor has been added for referenced targets and properties.</td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		  <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Open external documentation</b> 
		    </td>
		    <td width="70%" valign="top">
		      <p>An open external documentation action (default keybinding is <b>Shift-F2</b>) has been added to the Ant Editor. To activate, place your cursor within the Ant task (or type etc.) that you wish to view the Apache Ant external documentation. An external browser is opened on the appropriate documentation provided via the online Apache Ant manual.
		      <p><img src="ant_external_documentation.gif" title="Ant External Documentation" alt="Ant external documentation"> 
		    </td>
		  </tr>
		  <tr> 
		    <td colspan="2"> 
		      <hr>
		    </td>
		  </tr>
		   <tr> 
		    <td width="30%" valign="top" align="left"> 
		      <p align="right"><b>Separate JRE  input handler</b> 
		    </td>
		    <td width="70%" valign="top">Eclipse nows provides an SWT based input handler for separate JRE Ant builds.</td>
		  </tr>
		  
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
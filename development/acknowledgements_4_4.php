<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php                                                              require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");   $App   = new App();  $Nav  = new Nav();  $Menu   = new Menu();    include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

  #*****************************************************************************
  #
  # index.php
  #
  # Author:    David Williams and others on Eclipse Project 
  # Date:      2014-06-16
  #
  # Description: Eclipse project Luna release acknowledgments page
  #
  #
  #****************************************************************************
  
  #
  # Begin: page-specific settings.  Change these. 
  $pageTitle     = "Eclipse Luna Acknowledgements";
  $pageKeywords  = "eclipse, 4.4, luna, acknowledgements, acknowledgments, thanks";
  $pageAuthor    = "";
  
  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links",   "downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

  # End: page-specific settings
  #
    
  # Paste your HTML content between the markers!  
ob_start();
?>    

  <div id="midcolumn">


    <div class="homeitem3col">
      <h3>Eclipse Luna Acknowledgements</h3>

      <p>
        The entire Eclipse and Equinox team would like to thank the Eclipse Foundation staff for their tireless efforts, including: Matt Ward and Denis Roy for not only keeping all that infrastructure
        going, but also constantly improving it, Janet Campbell and Sharon Corbett for guiding us through the Eclipse legal process, Wayne Beaton for giving us improved tools to simplify and manage
        our development process, Ian Skerrett for his help with marketing the Eclipse release including providing the new, fresh logo and set of icons, and Mike Milinkovich for running the whole show.
        We'd also like to thank the users and adopters who support our efforts, through a range of support including early testing, being a <a href="https://eclipse.org/donate/">Friend of Eclipse</a>,
        contracting special work, or outright employment.
      </p>
      <p>The Platform Workspace team would like to thank everyone who has helped by filing bugs, testing and providing patches. Specifically we would like to thank the following people who have
        helped improve the Workspace components by their code contributions to this release: Piotr Aniola, Krzysztof Daniel, Thanh Ha, Tom Hochstein, Mickael Istria, Markus Keller, Chris McGee, Sergey
        Prigogin, Paul Webster and David Williams.</p>
      <p>The Platform UI team would like to extend special thanks to the following people who have made (and continue to make) significant contributions to Eclipse Platform 4 and the Workbench:
        Abel Hegedus, Alexander Kurtakov, Alexandros Karypidis, Andrea Guarinoni, Anton Leherbauer, Aurelien Pupier, Ben Cox, Benjamin Koch, Brian Vosburgh, Cezar Lenci, Christian Georgi, Christian
        Hempe, Christian Pontesegger, Christian Walther, Christine Gerpheide, Christoph Keimel, David Berger, Dirk Fauth, Eladio Caritos, Elena Laskavaia, Erik Chou, Evgeniy Gil, Felix Heppner,
        Fredrik Attebrant, Georg Breitschopf, Gorkem Ercan, Hendrik Still, Jan Haensli, Jeanderson Candido, Jelle Schuhmacher, Jens &uuml;bler, Kevin Milburn, Krzysztof Kazmierczyk, Leo Denault,
        Louis-Michel Mathurin, Marc-Andre Laperle, Markus Alexander Kuppe, Markus Duft, Mat Booth, Matthias Mail&auml;nder, Matthieu Wipliez, Maxime PORHEL, Michael de Hoog, Mickael Istria, Moshe
        WAJNBERG, Oliver Puetter, Pablo Cabrera, Patrik Suzzi, Philippe Marschall, Philip Wenig, Piotr Aniola, Ren&eacute; Brandstetter, Robin Stocker, Rolf Theunissen, Ruediger Herrmann, Sebastian
        Sampaoli, Sergey Prigogin, Simon Scholz, Snjezana Peco, Stefan Winkler, Steven Spungin, Terry Parker, Thorsten Hake, Timo Kinnunen, Tom Hochstein, Tony McCrary, Wilbert Alberts and Yuri
        Blankenstein.</p>
      <p>The Platform Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks go to Terry Parker, Thanh Ha, darren ha, Szymon Ptaszkiewicz, and
        Mickael Istria for patches they submitted. Not to mention our thanks to the whole community of users and adopters who support our work.</p>
      <p>The Platform Debug team would like to thank everyone who helped improve the debugger framework by filing bugs, testing and providing patches. Specifically we would like to thank Lars and
        Tim McCraery for the new icons, Andrea Guarinoni for CSS Dark theme bug fix, Victor Rubezhny, Paul Webster, Sarika Sinha and Andrew Ferrazzutti for bug fixes.</p>
      <p>The Platform Ant team would like to thank everyone who helped improve the ant framework by filing bugs, testing and providing patches. Specifically we would like to thank Lars and Tim
        McCraery for the new icons and Thomas Watson for Removing uses of Equinox PlatformAdmin and Sarika Sinha for testing and working on Apache Ant updates.</p>
      <p>The Platform SWT team would like to thank everyone who filed great bug reports and helped to improve the toolkit. Special thanks go to : Alexander Kurtakov, Anatoly Spektor, Marc-Andre
        Laperle and Snjezana Peco for significant contributions towards improving the stability of the GTK+ 3 port, and Sami Wagiaalla for contributing a preliminary implementation of the Browser's
        Webkit2 port. Additional thanks to Steve Northover, Steve Foreman, Roland Oldenburg, Timo Kinnunen, Nicholas Rahn, Lars Vogel, Stephan Herrmann, Mickael Istria, Peter Severin, Dani Megert,
        Markus Keller, Lina Kemmel and David Williams.</p>
      <p>The release engineering team would like to thank all the committers on Eclipse and Equinox for their timely responses to releng issues and processes. But, in addtion, thanks to those to
        those that have helped improve our build, either directly, or by improvements in infrastrucure or tools we use for our builds, such as Thanh Ha, Igor Fedorenko, and Jan Sievers invaluable
        advice. In addition, we'd like to thank those that provide our "pre-reqs", Scott Lewis and the ECF Team, and Ed Merks, Dennis Huebner, and the EMF team. Their willingness to provide stable
        builds "early" for what we pre-req, not only helps our project meet our deadlines, but also reduces our stress!</p>

      <p>The JDT Core team would like to thank everyone who has helped us maintain high quality by testing and filing good bug reports. We specially would like to thank those who contributed to
        our Java 8 effort - Stephan Hermann, Jesper M&oslash;ller and Andrew Clement. We would also like to thank Timo Kinnunen and Steve Northover and others who proactively tested our Java 8 updates
        and gave us immensely valuable early feedback. We should also thank Terry Parker and his Google team for testing, raising bugs and of course providing good quality patches. A special
        appreciation goes to Olivier Thomann and Walter Harley for continuing to support the team with consulting and fixes.</p>
      <p>The JDT Debug team would like to thank everyone who helped improve the Java debugger by filing bugs, testing and providing patches. Specifically we would like to thank Jesper
        M&oslash;ller for Java 8 bug fixes and Sarika Sinha for testing and providing a lot of bug fixes.</p>
      <p>JDT UI sends thanks to code contributors Nikolay Metchev, Samrat Dhillon, Lukas Hanke, Mickael Istria, Stephan Herrmann, Lars Vogel, Thanh Ha, Xavier Coulon, Andrew Eisenberg, Ievgen
        Lukash, Marcel Bruch, Matthias Mail&auml;nder, Thirumala Reddy Mutchukota, Thomas Schindl, Andreas Schmid.</p>

      <p>The Plug-in Development Environment team would like to thank everyone who has helped improve our user experience by providing great bug reports and excellent patches. Special thanks to
        Susan McCourt for adding new customization options to the product editor, Krzysztof Daniel for improving the feature selection dialog, Brian de Alwis for adding deprecation warning support to
        the plug-in editor and Vikas Chandra for working on Java 8 support. We thank Daniel Megert for his ongoing commitment to component quality. We appreciate all of the help we received from other
        Eclipse developers and members of the community including: Ben Cox, Andrea Guarinoni, Mickael Istria, Alexander Kurtakov, Marc-Andre Laperle, Eike Stepper, Anton Tanasenko, Matthias Villiger,
        Lars Vogel, and Jesse Weinstein.</p>

        <p>The Equinox team would like to thank ...</p>
        <p>The p2 team would like to thank ... <p>

      <h3>Active Committers</h3>
      <p>This Eclipse and Equinox release was brought to you by the following committers. These committers were active at the time of the release (one or more commits since previous release::</p>
      <p>
      <table width=100%>
        <tr>
          <td>Alexander Kurtakov</td>
          <td>Alex Blewitt</td>
          <td>Allon Mureinik</td>
          <td>Andrea Guarinoni</td>
          <td>Andrew Ferrazzutti</td>
          <td>Andrew Niefer</td>
          <td>Anirban Chakraborty</td>
          <td>Anton Leherbauer</td>
          <td>Arun Thondapu</td>
          <td>Ben Cox</td>
          <td>BJ Hargrave</td>
          <td>Bogdan Gheorghe</td>
          <td>Brian de Alwis</td>
          <td>Chris Austin</td>
          <td>Christian Georgi</td>
          <td>Christoph Keimel</td>
          <td>Cornel Izbasa</td>
          <td>Curtis Windatt</td>
          <td>Daniel Rolka</td>
          <td>Dani Megert</td>
          <td>David Williams</td>
          <td>Denis Roy</td>
          <td>Dirk Fauth</td>
          <td>Eric Moffatt</td>
          <td>Fred Bricon</td>
          <td>Gorkem Ercan</td>
          <td>Grant Gayed</td>
          <td>Gunnar Wagenknecht</td>
          <td>Hamdan Msheik</td>
          <td>Hendrik Still</td>
          <td>Holger Voormann</td>
          <td>Ian Bull</td>
          <td>Jayaprakash Arthanareeswaran</td>
          <td>Jeanderson Candido</td>
          <td>Jesper Steen Møller</td>
          <td>John Arthorne</td>
          <td>John Ross</td>
          <td>Kai Tödter</td>
          <td>kdaniel</td>
          <td>Ken Lee</td>
          <td>Krzysztof Daniel</td>
          <td>Lakshmi Shanmugam</td>
          <td>Lars Vogel</td>
          <td>Lazar Kirchev</td>
          <td>Lina Kemmel</td>
          <td>Malgorzata Janczarska</td>
          <td>Manju Mathew</td>
          <td>Manoj Palat</td>
          <td>Marc-Andre Laperle</td>
          <td>Markus Duft</td>
          <td>Markus Keller</td>
          <td>Martin Lippert</td>
          <td>Matthias Villiger</td>
          <td>Michael Rennie</td>
          <td>Mickael Istria</td>
          <td>Mikaël Barbero</td>
          <td>Mike Rennie</td>
          <td>Mikhail Kalkov</td>
          <td>MKeck</td>
          <td>M N Palat</td>
          <td>Nicholas Rahn</td>
          <td>Niraj Modi</td>
          <td>Noopur Gupta</td>
          <td>Oliver Puetter</td>
          <td>pablocabrera85</td>
          <td>Pascal Rapicault</td>
          <td>Paul Elder</td>
          <td>Paul Webster</td>
          <td>René Brandstetter</td>
          <td>Robin Stocker</td>
          <td>Roland Oldenburg</td>
          <td>Sami Wagiaalla</td>
          <td>Sarika Sinha</td>
          <td>Satyam Kandula</td>
          <td>Sergey Prigogin</td>
          <td>Silenio Quarti</td>
          <td>Sopot Cela</td>
          <td>Sravan Kumar Lakkimsetti</td>
          <td>Srikanth Sankaran</td>
          <td>Stefan Winkler</td>
          <td>Stephan Herrmann</td>
          <td>Steve Foreman</td>
          <td>Stoyan Boshev</td>
          <td>Susan McCourt</td>
          <td>Szymon Brandys</td>
          <td>Szymon Ptaszkiewicz</td>
          <td>Thanh Ha</td>
          <td>Thomas Schindl</td>
          <td>Thomas Watson</td>
          <td>Timo Kinnunen</td>
          <td>Tobias Oberlies</td>
          <td>Tom Schindl</td>
          <td>Tony McCrary</td>
          <td>Vikas Chandra</td>
          <td>Victor V Rubezhny</td>
          <td>Wojciech Sudol</td>
        </tr>
      </table>
      </p>
    </div>

  </div>
</body>
</html>

<?php
  $html = ob_get_contents();
  ob_end_clean();

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

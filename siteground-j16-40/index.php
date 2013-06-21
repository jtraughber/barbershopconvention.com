<?php
/**
 * @version		$Id: index.php $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2009 - 2011 SiteGround.com - All Rights Reserved.
 * @license		GNU General Public License version 3 or later; see LICENSE.txt
    
 *	This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
// No direct access.
defined('_JEXEC') or die;
JHTML::_('behavior.framework', true);
/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
?>


<!-- Here is the php for mobile redirect


define('MOBILE_SITE_URL', 'http://mobile.yoursite.com');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== FALSE ||
strpos($_SERVER['HTTP_USER_AGENT'], 'iPod') !== FALSE) {

header("Location: " . MOBILE_SITE_URL);
}



-->


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>




	<jdoc:include type="head" />
	<!-- The following line loads the template CSS file located in the template folder. -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
	
	<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/CreateHTML5Elements.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript">jQuery.noConflict();</script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/sgmenu.js"></script>
    
    <script type="text/javascript">
 function unhide(largesite_menu) {
 var item = document.getElementById(largesite_menu);
 if (item) {
 item.className=(item.className=='hidden')?'unhidden':'hidden';
 }
 }
 
 function unhide(open_btn) {
 var item = document.getElementById(open_btn);
 if (item) {
 item.className=(item.className=='hidden')?'unhidden':'hidden';
 }
 }
 </script>
 
 <div id="fb-root"></div>
<script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>
</head>
<body class="page_bg">









<div id="largesite_menu" class="unhidden">
	
    <div id="top_menu_container">	
    
       <ul id="top_menu">
<li><span id="network">The Society is...</span></li>
<li><a href="http://www.barbershop.org/"><span>BARBERSHOP.ORG</span></a></li>
<li><a href="http://www.youthchorusfestival.com/"><span>YOUTH CHORUS FESTIVAL</span></a></li>
<li><a href="http://www.harmonymarketplace.com/"><span>HARMONY MARKETPLACE</span></a></li>
<li><a href="/"><span id="selected">CONVENTIONS</span></a></li>
<li><a href="http://www.harmonyuniversity.org/"><span>HARMONY UNIVERSITY &amp; EDUCATION</span></a></li>
<li><a href="http://ebiz.barbershop.org/"><span>MEMBERS ONLY</span></a></li>

</ul>
    </div>
<!--   This is the "hide top menu" div. Leave this hidden unless you wish to have open/close function of top menu.

<div id="hide_btn" class="unhidden">
<a href="javascript:unhide('largesite_menu'); javascript:unhide('open_btn');"><img src="/templates/siteground-j16-40/images/close_btn.png"></a>
</div>
-->
 
</div>
<div id="open_btn" class="hidden"><a href="javascript:unhide('largesite_menu'); javascript:unhide('open_btn');"><span>&or;</span></a></div>
  



	<div class="wrapper">
	<div id="headerwrapper">
	
    
    
    
    <header>
		<!-- <div id="search">
			<jdoc:include type="modules" name="position-0" />
		</div>	
		-->
    <div id="logo_bhs"><a href="/"><img src="/templates/siteground-j16-40/images/logo_bhs_conventions.png"></a>
    </div>  
    
    <div id="social_container_top">
    
    <div id="social_links">
   
    <a id="youtube_button" href="http://www.youtube.com/user/BarbershopHarmony38"><img src="/templates/siteground-j16-40/images/youtube_btn.png"></a>
    
    <a id="twitter_button" href="https://twitter.com/barbershopnews"><img src="/templates/siteground-j16-40/images/twitter_btn.png"></a>
    
    <a id="facebook_button" href="https://www.facebook.com/barbershopharmonysociety"><img src="/templates/siteground-j16-40/images/facebook_btn.png"></a>
    
    </div>  
    <div id="facebook_line" class="fb-like" data-href="https://www.facebook.com/barbershopharmonysociety" data-send="false" data-width="320" data-show-faces="false"></div>
      
    
    </div> 
        
        
        
        
        
		<div class="top-menu">
			<div id="sgmenu">
				<jdoc:include type="modules" name="menuload" />
			</div>
		</div>
		
		<?php if( $this->countModules('newsflash') ) : ?>
			<div class="newshold">
				<jdoc:include type="modules" name="newsflash" style="rounded"/>
			</div>
		<?php endif; ?>
	
		<!-- <div class="sitename">
			<h1><a href="<?php echo $this->baseurl ?>"><?php echo $app->getCfg('sitename'); ?></a></h1>
		</div>
		-->	
        	
	 </header>
	</div>
	<?php if( $this->countModules('breadcrumbsload') ) : ?>
	<div class="cpathway">
		<jdoc:include type="modules" name="breadcrumbsload" />
    </div>
	<?php endif; ?>
    
    <?php if( $this->countModules('banner1') ) : ?>
    <div id="banner1">
    	<jdoc:include type="modules" name="banner1" />
    </div>
    <?php endif; ?>
    
    <?php if( $this->countModules('bottombanner') ) : ?>
    <div id="banner1">
    	<jdoc:include type="modules" name="bottombanner" />
    </div>
    <?php endif; ?>
		
	
	<section id="content">
		<?php if( $this->countModules('position-7') ) : ?>
		<div class="maincol">			 	
		<?php elseif( !$this->countModules('position-7') and ($this->countModules('position-4') ) ) : ?>
		<div class="maincol_w_left">
		<?php elseif( $this->countModules('position-7') and (!$this->countModules('position-4') ) ) : ?>
		<div class="maincol_w_right">
		<?php else: ?>
		<div class="maincol_full">
		<?php endif; ?>
		
		<?php if( $this->countModules('position-7') ) : ?>
			<div class="leftcol">
				<jdoc:include type="modules" name="position-7" style="rounded"/>
			</div>
			<?php endif; ?>
			
				<div class="cont">
						<jdoc:include type="message" />
						<jdoc:include type="component" />
				</div>
			
		<?php if( $this->countModules('position-4') ) : ?>
			<div class="rightcol">
				<jdoc:include type="modules" name="position-4" style="rounded"/>
			</div>
		<?php endif; ?>
        <?php if( $this->countModules('lower-middle') ) : ?>
			<div class="lower-middle">
				<jdoc:include type="modules" name="lower-middle" style="rounded"/>
			</div>
		<?php endif; ?>
		<div class="clr"></div>
		</div>
        <?php if( $this->countModules('photostream_title') ) : ?>
    <div id="photostream_title">
    	<jdoc:include type="modules" name="photostream_title" />
        
    </div>
    <?php endif; ?>
        <?php if( $this->countModules('photostream') ) : ?>
    <div id="photostream">
    	<jdoc:include type="modules" name="photostream" />
        
    </div>
    <?php endif; ?>
    
    <?php if( $this->countModules('social_feed') ) : ?>
    <div id="social_feed">
    	<jdoc:include type="modules" name="social_feed" />
        
    </div>
    <?php endif; ?>
     
    
    
	</section>
	<footer_top>
	<table width="940" align="center">
<tr>
<td width="300" align="center">
FIND A CHORUS
</td>
<td width="320" align="center">
DONATE
</td>
<td width="300" align="center">
SOCIALIZE
</td>
</tr>
<tr>
<td align="center">
<a href="http://ebiz.barbershop.org/ebusiness/Public/ChapterProximitySearch2.aspx"><img src="/templates/siteground-j16-40/images/find_chorus_map.png" onmouseover="this.src='/templates/siteground-j16-40/images/find_chorus_map_hover.png'" onmouseout="this.src='/templates/siteground-j16-40/images/find_chorus_map.png'"></a>
</td>
<td align="center">
<a href="http://www.harmonyfoundation.org"><img src="/templates/siteground-j16-40/images/foundation_donate.png"></a><a href="http://www.singcanadaharmony.ca"><img src="/templates/siteground-j16-40/images/canada_donate.png"></a>
</td>
<td align="center">
<div id="facebook_line_bottom" class="fb-like" data-href="https://www.facebook.com/barbershopharmonysociety" data-send="false" data-width="320" data-show-faces="false" data-colorscheme="dark"></div>
</td>
</tr>
</table>
    
    
    
    
	</footer_top>
    <footer>
    <table width="960" id="footer_links">
<tr>
<td colspan="5">
<h1>Barbershop Network</h1>
</td>
</tr>
<tr>
<td>
<a href="http://www.barbershopconnections.com">BarbershopConnections</a><br /> 
<a href="http://www.barbershopwiki.com">Barbershop Wiki Project</a><br />
<a href="http://www.barbershophq.com">BarbershopHQ Blog</a><br>
<a href="http://www.harmonize.ws/HarmonetReporter/scores/scormain.htm">Harmonet Reporter Scores Archive</a>
</td>
<td>
<a href="http://launch.groups.yahoo.com/group/bbshop/messages">Harmonet Yahoo Barbershop Group</a><br>
<a href="http://www.aicgold.com">AIC Gold</a><br>
<a href="http://www.seniorsgold.com">AISQC Gold</a><br>
<a href="http://www.flickr.com/photos/8019069@N04/">BHSMedia on Flickr</a>
</td>
<td>
<a href="http://www.youbarbershop.com">YouBarbershop</a><br>
<a href="http://www.quartetmatchup.com">Quartet Matchup</a><br>
<a href="http://www.bsmdb/com">Barbershop Music Database</a><br>
<a href="http://launch.groups.yahoo.com/group/barbershopquartet/?yguid=123764676">Yahoo Group for Finding a Quartet</a>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<br>
<h2>Livewire Newsletter</h2><br>
<h3>Sign Up for the Society's weekly publication</h3><br>
<a href="http://visitor.constantcontact.com/manage/optin/ea?v=001povWiHOjwz8d6_YRzTC-rg%3D%3D"><img src="/templates/siteground-j16-40/images/subscribe_btn.png"></a>
</td>
</tr>
<tr>
<td colspan="5">&nbsp;

</td>
</tr>
<tr>
<td colspan="2">
<img src="templates/siteground-j16-40/images/bhs_logo_small.png">
</td>
<td colspan="3" align="right">
<h4>110 7th Ave. N, Nashville, TN 37203-3704 | (800)876.SING | (615)823.3993</h4><br>
<a href="/index.php/home/sitemap">SITE MAP</a> | <a href="http://barbershop.org/about/careers-internships.html">CAREER</a> | <a href="mailto:info@barbershop.org">INFO@BARBERSHOP.ORG</a> | <a href="/administrator" target="_blank">ADMIN LOGIN</a>
</td>
</tr>
</table>
    
    
    </footer>
	</div>
</body>
</html>
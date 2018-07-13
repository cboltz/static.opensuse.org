<?php
/**
 * OpenSUSECommunity skin
 *
 * ================================================
 * The OpenSUSECommunity skin and YAML are licensed under the
 * Creative Commons Attribution 2.0 Germany License.
 *
 * To view a copy of this license, visit
 * http://creativecommons.org/licenses/by/2.0/de/
 * or send a letter to
 * Creative Commons
 * 171 Second Street
 * Suite 300
 * San Francisco, California 94105
 * USA
 *=================================================
*/

if( !defined( 'MEDIAWIKI' ) ) die();
require_once('includes/SkinTemplate.php');
class SkinOpenSUSECommunity extends SkinTemplate {
  function initPage( &$out ) {
    SkinTemplate::initPage( $out );
    $this->skinname  = 'opensusecommunity';
    $this->stylename = 'opensuse';
    $this->template  = 'OpenSUSECommunityTemplate';
  }
}
/**
*
* The following function (wfMsgWikiHtml) is implemented in future versions
* of MediWiki. Needs to be removed from the template once we upgrade to a
* newer MediWiki version
*/
if( !function_exists('wfMsgWikiHtml') ) {
  function wfMsgWikiHtml( $key ) {
    global $wgOut;
    $args = func_get_args();
    array_shift( $args );
    return wfMsgReplaceArgs( $wgOut->parse( wfMsgGetKey( $key, true ), true ), $args );
  }
}
class OpenSUSECommunityTemplate extends QuickTemplate {
  function execute() {
    wfSuppressWarnings();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $this->text('lang') ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir') ?>">
 <head>
  <meta http-equiv="Content-Type" content="<?php $this->text('mimetype') ?>; charset=<?php $this->text('charset') ?>" />
  <?php $this->html('headlinks') ?>
  <?php $this->html('headscripts') ?>
<title><?php $this->text('pagetitle') ?></title>
  <link href="<?php $this->text('stylepath') ?>/opensuse/css/local/community-wiki.css" rel="stylesheet" type="text/css" />
  <!--[if lte IE 7]>
  <link href="<?php $this->text('stylepath') ?>/opensuse/css/local/wiki_iehacks.css" rel="stylesheet" type="text/css"/>
  <![endif]-->
  <link rel="stylesheet" type="text/css" <?php if(empty($this->data['printable']) ) { ?>media="print"<?php } ?> href="<?php $this->text('stylepath') ?>/opensuse/css/local/wiki_print.css" />
  <!--[if lt IE 7]>
  <meta http-equiv="imagetoolbar" content="no" />
  <![endif]-->
  <script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('stylepath') ?>/opensuse/javascript/common/langsel.js"></script>
  <?php if($this->data['jsvarurl'  ]) { ?><script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('jsvarurl' ) ?>"></script><?php } ?> 
  <script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('stylepath' ) ?>/common/wikibits.js"></script>
  <?php if($this->data['usercss']) { ?><style type="text/css"><?php $this->html('usercss') ?></style><?php } ?>
  <?php if($this->data['userjs']) { ?><script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('userjs' ) ?>"></script><?php } ?>
  <?php if($this->data['userjsprev']) { ?><script type="<?php $this->text('jsmimetype') ?>"><?php $this->html('userjsprev') ?></script><?php } ?>
  <?php if($this->data['trackbackhtml']) print $this->data['trackbackhtml']; ?>

 </head>
 <body onload="langShow ();<?php if($this->data['body_onload']) { ?><?php $this->text('body_onload')?><?php } ?>" <?php if($this->data['body_ondblclick']) { ?>ondblclick="<?php $this->text('body_ondblclick') ?>"<?php } ?> <?php if($this->data['nsclass']) { ?>class="<?php $this->text('nsclass') ?>"<?php } ?>>
  <div class="skipLinks">
   <a href="<?php $this->msg('mainpage'); ?>" accesskey="1">Home</a> | 
   <a href="#top" accesskey="2">Content</a> | 
   <a href="#searchbox" accesskey="3"><?php $this->msg('search'); ?></a> | 
   <a href="#firstnavitem" accesskey="4">Navigation</a> | 
   <a href="#p-tb" accesskey="5"><?php $this->msg('toolbox') ?></a> |
   <a href="#page_actions" accesskey="6">Actions</a> |
   <a href="#p-lang" accesskey="7"><?php $this->msg('otherlanguages') ?></a>
  </div>
  <div id="page_margins">
   <div id="page" class="hold_floats">
    <!-- Begin 2 column main part -->
    <div id="main">
     <!-- Begin left column -->
     <div id="col1">
      <div id="col1_content" class="clearfix">
       <!-- Begin Logo -->
       <div class="grey_box" id="logo">
        <div class="box_content_row">
         <div class="box_content" id="logo_content">
          <a href="/"><img src="<?php $this->text('stylepath') ?>/opensuse/images/local/community-logo.png" alt="openSUSE-Community" title="openSUSE-Community Home" /></a>
         </div>
        </div>
        <div class="box_bottom_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
       </div>
       <!-- End Logo -->
       <!-- Begin openSUSE navigation -->
       <div class="grey_box" id="firstnavitem">
        <div class="box_top_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
        <div class="box_title_row">
         <div class="box_title">
          openSUSE 
         </div>
        </div>
        <div class="box_content">
         <ul class="navlist">
          <li style="list-style-image: url(<?php $this->text('stylepath') ?>/opensuse/css/common/images/liDot_download.png)"><a href="http://software.opensuse.org/">Get Software</a></li>
          <li style="list-style-image: url(<?php $this->text('stylepath') ?>/opensuse/css/common/images/liDot_wiki.png)"><a href="/">openSUSE Wiki</a></li>
          <li style="list-style-image: url(<?php $this->text('stylepath') ?>/opensuse/css/common/images/liDot_build.png)"><a href="http://build.opensuse.org/">Build Software</a></li>
         </ul>
        </div>
        <div class="box_bottom_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
       </div>
       <br />
       <!-- End openSUSE navigation -->
       <!-- Begin custom navigation -->
<?php foreach ($this->data['sidebar'] as $bar => $cont) { ?>
       <div class="blue_box" id="p-<?php echo htmlspecialchars($bar) ?>">
        <div class="box_top_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
        <div class="box_title_row">
         <div class="box_title">
          <?php $out = wfMsg( $bar ); if (wfNoMsg($bar, $out)) echo $bar; else echo $out;?>

         </div>
        </div>
        <div class="box_content">
         <ul class="navlist">
<?php foreach($cont as $key => $val) { ?>
          <li id="<?php echo htmlspecialchars($val['id']) ?>"><a href="<?php echo htmlspecialchars($val['href']) ?>"><?php echo htmlspecialchars($val['text'])?></a></li>
<?php } ?>
         </ul>          
        </div>
        <div class="box_bottom_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
       </div>
       <br />
<?php } ?>
       <div class="blue_box" id="p-tb">
        <div class="box_top_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
        <div class="box_title_row">
         <div class="box_title">
          <?php $this->msg('toolbox') ?>

         </div>
        </div>
        <div class="box_content">
         <ul class="navlist">
<?php if($this->data['notspecialpage']) { foreach( array( 'whatlinkshere', 'recentchangeslinked', 'recentchanges' ) as $special ) { ?>
          <li id="t-<?php echo $special?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href']) ?>"><?php echo $this->msg($special) ?></a></li>
<?php } } ?>
<?php if(isset($this->data['nav_urls']['trackbacklink'])) { ?>
          <li id="t-trackbacklink"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['trackbacklink']['href']) ?>"><?php echo $this->msg('trackbacklink') ?></a></li>
<?php } ?>
<?php if($this->data['feeds']) { ?>
          <li id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) { ?><span id="feed-<?php echo htmlspecialchars($key) ?>"><a href="<?php echo htmlspecialchars($feed['href']) ?>"><?php echo htmlspecialchars($feed['text'])?></a>&nbsp;</span><?php } ?></li>
<?php } ?>
<?php foreach( array('contributions', 'emailuser', 'upload', 'specialpages') as $special ) { ?><?php if($this->data['nav_urls'][$special]) { ?>
          <li id="t-<?php echo $special ?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href']) ?>"><?php $this->msg($special) ?></a></li>
<?php } ?><?php } ?>
         </ul>
        </div>
        <div class="box_bottom_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
       </div>
       <br />
       <!-- End custom navigation -->
       <!-- Begin Language navigation noscript -->
<?php if( $this->data['language_urls'] ) { ?>
       <noscript>
       <div class="blue_box" id="p-lang">
        <div class="box_top_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
        <div class="box_title_row">
         <div class="box_title">
          <?php $this->msg('otherlanguages') ?>
         </div>
        </div>
        <div class="box_content">
         <ul class="navlist">
<?php foreach($this->data['language_urls'] as $langlink) { ?>
	  <li><a href="<?php echo htmlspecialchars($langlink['href']) ?>"><?php echo $langlink['text'] ?></a></li>
<?php } ?>
         </ul>
        </div>
        <div class="box_bottom_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
       </div>
       <br />
       </noscript>
<?php } ?>
       <!-- End Language navigation noscript -->       
      </div>
     </div>
     <!-- End left column -->
     <!-- Begin right cloumn -->
     <div id="col3">
      <div id="col3_content" class="clearfix">
       <div class="blue_box_double" id="banner_blue">
        <div class="box_content_row">
         <div class="box_content" id="banner_content">
          <div id="pt-personal">
           <!-- Begin Personal links (Login, etc.) -->
<?php $i=1 ?><?php foreach($this->data['personal_urls'] as $key => $item) { ?>
           <?php $i++ ?><a href="<?php echo htmlspecialchars($item['href']) ?>"<?php if(!empty($item['class'])) { ?> class="<?php echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php echo htmlspecialchars($item['text']) ?></a><?php if($i <= count($this->data['personal_urls'])) { ?> |
<?php } ?><?php } ?>

           <!-- End Personal links (Login, etc.) -->
          </div>
          <div class="subcolumns">
           <div class="c50l">
            <div class="subcl">
	     <div id="slogan">
	      <img src="<?php $this->text('stylepath') ?>/opensuse/images/local/community.png" alt="Community" />
             </div>
            </div>
           </div>
           <div class="c50r">
            <div class="subcr">
             <div id="searchbox">
              <!-- Begin search -->
              <form name="searchform" action="<?php $this->text('searchaction') ?>">
               <div class="topleft">
                <div class="topright">
                 <div class="bottomleft">
                  <div class="bottomright">
                   <input id="searchInput" name="search" type="text" <?php if( isset( $this->data['search'] ) ) { ?> value="<?php $this->text('search') ?>"<?php } ?> />
                  </div>
                 </div>
                </div>
               </div>
               <input type="image" name="go" value="<?php $this->msg('go') ?>" title="Title Search" src="<?php $this->text('stylepath') ?>/opensuse/css/local/images/blue_searchbox/go.png" class="button" />&nbsp;<input type="image" name="fulltext" value="<?php $this->msg('search') ?>" title="Fulltext Search" src="<?php $this->text('stylepath') ?>/opensuse/css/local/images/blue_searchbox/search.png" class="button" />
              </form>
              <!-- End search -->
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="box_bottom_row">
         <div class="box_left"></div>
         <div class="box_right"></div>
        </div>
       </div>
       <br style="clear: right;" />
       <div id="contentarea">
<?php if (wfMsgForContent( 'mainpage' ) == $this->data['title'] ) { ?>
        <!-- Snippet for starting page (3-column layout) -->
        <div class="subcolumns">
         <div class="c75l">
          <div class="subcl">
          <!-- End Snippet -->
<?php } ?>    
        <div class="grey_box_double">
         <div class="box_top_row">
          <div class="box_left"></div>
          <div class="box_right"></div>
         </div>
         <div class="box_title_row">
          <div class="box_title">
           <div id="langsel" class="hide">
            <!-- Begin language select -->
<?php if( $this->data['language_urls'] ) { ?>
            <form action="" name="langsel">
             <select name="lang" onchange="langRedirect()">
              <option value=""><?php $this->msg('otherlanguages') ?></option>
<?php foreach($this->data['language_urls'] as $langlink) { ?>
              <option value="<?php echo htmlspecialchars($langlink['href']) ?>"><?php echo $langlink['text'] ?></option>
<?php } ?>
             </select>
            </form>
<?php } ?>
            <!-- End langauge select -->
           </div>
           <div id="page_actions">
            <!-- Begin page actions -->
            <ul>
<?php foreach($this->data['content_actions'] as $key => $action) { ?>
             <li><a href="<?php echo htmlspecialchars($action['href']) ?>" <?php if($action['class']) { ?>class="<?php echo htmlspecialchars($action['class']) ?>"<?php } ?>><?php echo htmlspecialchars($action['text']) ?></a></li>
<?php } ?>
            </ul>
            <!-- End page actions -->
           </div>
          </div>
         </div>
         <div class="box_content" id="bodyContent">
          <a name="top" id="top"></a>
<?php if($this->data['sitenotice']) { ?>
          <div id="siteNotice"><?php $this->html('sitenotice') ?></div>
<?php } ?>
          <h1><?php $this->text('title') ?></h1>
	  <h3 id="siteSub"><?php $this->msg('tagline') ?></h3>
	  <div id="contentSub"><?php $this->html('subtitle') ?></div>
<?php if($this->data['undelete']) { ?>
          <div id="contentSub"><?php $this->html('undelete') ?></div>
<?php } ?>
<?php if($this->data['newtalk'] ) { ?>
          <div class="usermessage"><?php $this->html('newtalk')  ?></div>
<?php } ?>
<!-- Begin Content Area -->
<?php $this->html('bodytext') ?>

<?php if($this->data['catlinks']) { ?>
          <div id="catlinks"><?php $this->html('catlinks') ?></div>
<?php } ?>
<!-- End Content Area -->
          <div style="clear:both;"></div>
         </div>
         <div class="box_footer_row">
          <div id="page_footer" class="box_footer">
           <!-- Begin Footer -->
           <?php print wfMsg('osCommunityCopyright') ?>
           <br />
           This site uses the <a href="http://www.yaml.de">YAML</a> CSS framework.
           <br />
           <?php if(isset($this->data['about'])) { ?><?php $this->html('about') ?><?php } ?><?php if(isset($this->data['disclaimer'])) { ?> | <?php $this->html('disclaimer') ?><?php } ?> | <a class="plainlink" href="mailto:webmaster@opensuse.org">Feedback</a>
           <br />
<?php if(isset($this->data['lastmod'])) { ?>
           This page was <?php $this->html('lastmod') ?><?php } ?><?php if(isset($this->data['viewcount'])) { ?> and <?php  $this->html('viewcount') ?>.
<?php } ?>
           <br />
           <br />
           <a href="http://www.novell.com/linux/"><img src="<?php $this->text('stylepath') ?>/opensuse/images/common/founded_novell.gif" alt="Founded by Novell" /></a>
           <!-- End Footer -->
          </div>
         </div>
         <div class="box_bottom_row">
          <div class="box_left"></div>
          <div class="box_right"></div>
         </div>
        </div>
       </div>
      </div>
<?php if (wfMsgForContent( 'mainpage' ) == $this->data['title'] ) { ?>
<!-- Insert right navigation bar -->
<?php print wfMsgWikiHtml('mainpagerightcolumn'); ?>
<!-- End insert right navigation bar -->
        <!-- Snippet for starting page (3-column layout) -->
        </div>
       </div>
      </div>
      <!-- End Snippet -->
<?php } ?>
      <!-- IE Column Clearing -->
      <div id="ie_clearing">&nbsp;</div>
      <!-- Ende: IE Column Clearing -->
     </div>
     <!-- End right column -->
    </div>
    <!-- End 2 cloumn main part -->
   </div>
  </div>
  <?php $this->html('reporttime') ?>
 </body>
</html>
<?php
    wfRestoreWarnings();
  }
}
?>

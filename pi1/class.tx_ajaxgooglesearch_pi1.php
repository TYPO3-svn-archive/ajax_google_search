<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Shafiq Issani <email@shafiq.in>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib.'class.tslib_pibase.php');


/**
 * Plugin 'Ajax Google Search' for the 'ajax_google_search' extension.
 *
 * @author	Shafiq Issani <email@shafiq.in>
 * @package	TYPO3
 * @subpackage	tx_ajaxgooglesearch
 */
class tx_ajaxgooglesearch_pi1 extends tslib_pibase {
	var $prefixId      = 'tx_ajaxgooglesearch_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_ajaxgooglesearch_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'ajax_google_search';	// The extension key.
	var $pi_checkCHash = true;
	
	/**
	 * The main method of the PlugIn
	 *
	 * @param	string		$content: The PlugIn content
	 * @param	array		$conf: The PlugIn configuration
	 * @return	The content that is displayed on the website
	 */
	function main($content, $conf) {
		$this->conf = $conf;
		$this->pi_setPiVarDefaults();
		$this->pi_loadLL();
		
	
		$content='<style type="text/css">
      .search-control { margin: 10px;}
</style><link href="http://www.google.com/uds/css/gsearch.css" type="text/css" rel="stylesheet"/><script src="http://www.google.com/uds/api?file=uds.js&amp;v=1.0&amp;key=ABQIAAAAy_d61TyTKJbshweQAd0F2RQSuvbTqsWZ_P--_2IajuYDHLaO7BQmeXBXs7pjH0x9Q0TVM-AYCgfzQw" type="text/javascript"></script>
<script type="text/javascript">
      function OnLoad() {
       
        
        var tabbed = new GSearchControl();
        
        tabbed.setLinkTarget(GSearch.LINK_TARGET_BLANK );
        tabbed.addSearcher(new GwebSearch());
        tabbed.addSearcher(new GlocalSearch());
        tabbed.addSearcher(new GblogSearch());
        tabbed.addSearcher(new GnewsSearch());
        tabbed.addSearcher(new GbookSearch());
		tabbed.addSearcher(new GvideoSearch());
       
        var cseId = "017576662512468239146:omuauf_lfve";
        var searcher;
        var options;
        
        searcher = new GwebSearch();
        options = new GsearcherOptions();
        searcher.setSiteRestriction("000455696194071821846:comparisons");
        searcher.setUserDefinedLabel("Prices");
        tabbed.addSearcher(searcher, options);

        searcher = new GwebSearch();
        options = new GsearcherOptions();
        searcher.setSiteRestriction("000455696194071821846:community");
        searcher.setUserDefinedLabel("Forums");
        tabbed.addSearcher(searcher, options);

        searcher = new GwebSearch();
        options = new GsearcherOptions();
        searcher.setSiteRestriction("000455696194071821846:shopping");
        searcher.setUserDefinedLabel("Shopping");
        tabbed.addSearcher(searcher, options);
		
		searcher = new GwebSearch();
        options = new GsearcherOptions();
        searcher.setSiteRestriction(cseId, "Lectures");
        searcher.setUserDefinedLabel("Lectures");
        tabbed.addSearcher(searcher, options);

        searcher = new GwebSearch();
        options = new GsearcherOptions();
        searcher.setSiteRestriction(cseId, "Assignments");
        searcher.setUserDefinedLabel("Assignments");
        tabbed.addSearcher(searcher, options);

        searcher = new GwebSearch();
        options = new GsearcherOptions();
        searcher.setSiteRestriction(cseId, "Reference");
        searcher.setUserDefinedLabel("Reference");
        tabbed.addSearcher(searcher, options);
        
        
        var drawOptions = new GdrawOptions();
        drawOptions.setDrawMode(GSearchControl.DRAW_MODE_TABBED);
        tabbed.draw(document.getElementById("search_control_tabbed"), drawOptions);


            
            
        tabbed.execute("");
      }
      GSearch.setOnLoadCallback(OnLoad);
    
</script>
<div class="search-control" id="search_control_tabbed" height="710" width="330"></div>
		';
	
		return $this->pi_wrapInBaseClass($content);
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/ajax_google_search/pi1/class.tx_ajaxgooglesearch_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/ajax_google_search/pi1/class.tx_ajaxgooglesearch_pi1.php']);
}

?>

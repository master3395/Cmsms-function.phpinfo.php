<?php

////////////////////////////////////////////////////////////////////////////////
//									      //
// Version 1.0								      //
// Author: Kim Birkeland Skorgenes (info@newstargeted.com)		      //
// Website: https://www.newstargeted.com				      //
// CMS - CMS Made Simple						      //
// (c)2004 by Ted Kulp (wishy@users.sf.net)				      //
// This project's homepage is: http://www.cmsmadesimple.org		      //
// This program is free software; you can redistribute it and/or modify       //
// it under the terms of the GNU General Public License as published by       //
// the Free Software Foundation; either version 2 of the License, or	      //
// (at your option) any later version.					      //
// This program is distributed in the hope that it will be useful,	      //
// but WITHOUT ANY WARRANTY; without even the implied warranty of	      //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the	      //
// GNU General Public License for more details.				      //
// You should have received a copy of the GNU General Public License          //
// along with this program; if not, write to the Free Software		      //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA  //
//									      //
////////////////////////////////////////////////////////////////////////////////

function smarty_function_phpinfo($params, &$template)
{
  return phpinfo();
}

function smarty_cms_help_function_phpinfo() 
{?>

  echo lang('help_function_phpinfo');
	<h3>What does this do?</h3>
	<p>This plugin checks the site, for its php info, on the server.</p>
	<h3>Usage</h3>
	<strong>Example 1 (Basic):</strong>
	<pre>{phpinfo}</pre>
	This will show the information your server has about your php".
	<br /><br />
</pre>

	As you can see this is a very simple yet flexible plugin. Feel free to send your comments to: <a href="mailto:info@newstargeted.com">info@newstargeted.com</a>.
<?php }

function smarty_cms_about_function_phpinfo() 
{?>
	<p><strong>Author: </strong>Kim Birkeland Skorgenes<br />
	<strong>Version: </strong>1.0<br />
	<strong>Change History: </strong><br />
	<ul>
		<li>1.0 - Initial release</li>
	</ul>
	</p>
<?php } 
?>




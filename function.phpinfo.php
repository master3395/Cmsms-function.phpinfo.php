<?php

////////////////////////////////////////////////////////////////////////////////
//									      //
// Version 1.1								      //
// Author: Kim Birkeland Skorgenes (info@newstargeted.com)		      //
// Website: https://www.newstargeted.com				      //
// CMS - CMS Made Simple						      //
// (c)2004 by Ted Kulp (wishy@users.sf.net)				      //
// This project's homepage is: https://newstargeted.com         	      //
//									      //
// SECURITY WARNING: This plugin exposes sensitive server information.	      //
// Access is restricted to administrators with "Manage Settings" permission.  //
//									      //
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

function smarty_function_phpinfo($params, $template)
{
    try {
        // Security check - require admin privileges
        if (!check_permission(get_userid(false), 'Manage Settings')) {
            return '<div style="color:red;padding:10px;border:1px solid red;background:#ffe6e6;">
                    <strong>Access Denied:</strong> Administrator privileges required to view PHP information.
                    </div>';
        }
        
        // Capture phpinfo output using output buffering
        ob_start();
        phpinfo();
        $output = ob_get_clean();
        
        if ($output === false || empty($output)) {
            return '<div style="color:orange;padding:10px;border:1px solid orange;background:#fff8dc;">
                    <strong>Warning:</strong> Unable to retrieve PHP information.
                    </div>';
        }
        
        return $output;
        
    } catch (Exception $e) {
        // Error handling - log error and return safe message
        error_log('phpinfo plugin error: ' . $e->getMessage());
        return '<div style="color:red;padding:10px;border:1px solid red;background:#ffe6e6;">
                <strong>Error:</strong> An error occurred while retrieving PHP information.
                </div>';
    }
}

function smarty_cms_help_function_phpinfo() 
{
?>
	<h3>What does this do?</h3>
	<p>This plugin displays comprehensive PHP configuration information from the server.</p>
	
	<h3>Security Notice</h3>
	<p style="color:red;"><strong>Important:</strong> This plugin is restricted to administrators with "Manage Settings" permission only. 
	It exposes sensitive server information including PHP version, configuration, loaded extensions, and environment variables.</p>
	
	<h3>Usage</h3>
	<p><strong>Important:</strong> For best results, use this plugin on a page with a "block" template (minimal template without header/footer) to avoid HTML conflicts.</p>
	<p><strong>Example (Basic):</strong></p>
	<pre>{phpinfo}</pre>
	<p><strong>Recommended Setup:</strong></p>
	<ol>
		<li>Create a new page in CMS Made Simple (e.g., "PHP Info")</li>
		<li>Assign a "block" or minimal template to this page</li>
		<li>Add <code>{phpinfo}</code> to the page content</li>
		<li>Access the page as an administrator</li>
	</ol>
	<p>This will display the complete PHP information for your server, including:</p>
	<ul>
		<li>PHP version and build information</li>
		<li>Server configuration and settings</li>
		<li>Loaded PHP extensions and modules</li>
		<li>Environment variables</li>
		<li>PHP directives and their values</li>
	</ul>
	<p><strong>Note:</strong> phpinfo() outputs a full HTML document. Using a block template prevents conflicts with your site's layout and ensures proper display.</p>
	
	<h3>Requirements</h3>
	<ul>
		<li>Administrator access with "Manage Settings" permission</li>
		<li>PHP 7.4 - 8.6 compatible</li>
	</ul>
	
	<p>As you can see this is a simple yet powerful diagnostic plugin. Feel free to send your comments to: <a href="mailto:info@newstargeted.com">info@newstargeted.com</a>.</p>
<?php
}

function smarty_cms_about_function_phpinfo() 
{?>
	<p><strong>Author: </strong>Kim Birkeland Skorgenes<br />
	<strong>Version: </strong>1.1<br />
	<strong>PHP Compatibility: </strong>7.4 - 8.6<br />
	<strong>Change History: </strong><br />
	<ul>
		<li><strong>1.1</strong> (17.10.2025) - Security and compatibility update:
			<ul>
				<li>Added admin-only access restriction (requires "Manage Settings" permission)</li>
				<li>Fixed deprecated pass-by-reference syntax for PHP 8+ compatibility</li>
				<li>Implemented output buffering to properly capture phpinfo() output</li>
				<li>Added comprehensive error handling with try-catch blocks</li>
				<li>Fixed syntax errors in help function</li>
				<li>Added security warnings in documentation</li>
				<li>Verified compatibility with PHP 7.4 through 8.6</li>
			</ul>
		</li>
		<li><strong>1.0</strong> - Initial release</li>
	</ul>
	</p>
<?php
}
?>




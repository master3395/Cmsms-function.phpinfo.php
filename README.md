# CMSMS phpinfo Plugin

![Version](https://img.shields.io/badge/version-1.1-blue.svg)
![License](https://img.shields.io/badge/license-GPL--3.0-green.svg)
![PHP](https://img.shields.io/badge/PHP-7.4--8.6-purple.svg)
![CMSMS](https://img.shields.io/badge/CMSMS-Compatible-orange.svg)

**A secure, administrator-only plugin for displaying comprehensive PHP configuration information in CMS Made Simple.**

---

## 📖 Overview

The CMSMS phpinfo Plugin provides a simple and secure way to view your server's PHP configuration directly from within CMS Made Simple. This diagnostic tool is essential for developers and administrators who need to verify server settings, loaded extensions, and PHP configuration values.

### ✨ Key Features

- **Admin-Only Access** - Restricted to users with "Manage Settings" permission
- **Comprehensive Information** - Displays full PHP configuration including version, modules, and settings
- **Error Handling** - Robust error handling with safe error messages
- **PHP 7.4-8.6 Compatible** - Works across modern PHP versions
- **Simple Integration** - Just add `{phpinfo}` tag to any page
- **Security-First Design** - Built with security best practices from the ground up

---

## ⚠️ Security Warning

> **IMPORTANT:** This plugin exposes sensitive server information including PHP version, configuration directives, loaded extensions, and environment variables.
>
> - Access is automatically restricted to administrators with "Manage Settings" permission
> - Never use this plugin on a publicly accessible page
> - Consider removing the plugin from production sites after diagnostics are complete

---

## 📥 Installation

### Download Options

You can download the plugin from either:

- **GitHub:** Download `function.phpinfo.php` from this repository
- **CMSMS Forge:** Official plugin page at [dev.cmsmadesimple.org/projects/php_info_plugin](https://dev.cmsmadesimple.org/projects/php_info_plugin)

### Installation Steps

1. **Download the Plugin**

   - Download `function.phpinfo.php` from this repository or the CMSMS Forge
2. **Upload to CMSMS**

   - Navigate to your CMSMS installation directory
   - Upload the file to: `plugins/`
   - Ensure proper file permissions (typically 644)
3. **Verify Installation**

   - Log in to your CMSMS admin panel
   - Go to Extensions → User Defined Tags
   - Look for "phpinfo" in the list of available functions

---

## 🚀 Usage

### Basic Usage

Simply add the following tag to any CMSMS page or template:

```smarty
{phpinfo}
```

### Recommended Setup

For best results, follow these steps:

1. **Create a New Page**

   - In CMSMS admin, create a new page (e.g., "Server Info" or "PHP Diagnostics")
2. **Assign a Block Template**

   - Choose a minimal "block" template (no header/footer)
   - This prevents HTML conflicts with phpinfo's full HTML output
3. **Add the Tag**

   - In the page content, add: `{phpinfo}`
4. **Set Page Properties**

   - Mark the page as "hidden" or restrict it in your navigation
   - Optionally set "Show in Menu" to "No"
5. **Access the Page**

   - Visit the page as an administrator
   - You'll see the complete PHP information display

### Information Displayed

The plugin shows comprehensive PHP details including:

- ✅ PHP version and build information
- ✅ Server API and configuration
- ✅ Loaded PHP extensions and modules
- ✅ PHP directives and their current values
- ✅ Environment variables
- ✅ Configuration file (php.ini) location
- ✅ Apache/web server information (if available)

---

## 📋 Requirements

| Requirement                | Version/Details                                                 |
| -------------------------- | --------------------------------------------------------------- |
| **CMS Made Simple**  | 2.x or higher (tested on latest versions)                       |
| **PHP**              | 7.4, 8.0, 8.1, 8.2, 8.3, 8.4, 8.5, 8.6                          |
| **Admin Permission** | "Manage Settings" permission required                           |
| **Server**           | Compatible with AlmaLinux, Ubuntu, and most Linux distributions |

---

## 🔧 Troubleshooting

### Access Denied Error

**Problem:** Red error message saying "Access Denied: Administrator privileges required"

**Solution:**

- Ensure you're logged in as an administrator
- Verify your user account has "Manage Settings" permission
- Check in: Extensions → User Management → Groups

### Blank or No Output

**Problem:** Page shows nothing or is blank

**Solution:**

- Verify the plugin file is correctly uploaded to the `plugins/` directory
- Check file permissions (should be 644)
- Look for PHP errors in your server error log
- Ensure phpinfo() function is not disabled in php.ini (check `disable_functions` directive)

### HTML Layout Conflicts

**Problem:** Page layout breaks or looks strange

**Solution:**

- Use a "block" template without header/footer
- Create a dedicated page just for phpinfo display
- The phpinfo() function outputs a complete HTML document, which conflicts with most site templates

### CyberPanel / OpenLiteSpeed Specific

**Problem:** Function not working on CyberPanel/OpenLiteSpeed

**Solution:**

- Verify PHP is running in LSAPI mode
- Check that phpinfo() is not disabled in your PHP configuration
- Test with a simple PHP file first to ensure phpinfo() works on your server

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

### Report Issues & Feature Requests

- **CMSMS Forge:** [dev.cmsmadesimple.org/projects/php_info_plugin](https://dev.cmsmadesimple.org/projects/php_info_plugin)
  - Official bug tracker and feature requests
  - Release history and updates
- **GitHub Issues:** Submit issues and pull requests on this repository

### How to Contribute

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Contact

- **Email:** [info@newstargeted.com](mailto:info@newstargeted.com)
- **Website:** [newstargeted.com](https://newstargeted.com)
- **CMSMS Forge Profile:** [master3395](https://dev.cmsmadesimple.org/projects/php_info_plugin)

Feel free to reach out with questions, suggestions, or issues!

---

## 📝 Changelog

### Version 1.1 (17.10.2025)

**Security & Compatibility Update**

- ✅ Added admin-only access restriction (requires "Manage Settings" permission)
- ✅ Fixed deprecated pass-by-reference syntax for PHP 8+ compatibility
- ✅ Implemented output buffering to properly capture phpinfo() output
- ✅ Added comprehensive error handling with try-catch blocks
- ✅ Fixed syntax errors in help function
- ✅ Added security warnings in documentation
- ✅ Verified compatibility with PHP 7.4 through 8.6

### Version 1.0

**Initial Release**

- Basic phpinfo() display functionality
- Simple Smarty function integration

---

## 📄 License

This project is licensed under the **GNU General Public License v3.0** (GPL-3.0).

```text
Copyright (C) 2025 Kim Birkeland Skorgenes

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
```

See the [LICENSE](LICENSE) file for the full license text.

---

---

<div align="center">

**Made with ❤️ by [NewStargeted](https://newstargeted.com)**

*Empowering CMSMS developers with better tools*

</div>

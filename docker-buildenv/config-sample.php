<?php
/**
 * config.php
 *
 * Example configuration for our PHP directory explorer.
 * Rename this file to "config.php" and adjust values as needed.
 *
 * System Requirements:
 *  - PHP >= 7.4 (preferably 8.0+)
 *  - Webserver with PHP support
 */

/**
 * ROOT_PATH:
 * The absolute path to serve as the "root" for the explorer.
 * By default, the parent directory of "/config" is used.
 * Adjust as necessary.
 */
$ROOT_PATH = realpath(__DIR__ . '/../');

/**
 * FILES_DIRECTORY:
 * Optional: Specify a directory whose files should be displayed,
 * separate from $ROOT_PATH, by providing an absolute path.
 * If empty or invalid, the script will default to $ROOT_PATH.
 */
#$FILES_DIRECTORY = realpath(__DIR__ . '/../storage');
#$FILES_DIRECTORY = realpath('/var/www/my_project/sample');
#$FILES_DIRECTORY = '/home/user/path_to_my_folder';
#@FILES_DIRECTORY@;

// Data controller information for the privacy policy page
$DATA_CONTROLLER_NAME    = "Your Company / Your Name";
$DATA_CONTROLLER_ADDRESS = "Your Address";
$DATA_CONTROLLER_EMAIL   = "youremail@example.com";
// Email display alias (e.g., "Contact Us" instead of the email address)
$DATA_CONTROLLER_EMAIL_ALIAS = "Contact Us";

/**
 * IGNORE_DIR_PATTERNS:
 * Wildcard patterns for directories to be ignored.
 * e.g., ["vendor", "storage", "cache*", ".git", "*"] etc.
 * Patterns are matched case-insensitively.
 */
$IGNORE_DIR_PATTERNS = [
    'assets',
    'config',
    'node_modules',
    '.git*',
    // More patterns or "*"
];

/**
 * IGNORE_FILE_PATTERNS:
 * Wildcard patterns for files to be ignored.
 * e.g., ["*.log", "*.php", "Thumbs.db"]
 */
$IGNORE_FILE_PATTERNS = [
    '*.css',
    'favicon.ico',
    '.gitignore',
    '.htacces*',
    '*.html',
    'index.php',
    '*.js',
    'LICENSE',
    '*.md',
    'privacy.php',
    'robots.txt',
    // ...
];

/**
 * ALLOW_DIR_PATTERNS:
 * Directories matching these patterns will not be ignored,
 * even if they appear in the ignore list.
 * e.g., ["specialFolder*", "foo"]
 */
$ALLOW_DIR_PATTERNS = [
    // "tmp",
    // "deploy",
];

/**
 * ALLOW_FILE_PATTERNS:
 * Files matching these patterns will not be ignored,
 * even if they appear in the ignore list.
 * e.g., ["*.ipk", "*.docx"]
 */
$ALLOW_FILE_PATTERNS = [
    // "*.ipk",
    // "*.docx"
];

/**
 * DIRECTORY_ALIASES:
 * Map real directory names to an alias.
 * e.g., ["tmp" => "Temporary", "var" => "System Logs"]
 */
$DIRECTORY_ALIASES = [
    'tmp' => 'storage',
];

/**
 * APP_TITLE:
 * The main heading for the explorer.
 */
$APP_TITLE = "File Explorer";

/**
 * APP_SUBTITLE:
 * Subtitle or short description displayed below the title.
 */
$APP_SUBTITLE = ""; //"Browse your files easily.";

/**
 * APP_LOGO_URL:
 * Optional URL or path to your logo image (PNG, JPEG, GIF, SVG).
 * If empty, layout is centered. If set, the logo appears to the left.
 * e.g., "assets/images/logo.png" or "https://example.com/logo.svg"
 */
$APP_LOGO_URL = "assets/images/logo.png";

/**
 * COPYRIGHT_YEAR, COPYRIGHT_OWNER, FOOTER_TEXT:
 * For the page footer. Typically includes your name/company, year, disclaimers, etc.
 */
$COPYRIGHT_YEAR  = date("Y");
$COPYRIGHT_OWNER = "Thilo Graf";
$FOOTER_TEXT     = " &bullet; File Explorer &bullet; All rights reserved.";

/**
 * NAVIGATION_TITLE:
 * Title displayed above the navigation/breadcrumb panel.
 */
$NAVIGATION_TITLE = "Main Navigation";

/**
 * BROWSER_TITLE:
 * Title displayed above the file/folder listing panel.
 */
$BROWSER_TITLE = "Select Files and Folders";

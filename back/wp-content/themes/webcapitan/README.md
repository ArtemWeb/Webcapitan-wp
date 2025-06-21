# Base WordPress Theme

## Introduction

This is a base WordPress theme designed for simple and efficient WordPress development. This theme provides the basic functionalities required for any WordPress site, keeping flexibility and extensibility at its core.

## Setup

1. Download the theme.
2. Unzip the contents into your `wp-content/themes` directory.
3. Install packages node_modules using " npm i " command
3. In webpack, in the line "proxy: 'basetheme'" you need to rename the folder "basetheme" to the one in which you have the entire project
4. Log in to your WordPress dashboard.
5. Navigate to `Appearance` -> `Themes`.
6. You should see the base WordPress theme in your list of themes.
7. Click on the `Activate` button.

## Development

This theme is built to be flexible and scalable. However, while making changes to this theme or building upon it, please keep the WordPress best practices in mind to ensure the stability and performance of your website.

## Post-Project Cleanup

### Deleting Unneeded Files

Upon the completion of your project, please ensure you remove any unused or unnecessary files from the `/inc/opt` directory. This step is important for maintaining the efficiency and security of your theme. Avoid leaving any dormant or unused files within your theme's directories.

To remove these files:

1. Navigate to the `/inc/opt` directory within your theme.
2. Identify any files that are not needed in your project.
3. Delete the identified files.

### Updating `functions.php`

After deleting the unneeded files, remember to update your `functions.php` file.

Any PHP `require` or `include` statements referencing the deleted files in the `functions.php` file will need to be removed to avoid any PHP errors. If these references remain, PHP will attempt to include the deleted files, causing your theme to break.

To update `functions.php`:

1. Open `functions.php` in your text editor.
2. Find the `require` or `include` statements that reference the deleted files.
3. Remove these statements.

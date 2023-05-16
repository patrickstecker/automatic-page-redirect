# Automatic logged-in Page Redirect

The Automatic logged-in Page Redirect plugin is a WordPress plugin that redirects logged-in users to a custom page when they try to access a page. It works in combination with the Advanced Custom Fields (ACF) plugin. If you set the ACF Field "Redirect to Page if Logged in" (redirect_to_page_if_logged_in), then it will automatically redirect you from there if it is set.

## Installation

Install and activate the Advanced Custom Fields plugin.
1. Download the newest Realease from this repository as a ZIP
3. In your WordPress Admin Dashboard, go to `Plugins > Add New > Upload Plugin`
4. Upload the downloaded ZIP from Step 1.
5. Activate the plugin through the 'Plugins' menu in WordPress.
6. Set Up the Plugin as explained in the next Section.

## Set Up

Before you can use this Plugin, you have to create an advanced custom field with the name "redirect_to_page_if_logged_in".
1. Install and activate the Advanced Custom Fields plugin.
2. In the WordPress dashboard, go to Custom Fields > Add New.
3. In the Field Label field, enter "Redirect to Page if Logged in".
4. In the Field Name field, enter "redirect_to_page_if_logged_in".
5. In the Field Type dropdown, select "Page Link".
6. Click the "Publish" or "Save" button to save the custom field.

## Usage

1. Create a new page or edit an existing page.
2. Set the value of the custom field you created in the `Set Up` section, by selecting the page you want to redirect to.
3. Save the page.

Users that are logged in will now be automatically redirected when they are logged in. Users that are not logged in will not be re-directed.

## Deactivation

1. Deactivate the plugin through the 'Plugins' menu in WordPress.
2. Delete the plugin through the 'Plugins' menu in WordPress.
3. If you want to you can also delete the Advanced Custom field and deactivate and delete the Advanced Custom Fields Plugin if you don't need it anymore.

## License

The Automatic logged-in Page Redirect plugin is licensed under the GPL2 license. See the [LICENSE](LICENSE) file for more information.
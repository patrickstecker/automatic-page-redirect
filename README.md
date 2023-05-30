# Automatic logged-in Page Redirect

The Automatic logged-in Page Redirect plugin is a WordPress plugin that redirects logged-in users to a custom page when they try to access a page. In the same way, you can configure that users that are not logged in are getting redirected somewhere else. It works in combination with the Advanced Custom Fields (ACF) plugin. If you set the ACF Field "Redirect to Page if Logged in" (redirect_to_page_if_logged_in) and another field "Redirect to Page if NOT Logged in" (redirect_to_page_if_not_logged_in), then it will automatically redirect you from there if it is set.  
Additionally you can specify redirects in the url. If you set a query parameter "redirect_logged_in", the user will be redirected to the value of this parameter if he/she is logged in. By specifying the query parameter "redirect_logged_out", a user that is not logged in gets redirected.  
If both the ACF and the query param is set, the query param has more priority and the user will be redirected to the url specified by the query param.  

## Installation

Install and activate the Advanced Custom Fields plugin.
1. Download the newest Realease from this repository as a ZIP
3. In your WordPress Admin Dashboard, go to `Plugins > Add New > Upload Plugin`
4. Upload the downloaded ZIP from Step 1.
5. Activate the plugin through the 'Plugins' menu in WordPress.
6. Set Up the Plugin as explained in the next Section.

## Set Up

Before you can use this Plugin, you have to create an advanced custom field with the name "redirect_to_page_if_logged_in" and one with the name "redirect_to_page_if_not_logged_in".
1. Install and activate the Advanced Custom Fields plugin.
2. In the WordPress dashboard, go to Custom Fields > Add New.
3. In the Field Label field, enter "Redirect to Page if Logged in".
4. In the Field Name field, enter "redirect_to_page_if_logged_in".
5. In the Field Type dropdown, select "Page Link".
6. Now click "+ add Field" and repeat the last three steps with the label "Redirect to Page if NOT Logged in" and the name "redirect_to_page_if_not_logged_in".
7. Click the "Publish" or "Save" button to save the custom field.

## Usage

### Static redirects
1. Create a new page or edit an existing page.
2. Set the value of the custom field you created in the `Set Up` section, by selecting the page you want to redirect to.
3. Save the page.

### Dynamic redirects by url/query param
1. If logged in users should be redirected:  
    a. Extend the link you use by the query param "redirect_logged_in" and the value of the url encoded redirect url.  
    b. Example: https://google.com/?redirect_logged_in=https%3A%2F%2Fgoogle.com%2Fusers  
2. If logged out users should be redirected:  
    a. Extend the link you use by the query param "redirect_logged_out" and the value of the url encoded redirect url.  
    b. Example: https://google.com/?redirect_logged_out=https%3A%2F%2Fgoogle.com%2Flogin  

Tip: An easy tool to generate URL encoded urls: https://www.urlencoder.org/

## Deactivation

1. Deactivate the plugin through the 'Plugins' menu in WordPress.
2. Delete the plugin through the 'Plugins' menu in WordPress.
3. If you want to you can also delete the Advanced Custom field and deactivate and delete the Advanced Custom Fields Plugin if you don't need it anymore.

## License

The Automatic logged-in Page Redirect plugin is licensed under the GPL2 license. See the [LICENSE](LICENSE) file for more information.
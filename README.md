# wp-conditional-theme-switcher
Switching to different theme for specific IP address.

# How to use
Change the following to an IP address that this condition should work on:

```
    if ( $_SERVER['REMOTE_ADDR'] == '122.12.12.12' ) {
```

Change the theme to existing one that you want to use for debugging:

```
        return 'twentytwentyone';
```

Add the code inside `wp-content/mu-plugins/` 

Enjoy debugging !

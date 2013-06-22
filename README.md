ck2-launcher
============

Custom launcher for Crusader Kings under Windows 8


About
-----

The launcher of CK2 has been plagued with layout issue under Windows 8 (background image too small, buttons not aligned, etc.). The aim of this project is to fix those issues, as well as to add options to select a custom background (one for each major DLC, except for Sunset Invasion)


Install
-------

1. Download the [sources](https://github.com/RomainThery/ck2-launcher/archive/master.zip) from GitHub first
2. Move the files you will find under the "local" folder to your "launcher" folder in your Crusader Kings II installation folder (By default under Steam: C:\Program Files (x86)\Steam\SteamApps\common\Crusader Kings II\launcher)
3. Accept to replace the files when prompted (Either do a copy of launcher.cfg and launcher.html or use the "Verify integrity of game cache" option in Steam to revert back to the default launcher)
4. Enjoyed a bug free launcher under Windows 8 and don't forget to pick the background of your favorite expansion


Details
-------

The launcher actually first tries to load a HTML page defined in launcher.cfg under objects.browser.url (at the bottom). Since the assets on Paradox website are not properly sized, we end up with a small background image inside a big container. So it was necessary to redirect the launcher to a custom HTML page having the proper assets.
There's also a bit of PHP to get the news from Paradox official webpage and parse them to our custom web page.

This custom server is currently host via [openshift](https://www.openshift.com/)
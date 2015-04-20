# zenc-adminmessage
Display custom static notifications in the Magento admin panel

## INSTALLATION Via Modman - Recommended (https://github.com/colinmollenhour/modman)

#### 1) Install Modman:

```
bash < <(wget -O - https://raw.github.com/colinmollenhour/modman/master/modman-installer)
```

or

```
bash < <(curl -s https://raw.github.com/colinmollenhour/modman/master/modman-installer)
source ~/.profile
```

#### 2) Install Zenc AdminMessage

<pre>
cd [magento root folder]
modman init
modman clone https://github.com/technodelight/zenc-adminmessage.git
</pre>

 - Make sure you've cleaned Magento's cache to enable the new module; hit refresh
 - If you were logged in to the admin panel, log out and log in to clear your ACL from cache

#### How to update
<pre>
modman update zenc-adminmessage
</pre>

 - Clean Magento's cache to make sure new changes will be enabled.
 - Run setup scripts with n98-magerun

## License

 Module is licensed under the OSLv3 License, details are available at http://opensource.org/licenses/OSL-3.0

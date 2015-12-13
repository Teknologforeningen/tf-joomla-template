# TF Joomla Template

* [How to create a basic Joomla template](https://docs.joomla.org/Creating_a_basic_Joomla!_template)
* [Installing Joomla in a virtual machine using Vagrant](https://github.com/joomlatools/joomla-vagrant)

## Joomlatools Vagrant box installation for Arch Linux

1. Install _virtualbox_, _vagrant_ and _nfs-utils_ from the official repositories
2. Install the VirtualBox kernel modules, follow instructions on the [wiki](https://wiki.archlinux.org/index.php/VirtualBox#Install_the_VirtualBox_kernel_modules)
3. Start and enable the needed services for [NFS](https://wiki.archlinux.org/index.php/NFS#Starting_the_server)
4. Set up the [Vagrant box](https://github.com/joomlatools/joomla-vagrant)

# Custom layouts

Some modules, like the main menu, should be used with alternative layouts. In the module settings, go to "Advanced" and choose an "Alternative layout" from the dropdown.


## JEvents override

JEvents should only be used with the `Date range` view and `default` theme. These have been overridden to conform to the rest of the template.

You also need to set the `List Row Detail` custom layout as follows in the JEvents control panel:
```
<h2>{{Title:TITLE}}</h2>
<ul>
<li>DAG: {{Start Date:STARTDATE}}</li>
<li>KL: {{Start Date:STARTTIME}}</li>
<li>PLATS: {{Location:LOCATION}}</li>
</ul>
<p>{{Description:DESCRIPTION}}</p>
```

# Plugins and other stuff

This section documents stylistic things for plugins and other things that use their own stylings to some extent. These are not part of this template but are documented here to keep things in one place.

## Dropfiles

There is a custom dropfiles theme installed on the server. This theme only provides a new set of icons to replace the ones used in the default theme.

Because there does not seem to be a way to change which theme is used by default in Dropfiles (among some other issues), we have just replaced the original files in the "Default" theme with the new ones. The old files are still available on the server in the same location where the rest of the themes are (refer to the Dropfiles documentation for more information).

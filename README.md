Plugin Loggable
===============

Installation
------------

* Checkout the plugin to a folder called `Plugin/Loggable` inside your project
* Now load the plugin inside your `Config/bootstrap.php`

Enabling the database logger
------------------

To enable the database logger, use the bootstrap option when loading the plugin on your `Config/bootstrap.php`:

```php
CakePlugin::load('Loggable', array('bootstrap' => true));
```

And then load the schema to create the **LogEntry** model table (log_entries):

```
cake schema create Loggable.LogEntry
```
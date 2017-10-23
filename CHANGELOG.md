## UserExport extension

The UserExport extension to MediaWiki allows to export all user's account names together with the respective
e-mail address as a UTF-8 encoded CSV file.

This file documents the development changes.


### 1.2.0

Released: 2017-07-03  
Authored: Kghbln

* Added support for MW 1.26+
* Removed support for < MW 1.23.0
* Removed I18n shim for php message files (by Kghbln)
* Migrated registration of special pages to `SpecialPage::getGroupName`
* Fixed typos for special pages aliases
* Updated file documentation (by Kghbln)
* Updated README (by Kgbhln)


### 1.1.1

Released: 2017-01-21  
Authored: SamanthaNguyen

* Migrated to `getEditToken` (by Reedy)
* Improved exception reporting (by Reedy)
* Fixed registration of special page aliases (by SamanthaNyuyen)
* Improved code formatting (by Kghbln and Reedy)
* Updated file documenation (by Kghbln)


### 1.1.0

Released: 2014-11-14  
Authored: Kghbln

* Removed support for ≤ PHP 5.2
* Removed support for < MW 1.17.0
* Migrated to I18n served via json-files (by Kghbln)
* Migrated to new alias I18n inclusion (by Kghbln)
* Migrated deprecated `wfMsg` to `wfMessage` (by Kghbln)
* Improved wording of system messages (by Kghbln)
* Added missing system messages (by Kghbln)
* Apply several code tweaks (by Kghbln)
* Remove dead code (by Kghbln)
* Overhaul file documentation (by Kghbln)
* Add CHANGELOG (by Kghbln)
* Add COPYING (by Kghbln)


### 1.0.1

Released: 2014-01-02  
Authored: Kghbln

* Improved formatting and file documentation (by Kghbln)


### 1.0

Released: 2009-08-09  
Authored: Rodrigoprimo

* Initial public release (by Rodrigoprimo)

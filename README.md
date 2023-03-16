# Magento 2 DeleteAdminUserCommand module

A module for Magento 2 that allows you to delete admin users from the command line

Installation:

Move the "MaximusSallam" directory into the "app/code" directory, then perform the following:
```
$ php bin/magento module:enable MaximusSallam_DeleteAdminUserCommand
$ php bin/magento setup:upgrade
$ php bin/magento cache:clean
```
Usage:
```
$ php bin/magento admin:user:delete <admin_username>
```
Example: 
```
$ php bin/magento admin:user:delete test_user
Admin user 'test_user' has been deleted.
```
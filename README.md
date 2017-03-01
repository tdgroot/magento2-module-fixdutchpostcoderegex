# Fix Dutch PostCode Regex

This module fixes the Dutch(nl_NL) postcode regex in Magento 2. I created a [pull request](https://github.com/magento/magento2/pull/4874) a long time ago, but it won't get through.

### Installation using Composer

```
composer require timpack/magento2-module-fixdutchpostcoderegex
bin/magento setup:upgrade
```

### Installation manually

- [Download the zip](https://github.com/tdgroot/magento2-module-fixdutchpostcoderegex/archive/master.zip)
- Copy the contents of `src/` to `app/code/Timpack/FixDutchPostCodeRegex/`
- Then run `bin/magento setup:upgrade`

### Running tests

If you didn't install the module using composer, please copy `app/code/Timpack/FixDutchPostCodeRegex/phpunit.timpack.xml` to `dev/tests/unit/phpunit.timpack.xml`.

Then run the following:

`vendor/bin/phpunit -c dev/tests/unit/phpunit.timpack.xml`

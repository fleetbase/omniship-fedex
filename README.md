# Omniship: FedEx

**FedEx driver for the Omniship PHP shipping service provider library**

[![Build Status](https://travis-ci.org/thephpleague/omniship-fedex.png?branch=master)](https://travis-ci.org/thephpleague/omnipay-stripe)
[![Latest Stable Version](https://poser.pugx.org/omnipay/stripe/version.png)](https://packagist.org/packages/omnipay/stripe)
[![Total Downloads](https://poser.pugx.org/omnipay/stripe/d/total.png)](https://packagist.org/packages/omnipay/stripe)

[Omniship](https://github.com/fleetbase/omniship) is a framework agnostic, multi-carrier shipping
service provider library for PHP. This package implements FedEx support for Omniship.

## Installation

Omniship is installed via [Composer](http://getcomposer.org/). To install, simply require `fleetbase/omniship` and `omniship/fedex` with Composer:

```
composer require fleetbase/omniship omniship/fedex
```

## Basic Usage

The following services are provided by this package:

- [Address Validation](https://developer.fedex.com/api/en-ca/catalog/address-validation.html#/api)
- [FedEx Locations Search](https://developer.fedex.com/api/en-ca/catalog/locations.html#/api)
- [Freight LTL API](https://developer.fedex.com/api/en-ca/catalog/ltl-freight.html#/api)
- [Global Trade API](https://developer.fedex.com/api/en-ca/catalog/global-trade.html#/api)
- [Ship API](https://developer.fedex.com/api/en-ca/catalog/ship.html#/api)
- [Ground End of Day Close API](https://developer.fedex.com/api/en-ca/catalog/close.html#/api)
- [Open Ship API](https://developer.fedex.com/api/en-ca/catalog/open-ship.html#/api)
- [Pickup Request API](https://developer.fedex.com/api/en-ca/catalog/pickup.html#/api)
- [Postal Code Validation API](https://developer.fedex.com/api/en-ca/catalog/postal-code.html#/api)
- [Service Availability API](https://developer.fedex.com/api/en-ca/catalog/service-availability.html#/api)
- [Track API](https://developer.fedex.com/api/en-ca/catalog/track.html#/api)
- [Trade Documents Upload API](https://developer.fedex.com/api/en-ca/catalog/upload-documents.html#/api)

For general usage instructions, please see the main [Omniship](https://github.com/fleetbase/omniship)
repository.

### Create a Shipment

```php
use Omniship\Omniship;

$fedex = Omniship::create('FedEx');

$fedex->initialize([
    'api_key' => '#'
]);

$shipment = $fedex->createShipment([]);
```

## Test Mode

FedEx developer accounts are provided with live and test api keys, the test api keys are to be used on the sandbox host.
To use sandbox host initialize the FedEx service provider as shown below.

```php
use Omniship\Omniship;

$fedex = Omniship::create('FedEx');

/** 
 * initialize() takes two params
 * @param array $params Arguments to initialize
 * @param bool $sandbox Use sandbox host
 */
$fedex->initialize([], true);
```

## Support

If you are having general issues with Omniship, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omniship tag](http://stackoverflow.com/questions/tagged/omniship) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [discord group](https://discord.com/invite/fjP4sReEvH) which
you can join.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/fleetbase/omniship-common/issues),
or better yet, fork the library and submit a pull request.
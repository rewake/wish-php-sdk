# Wish SDK for PHP

## NOTE
This is a copy of the last version of the context logic wish/php-sdk, who killed off the original repo.

## Important Announcement
This PHP SDK will no longer be maintained. The repo will be closed by end of September 2019.
We are sorry for this decision, however this would allow us to focus on on improving API usability and documentation. If you set up any dependency on this repo, we kindly ask you to prepare for the close of it in the coming weeks.

## Documentation

http://merchant.wish.com/documentation/api/v2
https://merchant.wish.com/documentation/api/v3/reference

## Install Instructions

Download composer:

````
curl -sS https://getcomposer.org/installer | php
````

Add wish/wish-sdk-php as a dependect in your project's composer.json

````
{
  "minimum-stability": "dev",
  "require":{
      "wish/php-sdk":"*"
  }
}
````

Run the following:
````
php composer.phar install
````


Put the following at the top of your file:

````
require 'vendor/autoload.php'
````

Sample
````php
<?php 
require_once 'vendor/autoload.php';

use Wish\WishClient;

$token = 'ACCESS_TOKEN';
$client = new WishClient($token,'sandbox');


print "RESULT: ".$client->authTest();
````

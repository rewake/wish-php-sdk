<?php
/**
 * Copyright 2014 Wish.com, ContextLogic or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once '../vendor/autoload.php';

use Wish\WishClient;

// $token = '576848671ce64a2cf29adafd';
$token = 'ACCESS_TOKEN';
$client = new WishClient($token,'stage');

try{
  $response = $client->getAllNotifications();
  print_r($response);

  $response = $client->markNotificationAsViewed('5755a0dc6fa88c0cfd8ef1f3');
  print_r($response);

  $response = $client->getUnviewedNotiCount();
  print_r($response);


  $response = $client->getBDAnnouncemtns();
  print_r($response);


  $response = $client->getSystemUpdatesNotifications();
  print_r($response);


  $response = $client->getInfractionCount();
  print_r($response);


  $response = $client->getInfractionLinks();
  print_r($response);

}catch(ServiceResponsException $e){
  echo "There was an error performing an operation.\n";
}

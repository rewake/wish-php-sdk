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

namespace Wish\Model;

class WishTracker{

  private $tracking_provider;
  private $tracking_number;
  private $ship_note;
  private $origin_country_code;

  public function __construct($tracking_provider,$tracking_number=null,$ship_note=null,$origin_country_code=null){

    $this->tracking_provider = $tracking_provider;
    if($tracking_number)$this->tracking_number = $tracking_number;
    if($ship_note)$this->ship_note = $ship_note;
    if($origin_country_code)$this->origin_country_code = $origin_country_code;
    
  }

  public function getParams(){
    $keys = array('tracking_provider','tracking_number','ship_note','origin_country_code');
    $params = array();
    foreach($keys as $key){
      if(isset($this->$key)){
        $params[$key] = $this->$key;
      }
    }
    return $params;
  }
  
}

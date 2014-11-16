<?php

class RecordInterface {

//interface to save Record object to DB
 public function saveRepository($Record){
           $temp = new RecordDB;
           $temp->id = $Record->getId();
           $temp->ownerId = $Record->getOwnerId();
           $temp->amount = $Record->getAmount();  
           $temp->info = $Record->getInfo();  
           $temp->type = $Record->getType();   
           $temp->category = $Record->getCategory();  
           $temp->save();
          return $temp;
    }

}
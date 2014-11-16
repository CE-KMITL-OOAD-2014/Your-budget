<?php

class ReminderInterface {

//interface to save Record object to DB
 public function saveRepository($Reminder){
           $temp = new ReminderDB;
           $temp->id = $Reminder->getId();
           $temp->ownerId = $Reminder->getOwnerId();
           $temp->amount = $Reminder->getAmount();  
           $temp->info = $Reminder->getInfo();
           $temp->date = $Reminder->getDate();  
           $temp->save();
           return $temp;
    }

}
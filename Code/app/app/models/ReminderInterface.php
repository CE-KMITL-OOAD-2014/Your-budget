<?php

class ReminderInterface {

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
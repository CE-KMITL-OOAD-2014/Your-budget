<?php

class MemberInterface {


// control Member
  public function saveRepository($Member){
        $temp = User::where('userName','=',$Member->getUsername())->get();
        if(count($temp)==0){
           $temp = new User;
           $temp->id = $Member->getId();
           $temp->userName = $Member->getUserName();
           $temp->name = $Member->getName();  
           $temp->point = $Member->getPoint();  
           $temp->balance = $Member->getBalance();  
           $temp->password = $Member->getPassword();  
           $temp->save();
          return $temp -> with ('success','register success');           
        }else{
           return Redirect::to('') -> with ('danger','Username already exists');
        }
    }



}
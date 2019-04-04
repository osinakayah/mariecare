<?php
if(!function_exists('sendEmail')){
    function  sendEmail($to, $name, $email, $message){
        try{
            \Illuminate\Support\Facades\Mail::to($to)->send(new \App\Mail\ContactMariecare($name, $email, $message));
        }catch (Exception $exception){}
    }
}
<?php

class User {

   public static function is_logged_in() {
      return Session::get('logged_in');
   }

   public static function login($password) {

       if (PW_USER === hash('sha256', $password)) {
           Session::set('logged_in');
       }

       if (PW_MASTER === hash('sha256', $password)) {
           Session::set('logged_in');
           Session::set('master');
       }

   }

   public static function logout() {
      Session::clear('logged_in');
   }

}

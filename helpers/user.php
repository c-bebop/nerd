<?php

class User {

   public static function is_logged_in() {
      return Session::get('logged_in');
   }

   public static function login($password) {

       if (hash_equals(PW_USER,   crypt($password, PW_USER))) {
           Session::set('logged_in');
       }

       if (hash_equals(PW_MASTER, crypt($password, PW_MASTER))) {
           Session::set('logged_in');
           Session::set('master');
       }

   }

   public static function logout() {
      Session::clear('logged_in');
   }

}

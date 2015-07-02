<?php

class User {

   public static function is_logged_in() {
      return Session::get('logged_in');
   }

   public static function login($password) {
      $level =  (int) hash_equals(PW_USER,   crypt($password, PW_USER));
      $level += (int) hash_equals(PW_MASTER, crypt($password, PW_MASTER));

      switch (true) {
         case $level >= 1: Session::set('logged_in');
         case $level >= 2: Session::set('master');
      }
   }

   public static function logout() {
      Session::clear('logged_in');
   }

}

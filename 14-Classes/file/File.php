<?php

/*
 * Utility Class
 */

class File {

   public static function exists($file) {
      return file_exists($file);
   }

   public static function size($file) {
      return filesize($file);
   }

   public static function name($file) {
      return pathinfo($file, PATHINFO_FILENAME);
   }

   public static function extension($file) {
      return pathinfo($file, PATHINFO_EXTENSION);
   }

   public static function delete($file) {

      // check file exists to delete
      return static::exists($file) ? unlink($file) : 'No File';
   }

   public static function last_updated($file) {
      return filemtime($file);
   }

   public static function get($file, $defualt = null) {
      return static::exists($file) ? file_get_contents($file) : $defualt;
   }

   public static function put($file, $data, $append = false) {
      if ($append) {
         return file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
      }
      return file_put_contents($file, $data, LOCK_EX);
   }

   public static function append($file, $data) {
      return static::put($file, $data, true);
   }

   // clear a file
   public static function truncate($file) {
      if (static::exists($file)) {
         $fp = fopen($file, 'w');
         fclose($fp);
         echo 'File cleared';
      }
   }

   public static function copy($file, $file_copy) {
      return static::exists($file) ? copy($file, $file_copy) : 'No File to copy';
   }

   public static function move($file, $file_copy) {

      return static::copy($file, $file_copy);
   }

}

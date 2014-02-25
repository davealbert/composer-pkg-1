<?php

   /**
    * My Package
    **/
   class MyPkg
   {

      protected $status;
      function __construct()
      {
         $this->status = 'Created';
      }

      function status()
      {
         return $this->status;
      }
   }

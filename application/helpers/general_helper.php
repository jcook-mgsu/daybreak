<?php

  /**
    * General helper functions to help with general functions
    */

    // Format Datetime
    function prettify_datetime($datetime) {
      $converted_date = strtotime($datetime);
      $pretty_date = Date("M d, Y g:i A", $converted_date);

      return $pretty_date;
    }

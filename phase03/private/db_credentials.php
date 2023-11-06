<?php

// localhost
if($_SERVER['SERVER_NAME'] == 'localhost') {
  define("DB_SERVER", "localhost");
  define("DB_USER", "sally");
  define("DB_PASS", "P@ssword1234");
  define("DB_NAME", "salamanders");
} else {
// AwardSpace
  define("DB_SERVER", "");
  define("DB_USER", "");
  define("DB_PASS", "");
  define("DB_NAME", "");
}
?>

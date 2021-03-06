<?php

/**
 * Dies if $cond is falsey, with a message displayed to the user.
 */
function invariant($cond, $format /*, varargs */) {
  if (!$cond) {
    // Exit ugli-ly.
    $args = func_get_args();
    $format_plus_varargs = array_slice($args, 1);
    die(htmlentities(call_user_func_array('sprintf', $format_plus_varargs)));
  }
}

function is_numeric_and_not_octal($var) {
  return ctype_digit($var) && !preg_match('/^0\d/', $var);
}

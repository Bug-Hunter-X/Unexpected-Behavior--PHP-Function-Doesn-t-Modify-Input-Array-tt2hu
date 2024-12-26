# PHP Unexpected Array Modification Bug

This repository demonstrates a common error in PHP: unexpected behavior when modifying arrays passed to functions.  The bug is that changes made to an array inside a function are not reflected in the original array if it's passed by value (not by reference). The solution shows the correct way to pass the array by reference using the `&` operator.
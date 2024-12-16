# PHP Unexpected Array Behavior: Handling Non-Existent Keys

This repository demonstrates a common pitfall in PHP array handling: the silent creation of array elements when modifying non-existent keys.  This can lead to subtle bugs if not handled carefully. 

The `bug.php` file shows the problem, where accessing and modifying a non-existent array element will automatically create that element, and PHP will use default value 0 if no value is assigned. The `bugSolution.php` provides a robust solution.
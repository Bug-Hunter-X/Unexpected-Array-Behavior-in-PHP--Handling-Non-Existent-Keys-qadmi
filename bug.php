```php
<?php
function increment_array_value(array &$arr, int $index, int $increment = 1): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if the index doesn't exist
  }
  $arr[$index] += $increment;
}

$myArray = [1, 2, 3];
increment_array_value($myArray, 5, 10);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [5] => 10 ) 
increment_array_value($myArray, 3);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [5] => 10 [3] => 1 )
?>
```
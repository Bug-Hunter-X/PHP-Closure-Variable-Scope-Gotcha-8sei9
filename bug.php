In PHP, a common yet subtle error arises when dealing with variable scope within closures or anonymous functions.  Consider this example:

```php
$x = 10;
$arr = array_map(function ($val) {
  global $x;
  return $val * $x; 
}, [1,2,3]);
print_r($arr); // Output: Array ( [0] => 10 [1] => 20 [2] => 30 )
```

If you omit `global $x;`, the closure won't find `$x` in its local scope and PHP might issue a warning or produce unexpected results. This might be overlooked if the code works seemingly well in some instances.
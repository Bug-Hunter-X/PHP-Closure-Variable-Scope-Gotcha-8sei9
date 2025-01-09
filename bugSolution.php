The solution involves explicitly declaring the external variable using the `use` keyword in the closure's parameter list.

```php
$x = 10;
$arr = array_map(function ($val) use ($x) {
  return $val * $x; 
}, [1,2,3]);
print_r($arr); // Output: Array ( [0] => 10 [1] => 20 [2] => 30 )
```

By using `use ($x)`, we explicitly import `$x` into the closure's scope, ensuring correct access and eliminating the potential warning or unexpected behavior.
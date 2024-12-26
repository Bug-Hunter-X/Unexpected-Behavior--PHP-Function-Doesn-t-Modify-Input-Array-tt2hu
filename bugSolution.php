```php
function processData(array &$data): array {
  // ... some code to process the data ...
  // Example modification: Add 10 to each element
  foreach ($data as &$value) {
    $value += 10;
  }
  return $data;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// Correct behavior: $processedData and $data are both modified
print_r($processedData); // Output: Array ( [0] => 11 [1] => 12 [2] => 13 [3] => 14 [4] => 15 )
print_r($data); // Output: Array ( [0] => 11 [1] => 12 [2] => 13 [3] => 14 [4] => 15 )
```
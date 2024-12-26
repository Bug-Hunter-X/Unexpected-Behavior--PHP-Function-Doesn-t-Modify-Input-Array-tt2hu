```php
function processData(array $data): array {
  // ... some code to process the data ...
  return $data;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// Unexpected behavior: $processedData is not modified
print_r($processedData); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 [5] => 5 ) 
```
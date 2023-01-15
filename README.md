# PHP CSV Class

This is a basic PHP class for handling CSV file operations. It provides methods for reading and writing CSV files, as well as handling the CSV delimiter and header.

## Requirements

- PHP 5.4 or later
- permissions to read and write the CSV file

## Features

- Reading CSV files
- Writing CSV files
- Handling CSV delimiter
- Handling CSV header

## Decometion

- __construct($file, $delimiter = ",", $header = true): This is the constructor for the class. It takes three parameters: $file which is the path of the CSV file, $delimiter which is the delimiter used in the CSV file (defaults to ",") and $header which is a boolean value indicating if the CSV file has a header or not (defaults to true).

- read(): This method reads the CSV file and returns an array of rows. It uses the fopen() function to open the file, fgetcsv() function to read the data and fclose() function to close the file.

- write($data): This method takes an array of data as an argument and writes it to the CSV file. It uses the fopen() function to open the file, fputcsv() function to write the data, and fclose() function to close the file.

- $file: This property contains the path of the CSV file.

- $delimiter: This property contains the delimiter used in the CSV file.

- $header : This property contains the header of the CSV file, whether it has or not.


## Usage

To use the class, simply include it in your PHP script and create a new instance of the class. 
The class takes file path, delimiter, and header as arguments.

```php
$csv = new CSV("example.csv", ",", true);
```

You can then use the class methods to interact with the CSV file. For example, to read a CSV file:

```php
$data = $csv->read();
```

To write data to a CSV file:

```php
$newData = array(
    array("id" => 1, "name" => "John"),
    array("id" => 2, "name" => "Doe")
);
$csv->write($newData);
```

Please refer to the class documentation for more information on the available methods and their usage.

## Note
This is a basic implementation, to be used as a starting point for your implementation, and it should be customized to meet the specific needs of your project.





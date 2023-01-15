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





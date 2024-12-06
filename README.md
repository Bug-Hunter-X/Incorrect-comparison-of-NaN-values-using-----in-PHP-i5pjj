# Incorrect comparison of NaN values using === in PHP

This repository demonstrates a common error when comparing NaN values in PHP using the strict equality operator (===).  The strict equality operator does not work as expected with NaN, as NaN is not equal to itself.

## Bug

The `bug.php` file contains a function that attempts to compare two values for strict equality. However, this function fails when the values are NaN.

## Solution

The `bugSolution.php` file demonstrates the correct way to compare NaN values in PHP, using `is_nan()`.

## How to reproduce the bug

1. Clone the repository.
2. Run `bug.php`.
3. You will see that NaN is not considered equal to NaN. 

## How to fix the bug

1. Use `is_nan()` to correctly compare NaN values.

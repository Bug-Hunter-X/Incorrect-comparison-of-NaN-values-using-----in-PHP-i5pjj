// Correct way to compare NaN values in PHP
function foo(a, b) {
  return is_nan(a) && is_nan(b) || a === b;
}

// Test cases
echo foo(NaN, NaN) ? 'true' : 'false'; // true
echo foo(1, 1) ? 'true' : 'false'; // true
echo foo(1, 2) ? 'true' : 'false'; // false

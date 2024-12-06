function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

// The above function is incorrect because it will return false if a and b are both equal to NaN. NaN is the only value in JavaScript which is not equal to itself.

function foo(a, b) {
  return Object.is(a, b);
}

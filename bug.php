function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This will return false because it compares the type and the value
console.log(foo(0, '0')); //false
//This will return true because it compares only values
console.log(foo(0 == '0')); //true
<?php

namespace phpUnitTutorial;

class Person {
  //contains the internal data
  var $name;

  // constructor
  function Person($name) {
    $this->name = $name;
  }

  // adds another string object to this class
  function rename($string) {
    $this->name = $string;
  }

  // returns the formated string
  function toString() {
    return "Person named " + $this->name;
  }

  // returns a duplicate Person object
  function copy() {
    return new Person($this->name);
  }
}

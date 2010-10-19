pChart PHP 5 Compatibility
==========================

pChart is a great charting library for PHP. 
However, it has not been updated in a long time and it's compatibility
with PHP 5 will soon be lost because of new language features 
(namely constuctors can no longer be the class name as of PHP 5.3.3)

The v2 branch will not retain backward compatibility with the old API
(though it will not be changed unnecessarily)

## Goals

The goal of this project is:

* Update pChart to use PHP 5 object-oriented language features
* Fix bugs
* Refactor as needed
* Add proper docblocks to all functions (and there's a lot of them)
* Rename some functions (it seems the original author's native language was not english)
 
## Status

The main body of the code now has around 50% unit test coverage, and
all the examples appear to be working. If you're starting a new
project, it's probably reasonable to use this distribution in
preference to the Sourceforge distribution, since any bugs in this
distribution should hopefully be fixed on a reasonable timescale.

## Issues

The biggest issue to overcome is there does not seem to be a consistent use of camel casing.  Some functions start in caps
while others do not.  The project would like to maintain complete backwards compatibility, but that may be sacrificed for
consistency in the API.
 

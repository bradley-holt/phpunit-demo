PHPUnit Demo
============

This is a demonstration of how to use PHPUnit.

[Installing PHPUnit](http://phpunit.de/manual/3.7/en/installation.html)
-----------------------------------------------------------------------

This demo has PHPUnit installed using Composer. For a system-wide installation, you 
may choose to install PHPUnit using PEAR instead. Run the following command to install 
PHPUnit (and any other dependencies):

    $ ./composer.phar install --dev

[Writing Tests for PHPUnit](http://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html)
-------------------------------------------------------------------------------------------

The demo unit tests can be found in the `tests/FoundLineTest/PHPUnitDemo` directory. 
The demo source code being tested can be found in the `src/FoundLine/PHPUnitDemo` 
directory. The subdirectory names within the `tests` and `src` directories follow 
the [PSR-0 standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md). 
For the unit tests, the vendor name `FoundLineTest` and the namespace `PHPUnitDemo` 
are used. For the source code being tested, the vendor name `FoundLine` and the 
namespace `PHPUnitDemo` are used. Following the PSR-0 standard allows for the autoloading 
of classes.

[The Command-Line Test Runner](http://phpunit.de/manual/3.7/en/textui.html)
---------------------------------------------------------------------------

The following command will run all of the unit tests in this demo:

    $ ./vendor/bin/phpunit tests

The previous command should result in output similar to the following:

    PHPUnit 3.7.21 by Sebastian Bergmann.
    
    .....
    
    Time: 0 seconds, Memory: 4.75Mb
    
    OK (5 tests, 5 assertions)

A useful option is to report test execution progress in TestDox format:

    $ ./vendor/bin/phpunit --testdox tests

The previous command should result in output similar to the following:

    PHPUnit 3.7.21 by Sebastian Bergmann.
    
    FoundLineTest\PHPUnitDemo\Number
     [x] Convert number to string
     [x] Add two numbers
     [x] Substract two numbers
     [x] Multiply two numbers
     [x] Divide two numbers
    

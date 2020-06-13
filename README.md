# FizzBuzz (Complete)

Project to implement FizzBuzz, while practicing TDD and experimenting with tooling. This is the `complete` branch.

## Installation

The project uses:

- [PHP 7.2+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

Clone the repository

```sh
git clone git@github.com:pen-y-fan/fizz-buzz.git
```

or

```shell script
git clone https://github.com/pen-y-fan/fizz-buzz.git
```

Install all the dependencies using composer:

```sh
cd .\fizz-buzz
composer install
```

Run the tests:

```shell script
composer test
```

## Dependencies

The project uses composer to install:

- [PHPUnit](https://phpunit.de/)
- [PHPStan](https://github.com/phpstan/phpstan)
- [Easy Coding Standard (ECS)](https://github.com/symplify/easy-coding-standard) 
- [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer/wiki)
- [Rector](https://getrector.org/) - version 0.7.26

## Folders

- `src` 
    - Contains the **FizzBuzz** Class which is empty.
- `tests` 
    - **FizzBuzzTest** Class which is ready to start testing **FizzBuzz**

## Testing

PHPUnit is used to run tests, to help this can be run using a composer script. To run the unit tests, from the root of
 the project run:

```shell script
composer test
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias pu="composer test"`), the same
 PHPUnit `composer test` can be run:

```shell script
pu
```

### Tests with Coverage Report

To run all test and generate a html coverage report run:

```shell script
composer test-coverage
```

The coverage report is created in /builds, it is best viewed by opening **index.html** in your browser.

The [XDEbug](https://xdebug.org/download) extension is required for coverage report generating. 

## Code Standard

Easy Coding Standard (ECS) is used to check for style and code standards,
 **[PSR-12](https://www.php-fig.org/psr/psr-12/)** is used. Tip: Only periodically run ECS, when tests are green, to
 keep the focus on writing tests, refactoring the code and adding new features.

### ECS Check Code

To check code, but not fix errors:

```shell script
composer check-cs
``` 

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias cc="composer check-cs"`), the
 same ECS `composer check-cs` can be run:

```shell script
cc
```

### ECS Fix Code

Many code fixes are automatically provided by ECS, if advised to run --fix, the following script can be run:

```shell script
composer fix-cs
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias fc="composer fix-cs"`), the same
 ECS `composer fix-cs` can be run:

```shell script
fc
```

## Static Analysis

PHPStan is used to run static analysis checks. As the code is constantly being refactored only run static analysis
  checks once the chapter is complete. Tip: Only periodically run PHPStan, when tests are green, to keep the focus on
   writing tests, refactoring the code and adding new features.

```shell script
composer phpstan
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias ps="composer phpstan"`), the
 same PHPStan `composer phpstan` can be run:

```shell script
ps
```

## Rector

Rector works with PHPStan to automatically fix code. The following sets are used (see the config file **rector.yaml**):

- solid
- dead-code
- type-declaration

### Rector Check (Dry Run)

Like ECS check code, a dry run will only advise the code Rector would have changed. This can be run from the command
 line:

```shell script
composer rector:dry-run
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias rc="composer rector:dry-run"`),
 the same Rector `composer rector:dry-run` can be run:

```shell script
rc
```

### Rector (Fix Code)

Many code fixes are automatically provided by Rector, if a dry-run advises code ***would have changed***:

```text
[OK] Rector is done! x files would have changed (dry-run).
```

Always check the details! Rector can change code in unintentional ways. Exceptions to Rector's rules may need to be
 added to the config file to prevent this.
 
Providing the dry-run looks good, the following script can be run:

```shell script
composer rector
```

On Windows a batch file has been created, similar to an alias on Linux/Mac (e.g. `alias re="composer rector"`), the same
 Rector `composer rector` can be run:

```shell script
re
```

## Branches

This Kata has three branches:

- master - contains the starting point for FizzBuzz including the tooling and empty classes for FizzBuzz and Tests.
- with-tests - contains empty class for FizzBuzz, but has a test suite.
- complete - contains my completed version.

**Happy coding**!

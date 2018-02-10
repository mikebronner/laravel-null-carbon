# Null-Carbon For Laravel

## Goal
Methods should always return only one data-type. This principle is broken if a
method returns both `null` and some other data-type, so the solution is to
return a null-class. The `NullCarbon` class is a null-class implementation of
Laravel's Carbon class.

## Prerequisites
- PHP >= 7.1.3
- Laravel >= 5.5

## Installation
```
composer require genealabs/laravel-null-carbon
```

## Usage
The following is an example of how to use the `NullCarbon` class for date fields
on a model:
```php
use GeneaLabs\LaravelNullCarbon\NullCarbon;
use Illuminate\Support\Carbon;

class MyModel
{
    protected $dates = [
        'published_at',
    ];

    public function getPublishedAtAttribute() : Carbon
    {
        return $this->published_at
            ?: new NullCarbon;
    }
}
```

# The Fine Print
## Commitment to Quality
During package development I try as best as possible to embrace good design and
development practices to try to ensure that this package is as good as it can
be. My checklist for package development includes:

-   ✅ Achieve as close to 100% code coverage as possible using unit tests.
-   ✅ Eliminate any issues identified by SensioLabs Insight and Scrutinizer.
-   ✅ Be fully PSR1, PSR2, and PSR4 compliant.
-   ✅ Include comprehensive documentation in README.md.
-   ✅ Provide an up-to-date CHANGELOG.md which adheres to the format outlined
    at <http://keepachangelog.com>.
-   ✅ Have no PHPMD or PHPCS warnings throughout all code.

## Contributing
Please observe and respect all aspects of the included Code of Conduct
<https://github.com/GeneaLabs/laravel-caffeine/blob/master/CODE_OF_CONDUCT.md>.

### Reporting Issues
When reporting issues, please fill out the included template as completely as
possible. Incomplete issues may be ignored or closed if there is not enough
information included to be actionable.

### Submitting Pull Requests
Please review the Contribution Guidelines <https://github.com/GeneaLabs/laravel-caffeine/blob/master/CONTRIBUTING.md>.
Only PRs that meet all criterium will be accepted.

## ❤️ Open-Source Software - Give ⭐️
We have included the awesome `symfony/thanks` composer package as a dev
dependency. Let your OS package maintainers know you appreciate them by starring
the packages you use. Simply run `composer thanks` after installing this
package. (And not to worry, since it's a dev-dependency it won't be installed in
your live environment.)

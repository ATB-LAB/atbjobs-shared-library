- Please follow instruction to add this repository at your laravel project.
Add this line to your composer.json file
```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ATB-LAB/atbjobs-shared-library.git"
        }
    ],
    "require": {
        "alam/atbjobs-shared-library": "dev-master"
    }
}
```
- run "composer update"

- make sure package autoload configured at your project composer.json file. Example provided below:
```
    "autoload": {
        "psr-4": {
            "alam/atbjobs-shared-library\\": "src/"
        },
        "files": [
            "app/helpers.php"
        ]
    },
```
- How to use models from this package at your project, example provided below:
```
use Alam\AtbjobsSharedLibrary\Models\Department;

// Example usage in a controller
$departments = Department::get();
```
- To use service provider you need to register at your composer.json. Example provided below:
```
'providers' => [
    // Other service providers...

    alam\atbjobs-shared-library\Providers\YourServiceProvider::class,
],
```

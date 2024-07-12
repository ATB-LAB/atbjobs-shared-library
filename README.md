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

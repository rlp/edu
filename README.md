# Edu #

## Installing ##
* clone the repo into /path/to/project/
* set your include_path variable to include the path to your CakePHP/lib/Cake
* do git submodule update --init
* create the empty database and Config/database.php
* execute from /path/to/project/: cake Migrations.migration run all --plugin Users
* execute from /path/to/project/: cake Migrations.migration run all

## Included plugins ##
* [CakePHP Debug Kit][]
* [CakeDC migrations][]
* [CakeDC users][]
* [CakeDC utils][]
* [CakeDC tags][]
* [CakeDC search][]

[CakePHP Debug Kit]: https://github.com/cakephp/debug_kit.git
[CakeDC users]: https://github.com/CakeDC/users.git
[CakeDC migrations]: https://github.com/CakeDC/migrations.git
[CakeDC utils]: https://github.com/CakeDC/utils.git
[CakeDC tags]: https://github.com/CakeDC/tags.git
[CakeDC search]: https://github.com/CakeDC/search.git

## Extending the users plugin ##

No changes need to be made to the users plugin. Any changes to existing methods should be made
by overriding the methods in the AppUsersController and AppUser. Changes to the views should be made by
creating app/View/AppUsers directory and overriding the plugin views.

## Updating the included plugins ##
 * git submodule update --init


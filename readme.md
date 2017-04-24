# Wand

A little magic wand that helps me get things done faster

## Installation

1. Clone the repo.
1. `cd *dir*` 
1. `composer install`
1. Add `SSH_USER` and `SSH_TOKEN_PATH` are in .env file.
1. `php artisan key:generate`
1. Verify that the `wand` file is executable. If not run `chmod +x wand` in the cloned folder from step 1

The rest is up to you.

### Suggestions

Install this repo in your normal code directory. Then symlink `wand` to your `/usr/local/bin` directory, in order to allow yourself to access `wand` anywhere. Having the code in your normal code directory is just easier for editing. So that would be something like `/usr/local/bin $ ln -s /Path/To/Code/Repo/wand` This means that you have already navigated to your local/bin folder, the $ is your terminal prompt, and then the actual command is `ln -s` and you need to provide the full path to the `wand` file.



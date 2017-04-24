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

### What is it though?

This package is a Laravel application, that is intended to basically be a way to automate any command using PHP. What that automation is, is going to be up to you, but the `wand` file basically acts like `artisan` does...except that the idea here is that it is global on your computer (why I suggest symlinking to /usr/local/bin).

So it's basically a way to make terminal commands with Laravel. If you want to.

### Basic Structure

Once installed, assuming you symlinked `wand` you can execute any "Command" from anywhere on your computer. This means you can make tasks you do often, maybe a little easier.

I also setup a `make:command` for `wand` just like the one for Artisan, except it will be in the `app/Wand` folder instead of `app/Console`.

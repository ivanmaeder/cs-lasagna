# Lasagna code is better than spaghetti code

Starter code to make a web app in an organised way using regular procedural PHP (without a framework).

## MVC as a way to organise code, not a framework

Lasagna is not a framework. It's a set of files to begin a project with which you can edit and expand as required.

Lasagna uses the [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) pattern.

## Installation

Copy the files and folders of the repository folder into your document root (`htdocs` or whatever). Once copied, your directory structure should look like this:

```
htdocs/
    example.php
    lasagna/
        html/
            example.tpl
        sql/
            example_table.php
        view.php
    README.md
```

Delete `README.md`, you probably don't want it.

Then use the example files as a basis for your own model, view and controller files, or delete them too and read on.

## Writing controller and view files

Within controller files, call `\view\display()` to display the view. If the first parameter (`$path`) is not specified, this will look for a matching `.tpl` file inside `html/`. For example, if the controller file is here:

```
htdocs/
    feed/
        rss.php
```

The `\view\display()` function will look for and display:

```
htdocs/
    lasagna/
        html/
            feed/
                rss.tpl
```

Values are passed to the view file either using `\view\set()` or passing an associative array as the second parameter to `\view\display()`. For example, using the `\view\set()` function:

```
\view\set('title', 'More power to us!');
```

Alternatively, passing the values via `\view\display()`,

```
\view\display($path, array('title' => 'More power to us!'));
```

## History

Lasagna was made for programming students for whom PHP, SQL, HTML and CSS are new. It provides a way to organise files in a web project (MVC is good for this) without having to learn a framework.

### Philosophy

- Include the minimum code to get started with MVC (helper functions, etc can be added as required)
- Include as little code as possible so looking under the hood isn't scary
- Make it procedural (not everyone knows about classes)
- Use namespaces to clearly demarcate this code from the standard PHP libraries
- Using try-catch isn't justified when most of the standard libraries don't use it
- Using a template engine for the views would be good, but when you're still confusing HTML and PHP, functions and variables&hellip; this can wait
- No configuration
- Easy setup (copy and paste files)

#### To do

- Document functions
- Replace global var in view.php with Singleton?
- .htaccess to hide lasagna/ dir
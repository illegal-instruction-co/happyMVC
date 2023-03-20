
# HappyMVC ![GitHub](https://img.shields.io/github/license/illegal-instruction-co/happyMVC?logo=happyMVC) ![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/illegal-instruction-co/happyMVC)

![screenshot](https://raw.githubusercontent.com/illegal-instruction-co/happyMVC/master/assets/screenshot.jpg)

Introducing the world's first and only functional Model-View-Controller (MVC) framework that works seamlessly with Composer. Our framework is not only the first of its kind, but also the simplest, most elegant solution for developers who want to create robust, maintainable web applications with ease.

Our framework is based on the functional programming paradigm, which means that you can write code that is easier to understand, debug, and maintain. With our framework, you can easily separate your application logic into three interconnected components: the model, view, and controller. This allows you to create clean, modular code that is easy to extend and modify.

But what really sets our framework apart is its seamless integration with Composer. This means that you can easily add new features and functionality to your application by simply installing new packages via Composer. Plus, our framework is incredibly easy to set up and use, so you can get up and running in no time.

So whether you're a seasoned developer or just getting started, our functional MVC framework with Composer integration is the perfect solution for building robust, maintainable web applications. Try it out today and see the difference for yourself!

Are you writing classes for others to use or are you working on a simple website project? Then why are you feeling tired?

Installation
------------

Download and use it.

```bash
git clone https://github.com/illegal-instruction-co/happyMVC.git
```

Local Development ServerLocal Development Server
------------
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Smiley command. This command will start a development server at http://localhost:8000 or choosed port.

```bash
cd ProjectDir
```
start on 8000
```bash
php smiley serve
```
or start on 3000 
```bash
php smiley serve 3000
```
Template engine docs
------------
http://dwoo.org/documentation/v1.3/index.html

Example routing
------------

```php
# An example about how can be happy :)
setRoute("example", "example@indexAction");
setRoute("example/try-your-message/{msg}", "example@tryYourMessage");
setRoute("another-example", function() { 
    echo "smiley";
});

```

Your controller: example.php
```php
function tryYourMessage($params) {
    print_r($params);
}
```
Using helpers
------------
helpers reposes in src/func dir
you can use helpers on every page.

```php
helper("typer", 1);
slug(...);

```
Using models
------------
New file to models dir.
```php
function getSomeData() {
    #etc...
}

```

edit your controller:

```php
useModel("example");
function indexAction()
{
    getSomeData();
}
```

Using views
------------
Your controller file:
```php
function indexAction()
{
    $data = ["msg" => "Just smile", "title" => "happyMVC", "main" => getBaseUrl()];
    getView("example", $data);
}
```
New template file to views: example.dwoo
```html
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>{$title}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="http://localhost/oop1/public/happyHome/css/style.css">
</head>

<body>

  <h2>{$msg}</h2>
<div id="smile">
  <div class="eye"></div>
  <div class="eye"></div>
</div>



</body>

</html>

```


View layouts 
------------
config/layout.set file 
```
{current} 
```
{current} Specifies the specified view from the controller

Using layout with head and footer : 
```
{head}
{current} 
{footer}
```
create new view to view directory: 
head.dwoo 
footer.dwoo

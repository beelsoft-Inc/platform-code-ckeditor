Code editor extension for laravel-admin 2.x based on CodeMirror

Supports `php`、`sql`、`javascript`、`java`、`c`、`cpp`、`csharp`、`objc`、`scala`、`kotlin`、`ceylon`、`python`、`ruby`、`css`、`sass`、`less`、`xml`、`html`、`nginx`、`vuejs`、`lua`、`yaml`、`swift`、`clojure`、`coffeescript`、`protobuf`、`commonlisp`、`dart`、`dockerfile`、`diff`、`rust`、`shell`、`go`、`haml`

基于CodeMirror的代码编辑器，可用于laravel-admin 2.x

支持`php`、`sql`、`javascript`、`java`、`c`、`cpp`、`csharp`、`objc`、`scala`、
`kotlin`、`ceylon`、`python`、`ruby`、`css`、`sass`、`less`、`xml`、`html`、`nginx`、
`vuejs`、`lua`、`yaml`、`swift`、`clojure`、`coffeescript`、`protobuf`、`commonlisp`、
`dart`、`dockerfile`、`diff`、`rust`、`shell`、`go`、`haml`等语言。

![QQ20200925-120900](https://user-images.githubusercontent.com/1479100/94225656-33241980-ff28-11ea-869a-6afd75d683e6.png)

## Installation 

```bash
composer require laravel-admin-ext/code-editor -vvv
```

## Usage 

Use it in the form:
```php
$form->code('code_column')->php();

$form->code('code_column')->dockerfile();

$form->code('code_column')->html();
```

Set height:
```php
$form->php('code')->height(500);
```

Use in show page:

```php
// show as PHP code and 300 height.
$show->field('code_column')->code('php', 300);
```
License
------------
Licensed under [The MIT License (MIT)](LICENSE).

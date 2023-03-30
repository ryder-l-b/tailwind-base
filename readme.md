
# Tailwind Base


A little tailwind & laravel mix and alpinejs for local development

---

# How To Use

## Getting Started

You will need 
- a local server - I use MAMP as it takes care of everything for you.
- node.js and npm
- IDE just like VS Code

---

## Installing

  Find webpack.mix.js and in the browsersync settings at the bottom replace the `proxy` name with the one of the project folder in the code directory

``` {
  .browserSync({
        proxy: 'http://localhost:8888/tailwind-base',
        files: [
            OutputDir+'css/style.css',  // Generated .css file
            OutputDir+'js/default.js',    // Generated .js file
            OutputDir+'*.php',
            OutputDir+'includes/*.php'
        ]
  }
```
  >i.e. `proxy: 'http://localhost:8888/tailwind-base',` might change to `proxy: 'http://localhost:8888/newproject',`

  Open the folder in VS Code

  Open an integrated terminal in the project window ( control + ~ )

  run the command `npm install` which will magically use node package manager to bring down all dependencies to the node_modules folder

## Serving
  
  from the terminal run one of the following commands

  | Command | Description |
| ----------- | ----------- |
| `npm mix --production` | will pack all necessary files into a /dist folder in the root directory |
| `npm mix watch` | will launch a local server using MAMP as a base, and watch all specified files in the mix.js file for  changes to recompile. |

>NOTE:  `npm mix watch` also utilises BrowserSync, which will preserve state changes across multiple windows and even different browsers. (Great for testing on Safari, Chrome and Firefox simultaneously!)

---

## Assets
  included in the `_working` folder is an `Assets.ai` file
  
  I would suggest renaming this `newproject_Assets.ai`

  This file includes artboards preset for site logo and favicon files

  >NOTE: as this file gets larger it might need to be excluded from the .gitignore file.
  > I have included some lines commented out for this purpose

  You can export these from Illustrator with the `File > Export > Export for Screens [ Cmd + Option + E ]` command

| Artboard | Description |
| ----- | ------ |
| site-icon | used for favicon - referenced in `includes/head.php` |
| logo-main | One logo variation - used in `includes/header.php` and usually `includes/footer.php` |
| logo-main-long | Long variation - useful depending on overall height and width of main logo |

> FORMAT: export as .png for compatability or .svg for responsiveness and lower file-size

---

## Using Tailwind

Visit the [Tailwind Docs](https://tailwindcss.com/docs/installation) to learn better than I can teach you in a single document

A good extenstion to have for VS Code is **Intellisense for Tailwind** and **Tailwind Docs**

### - Making changes - 

Best way to include utilities is through the `tailwind.config.js` in the root folder

There are some commented out lines that show appropriate ways to extend the Tailwind theme

### - Fonts -

Can be a hassle to set up, the `tailwind.config.js`  file has a lot of necessary features set up.

Essentially we reset the `font-sans` property to our custom font, declare the font in the `styles.scss` file and then apply the `font-sans` class to the `<body>` tag

---

## Using Alpine.js

Visit the [Alpine Docs](https://alpinejs.dev/start-here) to learn better than I can teach you in a single document

Note that Alpinejs is included in `src/js/default.js`

``` {
  import Alpine from 'alpinejs';

  window.Alpine = Alpine;

  Alpine.start();
  }
```
There is already a little bit of alpine included in the boilerplate - mostly for toggling classes on the sexy menu button you can see it for yourself in the `scr/includes/header.php` where it works to create the responsive menu



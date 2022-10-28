# Tailwind Base
>A little tailwind & laravel mix for local development

---

# How To Use

## Getting Started

You will need 
- a local server - I use MAMP as it takes care of everything for you.
- node.js and npm

---

## Installing

  Find webpack.mix.js and in the browsersync settings at the bottom replace the `proxy` name with the one of the project folder in the code directory

  i.e. `proxy: 'http://localhost:8888/tailwind-base',` might change to `proxy: 'http://localhost:8888/newproject',`

  open the folder in VS Code

  Open an integrated terminal in the project window ( control + ~ )

  run the command `npm install` which will magically use node package manager to bring down all dependencies to the node_modules folder

## Serving
  
  from the terminal run one of the following commands
  
  - `npm mix --production` - which will pack all necessary files into a /dist folder in the root directory
  - `npm mix watch` - which will launch a local server using MAMP as a base, and watch all specified files in the mix.js file for  changes to recompile.
    >NOTE: This command also utilises BrowserSync, which will preserve state changes across multiple windows and even different browsers. (Great for testing on Safari, Chrome and Firefox simultaneously!)

### That's it for now!



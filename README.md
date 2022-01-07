# React.js

[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/attus74/reactjs/graphs/commit-activity)
[![GitHub release](https://img.shields.io/github/release/attus74/reactjs.svg)](https://GitHub.com/attus74/reactjs/releases/)
[![GitHub release](https://img.shields.io/github/license/attus74/reactjs.svg)](https://GitHub.com/attus74/reactjs/license/)
[![GitHub release](https://img.shields.io/github/issues/attus74/reactjs.svg)](https://GitHub.com/attus74/reactjs/issues/)
![GitHub release](https://img.shields.io/github/downloads/attus74/reactjs/total.svg)

Drupal Module for progressively decoupled React Components in Drupal. 
Currently applied version: React v17.0.2

How to use:
- Enable the module *reactjs*
- Define in your JS Library React.js as dependency:

```
myLibrary:
  js:
    js/my_library.js: {}
  dependencies:
    - reactjs/reactjs
```

After that, you may use React.js everywhere your library is attached.
You are free to use this module without any restriction but without any warranty.
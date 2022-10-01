# freshrss.org

Content files for [freshrss.org](http://freshrss.org) website.

This repository contains content (in HTML and Markdown), configuration,
templates and a Makefile to help to build the website.

Some old blog posts are written in Markdown under the `articles/` directory.

freshrss.org uses [boop!](https://framagit.org/marienfressinaud/boop) a simple
static site generator.

This documentation is intended to people who wants to contribute to the code of
[freshrss.org](https://freshrss.org). If you’re looking for more generic
instructions on how to contribute to FreshRSS, please [take a look at our
dedicated document](https://github.com/FreshRSS/FreshRSS/blob/edge/CONTRIBUTING.md#how-to-contribute-to-freshrss).

## Get started

First, follow the instructions [to install boop!](https://framagit.org/marienfressinaud/boop#installation).
It is pretty straightforward and it has very few dependencies.

Generate the website under a `_site/` directory with:

```console
$ make build
```

You can then open the `_site/index.html` file in a browser, or execute this
command:

```console
$ make open
```

The built pages and articles are cached under a `_cache/` directory. It is
possible to clean the building environment with:

```console
$ make clean
```

To get a glimpse of the existing source files, execute:

```console
$ make tree
```

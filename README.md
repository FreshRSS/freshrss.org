# freshrss.org

Content files for [freshrss.org](http://freshrss.org) website.

freshrss.org uses [Pelican](http://getpelican.com/) as static site generator.
It is a powerful Python software which generates HTML from Markdown or
reStructuredText formats.

This repository contains content (in Markdown), configuration and a Dockerfile
to help to build the website.

Actually, there is one specific file: `./content/pages/index.html`. Yes, it is
HTML (and not Markdown). It is the home page content of freshrss.org.

Blog posts are written in Markdown under the `./blog` directory.

## Installation

We assume in this section you have Docker installed on your system.

Build the image with:

```console
$ docker build -t freshrss-pelican .
```

And generate the output with:

```console
$ docker run --rm -v "$PWD:/pelican" --user $(id -u):$(id -g) freshrss-pelican
```

You should now see a `./output` directory that you can upload on a server.

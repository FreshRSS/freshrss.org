# freshrss.org

Content files for [freshrss.org](http://freshrss.org) website.

freshrss.org uses [Pelican](http://getpelican.com/) as static site generator.
It is a powerful Python software which generates HTML from Markdown or
reStructuredText formats.

This repository contains content (in Markdown), configuration and a Dockerfile
to help to build the website.

Actually, there is one specific file: `./content/pages/index.html`. Yes, it is
HTML (and not Markdown). It is the home page content of freshrss.org.

Blog posts are written in Markdown under the `./content/blog` directory.

## Installation

We assume in this section you have Docker installed on your system.

If you want to (an image is provided on the Docker registry), you can build the
image with:

```console
$ docker build -t freshrss/freshrss-org .
```

And generate the output with:

```console
$ mkdir output
$ docker run --rm -v "$PWD/output:/pelican/output" --user $(id -u):$(id -g) freshrss/freshrss-org
```

You should now see HTML files under `./output` directory that you can upload
on a server. The website is generated with the `https://freshrss.org` URL by
default. You can override this value by setting the `SITEURL` environment
variable:

```console
$ docker run --rm -v "$PWD/output:/pelican/output" --user $(id -u):$(id -g) -e "SITEURL=http://127.0.0.1:8080" freshrss/freshrss-org
```

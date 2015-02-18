# freshrss.org

Content files for [freshrss.org](http://freshrss.org) website.

freshrss.org uses [Pelican](http://getpelican.com/) as static site generator. It is a powerful Python software which generates HTML from Markdown or reStructuredText formats.

This repository only contains raw content (in Markdown) and does not host FreshRSS theme.

Actually, there is only one content file: `./pages/index.html`. Yes, it is HTML. It is the home page content of freshrss.org and is very specific.

The blog is not yet supported by FreshRSS Pelican theme so blog posts are not present yet. Blog posts will be written in Markdown under a `./blog` directory.

## Installation

We assume in this section you have Python 2.7+ installed on your system, with `pip` command and you work in a virtual environment (`virtualenv`, `pew` or similar).

First, install Pelican and the freshrss.org dependencies:

```bash
$ pip install pelican Markdown
```

Then, run `pelican-quickstart` command:

```bash
$ mkdir freshrss.org
$ cd freshrss.org
$ pelican-quickstart
```

Pelican will ask you some information. Here are what is suggested but you can adapt to your own case:

- Creation path: current path is ok
- Website title: FreshRSS, a free, self-hostable aggregator…
- Website author: Community
- Default language: en
- URL prefix: http://freshrss.org (or you can adapt)
- Articles per page (consider pagination is enabled): 10
- Generate Fabfile/Makefile: yes
- simpleHTTP script: yes

Finally, it will ask you which tools to use to upload your website: the choice is in your hands but SSH is recommended (it provides `scp` and `rsync` upload).

We have now to adapt configuration from the `./pelicanconf.py` file:

1. First, remove `LINKS` and `SOCIAL` information, we don't need of them
2. Next, you should add the following lines to the file:

```python
SITESUBTITLE = 'A free, self-hostable aggregator… probably the best! <small>(in our opinion)</small>'

THEME = 'Freshican'

EXTRA_PATH_METADATA = {
    'extra/robots.txt': {'path': 'robots.txt'},
    'extra/favicon.ico': {'path': 'favicon.ico'},
    'extra/.htaccess': {'path': '.htaccess'},
}
STATIC_PATHS = (
    'blog/images/',
    'images/',
    'extra/',
)

ARTICLE_PATHS = ['blog']

# Specific to FreshRSS theme
SITELOGO = 'http://freshrss.org/img/freshrss_logo.png'
SITEINFOS = '''
<p>Made by <a href="https://github.com/FreshRSS/FreshRSS/graphs/contributors">amazing contributors</a>.</p>
<p>Code licensed under <a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL</a>.</p>
<p>Hosted by <a href="http://ovh.com">OVH</a>.</p>
<p>This site uses <a href="http://knacss.com/">KNACSS</a> and <a href="http://ftp.gnome.org/pub/GNOME/sources/gnome-icon-theme-symbolic/">GNOME icons</a>.</p>
'''
SOFTWARE = 'FreshRSS'

```

We have nearly finished! All we need now is the FreshRSS theme (Freshican) and... the content (this repository!).

```bash
$ git clone git@github.com:FreshRSS/Freshican.git
$ git clone git@github.com:FreshRSS/freshrss.org.git content
```

You should be able to start the development server and access the website (on http://localhost:8000) correctly:

```bash
$ ./develop_server.sh start
```

#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

import os

AUTHOR = u'Community'
SITENAME = u'FreshRSS, a free, self-hostable aggregator…'
SITESUBTITLE = 'A free, self-hostable aggregator… probably the best! <small>(in our opinion)</small>'
SITEURL = os.getenv('SITEURL', 'https://freshrss.org')

PATH = 'content'

TIMEZONE = 'Europe/Paris'

DEFAULT_LANG = u'en'

FEED_ALL_ATOM = 'feeds/all.atom.xml'
CATEGORY_FEED_ATOM = 'feeds/%s.atom.xml'

DEFAULT_PAGINATION = 5

RELATIVE_URLS = False

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

INDEX_SAVE_AS = 'blog.html'

# To avoid conflicts between "community" author and category feeds.
# We don't use author feed anyway in the template.
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

# Disable non-skined pages
TAGS_SAVE_AS = ''
TAG_SAVE_AS = ''
CATEGORIES_SAVE_AS = ''
ARCHIVES_SAVE_AS = ''
AUTHORS_SAVE_AS = ''

LOCALE = (
    'en_GB',
)

# Specific to FreshRSS theme
SITELOGO = '/images/freshrss_logo.png'
SITEINFOS = '''
<p>Made by <a href="https://github.com/FreshRSS/FreshRSS/graphs/contributors">amazing contributors</a>.</p>
<p>Code licensed under <a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL</a>.</p>
<p>Hosted by <a href="http://ovh.com">OVH</a>.</p>
<p>This site uses <a href="http://knacss.com/">KNACSS</a>, <a href="http://ftp.gnome.org/pub/GNOME/sources/gnome-icon-theme-symbolic/">GNOME icons</a> and <a href="https://icomoon.io/">Icomoon icons</a>.<br /><br /></p>
<p>You can contribute to this website <a href="https://github.com/FreshRSS/freshrss.org">on GitHub</a>.</p>
<p>Proudly powered by <a href="http://getpelican.com/">Pelican</a>, which takes great advantage of <a href="http://python.org">Python</a>.</p>
'''
SOFTWARE = 'FreshRSS'
TWITTER = 'https://twitter.com/FreshRSS'

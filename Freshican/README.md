# Freshican

**IMPORTANT NOTE**: please open tickets on the [FreshRSS/freshrss.org bugtracker](https://github.com/FreshRSS/freshrss.org) for any problem or suggestion.

A simple Pelican theme for freshrss.org. For instructions on how to use it, please have a look at the [freshrss.org repository](https://github.com/FreshRSS/freshrss.org).

Freshican supports additional configuration variables:

- `SITELOGO`: a URL to a logo image file
- `SITEINFOS`: HTML informations to put in the footer
- `SOFTWARE`: software name, useful to add a link to [AlternativeTo](http://alternativeto.net/)
- `TWITTER`: link to a Twitter account, add an icon link in the header bar

You can add a link at the bottom of articles to a page which host article's comments with a `Comments_at` metadata information. For instance:

```Markdown
Title: My new blog post!
Date: 2015-03-05
Comments_at: https://github.com/FreshRSS/freshrss.org/issues/16

This is a blog post. Yep!

```

If you don't use GitHub to host your comments, you should have a look at `./templates/_article_comments.html` file to change the sentence (by default, “You can comment on GitHub”).

Note there is a FreshRSS-specific section in the `./templates/_header.html` file. You can adapt this part to your own needs.

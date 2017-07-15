Title: FreshRSS supports PubSubHubbub
Date: 2015-07-30
Comments_at: https://github.com/FreshRSS/freshrss.org/issues/28

We just released FreshRSS 1.1.2-beta which comes with some nice features such as the possibility to create account for anonymous users, proxy configuration and… **PubSubHubbub support**!

### PubSubHubWhat?

We know it's quite hard to pronounce (we'll short it by “PuSH” later) but we really think you will **LOVE** this feature. So what is PuSH? It is a protocol which was initially designed to extend Atom and RSS protocols to add them real-time notifications. In few words, you can receive new articles in FreshRSS as soon as they are published!

For that, we need a new actor: **a “hub”**. Hubs are (or can be) independent from publishers (e.g. this blog) and subscribers (e.g. FreshRSS). Publishers write articles and post a notification to the hub. Once the hub received the notification, it calls all subscribers to send them the new article. Quite simple, isn't it?

### FreshRSS ♥ PuSH

PuSH requires subscribers expose a public access point: FreshRSS' one is located at `./p/api/pshb.php`. It means this file must be accessible from an external server and we realised that's not always the case (especially when we develop on our personal machines). To avoid unwanted PuSH requests, we introduced two new configuration parameters (in `./data/config.php`):

- `base_url` which corresponds to the most basic public URL of your FreshRSS instance (e.g. `http://example.com/FreshRSS/p`).
- `pubsubhubbub_enabled` is set at `true` to use PuSH or `false` otherwise. If your server is corresponding to a “localhost” one, it is set to `false` automatically.

These two new parameters are required to use PuSH and are created during installation or automatic update. **If you do the update with Git or manually, you have to add these parameters by yourself!**

### We need your help!

So what's next then? We would enjoy to see PuSH spreads the world! And guess what? It's really easy. You have only one mission: add a hub information to your RSS / Atom feed.

- If you are using a self-hosted Wordpress blog, just install [this plugin](https://wordpress.org/plugins/pushpress/) created by the Wordpress team. It includes a hub feature directly in your Wordpress;
- If you are not using Wordpress, have a look at [Superfeedr documentation for publishers](http://documentation.superfeedr.com/publishers.html);
- If you don't own any blog or website, just speak about PuSH around you and let the web being a bit better :).

If you want to learn more about PuSH protocol, you can have a look at [the official GitHub page](https://github.com/pubsubhubbub) or [read its Wikipedia page](https://en.wikipedia.org/wiki/PubSubHubbub). Also, there is [this nice presentation](https://docs.google.com/presentation/d/1CZG0pHMOoC-_lZXdTb-8aHrKN0akNHi2wl1EG-CiTtQ/htmlpresent?pli=1) you could be interested in (but it's a Google doc ;)).

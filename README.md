~ Project Abandoned ~

Nice Things
==============================

[Nice Things](http://nicethings.me/) is a project by [Luke Jones](http://twitter.com/lukejones) to get lots and lots of *Nice Things* in one place. No adverts, clutter or text. Just lots and lots of inspiration.

Basic installation
------------------------------

Installation is really easy. You don't need a database, just a hosting account. Once you've unzipped the files and placed it in the directory, you need to create the following directories:

* `cache`
* `things`

Make sure each of those directories has it's `CHMOD` set to `777` recursively. All you have to do now is stick some images in the `things` directory and they'll be cropped, cached and will appear when viewing the `index.php` file.

Within the `index.php` you can modify the directory used for your `things` and the size of the image crops on the front end.

*Keep in mind that Nice Things also uses TypeKit for the small amount of text on the site and [view.js](http://finegoodsmarket.com/view/) by [@rogie](http://twitter.com/rogie) so you need to provide your own alternatives for these.*

Future features
------------------------------

For obvious reasons, I can't guarantee a timeframe for different features of Nice Things, but I've got a list of features I have in mind for future releases:

* Switch to [Data URIs](http://davidwalsh.name/data-uri-php) for each thing to reduce page bandwidth
* Make the site responsive
* URL for each popped-up image so the URL is alwaes copy-and-paste friendly
* User submissions

These people are brilliant
------------------------------

I've been extremely lucky to have the help of some talented individuals on this project and I'm really grateful. So thank you to everyone who has helped, is helping and is *going to* help me make this better and better:

* [Dan Eden](http://twitter.com/_dte)
* [Ben Everard](http://twitter.com/ilmv)
* [Ben Lumley](http://twitter.com/benlumley)
* [Saral Kaushik](http://twitter.com/saralk)
* [Adam Strawson](http://twitter.com/adamstrawson)
* [Michael Wright](http://twitter.com/michaelw90)

Software
------------------------------

I've used a few scripts to make Nice Things, these are:

* [Thumbnail Creation](https://github.com/adamstrawson/Thumbnail-Creation) by Adam Strawson
* [view.js](http://finegoodsmarket.com/view/) by Rogie

License
------------------------------

I don't know anything about licensing, so I'll just write it how I would say it in real-life: you can do whatever the hell you want with this source code. Feel free to sell it, distribute it, modify it or copy it.

Note: This license doesn't include createThumb.php or any other scripts I've used or will use in this project.

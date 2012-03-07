Nice Things
==============================

This project is an attempt to get a bunch of [Nice Things])http://nicethings.me/) in one place. No adverts, clutter or text, just a lot of nice things.

Basic installation
------------------------------

Installation is really easy. You don't need a database, just a hosting account. Once you've unzipped the files and placed it in the directory, you need to create the following directories:

- cache
- things

Make sure each of those directors has it's CHMOD set to 777 recursively. All you have to do now is stick some images in the ‘things’ directory and they'll be cropped, cached and will appear when viewing the index.php file.

Within the index.php you can modify the directory used for your ‘things’ and the size of the image crops on the front end.

*Keep in mind that Nice Things also uses TypeKit for the small amount of text on the site and [view.js](http://finegoodsmarket.com/view/) by [@rogie](http://twitter.com/rogie) so you need to provide your own alternatives for these.*

Fixing missing image issue
------------------------------

There is a known issue where images are missing from the front-end which appears in the back. This could be one of two things: the title of the image, or the size of the file. The maximum filesize set by createThumb.php is roughly 6.5MB, so make sure the file does not exceed this size. If the file does not exceed ~6.5MB, make sure that the title does not contain any special characters. I'm working on a fix, but at the moment the only support characters in the filenames are basic latin and simple punctuation (hyphens, spaces and underscores).

*If anyone knows a fix for this, please feel free to fork the repository and send a merge request and I'll give you credit for it.*

These people are brilliant
------------------------------

I've been extremely lucky to have the help of some talented individuals on this project and I'm really grateful. So thank you to everyone who has helped, is helping and is *going to* help me make this better and better:

- [Dan Eden](http://twitter.com/_dte)
- [Ben Everard](http://twitter.com/ilmv)
- [Ben Lumley](http://twitter.com/benlumley)
- [Saral](http://twitter.com/saralk)
- [Adam Strawson](http://twitter.com/adamstrawson)
- [Michael Wright](http://twitter.com/michaelw90)

Software
------------------------------

I've used a few scripts to make Nice Things, these are:

- [Thumbnail Creation](https://github.com/adamstrawson/Thumbnail-Creation) by Adam Strawson
- [view.js](http://finegoodsmarket.com/view/) by Rogie

License
------------------------------

I don't know anything about licensing, so I'll just write it how I would say it in real-life: you can do whatever the hell you want with this source code. Feel free to sell it, distribute it, modify it or copy it. You don't have to attribute you me but attribution would be a nice bonus if you're feeling particularly generous.

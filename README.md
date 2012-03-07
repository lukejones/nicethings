# Nice Things

This project is an attempt to get a bunch of Nice Things in one place. No adverts, no clutter, just a crapload (yes, that's a measurement) of thumbnails.

## Basic installation instructions

The first thing you need to do is create the following folders (making sure have a CHMOD of 777):

- cache
- things

Place any images you want to appear on the front end inside ‘things’ and they will crop automatically, be cached and placed on the front end. If you change the name of the ‘things’ directory, make sure you change all references in index.php.

## Fixing missing image problem

There is a known issue where images are missing, that is because incompatible characters are being used in the filename. At the moment the code only supports basic alphanumeric formatting, hyphens, spaces and underscores. A few other characters work but I don't support these and just avoid them like the plague.

## People who've helped me out

Thanks to everyone who's helped, helping and *is going to* help on this project. Here's a list of those awesome people:

- Dan Eden – http://twitter.com/_dte
- Ben Everard – http://twitter.com/ilmv
- Ben Lumley – http://twitter.com/benlumley
- Saral – http://twitter.com/saralk
- Adam Strawson – http://twitter.com/adamstrawson
- Michael Wright – http://twitter.com/michaelw90

## Software

I've used a few scripts to get Nice Things how I wanted, here are those scripts:

- Thumbnail Creation by Adam Strawson (http://twitter.com/adamstrawson) – https://github.com/adamstrawson/Thumbnail-Creation
- view.js by Rogie (http://twitter.com/rogie) – http://finegoodsmarket.com/view/

photocars
==========

Access REST/XML Web service API & convert to JSON

HTML, CSS, JavaScript, jQuery, AJAX, PHP, Bootstrap

This example gets 5 recent photos from Flicker and populates an interactive slide show. Using PHP on the "back end", it accesses the Flickr Rest Response Format, which returns XML, and converts the response to JSON. There is a PHP Class that implements XML to JSON conversion.

The "front end" uses the jQuery AJAX API. The request requires a URL encoded Group Id to pass along to Flickr. One advantage of using PHP on the back end is that the Flickr API Key is not exposed in the JavaScript code. You will need your own Flickr API Key to run this example.

The JavaScript demonstrates how to unpack JSON encoded by PHP. It also shows how to assemble the data items from Flickr into a valid IMG SRC url.

There is a Bootstrap JavaScript carousel component for the slide show, using info from Flick for the photos and captions.

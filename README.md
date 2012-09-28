Pindown
=========

Pindown is an unofficial Pinterest board downloader written in PHP. It fetches all pins from a target board (at the highest possible resolution) and displays it in a page, which can then be downloaded by a browser. 

Pin description are stored in the 'title' attribute in the image.

Usage
-

1. Open page with the fields (*board, token*) supplied. (e.g. `/pindown.php?board=yourBoardId&token=yourAccessToken` )
2. Save the page the way you like it (Usually with your browser's "Save as..")

Obtaining Board ID
-
1. Open `http://pinterest.com/` (Ensure that you are already logged in)
2. View source and search for `<div class="BoardList">`
3. You should see `<li data="000000000000000000">` and your board name(s) below in a `<span>`
4. The numbers in the `data="000000000000000000"` is the Board ID

Obtaining Access Token
-
As Pinterest does not have a public API, there is no way *(yet?)* to generate an access token. To obtain my token, I set up a man-in-the-middle attack on the iOS Pinterest Client using [Fiddler2](http://www.fiddler2.com/fiddler2/) and [iOS-SSL-Killswitch](https://github.com/iSECPartners/ios-ssl-kill-switch). When successful, you should be able to see the token `access_token` in the query string when the Pinterest Client makes a request.

Screenshots
-
Pindown in browser (note that pins are of high resolution)

![Pindown in browser](https://raw.github.com/jglim/Pindown/master/screenshot1.png)

Pin images in Windows Explorer

![Pin images in Windows Explorer](https://raw.github.com/jglim/Pindown/master/screenshot2.png)

License
-

MIT
  
    
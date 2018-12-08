<?php
include('php_fast_cache.php');
$startTime = microtime(true);
$url = isset($_GET['url']);
//echo $_GET['url'];
?>






<html> 
<head> 
<meta charset="utf-8">
<script type="application/javascript" src="//moviehdbd.000webhostapp.com/getlink/newjw.js"></script>
<script type="text/javascript">
        var primaryCookie = 'html5';
        var cookies = document.cookie.split(";");
        for (i=0; i < cookies.length; i++) {
            var x = cookies[i].substr(0, cookies[i].indexOf("="));
            var y = cookies[i].substr(cookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g,"");
            if (x == 'primaryCookie') {
                primaryCookie = y;
            }
        }
    </script>
<style>*{padding:0;margin:0}</style>
</head>
<body>
<script type="text/javascript">
    if(primaryCookie == 'flash') { 
        document.getElementById('switcher').innerHTML = 'Switch primary to HTML5';
    }
    function reload() {
        primaryCookie == 'html5' ? primaryCookie = 'flash': primaryCookie = 'html5';
        document.cookie = "primaryCookie=" + primaryCookie;
        window.location.reload();
    };
</script> 
<div id="playerayer"></div>
<script>jwplayer.key = "rHWo7gn54oUpCCZYZAeTQyLF0lrTU2nhocU2uA==";var playerInstance = jwplayer("playerayer");playerInstance.setup({sources: [{file:"<?php echo $_GET['url'];?>",type:"video/mp4"},],tracks: [{file: "/getlink/getsub.php?sub=<?php echo  $_GET['sub'];?>", kind: "captions",label: "Tiếng Việt",default: "1"}],controlbar: "bottom", width: "100%",height: "100%",aboutlink: "http://phimmoc.blogspot.com",abouttext: "Phim Mộc - HD Player",primary: primaryCookie, autostart: true,stretching: "uniform",visualplaylist: true,});playerInstance.addButton(//This portion is what designates the graphic used for the button
   "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAASCAYAAABb0P4QAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCRDc2NUM3RDFEMEMxMUUyQjU2QUFCQUEyM0JGREJGRCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCRDc2NUM3RTFEMEMxMUUyQjU2QUFCQUEyM0JGREJGRCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkJENzY1QzdCMUQwQzExRTJCNTZBQUJBQTIzQkZEQkZEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkJENzY1QzdDMUQwQzExRTJCNTZBQUJBQTIzQkZEQkZEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+czMQdgAAAPdJREFUeNpi+P//PwMOzATEh/9jgp149DAwMeAGjFCMTRwnwGcgLnmKDGSgpoF/yfEyCxqfDYiTgZgZiP8BsTAWPSJAnATEXFBL5wLxL7gslpidiBSj/7DE8l8kdhtUD9wMbFHPAsQ9/wmDFmzJBld64gHi83gM24juMkIGgrAaEN/AYtg1IFbGpQ+fgSBsDMT3kAy7DcR6+PQQMhCEHZEMtCeknhFsKmGQD0oQQDyJYKoHGigEpGOBWAoq9g9NDcig31A2K5aEDcvzoLS4CeTM0v/UA8dBWY+PgXqAC5T1ZgLxdyAWQvIiOQUGKKh2ExspRAOAAAMARqI5WRk9ASEAAAAASUVORK5CYII%3D",
//This portion determines the text that appears as a tooltip
   "Nhấn vào để tải video này", 
//This portion designates the functionality of the button itself
   function() {
                    var kI = playerInstance.getPlaylistItem(),
                        kcQ = playerInstance.getCurrentQuality();
                    if (kcQ < 0) {
                        kcQ = 0;
                    }
                    var kF = kI.sources[kcQ].file + "?itag=" + kcQ + "&type=video/mp4&title=phimmoc";
                    window.open(kF, '_blank');
                },
                "download"
            );</script>
</body>
</html>

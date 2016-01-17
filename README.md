# raspbian-audio
Application web for raspbian which changes between hdmi audio and jack audio

## What you need
* Web browser
* Web server

## How to use
* Clone this repository
* Give your web server sudo permission to amixer command.

If you use Apache2, edit your /etc/sudoers file:
```
$ sudo visudo
```
Then add this line in your /etc/sudoers file:
```
          www-data ALL=(ALL) NOPASSWD: /usr/bin/amixer
```

* Run index.html in a server web and select the audio mode you desire

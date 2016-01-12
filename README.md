# raspbian-audio
Application web for raspbian which changes between hdmi audio and jack audio

## What you need
* Web browser
* Web server

## How to use
* Clone this repository
* Give your web server sudo permission to amixer command. In my case I used Apache2 (www-data user) and I executed "sudo visudo" in the terminal and wrote the following las lines for getting sudo permission:

```
www-data ALL=(ALL) NOPASSWD: /usr/bin/amixer
```

* Run index.html in a server web and select the audio mode you desire

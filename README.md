# X-Domain tracking proof of concept
Simple proof of concept setup show x-domain tracking using iFrames

## Usage
The 2 scripts (domain1 and domain2) are started at a different domain. Don't use both on local host, even if you
set them on different ports. Your browser will still consider them coming from the same domain.

For easy startup, the startup.sh script is provided. 

Change the ip-address entries (see `ifconfig`) and run startup.sh

    $ sh ./startup.sh
    

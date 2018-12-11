#!/usr/bin/env bash
IP_XDOMAIN=10.0.4.54

DOMAIN_1=127.0.0.1
DOMAIN_2=192.168.1.143

PORT_XDOMAIN=8080
PORT_DOMAIN1=8081
PORT_DOMAIN2=8082

export XDOMAIN=${IP_XDOMAIN}:${PORT_XDOMAIN}
php -d register_argc_argv=1 -S ${DOMAIN_1}:${PORT_DOMAIN1} domain.php "My 1st Site" &
php -d register_argc_argv=1 -S ${DOMAIN_2}:${PORT_DOMAIN2} domain.php "My 2nd Site" &
php -S ${IP_XDOMAIN}:${PORT_XDOMAIN} tracking-domain.php

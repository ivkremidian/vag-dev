#!/bin/sh

while true; do 
	curl wordpresstest.local 1>&/dev/null &&  echo `date` - success || echo `date` - failed ; 
	sleep 1; 
done

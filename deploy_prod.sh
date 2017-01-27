#!/bin/bash
echo 'Updating master'
ssh -i posolda posolda@31.31.74.179 -p 2222 "cd /var/www/vhosts/shdev.cz/testci.shdev.cz && git pull origin master"
echo 'Done!'
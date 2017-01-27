#!/bin/bash

ssh posolda@31.31.74.179 -p 2222

echo 'Updating master'
git pull origin master

echo 'Done!'
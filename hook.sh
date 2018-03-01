#!/bin/bash
now=`date`
printf "\n\nHook started at $now"
echo '---------------------------------------'
echo `
SECONDS=0 &&
git fetch --all && 
git reset --hard origin/master && 
git pull origin master &&
php yii migrate/up --interactive=0 &&
php init --env=Production --overwrite=All &&
chmod +x yii
`

printf "Hook completed after ${SECONDS} seconds\n"

#!/bin/bash
flagdir=$(dirname $(readlink -f $0))
flagfile="$flagdir/1e081db078ee825ddcd227cf0e6aba0d.txt"
appdir=$(readlink -f $flagdir/../app)
appflag="$appdir/flag.txt"
cp $flagfile $appflag
cd $appdir
rm -rf .git
git init -q
git add *
git commit -m "initial commit"
git rm $appflag
git commit -m "remove flag"

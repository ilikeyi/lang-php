set yiDir to "/Users/fy/Documents/_Yi/_Website/lang-php.com/www/"
set fn to "lang-php-latest-master"
set tf to "generate_tmp"

-- ln -s /Applications/Keka.app/Contents/Resources/keka7z /usr/local/bin/7z

tell application "Terminal"
	activate
	set currentTab to do script ("
echo delete old file;
cd " & yiDir & ";
rm -rf " & tf & ";
rm -rf *.zip >/dev/null;
rm -rf *.tar >/dev/null;
rm -rf *.tar.gz >/dev/null;
rm -rf *.tar.xz >/dev/null;
rm -rf *.asc >/dev/null;
rm -rf *.sig >/dev/null;
rm -rf *.sha256 >/dev/null;
sheep 5m;

echo create temp folder;
mkdir " & tf & ";

echo copy file
cp -a index.php " & tf & " >/dev/null;
cp -a README.md " & tf & " >/dev/null;

echo copy folder
cp -a libraries " & tf & "/libraries >/dev/null;
cp -a themes " & tf & "/themes >/dev/null;
cp -a example " & tf & "/example >/dev/null;
cp -a assets " & tf & "/assets >/dev/null;

echo clear " & tf & " more folder
rm -rf " & tf & "/themes/docs;
rm -rf " & tf & "/themes/downloads;

cd " & tf & ";
echo zip;
zip -9 -r ../" & fn & ".zip . > /dev/null;

echo tar.gz;
tar cvf - . | gzip -9 - > ../" & fn & ".tar.gz;

echo tar.xz;
tar -cf - . | xz -9 -c - > ../" & fn & ".tar.xz;

-- tar -cjcf ../" & fn & ".tar.xz .  -mf=bcj -mx > /dev/null;

cd ..;
echo Generate asc;
gpg --local-user 2499B7924675A12B --detach-sign " & fn & ".zip;
gpg --local-user 2499B7924675A12B --detach-sign " & fn & ".tar.gz;
gpg --local-user 2499B7924675A12B --detach-sign " & fn & ".tar.xz;

echo generate sha256
shasum -a 256 " & fn & ".zip > " & fn & ".zip.sha256;
shasum -a 256 " & fn & ".tar.gz > " & fn & ".tar.gz.sha256;
shasum -a 256 " & fn & ".tar.xz > " & fn & ".tar.xz.sha256;

echo Ren file name
mv " & fn & ".zip latest.zip
mv " & fn & ".tar.gz latest.tar.gz
mv " & fn & ".tar.xz latest.tar.xz

echo Ren sig to asc name
for name in `ls *.sig`;do mv $name ${name%}.asc;done

rm -rf " & tf & ";


ping -c 5 fengyi.tel;
")
end tell

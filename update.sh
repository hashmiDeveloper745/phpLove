# Project Auto Update Script.

echo $(git pull);
echo $(git init);
echo $(git add .);
echo $(git commit -m "Project Updates");
echo $(git remote -v);
echo $(git push origin master);


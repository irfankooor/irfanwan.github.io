 Command line instructions
Git global setup

git config --global user.name "irfan kurniawan"
git config --global user.email "noursirfan@gmail.com"

Create a new repository

git clone https://gitlab.com/noursirfan/example.git
cd example
touch README.md
git add README.md
git commit -m "add README"
git push -u origin master

Existing folder

cd existing_folder
git init
git remote add origin https://gitlab.com/noursirfan/example.git
git add .
git commit -m "Initial commit"
git push -u origin master

Existing Git repository

cd existing_repo
git remote add origin https://gitlab.com/noursirfan/example.git
git push -u origin --all
git push -u origin --tags

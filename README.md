<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel

1 2 3 4 5 6 7 8 9 10

maxPage = 3;
totalPage = 10;
currentPage = 1;

startingPoint = 1;

1 2 3 ... 10
x o o ... o

1 2 3 ... 10
o x o ... o

1 ... 3 4 5 ... 10
o ... o x o ... o

currentPage = 1:
for 1 -> 3;
...
lastPage = 10;

currentPage = 2:
for 1 -> 4;
...
lastPage = 10;

currentPage = 4;
startingPoint = 3;
for 3 -> 6

maxPage = 3
startingPoint = 2

maxPage = 7
startingPoint = 4

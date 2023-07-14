#!/bin/bash
echo 'Enter image name: '
read a
input=$a

echo 'Enter output image name: '
read b
output=$b
convert $input -resize 800x600^ -gravity center -extent 800x600 $output

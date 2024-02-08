let title = document.getElementById('title');
let audio = document.getElementById('source');
let music_list = document.getElementById('music_list');

i = 0;
title.innerHTML = list[i];
audio.setAttribute('src',list[i]);

function prev(){
	i--;
	title.innerHTML = list[i];
	audio.setAttribute('src',list[i]);
};

function play(){
	audio.play();
};

function next(){
	i++;
	title.innerHTML = list[i];
	audio.setAttribute('src',list[i]);
};
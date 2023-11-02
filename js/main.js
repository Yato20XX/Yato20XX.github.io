let login = document.getElementById('login');
let pswd = document.getElementById('pswd');
let reg = document.getElementById('reg');

let Users = [];

function addUser(){
	user = {};
	user.login = login.value;
	user.password = pswd.value;

	Users.push(user);

	localStorage.setItem('Users', JSON.stringify(Users));
	console.log(Users);
}

reg.addEventListener('click', addUser);

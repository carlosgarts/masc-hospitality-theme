var mainMenu = document.getElementById('main-menu');
var btnOpen = document.getElementById('menu-open');
var scrBlocker = document.getElementById('screen-blocker');
var btnClose = document.getElementsByClassName('quit');

function alterMenu(){
	if(mainMenu.classList.contains('toggled')) {
		mainMenu.classList.remove('toggled');
		scrBlocker.classList.remove('toggled');
		return;
	}
	mainMenu.classList.add('toggled');
	scrBlocker.classList.add('toggled');
	return;
}

(function initMenuController(){
	btnOpen.addEventListener("click", alterMenu);
	btnClose[0].addEventListener("click", alterMenu);
	scrBlocker.addEventListener("click", alterMenu);
})()
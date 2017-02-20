function move(to){
	window.location.href='?move=true&to='+encodeURIComponent(to)+'&file='+encodeURIComponent(file);
}
function _delete(){
	move("#deleted")
}
function one(){
	move("#better")
}
function two(){
	move("2")
}
function fix(){
	move("#fix")
}
function better(){ move("#better") }


key('d', _delete);
key('1', better);
key('2', two);
key('f', fix);
key('b', better);

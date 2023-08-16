/*
*
* Developer: Ryann Kim Sesgundo
* Organization: MPOP Reverse II
* File name: script.js
*
* Credits to the following
*
* John Roy Lapida Calimlim
* Ronald Torrejos Limpiado
* John Vincent Diaz
* Renzo Lanes Barba
* Jessa Sanchez
* Rennier21
* James Tinaya Alegre
* JxClarynx
* Isrrael Preak
* John Jeremy Antiguo
* Sanz Dinopol
* Rovie Francisco
* Mark Glen Miguel
* Andrei Candelaria
* Vugarishk Lagishuka
* Fortzkie Tuneskie
* Charles Tamao
* Adrei Paul Tamayo
* Dominic Ama
* Nonie Del Rosario
* Ian Divinagracia
* Genesis Fernandez
* Jason Francisco
* Ronald Paolo Ramirez
* Edward Fernandez
* Joshua Agulto
* Atcha Abe
* Kyla Crisel Dela Cruz
* Ricalyn Perriras
* April Bauat
* Mart Anthony Salazar
* Artz Ayate Rase
* Queens Pride
* Jericho Cabaguing
* Jonel Tapia
* Criztian Jade Tuplano
* Lloyd Samuel Garcia
* John Kenneth De Imus POgi
*
* Geeks for Geeks
* Tutorials Point
* Stackoverflow
* GitHub
* DroidModificators
* Fagmmmu
* Android Modders United
* Bisdak Developers Clan United
* XDA-Developers
* W3schools
* PHCommunity
* PinoyDen
*
* HTML Code Play
* QuickEdit
* AIDE
*
* Disclaimer: This is just created by MPOP Reverse II,
* There is no copyrigth intension, if ever that this project
* copied otther projects, Open for suggestions and idea, by
* messaging me thru m.me/NOOBGrammer2001. This project
* is a bootstrap inspired which is based on its panel classes.
* In addition, I make this project as a readable code, and as
* request, kindly don't change this comment as creditation
* to the following, and consideration to the author itself.
*
*/

setInterval(() => {
	const date = new Date()
	if(document.getElementById("time").getAttribute("mpop-time-format") == 12){
		let hours = date.getHours()
		let am = "am"
		if(hours >= 12){
			am = "pm"
			hours -= 12
		}else{
			if(hours == 0){
				hours = 12
			}
		}
		document.getElementById("time").textContent = `${hours}:${date.getMinutes()}:${date.getSeconds()} ${am}`
	}else{
		document.getElementById("time").textContent = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`
	}
})

const inputs = document.getElementsByClassName("input")
for(let i in inputs){
	const input = inputs[i]
	for(let c in input.childNodes){
		const child = input.childNodes[c]
		if(parseInt(child.getAttribute("mpop-length")) <= child.value.length){
			console.log("test")
		}
	}
}

// for(let i = 0; i < document.getElementsByClassName("mpop-search").length; i++){
// let x = document.getElementsByClassName("mpop-search")[i];
// x.value = "🔎";
// }
// for(let i = 0; i < document.getElementsByTagName("input").length; i++){
// let p = document.getElementsByTagName("input")[i];
// p.addEventListener("keyup", function(){
// event.preventDefault();
// if(p.getAttribute("mpop-name") == "single"){
// hasText(p.getAttribute("mpop-parent"));
// }else if(p.getAttribute("mpop-name") == "login"){
// hasTextLogin(p.getAttribute("mpop-id1"), p.getAttribute("mpop-id2"));
// }
// });
// }
// function go(link){
// location.href = link;
// }
// function hasText(a){
// let parent = document.getElementById(a);
// let nxt_inp = parent.children[0];
// let nxt_mpop = parent.children[1];
// if(nxt_inp.value == ""){
// nxt_mpop.style.display = "none";
// }else{
// nxt_mpop.style.display = "inline";
// }
// }
// function hasTextLogin(a, b){
// let parent = document.getElementById(b);
// let nxt_inp = parent.children[0];
// let nxt_mpop = parent.children[1];
// let nxt_pass = document.getElementById(a).children[0];
// if((nxt_inp.value.length < l(nxt_inp, "mpop-length")) || (nxt_pass.value.length < l(nxt_pass, "mpop-length"))){
// nxt_mpop.style.display = "none";
// }else{
// nxt_mpop.style.display = "inline";
// }
// console.log("a " + l(nxt_inp, "mpop-length") + " b " + l(nxt_pass, "mpop-length"));
// }
// function l(a, b){
// try{
// return parseInt(a.getAttribute(b));
// }catch(err){
// console.log(a + err.message);
// return 0;
// }
// }
// function show(a){
// let tab_content = document.getElementsByClassName("mpop-tabs-content");
// for(let i = 0; i < tab_content.length; i++){
// tab_content[i].style.display = "none";
// } 
// document.getElementById(a).style.display = "block";
// }
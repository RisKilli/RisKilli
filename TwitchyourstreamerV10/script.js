
//barre de recherche

function search_streamer() {
    let input = document.getElementById('search').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('r');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
     // permet de mettre un liens vers une autre page en javascript
}
     /* ne fonctionne pas a mettre a jour (cause username PHP)
   var a = document.getElementById("search").value;
  if(a === "Zerator") 
    {
      window.open("html/Zerator.php")
    }
  else if (a === "zerator") 
    {
      window.open("html/Zerator.php")
    }
    else if (a === "Domingo") 
    {
      window.open("html/Domingo.php")
    }
    else if (a === "domingo") 
    {
      window.open("html/Domingo.php")
    }
}
*/

function verifierCaracteres(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('mon_input');
			
	var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.@';
			
	if(caracteres.indexOf(touche) >= 0) {
		champ.value += touche;
	}
			
}










/* Fonction qui permet de pouvoir afficher le mot de passe d'un formulaire */
function showPassword(){
    $passwordArea = document.getElementById("password");
    $isHidden = $passwordArea.getAttribute("type") == "password";
    $passwordArea.setAttribute("type", $isHidden ? "text" : "password");
}
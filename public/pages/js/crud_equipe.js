		
		// script block button 
		
		let imageSaveDisabled=document.querySelector("#imageEquipe");
		//    imageSaveDisabled.style.display="none";
		
			let save=document.getElementById('btnSave');
				
				document.getElementById("addequipe").addEventListener("click", hidebtnsave);
				
				function hidebtnsave(){
					save.style.display="block";
					update.style.display = "none";
					imageSaveDisabled.setAttribute('hidden','');

				}

		let update=document.getElementById('btnupdate');
			
				document.getElementById("updateequipe").addEventListener("click", hidebtnupdate);

				function hidebtnupdate(){
					save.style.display="none";
					update.style.display = "block";
		            imageSaveDisabled.style.display="block";
					imageSaveDisabled.removeAttribute('hidden');

				}
				
				let elements = document.querySelectorAll(".update");
				elements.forEach(elt => {
					elt.onclick=()=>{
						let id = elt.children[0].innerText;
						let teamName = elt.children[1].innerText;
						let image = elt.children[2].innerText;
						
						let idEquipeInput = document.getElementById("id_equipe");
						let nomEquipe = document.getElementById("nom_equipe");
						let drapeauEquipe = document.getElementById("imageEquipe");

						idEquipeInput.value = id;
						nomEquipe.value = teamName;
						drapeauEquipe.src = "../assets/upload_image/" + image + "";
						console.log("../assets/upload_image/" + image + "");


				}});
				// delete
				let elementss = document.querySelectorAll(".delete");
				elementss.forEach(elt => {
					elt.addEventListener("click", function() {
						let id = elt.children[0].innerText;
						
						
						let idEquipeInput = document.getElementById("input_id_delete");
						
						idEquipeInput.value = id;
						


				})});
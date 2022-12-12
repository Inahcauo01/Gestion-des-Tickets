let stadForm = document.getElementById('form-stade');
let modalHeader = document.getElementById('modalTitle')

function fillModal(id){
    stadForm.update_stadium.removeAttribute('hidden')
    stadForm.save_stadium.setAttribute('hidden','')
    modalHeader.textContent = "Update stade";


    stadForm.stade_id.value = id;
    stadForm.stade_name.value = document.getElementById(`stade-name-${id}`).textContent
    stadForm.stade_capacity.value = document.getElementById(`stade-capacity-${id}`).textContent
    stadForm.stade_location.value = document.getElementById(`stade-location-${id}`).textContent

}


function handleModal(){
    stadForm.update_stadium.setAttribute('hidden','');
    stadForm.save_stadium.removeAttribute('hidden');
    modalHeader.textContent = "Ajouter stade";

    stadForm.reset();
}

// function confirmDeletion(form){
//     return  confirm('voulez-vous vraiment supprimer cet element')
    
// }

function validateInput(form){
    console.log(form)
    return true;
}
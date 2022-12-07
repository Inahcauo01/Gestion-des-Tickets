let stadForm = document.getElementById('form-stade');


function fillModal(id){
    stadForm.update_stadium.removeAttribute('hidden')
    stadForm.stade_id.value = id;
    stadForm.stade_name.value = document.getElementById(`stade-name-${id}`).textContent
    stadForm.stade_capacity.value = document.getElementById(`stade-capacity-${id}`).textContent
    stadForm.stade_location.value = document.getElementById(`stade-location-${id}`).textContent

}


function handleModal(){
    stadForm.update_stadium.setAttribute('hidden','');
    stadForm.reset();
}

function handeDeletion(){
    confirm('voulez-vous vraiment supprimer ')
}
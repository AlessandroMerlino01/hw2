function remove_message(event){
    button = event.currentTarget;
    //console.log(button);
    const message_id=button.parentNode.firstChild.innerHTML;
    console.log(message_id);
    const formData = new FormData();
    formData.append('messageid', message_id);
    formData.append('_token', CSRF_TOKEN);
    console.log(formData);
    fetch(BASE_URL + "/remove_mex", {method: 'post', body: formData});
  
    // Cambio la classe del bottone per farlo sparire
    const rimuovi = button.parentNode.parentNode;
    rimuovi.classList.add('hidden');
  }


setTimeout(function (){    
    const remove_contatct_us = document.querySelectorAll('.button');
    for (let i = 0; i < remove_contatct_us.length; i++){
      const current = remove_contatct_us[i];
      current.addEventListener('click', remove_message);
    } 
}, 500)
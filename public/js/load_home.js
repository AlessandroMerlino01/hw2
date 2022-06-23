function onJsonHome(json){
    console.log("json");
    console.log(json);
    posts = document.querySelector("section");
    fetch(BASE_URL + CHECK_PREFERITI_ROUTE).then(onResponse).then(function (json_preferiti){
        console.log(json_preferiti);
        fetch(BASE_URL + CHECK_USER).then(onResponse).then(function (json_current){
            for (let i = 0; i < json.length; i++){
                post = document.createElement('div');
                post.classList.add('post');

                id = document.createElement('div');
                id.classList.add('id');
                id.innerHTML = json[i].id;
                post.appendChild(id);

                img = document.createElement('img');//creo la sezione foto
                img.classList.add('foto');
                img.src = BASE_URL + json[i].foto;
                console.log(img);
                post.appendChild(img);


                text = document.createElement('div');//creo la sezione contenuti
                text.classList.add('contenuti');

                title = document.createElement('div');//creo la sezione titolo
                title.classList.add('titolo');
                title.innerHTML = json[i].titolo;
                text.appendChild(title);
            


                descrizione = document.createElement('div');//creo la sezione descrizione
                descrizione.classList.add('testo');
                descrizione.innerHTML = json[i].descrizione;
                text.appendChild(descrizione);

                preferiti = document.createElement('a');//creo il pulsante preferiti
                preferiti.classList.add('button');

                for (let j = 0; j < json_preferiti.length; j++){
                    //console.log('a');
                    if(json_preferiti[j].user_id === json_current){
                        if(json[i].id === json_preferiti[j].contenent_id){
                            preferiti.classList.add('preferiti');
                        }else{
                            preferiti.classList.add('non_preferiti');
                        }
                    }else{
                        preferiti.classList.add('non_preferiti');
                    }
                }
                if(json_preferiti.length === 0){
                    preferiti.classList.add('non_preferiti');
                }
                
                preferiti.innerHTML = 'Preferito';
                text.appendChild(preferiti);

                post.appendChild(text);
                posts.appendChild(post);

            }
        })
    })
}


function onResponse(response) {
    console.log('risposta');
    console.log(response);
    return response.json();
}
console.log("richiestas");
fetch(BASE_URL + LOAD_CONTENUTI_ROUTE).then(onResponse).then(onJsonHome);
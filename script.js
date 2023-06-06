function walidacja(){
    ilebledow = 0;

    imie = document.getElementById('imie');
    kontakt = document.getElementById('kontakt');
    nick = document.getElementById('nick');
    opis = document.getElementById('opis');

    
    if(imie.value==''){
        ilebledow++;
    }
    if(kontakt.value==''){
        ilebledow++;
    }
    
    if(nick.value==''){
        ilebledow++;
    }
    if(opis.value==''){
        ilebledow++;
    }
    
    if(ilebledow==0){
        window.alert('Zgłoszenie przyjęto pomyślnie, odezwiemy się do ciebie w najbliższym czasie!')
        return true;
    }
    else{
        window.alert('Upewnij się że uzupełniłeś/aś wszystkie pola!');
        return false;
    }
    
}

// function walidacja(){
//     ilebledow=0;
    
    
//     window.alert("huj");
    
// }

function validezaForma() {
    // var frm = document.getElementsByName("formaInscriere");
    var nume = document.getElementById("nume");
    var prenume = document.getElementById("prenume");
    var nickname = document.getElementById("nickname");
    var valid = true;

    if(nume.value === "" || nume.value == null ||  nume.value.length <2 ){
        alert("Numele trebuie sa aiba minim 2 caractere");
        nume.focus();
        valid = false;
    }else if(nume.value.length >20 ){
        alert("Numele trebuie sa aiba maxim 20 caractere");
        nume.focus();
        valid = false;
    }

    var regex = /\d/g;
    if(regex.test(nume.value)){
        alert("Numele nu poate contine cifre");
        nume.focus();
        valid = false;
    }
    if(regex.test(nume.value)){
        alert("Prenumele nu poate contine cifre");
        nume.focus();
        valid = false;
    }
   
    if(prenume.value === "" || prenume.value == null ||  prenume.value.length <2 ){
        alert("prenume trebuie sa aiba minim 2 caractere");
        nume.focus();
        valid = false;
    }else if(nume.value.length >20 ){
        alert("prenume trebuie sa aiba maxim 20 caractere");
        nume.focus();
        valid = false;
    }

    if(nickname.value === "" || nickname.value == null ||  nickname.value.length <2 ){
        alert("nickname-ul trebuie sa aiba minim 2 caractere");
        nume.focus();
        valid = false;
    }else if(nume.value.length >20 ){
        alert("nickname-ul trebuie sa aiba maxim 20 caractere");
        nume.focus();
        valid = false;
    }

    // console.log(frm.nume.value.length);
    // if (frm.nume.value.length < 2 ) {
    //     // alert("Numele trebuie sa aiba minim 2 caractere");
    //     frm.nume.focus();
    //     valid = false;
    // } else if (frm.nume.value.length > 30) {
    //     //alert("Numele trebuie sa aiba maxim 30 caractere");
    //     frm.nume.focus();
    //     valid = false;
    // }

    // if (frm.prenume.value.length < 2) {
    //     alert("Prenumele trebuie sa aiba minim 2 caractere");
    //     frm.prenume.focus();
    //     valid = false;
    // } else if (frm.prenume.value.length > 30) {
    //     alert("Prenumele trebuie sa aiba maxim 30 caractere");
    //     frm.prenume.focus();
    //     valid = false;
    // }

    // if (frm.nickname.value.length < 2) {
    //     alert("Nickname-ul trebuie sa aiba minim 2 caractere");
    //     frm.nickname.focus();
    //     valid = false;
    // } else if (frm.nickname.value.length > 30) {
    //     alert("Nickname-ul trebuie sa aiba maxim 30 caractere");
    //     frm.nickname.focus();
    //     valid = false;
    // }

    return valid;
    }
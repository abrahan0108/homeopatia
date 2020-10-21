'use strict'

$(document).ready(function () {
    var imgChildH1 = $(".display-4").text();
    var imgChildH3= $(".display-6").text();
    var imgName;
    
    // LLenar un array si es que existe un elemento de .display-6
    if(imgChildH3.length !== 0){
        let imgChildSectionSH= imgChildH3.split(' '); 
        imgName = imgChildSectionSH[0];
        $('.jumbotron').css('background-image', 'linear-gradient(rgba(0,0,0,0.75), rgba(255,255,255,0.1)), url("assets/img/'+imgName.toLowerCase()+'.jpg")');
    } else{
        imgName = imgChildH1.toLowerCase();
        $('.jumbotron').css('background-image', 'linear-gradient(rgba(0,0,0,0.75), rgba(255,255,255,0.1)), url("assets/img/'+imgName.toLowerCase()+'.jpg")');
    }
});



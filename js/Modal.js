function opcionMenu() {
    var div = document.getElementById("opcionesMenu");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
//Modal Miguel
function mostrarModalMiguel() {
    var modal = document.getElementById("modal-miguel");
    modal.style.display = "block";
}
function ocultarModalMiguel() {
    var modal = document.getElementById("modal-miguel");
    modal.style.display = "none";
}

//Modal Rodolfo
function mostrarModalRodolfo() {
    var modal = document.getElementById("modal-rodolfo");
    modal.style.display = "block";
}
function ocultarModalRodolfo() {
    var modal = document.getElementById("modal-rodolfo");
    modal.style.display = "none";
}

//Modal Daniel
function mostrarModalDaniel() {
    var modal = document.getElementById("modal-daniel");
    modal.style.display = "block";
}
function ocultarModalDaniel() {
    var modal = document.getElementById("modal-daniel");
    modal.style.display = "none";
}

//Modal Margarita
function mostrarModalMargarita() {
    var modal = document.getElementById("modal-margarita");
    modal.style.display = "block";
}
function ocultarModalMargarita() {
    var modal = document.getElementById("modal-margarita");
    modal.style.display = "none";
}

//Preguntas
function mostrarPreguntaA() {
    var div = document.getElementById("pregunta-a");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaB() {
    var div = document.getElementById("pregunta-b");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaC() {
    var div = document.getElementById("pregunta-c");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaD() {
    var div = document.getElementById("pregunta-d");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaE() {
    var div = document.getElementById("pregunta-e");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaF() {
    var div = document.getElementById("pregunta-f");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaG() {
    var div = document.getElementById("pregunta-g");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaH() {
    var div = document.getElementById("pregunta-h");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}
function mostrarPreguntaI() {
    var div = document.getElementById("pregunta-i");
    if (div.style.display === "none") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}

function ReelDV(){
    var div = document.getElementById("video");
    var video = document.getElementById("videoDV");

    if (div.style.display === "none") {
        div.style.display = "block";
        video.play();
    } else {
        div.style.display = "none";
        video.pause();
    }

}

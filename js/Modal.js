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

//Modal Rodolfo
function mostrarModalRodolfo() {
    var modal = document.getElementById("modal-rodolfo");
    modal.style.display = "block";
}
//Modal Daniel
function mostrarModalDaniel() {
    var modal = document.getElementById("modal-daniel");
    modal.style.display = "block";
}
//Modal Margarita
function mostrarModalMargarita() {
    var modal = document.getElementById("modal-margarita");
    modal.style.display = "block";
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
    var div2 = document.getElementById("basico");
    var div3 = document.getElementById("avanzado");
    if (div.style.display === "none") {
        div.style.display = "block";
        div2.style.display = "none";
        div3.style.display = "none";
        video.play();
    } else {
        div.style.display = "none";
        video.pause();
        video.load();
    }
}
function Basico(){
    var div = document.getElementById("basico");
    var div2 = document.getElementById("avanzado");
    if (div.style.display === "none") {
        div.style.display = "block";
        div2.style.display= "none";
    } else {
        div.style.display = "none";
    }
}
function Avanzado(){
    var div = document.getElementById("avanzado");
    var div2 = document.getElementById("basico");
    if (div.style.display === "none") {
        div.style.display = "block";
        div2.style.display = "none";
    } else {
        div.style.display = "none";
    }
}
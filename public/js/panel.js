function newuser() {
    event.preventDefault();
    document.getElementById("crear_usuario").style.display = "none";
    document.getElementById("alerta_nuevouser").style.display = "block";
    animateCSS("#alerta_nuevouser", "fadeIn")
}

function redirectnewuser() {
    event.preventDefault();
    document.getElementById("crear_usuario").style.display = "block";
    document.getElementById("alerta_nuevouser").style.display = "none";
    animateCSS("#crear_usuario", "fadeIn")

}

function edituser() {
    event.preventDefault();
    document.getElementById("edit_user").style.display = "block";
    document.getElementById("alerta_nuevouser").style.display = "none";
    document.getElementById("crear_usuario").style.display = "none";
    animateCSS("#edit_user", "fadeIn")
}

// Change text in the swicth of gestion de acceso
const checkbox = document.getElementById('switch');
checkbox.addEventListener('click', () => {
    const title = document.querySelector('.title');
    title.textContent = checkbox.checked ? 'Activado' : 'Desactivado';
});

const switchCheckbox = document.getElementById("switch2");
const titleSpan = document.getElementById("title2");

switchCheckbox.addEventListener("change", function () {
    if (this.checked) {
        titleSpan.textContent = "Activado";
    } else {
        titleSpan.textContent = "Desactivado";
    }
});

const switchCheckbox3 = document.getElementById("switch3");
const titleSpan3 = document.getElementById("title3");

switchCheckbox3.addEventListener("change", function () {
    if (this.checked) {
        titleSpan3.textContent = "Activado";
    } else {
        titleSpan3.textContent = "Desactivado";
    }
});

const switchCheckbox4 = document.getElementById("switch4");
const titleSpan4 = document.getElementById("title4");

switchCheckbox4.addEventListener("change", function () {
    if (this.checked) {
        titleSpan4.textContent = "Activado";
    } else {
        titleSpan4.textContent = "Desactivado";
    }
});

const switchCheckbox5 = document.getElementById("switch5");
const titleSpan5 = document.getElementById("title5");

switchCheckbox5.addEventListener("change", function () {
    if (this.checked) {
        titleSpan5.textContent = "Activado";
    } else {
        titleSpan5.textContent = "Desactivado";
    }
});

const switchCheckbox6 = document.getElementById("switch6");
const titleSpan6 = document.getElementById("title6");

switchCheckbox6.addEventListener("change", function () {
    if (this.checked) {
        titleSpan6.textContent = "Activado";
    } else {
        titleSpan6.textContent = "Desactivado";
    }
});

const switchCheckbox7 = document.getElementById("switch7");
const titleSpan7 = document.getElementById("title7");

switchCheckbox7.addEventListener("change", function () {
    if (this.checked) {
        titleSpan7.textContent = "Activado";
    } else {
        titleSpan7.textContent = "Desactivado";
    }
});

const switchCheckbox8 = document.getElementById("switch8");
const titleSpan8 = document.getElementById("title8");

switchCheckbox8.addEventListener("change", function () {
    if (this.checked) {
        titleSpan8.textContent = "Activado";
    } else {
        titleSpan8.textContent = "Desactivado";
    }
});
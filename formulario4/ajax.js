
// capturamos los formularios
const formulariosAjax = document.querySelectorAll('.formularioAjax');

function functionSendForm(e){

    e.preventDefault();

    let send = confirm('Enviar Formulario'); 
    
    if(send==true){
        let datos = new FormData(this);

        let method = this.getAttribute('method');

        let action = this.getAttribute('action')

        let encabezado = new Headers();

        let config = {
            method: method,
            headers: encabezado,
            mode:'cors',
            cache:'no-cache',
            body:datos
        }
        fetch(action,config)
        .then(respuesta => respuesta.text()) 
        .then(respuesta =>{
            alert(respuesta);
        })

    }

}


// recorremos los elemenots del fomulario y los formularios capturados
formulariosAjax.forEach(formulario => {
    formulario.addEventListener('submit',functionSendForm);
})


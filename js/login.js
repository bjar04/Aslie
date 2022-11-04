document.querySelector("#boton"),addEventListener("click", traerdata);
function traerdata(){
    const xhttp =  new XMLHttpRequest();
    xhttp.open("GET", "/JS/listado.json" , true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                let datos = JSON.parse(this.responseText);
                console.log(datos)
                let res = document.querySelector("#res");
                res.innerHTML = "";
                res.innerHTML = `
                    <thead>
                        <tr>
                            <th></th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                `
                for(let item of datos){
                    console.log(item.nombre);
                    res.innerHTML += `
                        <tr>
                            <th class="rt">${item.num}</th>
                            <th class="perfil"><img src=${item.img}></th>
                            <th>${item.nombre}</th>
                            <th class="edad">${item.edad}</th>
                        </tr>
                    `
                }
        }
    }
}
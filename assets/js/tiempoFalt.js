function tiempoFalt(str){
    let tiempo = new Date(str)
    tiempo = tiempo.getTime() 
    let tiempo_act = Date.now()
    let datenew = new Date(tiempo - tiempo_act)
    let text = datenew.getSeconds() + ' segundos';
    if(text == '1 segundos'){
        text = '1 segundo';
    }
    return text
}
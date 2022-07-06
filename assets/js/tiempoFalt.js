function tiempoFalt(str){
    let tiempo = new Date(str)
    tiempo = tiempo.getTime() 
    let tiempo_act = Date.now()
    let datenew = new Date(tiempo - tiempo_act)
	let text = datenew.getUTCMinutes() - 55 + ' minutos ';
    text += datenew.getUTCSeconds() + ' segundos';
	
	// Reemplazar "1 minutos" por 1 minuto, "1 segundos" por 1 segundo, 0 segundos por nada y 0 minutos por nada
	text = text.replace(/1 minutos/g, "1 minuto");
	text = text.replace(/\s1\s+[a-zA-Z]+/g, " 1 segundo");
	text = text.replace(/\s0\s+[a-zA-Z]+/g, "");
	text = text.replace(/0 minutos/g, "");
    return text
}
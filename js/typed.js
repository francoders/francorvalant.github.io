var typed = new Typed('.typed', {
	strings: [
		'<i class="objetivo1">Front-End Developer</i>',
		'<i class="objetivo2">Desktop Developer</i>',
		'<i class="objetivo3">Mobile Application Developer</i>'
	],

	stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar. (PENDIENTE)
	typeSpeed: 75, // Velocidad en milisegundos que tarda para poner una letra.
	startDelay: 300, // Tiempo de espera para iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar.
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Orden en el que escribe las palabras. false = orden | true = al azar.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings.
	loopCount: false, // Cantidad de veces a repetir el array. 2 = 2veces | false = infinito.
	showCursor: true, // Mostrar cursor intermitente
	cursorChar: '💻', // Caracter para el cursor
	contentType: 'html', // 'html'
});

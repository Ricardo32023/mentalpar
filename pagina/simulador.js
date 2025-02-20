function simularJugada() {
    let jugada = [];
    for (let i = 0; i < 10; i++) {
        jugada.push(Math.floor(Math.random() * 43) + 1);
    }
    return jugada;
}

// Simular diez jugadas
let jugadas = [];
for (let i = 0; i < 10; i++) {
    jugadas.push(simularJugada());
}

// Contar la frecuencia de cada número en las jugadas
let frecuencias = {};
for (let jugada of jugadas) {
    for (let numero of jugada) {
        if (frecuencias[numero]) {
            frecuencias[numero]++;
        } else {
            frecuencias[numero] = 1;
        }
    }
}

// Buscar números que se repiten exactamente cinco veces
let numerosRepetidos = [];
for (let numero in frecuencias) {
    if (frecuencias[numero] === 5) {
        numerosRepetidos.push(parseInt(numero));
    }
}

console.log("Jugadas:");
jugadas.forEach((jugada, index) => {
    console.log(`Jugada ${index + 1}: ${jugada.join(", ")}`);
});

console.log("\nNúmeros que se repiten exactamente cinco veces:", numerosRepetidos);

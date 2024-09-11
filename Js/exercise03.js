const digitize = n => [...`${Math.abs(n)}`].map (i=>parseInt(i)); /* =--${}--= int to String */
console.log(digitize(1230));

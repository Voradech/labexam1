const matches = (obj,source)=>Object.keys(source).every(keys=>obj.hasOwnProperty(keys)&&obj[keys]===source[keys]);

console.log(matches({hair: 'long',bread :true},{age:32, hair:'long', bread:true}));

console.log(matches({age:32, hair:'long', bread:true},{hair: 'long',bread :true}));

console.log(matches({salary:1200},{age:10,salary:1200}));
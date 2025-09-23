'use strict';
let a = [1,2,3];
let b = Buffer.from(a);
console.log(b);
let a2 = new Uint8Array([1,2,3]);
let b2 = Buffer.from(a2);
console.log(b2);
let b3 = Buffer.alloc(10);
console.log(b3);
let b4 = Buffer.allocUnsafe(10);
console.log(b4);

let buf = new Buffer('This is my pretty example');
console.log(buf.toString());
console.log(buf);
let json = JSON.stringify(buf);
let buf2 = new Buffer(JSON.parse(json).data);
console.log(buf2.toString());
var buf1 = new Buffer(4);
// Запись значений в буфер
buf1.writeUInt8(0x63,0);
buf1.writeUInt8(0x61,1);
buf1.writeUInt8(0x74,2);
buf1.writeUInt8(0x73,3);
// Вывод буфера в строковом ви
console.log(buf1.toString());
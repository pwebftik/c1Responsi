[html]
<canvas id=”kanvasku” width=”400? height=”300? style=”border: 1px solid #000000; background: #000;”>
</canvas>
[/html]

Mari kita lihat isi file skrip-ku.js

[js]
var mykontek;
var x = 1; step = 1;
var lebar = 400;
var tinggi = 300;

function init(){
mykontek = document.getElementById(“kanvasku”).getContext(‘2d’);
gerak()
}

function gerak(){
mykontek.beginPath();
mykontek.clearRect(0,0, lebar, tinggi); /* membersihkan area kanvas */
mykontek.arc(x, 100, 20, 0, Math.PI*2, false); /* membuat/ menggambar obyek lingkaran dg diameter 20 pixel */
mykontek.fillStyle = “#fff”; /* menentukan warna */
mykontek.fill(); /* mewarnai contect */

x = x + step; /* nilai x selalu bertambah sehingga posisi benda(x, 100) berubah */

if(x >= lebar || x <= 1) { /* jika x mencapai lebar kanvas, maka gerak benda berubah arah -step */
step = -step;
}

setTimeout(‘gerak()’, 5); /* setTimeout(‘namafungsi()’, interval);*/
[/js]
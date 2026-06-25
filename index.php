<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>For Kenshin</title>

<style>

body{
background:#0d1117;
color:white;
font-family:sans-serif;

display:flex;
justify-content:center;
align-items:center;

min-height:100vh;

margin:0;
}

.card{

width:700px;

padding:50px;

background:#1a2235;

border-radius:24px;

text-align:center;

}

input{

padding:16px;

width:280px;

border-radius:12px;

border:none;

margin-right:10px;

}

button{

padding:16px 24px;

border:none;

border-radius:12px;

cursor:pointer;

}

#error{
margin-top:18px;
color:#ff8f8f;
}

</style>
</head>

<body>

<div class="card">

<h1>中崎健心君へ</h1>

<p>
この動画を見て、<br>
少し立ち止まって自分自身を振り返ってみてください。
</p>

<br>

<input
id="pw"
type="password"
placeholder="Password">

<button onclick="login()">
OPEN
</button>

<div id="error"></div>

</div>

<script>

async function login(){

const pw=
document
.getElementById(
"pw"
)
.value;

const res=
await fetch(
"./check.php",
{
method:"POST",

headers:{
"Content-Type":
"application/json"
},

body:
JSON.stringify({
password:pw
})
}
);

const data=
await res.json();

if(data.ok){

location.href=
"./stream.php";

}else{

document
.getElementById(
"error"
)
.textContent=
"Password が違います";

}

}

document
.getElementById(
"pw"
)
.addEventListener(
"keydown",
e=>{

if(
e.key
==="Enter"
){

login();

}

}
);

</script>

</body>
</html>

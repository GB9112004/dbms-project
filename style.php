@import url(<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">);

:root{
  --green:#27ae60;
  --blacK:#192a56;
  --light-color:#666;
  --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
  font-family: 'roboto', sans-serif;
  margin:0;padding:0;
  box-sizing:border-box;
  text-decoration: none;
  outline:none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

html{
  font-size: 62.5%;
  overflow-x:hidden;
  scroll-padding-top: 5.5rem;
  scroll-behavior: smooth;
}

header{
  position: fixed;
  top:0; left: 0;right:0;
  background:#fff;
  padding:1rem 7%;
  display: flex;
  align-items:center;
  justify-content: space-between;
  z-index:1000;
  box-shadow:var(--box-shadow);
}

header .logo{
  color:var(--black);
  font-size:2.5rem;
  font-weight:bolder;
}

header .logo i{
  color:var(--green);
}

header .navbar a{
  font-size: 1.7rem;
  border-radius: .5rem;
  padding:.5rem 1.5rem;
  color:var(--black);
}
header .navbar a.active,
header .navbar a:hover{
  color:#fff;
  background: var(--green);
}

header .icons i,
header .icons a{
  cursor:pointer;
  margin-left: .5rem;
  height:4.5rem;
  line-height: 4.5rem;
  width:4.5rem;
  text-align:center;
  font-size:1.7rem;
  color:var(--black);
  border-radius: 50%;
  background: #eee;

}

header .icons i:hover,
header .icons a:hover{
  color:#fff;
  background: var(--green);
  transform: rotate(360deg);
}

header .icons #menu-bars{
  display: none;
}

@media(max-width:991px){
  html{
    font-size:55%;
  }

  header{
    padding:1rem 2rem;
  }

}

@media(max-width:768px){
  header .icons #menu-bars{
    display: inline-block;
  }

  header.navbar{
    position:absolute;
    top:100%;left:0;right:0;
    background:#fff;
    border-top: .1rem solid rgba(0,0,0,.2);
    border-bottom: .1rem solid rgba(0,0,0,.2); 
    padding: 1rem;
    clip-path:polygon(0 0, 100% 0, 100% 0, 0 0);
  }

  header .navbar.active{
    clip-path: polygon(0 0, 100% 0, 100% 100%,0% 100%);
  }

  header.navbar a{
    display: block;
    padding: 1.5rem;
    margin:1rem;
    font-size:2rem;
    background: #eee;
  }


}

@media (max-width:991px){
  html{
    font-size:55%;
  }
}

#search-form{
  position:fixed;
  top:0;left:0;
  height:100%;width:100%;
  z-index:1004;
  background:rgba(0,0,0,.8);
  display: flex;
  align-items:center;
  justify-content:center;
  padding:0 1rem;
}

.box-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.box {
  width: 100px;
  height: 100px;
  border: 1px solid black;
  margin: 10px;
  display: inline-block;
}

.box-image {
  width: 50px;
  height: 50px;
  margin: 25px;
  object-fit: cover;
}


{
  margin: 0;
  padding: 0;
  font-family:'Alfa Slab One',cursive;
}

body{
  display: flex;
  justify-content:center;
  background: #a8a8a8;

}

.container{

	position: relative;
	width:1100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	padding: 30px;
	margin-top: 8%;
}

.container .card{
	width:308px;
	position: relative;
	height: 400px;
	background: #f0f0f0;
	margin:30px 10px;
	padding: 20px 15px;
	display:flex;
	flex-direction: column;
	box-shadow: 0.5px 10px #e6e6e6;
	transition:0.3s ease-in-out;
	margin-top: 5%;
}
.container .card .imgBx{
	position: relative;
	width:260px;
	height: 260px;
	top: -60px;
	left:20px;
	box-shadow: 0 5px 20px rbga (0,0,0,1.2);

}

.container .card .imgBx img
{
	max-width: 100%;
	border-radius: 10px;
}

.imgBx:hover img{
	transform: scale(1.1);
}





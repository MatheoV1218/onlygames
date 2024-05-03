<!DOCTYPE html>
<html>
<head><title>OnlyGames</title></head>
<style>
body{
font-family: Arial, Helvetica, sans-serif;
background-color: rgb(157, 212, 224);
height: 2400px;
}
p{
color: white;
}
#navbar {
background-color: #115191;
padding: 10px 0;
text-align: center;
margin-left: 220px;
margin-right: 220px;
border: none;
border-radius: 10px;
min-width: 200px;
}
#navbar a {
color: #fff;
text-decoration: none;
margin: 0 10px;
}
#navbar a:hover {
text-decoration: underline;
}
#navbar a:active {
  opacity: 0.8;
}
.image {
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
height: 100%;
}
.container {
width: 1000px;
height: 300px;
overflow: hidden;
position: relative;
margin: 0 auto;
}
.recommended{
  text-align: center;
  font-family: Times new roman;
  color: black;
  font-size: 50px;
 font-weight: bold;
}
.trend{
  text-align: center;
  font-family: Times new roman;
  color: black;
  font-size: 50px;
  font-weight: bold;
}
.upcoming{
  text-align: center;
  font-family: Times new roman;
  color: black;
  font-size: 50px;
  font-weight: bold;
}
.New{
  text-align: center;
  font-family: Times new roman;
  color: black;
  font-size: 50px;
  font-weight: bold;
}
.game-title{
  font-family: Times New Roman;
  font-size: 25px;
  margin-top: 0;
  text-align: center;
  color: black;
  font-weight: 500;
}
.game-title:hover{
  text-decoration: underline;
  cursor: pointer;
}
.sidebar{
  position: fixed;
  left: 0;
  bottom: 0;
  top: 0;
  background-color: #115191;
  width: 72px;
  text-align: center;
  padding-top: 20px;
}
.body{
  padding-left: 80px;
}
.sidebar-words{
font-family: Times new roman;
font-size: 20px;
padding-top: 20px;
background-color: #115191;
}
.hover-words:hover{
  cursor: pointer;
  opacity: 0.8;
}
</style>

<body class="body" id="home">
<header>
  <div class="sidebar">
    <div class="sidebar-words">
      <a href="alltitles.php">
        <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px;">All titles</p>
      </a>
      <a href="Databases.php">
      <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px; font-size: 17px;">Databases</p>
      </a>
      <a href="developers.php">
        <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px; font-size: 16px;">Developers</p>
      </a>
      <a href="streamers.php">
      <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px; font-size: 18px;">Streamers</p>
      </a>
      <a href="esports.php">
      <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px;">E-Sport Teams</p>
      </a>
      <a href="platforms.php">
      <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px; font-size: 18px;">Platforms</p>
      </a>
      <a href="Friends.php">
        <p class="hover-words" style="margin-bottom: 70px; border-bottom-style: solid; border-bottom-width: 1px; font-size: 18px;">Friends</p>
      </a>
    </div>
  </div>
<div class = "container"> <img class = "image" src="https://ih1.redbubble.net/image.2158061334.7050/fposter,small,wall_texture,product,750x1000.jpg" alt=""
style="height: 200px;width: 680px; object-fit: none;"></div>
</header>
<div id = "navbar" style="grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;">
<a href="#recommend">Recommended</a>
<a href="#trending">Trending</a>
<a href="#upcoming">Upcoming</a>
<a href="#New">New</a>
</div>
<p class="recommended" id="recommend">
  RECOMMENDED
</p>
<div style="
    margin-top: 30px;
    margin-right: 10px;
    margin-left: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    column-gap: 20px;
    row-gap: 40px;">
    <div>
      <img src="Class project onlygames/elden ring.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#eldenring">
        <p class="game-title">Elden Ring</p>
      </a>
    </div>
    <div>
      <img src="Class project onlygames/GOW rag.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#gowr">
       <p class="game-title">God of War Ragnarok</p>
      </a>
    </div>
    <div>
      <img src="Class project onlygames/palworld.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#palworld">
       <p class="game-title">Palworld</p>
      </a>
    </div>
   
   
    </div>
    <p class="trend" id="trending">
  TRENDING
</p>
<div style="
    margin-top: 30px;
    margin-right: 10px;
    margin-left: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    column-gap: 20px;
    row-gap: 40px;">
         <div>
          <img src="Class project onlygames/fortnite.jpg" style="width: 350px; height: 300px;">
          <a href="alltitles.php#fortnite">
           <p class="game-title">Fortnite</p>
          </a>
        </div>
        <div>
          <img src="Class project onlygames/helldivers 2.jpg" style="width: 350px; height: 300px;">
          <a href="alltitles.php#helldivers">
            <p class="game-title">Helldivers 2</p>
          </a>
        </div>
        <div>
          <img src="Class project onlygames/sea of thieves.jpg" style="width: 350px; height: 300px;">\
          <a href="alltitles.php#sot">
           <p class="game-title">Sea of Thieves</p>
          </a>
        </div>
    </div>
<p class="upcoming" id="upcoming">
  UPCOMING
</p>
<div style="
    margin-top: 30px;
    margin-right: 10px;
    margin-left: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    column-gap: 20px;
    row-gap: 40px;">
    <div>
      <img src="Class project onlygames/elden ring shadow of eardtree.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#ersotet">
       <p class="game-title">Elden Ring: SOTET</p>
      </a>
    </div>
    <div>
      <img src="Class project onlygames/frostpunk 2.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#frostpunk">
        <p class="game-title">Frostpunk 2</p>
      </a>
    </div>
    <div>
      <img src="Class project onlygames/stellar blade.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#stellarblade">
        <p class="game-title">Stellar Blade</p>
      </a>
    </div>
    </div>
<p class="New" id="New">
  NEW
</p>
<div style="
    margin-top: 30px;
    margin-right: 10px;
    margin-left: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    column-gap: 20px;
    row-gap: 40px;">
    <div>
      <img src="Class project onlygames/dragons dogma 2.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#dragonsD">
       <p class="game-title">Dragon's Dogma 2</p>
      </a>
    </div>
    <div>
      <img src="Class project onlygames/outlast trials.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#outlast">
        <p class="game-title">The Outlast Trials</p>
      </a>
    </div>
    <div>
      <img src="Class project onlygames/outcast.jpg" style="width: 350px; height: 300px;">
      <a href="alltitles.php#outcast">
        <p class="game-title">Outcast - A New Beginning</p>
      </a>
    </div>
    </div>
</body>
</html>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Dosis&display=swap');

@keyframes intro {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes introName {
  from {transform: translate(-100%,0)}
  to {transform: translate(0,0);}
}

@keyframes introDescription {
  from {transform: translate(100%,0)}
  to {transform: translate(0,0)}
}

body {
  animation: intro 1s;
  animation-fill-mode: forwards;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: rgb(48,48,48);
  background: linear-gradient(90deg,
    rgba(48,48,48,1) 25%,
    rgba(32,32,32,1) 75%);
  background-size: cover;
  text-align: center;
  color: white;
  overflow-x: hidden;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: rgb(48,48,48);
}
 
::-webkit-scrollbar-thumb {
  background: #888;
  transition: background 500ms;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}

#wrapper {
  border-top: 3px solid whitesmoke;
  padding: 1%;
  padding-left: 5%;
  padding-right: 5%;
  margin: 1%;
  margin-left: 25%;
  margin-right: 25%;
}

#profile {
  width: 250px;
  height: 250px;
  background-color: grey;
  border-radius: 10px;
  transition: box-shadow 100ms, transform 100ms;
}

#profile:hover {
  box-shadow: 0 0 10px 3px black;
  transform: scale(1.1);
}

h1#name {
  animation: introName 1s;
  animation-fill-mode: forwards;
  font-family: Arvo, sans-serif;
  border-bottom: 5px double whitesmoke;
  padding-bottom: 3%;
  text-align: center;
  font-size: 300%;
  transition: font-size 500ms, margin-left 500ms, margin-right 500ms;
}

h1#name:hover {
  font-size: 350%;
  margin-left: -15%;
  margin-right: -15%;
}

#description {
  animation: introDescription 1s;
  text-align: justify;
  font-family: Dosis, sans-serif;
  font-weight: bolder;
  font-size: larger;
  transition: margin-left 1s, margin-right 1s;
}

#description:hover {
  margin-left: -35%;
  margin-right: -35%;
}
</style>
<div id="wrapper">
  <img src="https://picsum.photos/250" alt="My profile picture" id="profile">
  <h1 id="name">Lorem Ipsum</h1>
  <p id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, animi temporibus commodi, consequuntur blanditiis error mollitia, omnis corporis at voluptates ad similique exercitationem harum necessitatibus voluptatem facilis iste quasi magnam consequatur laudantium dolorum modi? Cum, ratione harum tempora, eum eos dicta voluptatem quia dolorem provident expedita reiciendis. Consectetur, labore ipsam.</p>
</div>
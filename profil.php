<style type="text/css">body{
 @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Roboto Mono", monospace;
}

body {
  background-color: #f9fafa;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.card {
  border: 2px solid #17a589;
  box-shadow: 5px 6px 0px #17a589;
  transition: 0.3s all;
  border-radius: 3px;
  background-color: #fff;
  padding: 21px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  width: 340px;
  max-width: 95%;

  .avatar {
    img {
      border-radius: 50%;
      border: 4px solid #17a589;
    }
  }

  .title {
    font-size: 26px;
    margin-top: 18px;
    color: #17a589;
  }

  .description {
    font-size: 17px;
    margin-top: 18px;
    color: #64707d;
  }

  .social {
    ul {
      margin-top: 22px;
      list-style-type: none;
      li {
        display: inline;
        font-size: 22px;
        cursor: pointer;
        color: #17a589;
      }
    }
  }
}


</style>
    <div class="card">
  <div class="avatar">
    <img src="https://randomuser.me/api/portraits/men/75.jpg">
  </div>
  <div class="title">
    <h2>John Doe</h2>
  </div>
  <div class="description">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi repellendus laudantium asperiores!
  </div>
  <div class="social">
    <ul>
      <li><i class="fab fa-facebook"></i></li>
      <li><i class="fab fa-twitter"></i></li>
      <li><i class="fab fa-github"></i></li>
      <li><i class="fab fa-dev"></i></li>
      <li><i class="fas fa-link"></i></li>
    </ul>
  </div>
</div>
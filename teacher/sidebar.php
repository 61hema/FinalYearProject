<style>
	.sidenav {
  height: 90%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top:10px;
  display:inline-block;
  margin-top: 4%;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}
@media screen and (max-width: 400px) {
  .sidenav a {
    text-align: center;
    float: none;
  }
}
</style>
<div class="sidenav">
			  <a href="information.php">Information</a>
			  <a href="notes.php">Notes</a>
			  <a href="query.php">Query</a>
			  <a href="onlinequs.php">Set Questions</a>
		</div>
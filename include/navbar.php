<!-- navbar -->
      <nav>
         <i class="bx bx-menu"></i>
		 <a href="#" class="nav-link"></a>
		 <form action="#">
            <!-- <div class="form-input">
				<input type="search" placeholder="Search...">
				<button type="submit" class="search-btn"><i class="bx bx-search"></i></button>
			</div> -->
			<p id="time"></p>
			<script>
			function updateTime() {
			var now = new Date();
			var time = now.toLocaleString();
			document.getElementById("time").innerHTML = time;
			}

			setInterval(updateTime, 1000); // Update the time every second
			</script>
			
		 </form>
		 <a href="#" class="notification">
			<i class="bx bxs-bell"></i>
			<span class="num">0</span>
		 </a>
		 <a class="profile" href="#">
			<img src="img/people.png" alt="">
		 </a>
	 </nav>
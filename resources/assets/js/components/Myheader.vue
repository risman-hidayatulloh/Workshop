<template>
	
	<nav class="navbar" role="navigation" aria-label="main navigation">
	  <div class="navbar-brand">
	    <a class="navbar-item" href="https://github.com/risman100/workshop">
	      <img src="https://cpb-ap-se2.wpmucdn.com/blogs.auckland.ac.nz/dist/1/33/files/2016/09/workshops-01-25otekj.jpg" alt="Workshop" width="112" height="28">
	    </a>

	    <div class="navbar-menu is-active">
		    <!-- <a class="navbar-item" href="">	Home </a>
		    <a class="navbar-item" href="">	About </a> -->

		    <router-link to="/home" class="navbar-item">Home</router-link>
    		<router-link to="/about" class="navbar-item">About</router-link>
	    	
	    </div>


	    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	    </a>
	  </div>
	</nav>

</template>
<form role="search" method="get" action="<?php echo home_url('/');?>">
           <div class="input-field col s12">
		          <input id="first_name" type="search" class="validate" value="<?php get_search_query(); ?>"  name ="s">
		          <label for="first_name">Busca</label>
          </div>
          </form>
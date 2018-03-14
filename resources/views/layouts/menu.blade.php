<ul class="sidebar-menu" data-widget="tree">
 
	<li class="treeview">
	      <a href="#"><i class="fa fa-tasks"></i> <span>Les Clients</span>
	        <span class="pull-right-container">
	          <i class="fa fa-angle-left pull-right"></i>
	        </span>
	    </a>
	    <ul class="treeview-menu">
	    <li class="{{ Request::is('clients*') ? 'active' : '' }}">
	        <a href="{!! route('clients.create') !!}"><i class="fa fa-plus"></i><span>Ajouter</span></a>
	    </li>

	    <li class="{{ Request::is('clients*') ? 'active' : '' }}">
	        <a href="{!! route('clients.index') !!}"><i class="fa fa-list"></i><span>Liste</span></a>
	    </li>
	    </ul>
	</li> 


	<li class="treeview">
	      <a href="#"><i class="fa fa-tasks"></i> <span>Les Articles</span>
	        <span class="pull-right-container">
	          <i class="fa fa-angle-left pull-right"></i>
	        </span>
	    </a>
	    <ul class="treeview-menu">
	    <li class="{{ Request::is('articles*') ? 'active' : '' }}">
	        <a href="{!! route('articles.create') !!}"><i class="fa fa-plus"></i><span>Ajouter</span></a>
	    </li>

	    <li class="{{ Request::is('articles*') ? 'active' : '' }}">
	        <a href="{!! route('articles.index') !!}"><i class="fa fa-list"></i><span>Liste</span></a>
	    </li>
	    </ul>
	</li>

	<li class="treeview">
	      <a href="#"><i class="fa fa-tasks"></i> <span>Les Fournisseurs</span>
	        <span class="pull-right-container">
	          <i class="fa fa-angle-left pull-right"></i>
	        </span>
	    </a>
	    <ul class="treeview-menu">
	    <li class="{{ Request::is('fournisseurs*') ? 'active' : '' }}">
	        <a href="{!! route('fournisseurs.create') !!}"><i class="fa fa-plus"></i><span>Ajouter</span></a>
	    </li>

	    <li class="{{ Request::is('fournisseurs*') ? 'active' : '' }}">
	        <a href="{!! route('fournisseurs.index') !!}"><i class="fa fa-list"></i><span>Liste</span></a>
	    </li>
	    </ul>
	</li>


    <hr>

	<li class="{{ Request::is('commandeClients*') ? 'active' : '' }}">
	    <a href="{!! route('commandeClients.index') !!}"><i class="fa fa-shopping-basket"></i><span>Commande clients</span></a>
	</li>

	<li class="{{ Request::is('commandeFournisseurs*') ? 'active' : '' }}">
	    <a href="{!! route('commandeFournisseurs.index') !!}"><i class="fa fa-shopping-basket"></i><span>Commande fournisseurs</span></a>
	</li>

</ul>
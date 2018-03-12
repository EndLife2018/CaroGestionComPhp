<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{!! route('articles.index') !!}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>

<li class="{{ Request::is('commandeClients*') ? 'active' : '' }}">
    <a href="{!! route('commandeClients.index') !!}"><i class="fa fa-edit"></i><span>Commande Clients</span></a>
</li>

<li class="{{ Request::is('commandeFournisseurs*') ? 'active' : '' }}">
    <a href="{!! route('commandeFournisseurs.index') !!}"><i class="fa fa-edit"></i><span>Commande Fournisseurs</span></a>
</li>


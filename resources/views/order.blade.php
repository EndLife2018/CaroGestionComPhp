<link href="{{asset('css/app.css')}}" rel="stylesheet">
    	<div style="text-align: left; float: left;">
    		<h2>Societé ENDLIFE</h2>
    		5 rue des Emeraudes<br>
    		74000 PARIS<br>
    		Tel : 04 75 56 78 09 / Fax : 04 75 56 90 09<br>
    		Mail : contact@endlife.fr<br>
    	</div>
        <div  style="text-align: right">
            <img src="{{URL::asset('LogoEndLife.png')}}" style="width: 20%">
        </div>
<br>
<br>
    	<div style="text-align: left;float: left;">
            N° Client : 00000{{$client->id}}<br>
            N° SIRET : {{$client->num_siret}}<br>
    	</div>
        <div style="text-align: right">
            <p style="font-weight: bold">{{$client->raison_social}}</p>
            {{$client->adresse1}}<br>
            {{$client->cp}} {{$client->ville}}<br>
        </div>

    <div>
         <h2>Commande - N° 00000{{$order->id}}</h2><br>
        <br>
    </div>

<?php if(!$order->art1 == null || !$order->art2 == null || !$order->art3 == null || !$order->art4 == null || !$order->art5 == null || !$order->art6 == null || !$order->art7 == null || !$order->art8 == null || !$order->art9 == null ||!$order->art10 == null || !$order->art11 == null || !$order->art12 == null) 
   { 
   	$totTTC = 0;
   	$totHT = 0;
   	$nbArticle = 0;
   //dd($nbArticle);
   	?>

<table class="table table-responsive" style="width:100%;border-collapse:collapse">
    <tr>
        <th style="text-align: center; border-width:1px;border-style:solid; border-color:black;background:#cfe4f9;"> Article </th>
        <th style="text-align: center; border-width:1px;border-style:solid; border-color:black;background:#cfe4f9;"> Quantité </th>
        <th style="text-align: center; border-width:1px;border-style:solid; border-color:black;background:#cfe4f9;"> Prix HT </th>
        <th style="text-align: center; border-width:1px;border-style:solid; border-color:black;background:#cfe4f9;"> Prix TTC</th>
    </tr>
<?php }
 if(!$order->art1 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art1)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte1 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art1)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art1)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art1)->prix_vente_ttc;
		$totHT += App\Models\Article::findOrFail($order->art1)->prix_vente_ht;
		$nbArticle += $order->qte1;
	} 
if(!$order->art2 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art2)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte2 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art2)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art2)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art2)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art2)->prix_vente_ht;
		$nbArticle += $order->qte2;
	}  
if(!$order->art3 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art3)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte3 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art3)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art3)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art3)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art3)->prix_vente_ht;
		$nbArticle += $order->qte3;

	}  
if(!$order->art4 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art4)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte4 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art4)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art4)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art4)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art4)->prix_vente_ht;
		$nbArticle += $order->qte4;
	} 
if(!$order->art5 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art5)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte5 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art5)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art5)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art5)->prix_vente_ttc;	
		$totHT+= App\Models\Article::findOrFail($order->art5)->prix_vente_ht;
		$nbArticle += $order->qte5;
	}  
if(!$order->art6 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art6)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte6 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art6)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art6)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art6)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art6)->prix_vente_ht;
		$nbArticle += $order->qte6;
	}  ?>

    <?php if(!$order->art7 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art7)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte7 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art7)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art7)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art7)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art7)->prix_vente_ht;
		$nbArticle += $order->qte7;
	} 
if(!$order->art8 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art8)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte8 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art8)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art8)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art8)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art8)->prix_vente_ht;
		$nbArticle += $order->qte8;
	}  
if(!$order->art9 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art9)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte9 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art9)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art9)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art9)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art9)->prix_vente_ht;
		$nbArticle += $order->qte9;
	}  
if(!$order->art10 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art10)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte10 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art10)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art10)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art10)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art10)->prix_vente_ht;
		$nbArticle += $order->qte10;
	} 
if(!$order->art11 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art11)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte11 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art11)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art11)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art11)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art11)->prix_vente_ht;
		$nbArticle += $order->qte11;
	}  
if(!$order->art12 == null) 
   { ?>
    <tr>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! App\Models\Article::findOrFail($order->art12)->ref_interne !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;"> 
        	{!! $order->qte12 !!}
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art12)->prix_vente_ht !!} €
        </td>
        <td style="text-align: center; border-width:1px;border-style:solid; border-color:black;">
        	{!! App\Models\Article::findOrFail($order->art12)->prix_vente_ttc !!} €
        </td>
    </tr>
<?php 
		$totTTC += App\Models\Article::findOrFail($order->art12)->prix_vente_ttc;
		$totHT+= App\Models\Article::findOrFail($order->art12)->prix_vente_ht;
		$nbArticle += $order->qte12;
	}  

if(!$order->art1 == null || !$order->art2 == null || !$order->art3 == null || !$order->art4 == null || !$order->art5 == null || !$order->art6 == null || !$order->art7 == null || !$order->art8 == null || !$order->art9 == null ||!$order->art10 == null || !$order->art11 == null || !$order->art12 == null) 
   { ?>

   	<tr>
   		<td style="text-align: center; border-width:1px;border-style:solid; border-color:black;font-weight: bolder;">TOTAL</td>
   		<td style="text-align: center; border-width:1px;border-style:solid; border-color:black;font-weight: bold;">{!! $nbArticle!!}</td>
   		<td style="text-align: center; border-width:1px;border-style:solid; border-color:black;font-weight: bold;">{!! $totHT!!} €</td>
   		<td style="text-align: center; border-width:1px;border-style:solid; border-color:black;font-weight: bold;">{!! $totTTC!!} €</td>
   	</tr>
    </table>
<?php } ?>

	</div>

<!-- Contact : {{$client->tel}}<br>
		{{$client->port}}<br>
		{{$client->mail}}<br>
 --></div>

<!-- POUR SAUTER UNE PAGE
<div class="page-break"></div>
 -->

{*
 * WiND - Wireless Nodes Database
 * Basic HTML Template
 *
 * Copyright (C) 2005 Konstantinos Papadimitriou <vinilios@cube.gr>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 dated June, 1991.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *}
<!-- start node_info_tpl -->
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="table-node">
<tr>
<td class="table-node-key"> {$lang.db.nodes__id}</td>
<td class="table-node-value">{$node.id}</td>
</tr>
<tr>
<td class="table-node-key"> {$lang.db.nodes__name}</td>
<td class="table-node-value">{$node.name|escape}</td>
</tr>
<tr>
<td class="table-node-key"> {$lang.db.areas__name}</td>
<td class="table-node-value">{$node.area_name|escape}</td>
</tr>
<tr>
<td class="table-node-key"> {$lang.db.regions__name}</td>
<td class="table-node-value">{$node.region_name|escape}</td>
</tr>
<tr>
<td class="table-node-key"> {$lang.community}</td>
<td class="table-node-value">
<a style="border-bottom: 1px dotted rgb(51, 102, 187); text-decoration: none; cursor: help;" title="Πατήστε εδώ για να μάθετε περισσότερα για την κοινότητα αυτή " href="../wiki/{$node.community_name|escape}">{$node.community_name|escape}</a></td>
</tr>

{if $node.community_name!='WNA'} 
<td class="table-node-key"> Local Community node page</td>
<td class="table-node-value">
<a style="border-bottom: 1px dotted rgb(51, 102, 187); text-decoration: none; cursor: help;" title="Πατήστε εδώ για να μεταβείτε στην σελίδα του κόμβου αυτού στην τοπική κοινότητα " target="_new" href="{$node.community_windURL}/?page=nodes&node={$node.com_wind_id}">{$node.com_wind_id}</a></td>
</tr>
{/if} 

<!--<td class="table-node-value">{$node.com_wind_id|escape}</td>
<td class="table-node-value">{$node.TOS|escape}</td>-->

<tr>
<td class="table-node-key"> {$lang.db.nodes__date_in}</td>
<td class="table-node-value">{$node.date_in|date_format:"%x"}</td>
</tr>
<tr>-</tr>
<tr>
{if $is_admin} 
<td class="table-node-key"> Παροχή Internet{$lang.db.nodes__internetaccess}</td>
<td class="table-node-value">{$node.internetaccess|escape}</td>
</tr>
<tr>
<td class="table-node-key"> Πάροχος Internet {$lang.db.nodes__internetprovider}</td>
<td class="table-node-value">{$node.internetprovider|escape}</td>
</tr>
{/if}

<tr>
<td class="table-node-key">{$lang.db.user_id_owner}</td>
<td class="table-node-value"><a href="/forum/userinfo.php?username={$node.owner_username}">{$node.owner_username|escape} (contact)</a> 
 | <a href="/forum/searchnodes.php?username={$node.owner_username}">Other nodes</a>
<!--  {include file="generic/link.tpl" onclick="javascript: t = window.open('$link_contact', 'contact', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;" content=$lang.contact}--></td>
</tr>
</table>

<!-- end node_info_tpl -->
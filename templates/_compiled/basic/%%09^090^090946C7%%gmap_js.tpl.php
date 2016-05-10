<?php /* Smarty version 2.6.19, created on 2012-02-09 22:52:53
         compiled from includes/pages/gmap/gmap_js.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'includes/pages/gmap/gmap_js.tpl', 91, false),array('modifier', 'default', 'includes/pages/gmap/gmap_js.tpl', 108, false),)), $this); ?>
<?php echo '
var map;
var selected = Array();
var p2p_ap = Array();
var p2p = Array();
var aps = Array();
var clients = Array();
var unlinked = Array();
var links_p2p = Array();
var links_client = Array();
var markers = Array();
var polylines = Array();
var ch_p2p;
var ch_aps;
var ch_clients;
var ch_unlinked;

'; ?>


var sz_icon =    [ new GSize(13,17),  new GSize(32,37) ],
    sz_shadow =  [ new GSize(23,17),  new GSize(51,37) ],
    pt_anchor =  [ new GPoint(6,17), new GPoint(16,37) ],
    pt_window =  [ new GPoint(6,8), new GPoint(16,17) ],
    img_shadow = [ '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/shadow.png', '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/shadow.png' ],
    img_icons =  [
        [ '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/ap_min.png', '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/ap.png' ],
        [ '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/backbone_min.png', '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/backbone.png' ],
        [ '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/user_min.png', '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/user.png' ],
        [ '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/disconnected_min.png', '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/disconnected.png' ],
        [ '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/home_min.png', '<?php echo $this->_tpl_vars['img_dir']; ?>
gmap/modern/nodes/home.png' ]
    ];

<?php echo '

var iconStack=[];
for (var c=0; c<5; c++) {
    iconStack[c] = [ new GIcon(), new GIcon() ];
    for (var j=0; j<2; j++) {
        iconStack[c][j].image=img_icons[c][j];
        iconStack[c][j].shadow=img_shadow[j];
        iconStack[c][j].iconSize=sz_icon[j];
        iconStack[c][j].shadowSize=sz_shadow[j];
        iconStack[c][j].iconAnchor=pt_anchor[j];
        iconStack[c][j].infoWindowAnchor=pt_window[j];
    }
}

var icon_green = iconStack[0],
    icon_orange = iconStack[1],
    icon_blue = iconStack[2],
    icon_red = iconStack[3],
    icon_grey = iconStack[4];

function gmap_onload() {
	ch_p2p = document.getElementsByName("p2p")[0];
	ch_aps = document.getElementsByName("aps")[0];
	ch_clients = document.getElementsByName("clients")[0];
	ch_unlinked = document.getElementsByName("unlinked")[0];
	if (GBrowserIsCompatible()) {
		'; ?>

		<?php $_from = $this->_tpl_vars['maps_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['map_name'] => $this->_tpl_vars['map_enabled']):
?>
		        <?php if ($this->_tpl_vars['map_enabled'] === true): ?>
		                <?php if ($this->_tpl_vars['map_types'] != null): ?>
		                        <?php $this->assign('map_types', ($this->_tpl_vars['map_types']).","); ?>
		                <?php endif; ?>
		                <?php $this->assign('map_types', ($this->_tpl_vars['map_types'])." G_".($this->_tpl_vars['map_name'])."_MAP"); ?>
		        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php echo '
		var map_types = ['; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['map_types'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php echo '];
		map = new GMap2(document.getElementById("map"));
		map.enableScrollWheelZoom();

		'; ?>
<?php if ($this->_tpl_vars['logged'] == TRUE): ?>
		if(map_types.length > 1)
	                        map.addControl(new GMapTypeControl());
		<?php endif; ?><?php echo '
		
		
		map.removeMapType(G_HYBRID_MAP);
		
		
		map.addControl(new GLargeMapControl());
		//map.addControl(new GOverviewMapControl());
		var center = new GLatLng('; ?>
<?php echo $this->_tpl_vars['center_latitude']; ?>
<?php echo ','; ?>
<?php echo $this->_tpl_vars['center_longitude']; ?>
<?php echo ');
		if (\''; ?>
<?php echo $this->_tpl_vars['zoom']; ?>
<?php echo '\' != \'\') {
                        zoom = '; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['zoom'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
<?php echo ';
                } else {
			var bound_sw = new GLatLng('; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['min_latitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_latitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_latitude'])); ?>
<?php echo ','; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['min_longitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_longitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_longitude'])); ?>
<?php echo ');
			var bound_ne = new GLatLng('; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['max_latitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_latitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_latitude'])); ?>
<?php echo ','; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['max_longitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_longitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_longitude'])); ?>
<?php echo ');
			var bounds = new GLatLngBounds(bound_sw, bound_ne);
			var zoom = map.getBoundsZoomLevel(bounds);
		}
		map.setCenter(center, zoom, G_'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['maps_available']['default'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php echo '_MAP);
		GEvent.addListener(map, "moveend", gmap_reload);
		GEvent.addListener(map, "zoomend", function (oldLevel, newLevel) {
                                        if ((oldLevel <= 17-4 && newLevel > 17-4) ||
                                                (oldLevel > 17-4 && newLevel <= 17-4)) {
                                                        map.clearOverlays();
                                                        markers = Array();
                                                        polylines = Array();
						}
                                                        gmap_reload();
					});
		gmap_refresh();
	}
}

function gmap_reload() {
reset_markers();
if (ch_aps.checked == true && ch_clients.checked == true) makePolylines(links_client, "#00ffff", "#ff0000", 2);
if (ch_p2p.checked == true) makePolylines(links_p2p, "#00ff00", "#ff0000", 3);
if (ch_unlinked.checked == true) makeMarkers(unlinked, icon_red, 100);
if (ch_clients.checked == true) makeMarkers(clients, icon_blue, 100);
if (ch_aps.checked == true) makeMarkers(aps, icon_green, 10);
if (ch_p2p.checked == true) makeMarkers(p2p, icon_orange, 10);
if (ch_p2p.checked == true || ch_aps.checked == true) makeMarkers(p2p_ap, icon_green, 10);
makeMarkers(selected, icon_grey, 10);

}

function gmap_refresh() {
	reset_markers();
	var ch_p2p = document.getElementsByName("p2p")[0];
	var ch_aps = document.getElementsByName("aps")[0];
	var ch_clients = document.getElementsByName("clients")[0];
	var ch_unlinked = document.getElementsByName("unlinked")[0];
	if (((ch_p2p.checked == true && p2p.length > 0) || ch_p2p.checked == false) &&
		((ch_aps.checked == true && aps.length > 0) || ch_aps.checked == false) &&
		((ch_clients.checked == true && clients.length > 0) || ch_clients.checked == false) &&
		((ch_unlinked.checked == true && unlinked.length > 0) || ch_unlinked.checked == false)) {
			map.clearOverlays();
			markers = Array();
			polylines = Array();
			gmap_reload();
			return;
	}
	var request = GXmlHttp.create();
	var xml_url = "'; ?>
<?php echo $this->_tpl_vars['link_xml_page']; ?>
<?php echo '" +
		(ch_p2p.checked == true && p2p.length == 0?"&show_p2p=1":"") +
		(ch_aps.checked == true && aps.length == 0?"&show_aps=1":"") +
		(ch_clients.checked == true && clients.length == 0?"&show_clients=1":"") +
		(ch_unlinked.checked == true && unlinked.length == 0?"&show_unlinked=1":"") +
		(ch_p2p.checked == true && links_p2p.length == 0?"&show_links_p2p=1":"") +
		(ch_aps.checked == true && ch_clients.checked == true && links_client.length == 0?"&show_links_client=1":"");
	request.open("GET", xml_url, true);
	request.onreadystatechange =
                        function() {
                                if (request.readyState == 4) {
                                        var xmlDoc = request.responseXML;
                                        selected = xmlDoc.documentElement.getElementsByTagName("selected");
                                        if ((ch_p2p.checked == true || ch_aps.checked == true) && p2p_ap.length == 0) p2p_ap = xmlDoc.documentElement.getElementsByTagName("p2p-ap");
                                        if (ch_aps.checked == true && aps.length == 0) aps = xmlDoc.documentElement.getElementsByTagName("ap");
                                        if (ch_p2p.checked == true && p2p.length == 0) p2p = xmlDoc.documentElement.getElementsByTagName("p2p");
                                        if (ch_clients.checked == true && clients.length == 0) clients = xmlDoc.documentElement.getElementsByTagName("client");
                                        if (ch_unlinked.checked == true && unlinked.length == 0) unlinked = xmlDoc.documentElement.getElementsByTagName("unlinked");
                                        if (ch_p2p.checked == true && links_p2p.length == 0) links_p2p = xmlDoc.documentElement.getElementsByTagName("link_p2p");
                                        if (ch_aps.checked == true && ch_clients.checked == true && links_client.length == 0) links_client = xmlDoc.documentElement.getElementsByTagName("link_client");
                                        map.clearOverlays();
                                        markers = Array();
                                        polylines = Array();
                                        gmap_reload();
                                }
                       	}
        request.send(null);

}

function makePolylines(links, color_active, color_inactive, size) {
        var polylines_t = Array();
        var bounds = map.getBounds();
        for (var i = 0; i < links.length; i++) {
                var link_id = links[i].getAttribute("id");
                if (polylines[link_id] != undefined) continue;
                var link_lat1 = parseFloat(links[i].getAttribute("lat1"));
                var link_lon1 = parseFloat(links[i].getAttribute("lon1"));
                var link_lat2 = parseFloat(links[i].getAttribute("lat2"));
                var link_lon2 = parseFloat(links[i].getAttribute("lon2"));
                var l_inbound_1 = bounds.contains(new GLatLng(link_lat1,link_lon1));
		var l_inbound_2 = bounds.contains(new GLatLng(link_lat2,link_lon2));

                if (l_inbound_1 || l_inbound_2) {
                        if (links[i].getAttribute("status") == \'active\') {
                                var color = color_active;
                        } else {
                                var color = color_inactive;
                        }
                        var point1 = new GLatLng(link_lat1,link_lon1);
                        var point2 = new GLatLng(link_lat2,link_lon2);
                        var polyline = new GPolyline([point1, point2], color, size);
                        polylines_t.push(polyline);
                        polylines[link_id] = true;
    			map.addOverlay(polyline);
                }
    }
}

function createMarker(point, html, icon) {
        var marker = new GMarker(point, icon);
        GEvent.addListener(marker, "click",
                function() {
                        if (marker_active!=null) markers_t.push(marker_active);
                        marker_active=this;
                        marker.openInfoWindowHtml(html);
                });

        return marker;
}

//// MARKER STACKING CODE

var marker_grid={},
	marker_grid_size=32,
	markers_max_stackable=300,
	markers_max_display=15,
	marker_active=null,
	markers_t=[];
	
function reset_markers() {
	for (var i=0; i<markers_t.length; i++) {
        if (markers_t[i]!=marker_active) map.removeOverlay(markers_t[i]);
	}
	markers_t=[];
	markers={};
	marker_grid={};
}

function getNumberedIconURL(number) {
    var num=number;
    if (num>300) num="more";
    return "'; ?>
<?php echo $this->_tpl_vars['img_dir']; ?>
<?php echo 'gmap/modern/numbers/number_"+num+".png";
}

function getNumberedIcon(number) {
    var icon=new GIcon();
    icon.image = getNumberedIconURL(number);
    icon.shadow = "'; ?>
<?php echo $this->_tpl_vars['img_dir']; ?>
<?php echo 'gmap/modern/shadow.png";
    icon.iconSize = new GSize(32, 37);
    icon.shadowSize = new GSize(51, 37);
    icon.iconAnchor = new GPoint(16, 37);
    icon.infoWindowAnchor = new GPoint(16, 17);
    return icon; 
}

//// END OF MARKER STACKING CODE

function makeMarkers(nodes, icon_image, icon_zoom) {
        var bounds = map.getBounds();
		var projector = new GMercatorProjection(map.getZoom());
        for (var i = 0; i < nodes.length; i++) {
                var node_name = nodes[i].getAttribute("name");
	       	    var node_community= nodes[i].getAttribute("community") || "Not set";
                var node_id = nodes[i].getAttribute("id");
                var node_lat = nodes[i].getAttribute("lat");
                var node_lon = nodes[i].getAttribute("lon");
                var node_url = nodes[i].getAttribute("url");

                if (markers[node_id] != undefined) continue;

                //// MARKER STACKING CODE
                
				var point = new GLatLng(node_lat,node_lon)
                var inbounds = bounds.contains(point);
				var xypos = projector.fromLatLngToPixel(point,map.getZoom());
				
				// Put marker on grid  ///{$img_dir}gmap/numbers/number_ 
				if (node_lat) {
					var grid_x = Math.floor(xypos.x / marker_grid_size ),
						grid_y = Math.floor(xypos.y / marker_grid_size);
					if (marker_grid[grid_x+\',\'+grid_y]!=undefined) {
						inbounds=false;
						if (marker_grid[grid_x+\',\'+grid_y]!=1) {
						    var marker = marker_grid[grid_x+\',\'+grid_y];

						    if (!marker.isStacked) { // Convert to stacked marker if it\'s a classic GMArker
    						        var mHTML = marker.markerHTML;
						        map.removeOverlay(marker);
                                marker = new GMarker(point, getNumberedIcon(1));
                                marker.markerHTML=mHTML;
                                GEvent.addListener(marker, "click",
                                        function() {
                                                if (marker_active!=null) markers_t.push(marker_active);
                                                marker_active=this;
                                                this.openInfoWindowHtml(
            						                    \'<div style="text-align:left"><ol>\'+this.markerHTML+\'</ol></div>\'
                                                );
                                        });
						        marker.multiples=1;
						        marker.isStacked=true; 
						        map.addOverlay(marker);
						        markers_t.push(marker);
						        marker_grid[grid_x+\',\'+grid_y]=marker;
						    }

						    // The marker will now be replaced
							if (marker.multiples < markers_max_display) {
        							marker.markerHTML+="<li><a href=\\"" + node_url + "\\">"+node_name+"</a> ["+node_community+"]</li>";
    							}
    							if (marker.multiples == markers_max_display) {
        							marker.markerHTML+="<li>...</li>";
							}
							
							marker.multiples++;
							marker.setImage(getNumberedIconURL(marker.multiples));

						}
					} else {
						marker_grid[grid_x+\',\'+grid_y]=1; // This will be later replaced by the marker reference
					}
				}
				
                //// END OF MARKER STACKING CODE

                if (inbounds) {
			   var node_area = nodes[i].getAttribute("area");
			   var node_freeifs = nodes[i].getAttribute("freeifs");
			   var node_adminowner= nodes[i].getAttribute("adminowner");
                        var node_p2p = nodes[i].getAttribute("p2p") * 1;
                        var node_aps = nodes[i].getAttribute("aps") * 1;
                        var node_client_on_ap = nodes[i].getAttribute("client_on_ap") * 1;
                        var node_clients = nodes[i].getAttribute("clients") * 1;

                        var icon; var icon_s;
                        if (map.getZoom() > icon_zoom) {
                                var icon_scale = 1;
                    	} else {
                                var icon_scale = 0;
               		}
                        icon = icon_image[icon_scale];
                        icon_s = icon_image[0];
                        var html = "<div style=\\"padding-right: 15px; white-space: nowrap; text-align:left; font-size:12px;font-weight:bold;\\"><img src=\\"" + icon_s.image + "\\" alt=\\"\\" />" + node_name +  " (#" + node_id + ") <br />[" + node_community + "]</div><br />" +
				"<div style=\\"padding-right: 15px; white-space: nowrap; text-align:left; font-size:10px;\\">'; ?>
<?php echo $this->_tpl_vars['lang']['adminowner']; ?>
<?php echo ': " + node_adminowner + "<br />" + 
				node_area + "<br />" +
                                "'; ?>
<?php echo $this->_tpl_vars['lang']['links']; ?>
<?php echo ': " + (parseInt(node_p2p) + parseInt(node_client_on_ap)) + " (+" + node_aps + " '; ?>
<?php echo $this->_tpl_vars['lang']['aps']; ?>
<?php echo ')" + "<br />" +
				"'; ?>
<?php echo $this->_tpl_vars['lang']['clients']; ?>
<?php echo ': " + node_clients +  "<br />" + "'; ?>
<?php echo $this->_tpl_vars['lang']['nodes__freeifs']; ?>
<?php echo ': " + node_freeifs + "<br /><br />" + "<a href=\\"" + node_url + "\\">'; ?>
<?php echo $this->_tpl_vars['lang']['node_page']; ?>
<?php echo '</a>";
			if(selected[0]) {
			var this_node = selected[0].getAttribute("id");
				if(this_node != node_id) {
					html = html + "<br /><a href=\\"\\" onclick=\\"javascript: t = window.open(\'?page=nodes&subpage=plot_link&a_node="+ selected[0].getAttribute("id") +"&b_node="+ node_id +"\', \'popup_plot_link\', \'width=600,height=450,toolbar=0,resizable=1,scrollbars=1\'); t.focus(); return false;\\">'; ?>
<?php echo $this->_tpl_vars['lang']['plot']; ?>
<?php echo '</a></div>";
				}
			} else {
				html = html + "</div>";
			}
                        var marker = createMarker(point, html, icon);
						
                        //// MARKER STACKING CODE
						marker.multiples=1; // Define extra parameter on instance
						marker.markerHTML="<li><a href=\\"" + node_url + "\\">"+node_name+"</a> ["+node_community+"]</li>";
						marker_grid[grid_x+\',\'+grid_y]=marker;
                        //// END OF MARKER STACKING CODE
						
                        markers_t.push(marker);
                        markers[node_id] = true;
        		map.addOverlay(marker);
                }
        }
}

'; ?>



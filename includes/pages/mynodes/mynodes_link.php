<?php
/*
 * WiND - Wireless Nodes Database
 *
 * Copyright (C) 2005 Nikolaos Nikalexis <winner@cube.gr>
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
 */

class mynodes_link {

	var $tpl;
	
	function mynodes_link() {
		
	}
	
	function form_link() {
		global $db, $vars;
		$form_link = new form(array('FORM_NAME' => 'form_link'));
		$form_link->db_data('links.type, links.peer_node_id, links.peer_ap_id, links.protocol, links.ssid, links.channel,  links.status, links.equipment, links.info, links.security, links.ip, links.hs_logged_in_msg');#@#
		$form_link->db_data_values("links", "id", get('link'));
		#if (get('link') != 'add') {
		$form_link->data[10]['value'] = long2ip($form_link->data[10]['value']);
		#}
		$form_link->db_data_pickup('links.peer_node_id', "nodes", $db->get("links.peer_node_id AS value, CONCAT(nodes.name, ' (#', nodes.id, ')') AS output", "links, nodes", "links.peer_node_id = nodes.id AND links.id = '".get("link")."'"));
		$form_link->db_data_pickup('links.peer_ap_id', "links_ap", $db->get("l1.peer_ap_id AS value, l2.ssid AS output", "links AS l1, links AS l2", "l1.peer_ap_id = l2.id AND l1.id = '".get("link")."'"));
		$form_link->data[1]['Null'] = '';
		$form_link->data[2]['Null'] = '';
		return $form_link;
	}
	
	function output() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && method_exists($this, 'output_onpost_'.$_POST['form_name'])) return call_user_func(array($this, 'output_onpost_'.$_POST['form_name']));
		global $construct;
		$this->tpl['link_method'] = (get('link') == 'add' ? 'add' : 'edit' );
		$this->tpl['form_link'] = $construct->form($this->form_link(), __FILE__);
		return template($this->tpl, __FILE__);
	}

	function output_onpost_form_link() {
		global $main, $db;
		$form_link = $this->form_link();
		$link = get('link');
		$ret = TRUE;
		$f = array("node_id" => intval(get('node')));
		switch ($_POST['links__type']) {
			case 'hs':
				$_POST['links__ip'] = ip2long($_POST['links__ip']);
				break; //#@# stargazer
			case 'ap':
				$_POST['links__ip'] = ip2long($_POST['links__ip']);
				break;//#@# stargazer
			case 'p2p':
				if ($_POST['links__peer_node_id'] == '') {
					$db->output_error_fields_required(array('links__peer_node_id'));
					return;
				}
				#@#
				$_POST['links__ip'] = ip2long($_POST['links__ip']);
				#@#
				$f['peer_ap_id'] = '';
				$f['peer_node_id'] = $_POST['links__peer_node_id'];
				break;
			case 'client':
				#@#
				$_POST['links__ip'] = ip2long($_POST['links__ip']);
				#@#

				if ($_POST['links__peer_ap_id'] == '') {
					$db->output_error_fields_required(array('links__peer_ap_id'));
					return;
				}
				$f['peer_ap_id'] = $_POST['links__peer_ap_id'];
				$f['peer_node_id'] = '';
				break;
		}
		$ret = $form_link->db_set($f,
								"links", "id", $link);
		
		if ($ret) {
			$main->message->set_fromlang('info', 'insert_success', makelink(array("page" => "mynodes", "node" => get('node'))));
		} else {
			$main->message->set_fromlang('error', 'generic');		
		}
	}

}

?>
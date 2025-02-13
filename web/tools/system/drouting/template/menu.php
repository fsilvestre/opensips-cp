<?php
/*
 * Copyright (C) 2011 OpenSIPS Project
 *
 * This file is part of opensips-cp, a free Web Control Panel Application for 
 * OpenSIPS SIP server.
 *
 * opensips-cp is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * opensips-cp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td class="breadcrumb">
        <?php print "System / Dynamic Routing / ".$_SESSION['permission'];
        if (file_exists(__DIR__."/../../../../../config/tools/system_config/settings.inc.php") && $_SESSION['permission'] == 'Admin') {
          ?> 
          <a  onclick="top.frames['main_body'].location.href='../../admin/tools_config/tools_config.php?tool=user_management&action=edit_tools';" href="#"   id="config_admin"></a> 
        <?php 
              }
              ?>   
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">
      <div class="menuItems">
        <?php
         $first_item = true;
         $params = get_params();
         foreach (explode(",",get_value("tabs")) as $tab) {
          $tabName = array_search($tab, $params['tabs']['options']);
          if (!(($tab=="groups.php") && !($config->table_groups))) {
            if (!$first_item) echo('&nbsp;&nbsp;|&nbsp;&nbsp;');
            if ($page_name!=$tab) echo('<a href="'.$tab.'" class="menuItem">'.$tabName.'</a>');
            else echo('<a href="'.$tab.'" class="menuItemSelect">'.$tabName.'</a>');
            $first_item = false;
          }
         }
        ?>
      </div>
    </td> 
  </tr>
</table>

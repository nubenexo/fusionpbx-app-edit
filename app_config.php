<?php
	//application details
		$apps[$x]['name'] = "Edit";
		$apps[$x]['uuid'] = '17e628ee-ccfa-49c0-29ca-9894a0384b9b';
		$apps[$x]['category'] = 'Switch';;
		$apps[$x]['subcategory'] = '';
		$apps[$x]['version'] = '';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = 'Script Editor can be used to edit lua, javascript or other scripts.';
		$apps[$x]['description']['es-mx'] = '';
		$apps[$x]['description']['de-de'] = '';
		$apps[$x]['description']['de-ch'] = '';
		$apps[$x]['description']['de-at'] = '';
		$apps[$x]['description']['fr-fr'] = '';
		$apps[$x]['description']['fr-ca'] = '';
		$apps[$x]['description']['fr-ch'] = '';
		$apps[$x]['description']['pt-pt'] = 'Editor de script pode ser usado para editar lua, javascript ou outros scripts.';
		$apps[$x]['description']['pt-br'] = '';

	//menu details
		$y = 0;
		$apps[$x]['menu'][$y]['title']['en-us'] = 'Script Editor';
		$apps[$x]['menu'][$y]['title']['es-mx'] = '';
		$apps[$x]['menu'][$y]['title']['de-de'] = '';
		$apps[$x]['menu'][$y]['title']['de-ch'] = '';
		$apps[$x]['menu'][$y]['title']['de-at'] = '';
		$apps[$x]['menu'][$y]['title']['fr-fr'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ca'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ch'] = '';
		$apps[$x]['menu'][$y]['title']['pt-pt'] = 'Editor de Scripts';
		$apps[$x]['menu'][$y]['title']['pt-br'] = '';
		$apps[$x]['menu'][$y]['uuid'] = 'f1905fec-0577-daef-6045-59d09b7d3f94';
		$apps[$x]['menu'][$y]['parent_uuid'] = '594d99c5-6128-9c88-ca35-4b33392cec0f';
		$apps[$x]['menu'][$y]['category'] = 'external';
		$apps[$x]['menu'][$y]['path'] = '/app/edit/index.php?dir=scripts';
		$apps[$x]['menu'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['menu'][$y]['title']['en-us'] = 'XML Editor';
		$apps[$x]['menu'][$y]['title']['es-mx'] = '';
		$apps[$x]['menu'][$y]['title']['de-de'] = '';
		$apps[$x]['menu'][$y]['title']['de-ch'] = '';
		$apps[$x]['menu'][$y]['title']['de-at'] = '';
		$apps[$x]['menu'][$y]['title']['fr-fr'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ca'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ch'] = '';
		$apps[$x]['menu'][$y]['title']['pt-pt'] = 'Editor XML';
		$apps[$x]['menu'][$y]['title']['pt-br'] = '';
		$apps[$x]['menu'][$y]['uuid'] = '16013877-606a-2a05-7d6a-c1b215839131';
		$apps[$x]['menu'][$y]['parent_uuid'] = '594d99c5-6128-9c88-ca35-4b33392cec0f';
		$apps[$x]['menu'][$y]['category'] = 'external';
		$apps[$x]['menu'][$y]['path'] = '/app/edit/index.php?dir=xml';
		$apps[$x]['menu'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['menu'][$y]['title']['en-us'] = 'Provision Editor';
		$apps[$x]['menu'][$y]['title']['es-mx'] = '';
		$apps[$x]['menu'][$y]['title']['de-de'] = '';
		$apps[$x]['menu'][$y]['title']['de-ch'] = '';
		$apps[$x]['menu'][$y]['title']['de-at'] = '';
		$apps[$x]['menu'][$y]['title']['fr-fr'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ca'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ch'] = '';
		$apps[$x]['menu'][$y]['title']['pt-pt'] = 'Editor de Provisionamento';
		$apps[$x]['menu'][$y]['title']['pt-br'] = '';
		$apps[$x]['menu'][$y]['uuid'] = '57773542-a565-1a29-605d-6535da1a0870';
		$apps[$x]['menu'][$y]['parent_uuid'] = '594d99c5-6128-9c88-ca35-4b33392cec0f';
		$apps[$x]['menu'][$y]['category'] = 'external';
		$apps[$x]['menu'][$y]['path'] = '/app/edit/index.php?dir=provision';
		$apps[$x]['menu'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['menu'][$y]['title']['en-us'] = 'PHP Editor';
		$apps[$x]['menu'][$y]['title']['es-mx'] = '';
		$apps[$x]['menu'][$y]['title']['de-de'] = '';
		$apps[$x]['menu'][$y]['title']['de-ch'] = '';
		$apps[$x]['menu'][$y]['title']['de-at'] = '';
		$apps[$x]['menu'][$y]['title']['fr-fr'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ca'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ch'] = '';
		$apps[$x]['menu'][$y]['title']['pt-pt'] = 'Editor de PHP';
		$apps[$x]['menu'][$y]['title']['pt-br'] = '';
		$apps[$x]['menu'][$y]['uuid'] = 'eae1f2d6-789b-807c-cc26-44501e848693';
		$apps[$x]['menu'][$y]['parent_uuid'] = '594d99c5-6128-9c88-ca35-4b33392cec0f';
		$apps[$x]['menu'][$y]['category'] = 'external';
		$apps[$x]['menu'][$y]['path'] = '/app/edit/index.php?dir=php';
		$apps[$x]['menu'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['menu'][$y]['title']['en-us'] = 'Grammar Editor';
		$apps[$x]['menu'][$y]['title']['es-mx'] = 'Editor Gramático';
		$apps[$x]['menu'][$y]['title']['de-de'] = '';
		$apps[$x]['menu'][$y]['title']['de-ch'] = '';
		$apps[$x]['menu'][$y]['title']['de-at'] = '';
		$apps[$x]['menu'][$y]['title']['fr-fr'] = "L'éditeur grammairien";
		$apps[$x]['menu'][$y]['title']['fr-ca'] = '';
		$apps[$x]['menu'][$y]['title']['fr-ch'] = '';
		$apps[$x]['menu'][$y]['title']['pt-pt'] = 'Editor Gramático';
		$apps[$x]['menu'][$y]['title']['pt-br'] = '';
		$apps[$x]['menu'][$y]['uuid'] = 'c3db739e-89f9-0fa2-44ce-0f4c2ff43b1a';
		$apps[$x]['menu'][$y]['parent_uuid'] = '594d99c5-6128-9c88-ca35-4b33392cec0f';
		$apps[$x]['menu'][$y]['category'] = 'external';
		$apps[$x]['menu'][$y]['path'] = '/app/edit/index.php?dir=grammar';
		$apps[$x]['menu'][$y]['groups'][] = 'superadmin';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'script_editor_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = 'f1905fec-0577-daef-6045-59d09b7d3f94';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'script_editor_save';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'provision_editor_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = '57773542-a565-1a29-605d-6535da1a0870';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'provision_editor_save';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'xml_editor_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = '16013877-606a-2a05-7d6a-c1b215839131';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'xml_editor_save';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'php_editor_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = 'eae1f2d6-789b-807c-cc26-44501e848693';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'php_editor_save';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'grammar_view';
		$apps[$x]['permissions'][$y]['menu']['uuid'] = 'c3db739e-89f9-0fa2-44ce-0f4c2ff43b1a';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'grammar_save';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';

	//schema details
		$y = 0; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = 'v_clips';
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_folder';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_text_start';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_text_end';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_order';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'clip_desc';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';

?>

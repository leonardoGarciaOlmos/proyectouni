<?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 01:30:23
         compiled from "application\views\templates\userAll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208565261582e8f3d21-12296356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86329910b07e4ab6b040fb60c4984577d668147d' => 
    array (
      0 => 'application\\views\\templates\\userAll.tpl',
      1 => 1382535830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208565261582e8f3d21-12296356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5261582e990724_13463576',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'ciPath' => 0,
    'past_controller' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5261582e990724_13463576')) {function content_5261582e990724_13463576($_smarty_tpl) {?><!-- <div class="row-fluid">
	<h3 class="header smaller lighter blue">jQuery dataTables</h3>
	<div class="table-header">
		Results for "Latest Registered Domains"
	</div>

	<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div id="sample-table-2_length" class="dataTables_length"><label>Display <select size="1" name="sample-table-2_length" aria-controls="sample-table-2"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records</label></div></div><div class="span6"><div class="dataTables_filter" id="sample-table-2_filter"><label>Search: <input type="text" aria-controls="sample-table-2"></label></div></div></div><table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
		<thead>
			<tr role="row"><th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="




				" style="width: 50px;">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending" style="width: 154px;">Domain</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 110px;">Price</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending" style="width: 121px;">Clicks</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="

					Update
				: activate to sort column ascending" style="width: 181px;">
					<i class="icon-time bigger-110 hidden-phone"></i>
					Update
				</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 150px;">Status</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 147px;"></th></tr>
		</thead>


	<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">app.com</a>
				</td>
				<td class=" ">$45</td>
				<td class="hidden-480 ">3,330</td>
				<td class="hidden-phone ">Feb 12</td>

				<td class="hidden-480 ">
					<span class="label label-warning">Expiring</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="even">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">base.com</a>
				</td>
				<td class=" ">$35</td>
				<td class="hidden-480 ">2,595</td>
				<td class="hidden-phone ">Feb 18</td>

				<td class="hidden-480 ">
					<span class="label label-success">Registered</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="odd">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">max.com</a>
				</td>
				<td class=" ">$60</td>
				<td class="hidden-480 ">4,400</td>
				<td class="hidden-phone ">Mar 11</td>

				<td class="hidden-480 ">
					<span class="label label-warning">Expiring</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="even">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">best.com</a>
				</td>
				<td class=" ">$75</td>
				<td class="hidden-480 ">6,500</td>
				<td class="hidden-phone ">Apr 03</td>

				<td class="hidden-480 ">
					<span class="label label-inverse arrowed-in">Flagged</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="odd">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">pro.com</a>
				</td>
				<td class=" ">$55</td>
				<td class="hidden-480 ">4,250</td>
				<td class="hidden-phone ">Jan 21</td>

				<td class="hidden-480 ">
					<span class="label label-success">Registered</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="even">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">team.com</a>
				</td>
				<td class=" ">$40</td>
				<td class="hidden-480 ">3,200</td>
				<td class="hidden-phone ">Feb 09</td>

				<td class="hidden-480 ">
					<span class="label label-inverse arrowed-in">Flagged</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="odd">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">up.com</a>
				</td>
				<td class=" ">$95</td>
				<td class="hidden-480 ">8,520</td>
				<td class="hidden-phone ">Feb 22</td>

				<td class="hidden-480 ">
					<span class="label label-info arrowed arrowed-righ">Sold</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="even">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">view.com</a>
				</td>
				<td class=" ">$45</td>
				<td class="hidden-480 ">4,100</td>
				<td class="hidden-phone ">Mar 12</td>

				<td class="hidden-480 ">
					<span class="label label-success">Registered</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="odd">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">nice.com</a>
				</td>
				<td class=" ">$38</td>
				<td class="hidden-480 ">3,940</td>
				<td class="hidden-phone ">Feb 12</td>

				<td class="hidden-480 ">
					<span class="label label-info arrowed arrowed-righ">Sold</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr><tr class="even">
				<td class="center  sorting_1">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>

				<td class=" ">
					<a href="#">fine.com</a>
				</td>
				<td class=" ">$25</td>
				<td class="hidden-480 ">2,983</td>
				<td class="hidden-phone ">Apr 01</td>

				<td class="hidden-480 ">
					<span class="label label-warning">Expiring</span>
				</td>

				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a class="blue" href="#">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a class="green" href="#">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a class="red" href="#">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>

					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample-table-2_info">Showing 1 to 10 of 23 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li></ul></div></div></div></div>
</div> -->
<div id="message-box" class="span12"></div>
<div id="ajax_list">
<div class="span12">
<table id="table_id" class="table table-striped table-bordered table-hover dataTable">
	<thead>
		<tr role="row">
			<th class="center hidden-phone" role="columnheader" rowspan="1" colspan="1">
				<label>
					<input type="checkbox" class="ace">
					<span class="lbl"></span>
				</label>
			</th>
			<th>Usuario</th>
			<th class=" ">Nombre</th>
			<th class="hidden-480">Email</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<tr>
				<td class="center hidden-phone">
					<label>
						<input type="checkbox" class="ace">
						<span class="lbl"></span>
					</label>
				</td>
				<td class=" "><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</td>
				<td class=" "><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</td>
				<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
				<td class=" ">
					<div class="hidden-phone visible-desktop action-buttons">
						<a href="#" class="tooltip-info blue" title="" data-original-title="View">
							<i class="icon-zoom-in bigger-130"></i>
						</a>

						<a href="<?php echo $_smarty_tpl->tpl_vars['ciPath']->value;?>
user/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="tooltip-success green" data-rel="tooltip" title="" data-original-title="Edit">
							<i class="icon-pencil bigger-130"></i>
						</a>

						<a href="#" class="tooltip-error red" data-rel="tooltip" title="" data-target-url="<?php echo $_smarty_tpl->tpl_vars['ciPath']->value;?>
user/ajaxDelete/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-original-title="Eliminar" data-message="Desea eliminar el usuario <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 ?">
							<i class="icon-trash bigger-130"></i>
						</a>
					</div>
					<div class="hidden-desktop visible-phone">
						<div class="inline position-relative">
							<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
								<i class="icon-caret-down icon-only bigger-120"></i>
							</button>

							<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
								<li>
									<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
										<span class="blue">
											<i class="icon-zoom-in bigger-120"></i>
										</span>
									</a>
								</li>

								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['ciPath']->value;?>
user/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
										<span class="green">
											<i class="icon-edit bigger-120"></i>
										</span>
									</a>
								</li>
								<li class="tooltip-delete" >
									<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-target-url="<?php echo $_smarty_tpl->tpl_vars['ciPath']->value;?>
user/ajaxDelete/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-original-title="Eliminar" data-message="Desea eliminar el usuario <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 ?">
										<span class="red">
											<i class="icon-trash bigger-120"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<script>
	var past_controller = "<?php echo $_smarty_tpl->tpl_vars['past_controller']->value;?>
";
	var controller = "<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
";
</script><?php }} ?>
<?php require_once('page_up.php') ?>

<div class="static-content">
	<div class="page-content">
		<div class="page-heading mb0">
			<h1>Order Details</h1>
			<div class="options">
				<div class="btn-toolbar">
					<a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
				</div>
			</div>
		</div>
		<div class="page-tabs">
			<ul class="nav nav-tabs">

				<li class="active"><a data-toggle="tab" href="#details">Details</a></li>
				<li><a data-toggle="tab" href="#invoices">Invoice</a></li>
				<li><a data-toggle="tab" href="#creditmemos">Credit Memos</a></li>
				<li><a data-toggle="tab" href="#shipments">Shipments</a></li>
				<li><a data-toggle="tab" href="#history">History</a></li>

			</ul>
		</div>
		<div class="container-fluid">
			<div class="tab-content">
				<div class="tab-pane active" id="details">
					
					
					<div class="panel col-md-5">
						<div class="panel-body panel-no-padding" >
							<table class="table">
								<tbody>
									<tr>
										<th>Cotizacion No</th>
										<td >1</td>
									</tr>
									<tr>
										<th>Fecha de cotizacion</th>
										<td >28 July 2014, 03:34:35 PM</td>
									</tr>
									<tr>
										<th>Fecha de Requerimiento</th>
										<td>
											<div class="input-daterange input-group" id="datepicker-range">
												<input type="text" class="input-small form-control" name="start">
												<span class="input-group-addon">a</span>
												<input type="text" class="input-small form-control" name="end">
											</div>
										</td>
									</tr>
									<tr>
										<th>Correo Electronico</th>
										<td ><input type="text" class="form-control"></input></td>
									<tr>
										<th>Razón Social</th>
										<td><input type="text" class="form-control"></input></td>
									</tr>
									<tr>
										<th>Solicitante</th>
										<td ><input type="text" class="form-control"></input></td>
									</tr>
									<tr>
										<th>Ubicación de la obra</th>
										<td ><input type="text" class="form-control"></input></td>
									</tr>
									<tr>
										<th>Telefono</th>
										<td ><input type="text" class="form-control"></input></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="panel col-md-5">
						<div class="panel-body panel-no-padding" >
							<table class="table">
								<tbody>
									<tr>
										<th>Cotizacion No</th>
										<td >1</td>
									</tr>
									<tr>
										<th>Fecha de cotizacion</th>
										<td >28 July 2014, 03:34:35 PM</td>
									</tr>
									<tr>
										<th>Fecha de Requerimiento</th>
										<td>
											<div class="input-daterange input-group" id="datepicker-range">
												<input type="text" class="input-small form-control" name="start">
												<span class="input-group-addon">a</span>
												<input type="text" class="input-small form-control" name="end">
											</div>
										</td>
									</tr>
									<tr>
										<th>Correo Electronico</th>
										<td ><input type="text" class="form-control"></input></td>
									<tr>
										<th>Razón Social</th>
										<td><input type="text" class="form-control"></input></td>
									</tr>
									<tr>
										<th>Solicitante</th>
										<td ><input type="text" class="form-control"></input></td>
									</tr>
									<tr>
										<th>Ubicación de la obra</th>
										<td ><input type="text" class="form-control"></input></td>
									</tr>
									<tr>
										<th>Telefono</th>
										<td ><input type="text" class="form-control"></input></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>

					<div class="store">
						<div class="panel col-md-11">
							<div class="panel-body panel-no-padding">
								<table class="table-striped table table-vam">
									<thead>
										<th>ID</th>
										<th>Product</th>
										<th>Name</th>
										<th>Price</th>
										<th>Quantity</th>
										<th style="text-align: right;">Subtotal</th>
									</thead>
									<tbody>
										<tr>
											<td>#001</td>
											<td>Item 1</td>
											<td>A</td>
											<td>$500</td>
											<td style="width: 80px;"><input type="text" class="form-control touchspin"
													value="1"></td>
											<td style="text-align: right;">$999</td>
										</tr>
										<tr>
											<td>#002</td>
											<td>Item 2</td>
											<td>B</td>
											<td>$999</td>
											<td style="width: 80px;"><input type="text" class="form-control touchspin"
													value="1"></td>
											<td style="text-align: right;">$999</td>
										</tr>
										<tr>
											<td>#003</td>
											<td>Item 3</td>
											<td>C</td>
											<td>$999</td>
											<td style="width: 80px;"><input type="text" class="form-control touchspin"
													value="1"></td>
											<td style="text-align: right;">$999</td>
										</tr>
										<tr>
											<td>#004</td>
											<td>Item 4</td>
											<td>D</td>
											<td>$999</td>
											<td style="width: 80px;"><input type="text" class="form-control touchspin"
													value="1"></td>
											<td style="text-align: right;">$999</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="5" class="text-right"><strong>Total</strong></td>
											<td style="text-align: right;"><strong>$3996</strong></td>
										</tr>
									</tfoot>
								</table>
								<div class="panel-footer ml0 mb0 mr0">
									<div class="clearfix">
										<button class="btn btn-default pull-left"><i class="fa fa-refresh"></i>
											Update Card</button>
										<button class="btn btn-success pull-right"><i class="fa fa-check"></i>
											Check Out</button>
									</div>
								</div>
							</div>
						</div>
					</div> 

				</div>

				<div class="tab-pane" id="invoices">
					<div class="panel">
						<div class="panel-body panel-no-padding">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Invoice #</th>
										<th>Bill To</th>
										<th>Invoice Date</th>
										<th>Amount</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>12</td>
										<td>Sidney Sheldon</td>
										<td>29/02/2014</td>
										<td>$331</td>
										<td><span class="label label-info">Paid</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
									<tr>
										<td>12</td>
										<td>Sidney Sheldon</td>
										<td>29/02/2014</td>
										<td>$331</td>
										<td><span class="label label-info">Paid</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="creditmemos">
					<div class="panel">
						<div class="panel-body panel-no-padding">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Credit Memo #</th>
										<th>Bill To</th>
										<th>Date Created</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>12</td>
										<td>Sidney Sheldon</td>
										<td>29/02/2014</td>
										<td><span class="label label-primary">Paid</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
									<tr>
										<td>12</td>
										<td>Sidney Sheldon</td>
										<td>29/02/2014</td>
										<td><span class="label label-info">Pending</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="shipments">
					<div class="panel">
						<div class="panel-body panel-no-padding">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Shipment #</th>
										<th>Ship To</th>
										<th>Shipped Date</th>
										<th>Quantity</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>12</td>
										<td>Sidney Sheldon</td>
										<td>29/02/2014</td>
										<td>1</td>
										<td><span class="label label-success">Successful</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
									<tr>
										<td>12</td>
										<td>Sidney Sheldon</td>
										<td>29/02/2014</td>
										<td>4</td>
										<td><span class="label label-info">Pending</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="history">
					<div class="panel">
						<div class="panel-body panel-no-padding">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Date/Time</th>
										<th>Description</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>29/02/2014 04:12:31 PM</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
										<td><span class="label label-success">Successful</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
									<tr>
										<td>29/02/2014 04:12:31 PM</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
										<td><span class="label label-info">Pending</span></td>
										<td><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
												Print</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- .container-fluid -->
	</div> <!-- #page-content -->
</div>

</div>
</div>
</div>


<div class="infobar-wrapper">
	<div class="infobar">

		<div class="infobar-options">
			<h2>Infobar</h2>
		</div>

		<div id="widgetarea">


			<div class="widget" id="widget-sparkline">
				<div class="widget-heading">
					<a href="javascript:;" data-toggle="collapse" data-target="#sparklinestats">
						<h4>Sparkline Stats</h4>
					</a>
				</div>
				<div class="widget-body collapse in" id="sparklinestats">
					<ul class="sparklinestats">
						<li>
							<div class="pull-left">
								<h5 class="title">Total Revenue</h5>
								<h3>$241,750 <span class="badge badge-success">+13.6%</span></h3>
							</div>
							<div class="pull-right">
								<div class="sparkline" id="infobar-revenuestats"></div>
							</div>
						</li>
						<li>
							<div class="pull-left">
								<h5 class="title">Products Sold</h5>
								<h3>11,562 <span class="badge badge-success">+19.2%</span></h3>
							</div>
							<div class="pull-right">
								<div class="sparkline" id="infobar-unitssold"></div>
							</div>
						</li>
						<li>
							<div class="pull-left">
								<h5 class="title">Total Orders</h5>
								<h3>1,249 <span class="badge badge-danger">-10.5%</span></h3>
							</div>
							<div class="pull-right">
								<div class="sparkline" id="infobar-orders"></div>
							</div>
						</li>

					</ul>
				</div>
			</div>

			<div class="widget" id="widget-weather">
				<div class="widget-heading">
					<a href="javascript:;" data-toggle="collapse" data-target="#weatherwidget">
						<h4>Weather</h4>
					</a>
				</div>
				<div class="widget-body collapse in" id="weatherwidget">
					<div class="weather-container">
						<div class="weather-widget"></div>
					</div>
				</div>
			</div>

			<div class="widget">
				<div class="widget-heading">
					<a href="javascript:;" data-toggle="collapse" data-target="#recentactivity">
						<h4>Recent Activity</h4>
					</a>
				</div>
				<div class="widget-body collapse in" id="recentactivity">
					<ul class="recent-activities">
						<li>
							<div class="avatar">
								<img src="assets/demo/avatar/avatar_11.png" class="img-responsive img-circle">
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Jean Alanis</a> invited 3 unconfirmed
									members to <a href="#">Sed ut perspiciatis unde</a></span>
								<span class="time">Sep 16, 2014 at 10:06 AM</span>

							</div>
						</li>
						<li>
							<div class="activityicon activity-success">
								<i class="fa fa-cloud"></i>
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Stacy Villani</a> and <a href="#"
										class="person">Leroy Greenlee</a> added new files to <a href="#">Dicta sunt
										explicabo</a></span>
								<span class="time">Sep 12, 2014 at 11:06 PM</span>

							</div>
						</li>
						<li>
							<div class="avatar">
								<img src="assets/demo/avatar/avatar_07.png" class="img-responsive img-circle">
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Shannon Schmucker</a> is now following <a
										href="#" class="person">Anthony Ware</a></span>
								<span class="time">Sep 06, 2014 at 1:46 AM</span>
							</div>
						</li>
						<li>
							<div class="avatar">
								<img src="assets/demo/avatar/avatar_01.png" class="img-responsive img-circle">
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Roxann Hollingworth</a> commented on <a
										href="#">Natus error sit voluptatem</a></span>
								<span class="time">Sep 02, 2014 at 7:50 PM</span>
							</div>
						</li>
						<li>
							<div class="avatar">
								<img src="assets/demo/avatar/avatar_04.png" class="img-responsive img-circle">
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Mitchell Kosak</a> added <a href="#"
										class="person">Bruce Ory</a> to <a href="#">Accusantium doloremque
										laudantium</a></span>
								<span class="time">Sep 02, 2014 at 8:35 AM</span>
							</div>
						</li>
						<li>
							<div class="activityicon activity-inverse">
								<i class="fa fa-user"></i>
							</div>
							<div class="content">
								<span class="msg"><a href="#">4 new users</a> requested to join group</span>
								<span class="time">Aug 29, 2014 at 05:34 PM</span>

							</div>
						</li>
						<li>
							<div class="avatar">
								<img src="assets/demo/avatar/avatar_09.png" class="img-responsive img-circle">
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Rodney Moody</a> created new thread <a
										href="#">Vero eos et accusamus</a></span>
								<span class="time">Aug 13, 2014 at 1:23 PM</span>

							</div>
						</li>
						<li>
							<div class="activityicon activity-info">
								<i class="fa fa-comment-o"></i>
							</div>
							<div class="content">
								<span class="msg">Anonymous user commented on <a href="#">Totam rem aperiam</a></span>
								<span class="time">Aug 11, 2014 at 12:01 PM</span>

							</div>
						</li>
						<li>
							<div class="avatar">
								<img src="assets/demo/avatar/avatar_05.png" class="img-responsive img-circle">
							</div>
							<div class="content">
								<span class="msg"><a href="#" class="person">Pricilla Panella</a> is now following <a
										href="#" class="person">Ricky Marengo</a></span>
								<span class="time">Jul 25, 2014 at 3:11 PM</span>
							</div>
						</li>
						<li class="seeall">
							<a href="#" class="pull-right">See all activities</a>
						</li>
					</ul>
				</div>
			</div>



			<!-- <div class="widget">
			<div class="widget-heading">
				<a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
			</div>
			<div class="widget-body collapse in" id="storagespace">
				<div class="" style="padding: 20px 0">
					<div class="clearfix">
						<div class="progress-title pull-left">1.31 GB used</div>
						<div class="progress-percentage pull-right">87.3%</div>
					</div>
					<div class="progress progress-lg">
						<div class="progress-bar progress-bar-success" style="width: 50%"></div>
						<div class="progress-bar progress-bar-warning" style="width: 25%"></div>
						<div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
					</div>
				</div>
			</div>
		</div> -->

			<!-- <div class="widget">
			<div class="widget-heading">
				<a href="javascript:;" data-toggle="collapse" data-target="#contactdetails"><h4>Contact Details</h4></a>
			</div>
			<div class="widget-body collapse in" id="contactdetails">
				<div class="contactdetails">
					<div class="avatar">
						<img src="assets/demo/avatar/avatar_11.png" class="img-responsive img-circle">
					</div>
					<span class="contact-name">Joseph Vasquez</span>
					<span class="contact-status">Client Representative</span>
					<ul class="details">
						
						<li><a href="#"><i class="fa fa-fw fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
						<li><i class="fa fa-fw fa-phone"></i>&nbsp;+1 234 567 890</li>
						<li><i class="fa fa-fw fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
						
					</ul>

			</div>
		</div> -->


			<!-- <div class="widget">
			<div class="widget-heading">
				<a href="javascript:;" data-toggle="collapse" data-target="#contact-list"><h4>Contact List</h4></a>
			</div>
			<div class="widget-body collapse in" id="contact-list">
				<ul class="contact-list">
					<li>
						<div class="avatar">
							<img src="assets/demo/avatar/avatar_06.png" class="img-responsive img-circle" />
						</div>
						<div class="details">
							<div class="clearfix">
								<a href="#" class="contact-name pull-left">Jessie Pinkman</a>
								
									<div class="contact-profiles">
										<a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
											<li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
											<li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
											<li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
										</ul>
									</div>
									
								
							</div>
							<span class="contact-details">Senior Developer</span>
						</div>
					</li>
					<li>
						<div class="avatar">
							<img src="assets/demo/avatar/avatar_01.png" class="img-responsive img-circle" />
						</div>
						<div class="details">
							<div class="clearfix">
								<a href="#" class="contact-name pull-left">Emma Watson</a>
								
									<div class="contact-profiles">
										<a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
											<li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
											<li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
											<li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
										</ul>
									</div>
									
								
							</div>
							<span class="contact-details">Graphic Designer</span>
						</div>
					</li>
					<li>
						<div class="avatar">
							<img src="assets/demo/avatar/avatar_09.png" class="img-responsive img-circle" />
						</div>
						<div class="details">
							<div class="clearfix">
								<a href="#" class="contact-name pull-left">David Luke</a>
								
									<div class="contact-profiles">
										<a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
											<li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
											<li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
											<li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
										</ul>
									</div>
									
								
							</div>
							<span class="contact-details">Client Representative</span>
						</div>
					</li>
					<li>
						<div class="avatar">
							<img src="assets/demo/avatar/avatar_11.png" class="img-responsive img-circle" />
						</div>
						<div class="details">
							<div class="clearfix">
								<a href="#" class="contact-name pull-left">John Arren</a>
								
									<div class="contact-profiles">
										<a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
											<li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
											<li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
											<li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
										</ul>
									</div>
									
								
							</div>
							<span class="contact-details">Project Manager</span>
						</div>
					</li>
					<li>
						<div class="avatar">
							<img src="assets/demo/avatar/avatar_05.png" class="img-responsive img-circle" />
						</div>
						<div class="details">
							<div class="clearfix">
								<a href="#" class="contact-name pull-left">Ben Stiller</a>
								
									<div class="contact-profiles">
										<a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
											<li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
											<li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
											<li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
										</ul>
									</div>
									
								
							</div>
							<span class="contact-details">Senior Designer</span>
						</div>
					</li>
					<li>
						<div class="avatar">
							<img src="assets/demo/avatar/avatar_08.png" class="img-responsive img-circle" />
						</div>
						<div class="details">
							<div class="clearfix">
								<a href="#" class="contact-name pull-left">Jeofry Thompson</a>
								
									<div class="contact-profiles">
										<a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
											<li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
											<li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
											<li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
										</ul>
									</div>
									
								
							</div>
							<span class="contact-details">Developer</span>
						</div>
					</li>
				</ul>
			</div>
		</div> -->




		</div>
	</div>
</div>


<!-- Switcher -->
<div class="demo-options">
	<div class="demo-options-icon"><i class="fa fa-spin fa-fw fa-smile-o"></i></div>
	<div class="demo-heading">Demo Settings</div>

	<div class="demo-body">
		<div class="tabular">
			<div class="tabular-row">
				<div class="tabular-cell">Fixed Header</div>
				<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked
						data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader"
						data-on-text="I" data-off-text="O"></div>
			</div>
			<div class="tabular-row">
				<div class="tabular-cell">Boxed Layout</div>
				<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini"
						data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="I"
						data-off-text="O"></div>
			</div>
			<div class="tabular-row">
				<div class="tabular-cell">Collapse Leftbar</div>
				<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini"
						data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="I"
						data-off-text="O"></div>
			</div>
			<div class="tabular-row">
				<div class="tabular-cell">Collapse Rightbar</div>
				<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked
						data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapserightbar"
						data-on-text="I" data-off-text="O"></div>
			</div>
			<div class="tabular-row hide" id="demo-horizicon">
				<div class="tabular-cell">Horizontal Icons</div>
				<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked
						data-size="mini" data-on-color="primary" data-off-color="warning" data-on-text="S"
						data-off-text="L" name="demo-horizicons"></div>
			</div>
		</div>

	</div>

	<div class="demo-body">
		<div class="option-title">Header Colors</div>
		<ul id="demo-header-color" class="demo-color-list">
			<li><span class="demo-white"></span></li>
			<li><span class="demo-black"></span></li>
			<li><span class="demo-midnightblue"></span></li>
			<li><span class="demo-primary"></span></li>
			<li><span class="demo-info"></span></li>
			<li><span class="demo-alizarin"></span></li>
			<li><span class="demo-grape"></span></li>
			<li><span class="demo-violet"></span></li>
			<li><span class="demo-indigo"></span></li>
		</ul>
	</div>

	<div class="demo-body">
		<div class="option-title">Sidebar Colors</div>
		<ul id="demo-sidebar-color" class="demo-color-list">
			<li><span class="demo-white"></span></li>
			<li><span class="demo-black"></span></li>
			<li><span class="demo-midnightblue"></span></li>
			<li><span class="demo-primary"></span></li>
			<li><span class="demo-info"></span></li>
			<li><span class="demo-alizarin"></span></li>
			<li><span class="demo-grape"></span></li>
			<li><span class="demo-violet"></span></li>
			<li><span class="demo-indigo"></span></li>
		</ul>
	</div>

	<div class="demo-body hide" id="demo-boxes">
		<div class="option-title">Boxed Layout Options</div>
		<ul id="demo-boxed-bg" class="demo-color-list">
			<li><span class="pattern-brickwall"></span></li>
			<li><span class="pattern-dark-stripes"></span></li>
			<li><span class="pattern-rockywall"></span></li>
			<li><span class="pattern-subtle-carbon"></span></li>
			<li><span class="pattern-tweed"></span></li>
			<li><span class="pattern-vertical-cloth"></span></li>
			<li><span class="pattern-grey_wash_wall"></span></li>
			<li><span class="pattern-pw_maze_black"></span></li>
			<li><span class="patther-wild_oliva"></span></li>
			<li><span class="pattern-stressed_linen"></span></li>
			<li><span class="pattern-sos"></span></li>
		</ul>
	</div>

</div>
<!-- /Switcher -->
<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery -->
<script src="assets/js/jqueryui-1.9.2.min.js"></script> <!-- Load jQueryUI -->
<script src="assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap -->

<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> <!-- Sparkline -->
<script src="assets/plugins/jstree/dist/jstree.min.js"></script> <!-- jsTree -->

<script src="assets/plugins/codeprettifier/prettify.js"></script> <!-- Code Prettifier  -->
<script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button -->

<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop -->

<script src="assets/plugins/iCheck/icheck.min.js"></script> <!-- iCheck -->

<script src="assets/js/enquire.min.js"></script> <!-- Enquire for Responsiveness -->

<script src="assets/plugins/bootbox/bootbox.js"></script> <!-- Bootbox -->

<script src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->

<script src="assets/js/application.js"></script>
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/demo-switcher.js"></script>


<!-- End loading site level scripts -->

<!-- Load page level scripts-->

<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script> <!-- Touchspin -->

<script>
	$(function () {
		$("input.touchspin").TouchSpin({
			verticalbuttons: true
		});
	});
</script>

</body>

</html>
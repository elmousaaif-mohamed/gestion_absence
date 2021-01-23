<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/bootstrap/style/simple-sidebar.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

	<script src="assets/jquery/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/fontawesome/js/all.js"></script>
	<script src="assets/jquery/plugins/dataTables/jquery.dataTables.min.js"></script>
	<script src="assets/jquery/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
	<style>
	.btn-label {
		position: relative;
		left: -12px;
	display: inline-block;
	padding: 6px 12px;
	background: rgba(0, 0, 0, 0.15);
	border-radius: 3px 0 0 3px;
}
 
.btn-labeled {
	padding-top: 0;
	padding-bottom: 0;
}
 
.btn {
	margin-bottom: 10px;
}
	</style>
	<title>Home page</title>
</head>

<body>
	<div class="d-flex" id="wrapper">
	
		<div class="bg-secondary border-right posistion-relative vh-100" id="sidebar-wrapper">
			<div class="sidebar-heading"><img src="assets/img/logo2.png" height="60" /></div>

			<div class="list-group list-group-flush position-relative top-50 start-50 translate-middle h-75">
				<a href="#" class="list-group-item list-group-item-action active">Départements</a>
				<a href="#" class="list-group-item list-group-item-action">filiéres</a>
				<a href="#" class="list-group-item list-group-item-action">modules</a>
				<a href="#" class="list-group-item list-group-item-action">élements</a>
				<a href="#" class="list-group-item list-group-item-action">Professeurs</a>
			</div>
		</div>

		<div id="page-content-wrapper">
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
				<div class="container-fluid">
					<a class="navbar-brand text-info fw-bolder" href="index">Gestionnaire d'absence</a>
					<a class="btn btn-outline-danger text-light ml-1" href="login">déconnexion</a>

					<div 
						class="navbar-toggler w-100 border-0 mt-2 "
						data-bs-toggle="collapse"
						data-bs-target="#navbarNavDropdown"
						aria-controls="navbarNavDropdown"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<ul class="nav justify-content-center nav-pills nav-fill">
							<li class="nav-item"><a class="nav-link active" href="#">Départements</a></li>
							<li class="nav-item"><a class="nav-link" href="#">filiéres</a></li>
							<li class="nav-item"><a class="nav-link" href="#">modules</a></li>
							<li class="nav-item"><a class="nav-link" href="#">élements</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Professeurs</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<div class="d-flex bd-highlight m-5 mb-2">
				<div class="p-2 flex-grow-1 bd-highlight text-center fs-2">Gestion de aaaaaaaaa</div>

				<button type="button" class="btn btn-labeled m-0 btn-outline-primary fs-3 py-2 bd-highlight " style="margin-right:2em !important; width:200px">
					<span><i class="fa fa-trash"></i></span> Ajouter
				</button>
			</div>
			
			
			<div class="container">
				<table id="myTable" class="table table-striped table-bordered table-hover ml-2" style="width:100%; border:1px solid; border-radius:10px">
					<thead class="bg-secondary text-light">
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>63</td>
							<td>2011/07/25</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td>2009/01/12</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2012/03/29</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>33</td>
							<td>2008/11/28</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Brielle Williamson</td>
							<td>Integration Specialist</td>
							<td>New York</td>
							<td>61</td>
							<td>2012/12/02</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Herrod Chandler</td>
							<td>Sales Assistant</td>
							<td>San Francisco</td>
							<td>59</td>
							<td>2012/08/06</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Rhona Davidson</td>
							<td>Integration Specialist</td>
							<td>Tokyo</td>
							<td>55</td>
							<td>2010/10/14</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Colleen Hurst</td>
							<td>Javascript Developer</td>
							<td>San Francisco</td>
							<td>39</td>
							<td>2009/09/15</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Sonya Frost</td>
							<td>Software Engineer</td>
							<td>Edinburgh</td>
							<td>23</td>
							<td>2008/12/13</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jena Gaines</td>
							<td>Office Manager</td>
							<td>London</td>
							<td>30</td>
							<td>2008/12/19</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Quinn Flynn</td>
							<td>Support Lead</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2013/03/03</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Charde Marshall</td>
							<td>Regional Director</td>
							<td>San Francisco</td>
							<td>36</td>
							<td>2008/10/16</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Haley Kennedy</td>
							<td>Senior Marketing Designer</td>
							<td>London</td>
							<td>43</td>
							<td>2012/12/18</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Tatyana Fitzpatrick</td>
							<td>Regional Director</td>
							<td>London</td>
							<td>19</td>
							<td>2010/03/17</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Michael Silva</td>
							<td>Marketing Designer</td>
							<td>London</td>
							<td>66</td>
							<td>2012/11/27</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Paul Byrd</td>
							<td>Chief Financial Officer (CFO)</td>
							<td>New York</td>
							<td>64</td>
							<td>2010/06/09</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Gloria Little</td>
							<td>Systems Administrator</td>
							<td>New York</td>
							<td>59</td>
							<td>2009/04/10</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Bradley Greer</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>41</td>
							<td>2012/10/13</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Dai Rios</td>
							<td>Personnel Lead</td>
							<td>Edinburgh</td>
							<td>35</td>
							<td>2012/09/26</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jenette Caldwell</td>
							<td>Development Lead</td>
							<td>New York</td>
							<td>30</td>
							<td>2011/09/03</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Yuri Berry</td>
							<td>Chief Marketing Officer (CMO)</td>
							<td>New York</td>
							<td>40</td>
							<td>2009/06/25</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Caesar Vance</td>
							<td>Pre-Sales Support</td>
							<td>New York</td>
							<td>21</td>
							<td>2011/12/12</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Doris Wilder</td>
							<td>Sales Assistant</td>
							<td>Sydney</td>
							<td>23</td>
							<td>2010/09/20</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Angelica Ramos</td>
							<td>Chief Executive Officer (CEO)</td>
							<td>London</td>
							<td>47</td>
							<td>2009/10/09</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Gavin Joyce</td>
							<td>Developer</td>
							<td>Edinburgh</td>
							<td>42</td>
							<td>2010/12/22</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jennifer Chang</td>
							<td>Regional Director</td>
							<td>Singapore</td>
							<td>28</td>
							<td>2010/11/14</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Brenden Wagner</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>28</td>
							<td>2011/06/07</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Fiona Green</td>
							<td>Chief Operating Officer (COO)</td>
							<td>San Francisco</td>
							<td>48</td>
							<td>2010/03/11</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Shou Itou</td>
							<td>Regional Marketing</td>
							<td>Tokyo</td>
							<td>20</td>
							<td>2011/08/14</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Michelle House</td>
							<td>Integration Specialist</td>
							<td>Sydney</td>
							<td>37</td>
							<td>2011/06/02</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Suki Burks</td>
							<td>Developer</td>
							<td>London</td>
							<td>53</td>
							<td>2009/10/22</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Prescott Bartlett</td>
							<td>Technical Author</td>
							<td>London</td>
							<td>27</td>
							<td>2011/05/07</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Gavin Cortez</td>
							<td>Team Leader</td>
							<td>San Francisco</td>
							<td>22</td>
							<td>2008/10/26</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Martena Mccray</td>
							<td>Post-Sales support</td>
							<td>Edinburgh</td>
							<td>46</td>
							<td>2011/03/09</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Unity Butler</td>
							<td>Marketing Designer</td>
							<td>San Francisco</td>
							<td>47</td>
							<td>2009/12/09</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Howard Hatfield</td>
							<td>Office Manager</td>
							<td>San Francisco</td>
							<td>51</td>
							<td>2008/12/16</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Hope Fuentes</td>
							<td>Secretary</td>
							<td>San Francisco</td>
							<td>41</td>
							<td>2010/02/12</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Vivian Harrell</td>
							<td>Financial Controller</td>
							<td>San Francisco</td>
							<td>62</td>
							<td>2009/02/14</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Timothy Mooney</td>
							<td>Office Manager</td>
							<td>London</td>
							<td>37</td>
							<td>2008/12/11</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jackson Bradshaw</td>
							<td>Director</td>
							<td>New York</td>
							<td>65</td>
							<td>2008/09/26</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Olivia Liang</td>
							<td>Support Engineer</td>
							<td>Singapore</td>
							<td>64</td>
							<td>2011/02/03</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Bruno Nash</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>38</td>
							<td>2011/05/03</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Sakura Yamamoto</td>
							<td>Support Engineer</td>
							<td>Tokyo</td>
							<td>37</td>
							<td>2009/08/19</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Thor Walton</td>
							<td>Developer</td>
							<td>New York</td>
							<td>61</td>
							<td>2013/08/11</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Finn Camacho</td>
							<td>Support Engineer</td>
							<td>San Francisco</td>
							<td>47</td>
							<td>2009/07/07</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Serge Baldwin</td>
							<td>Data Coordinator</td>
							<td>Singapore</td>
							<td>64</td>
							<td>2012/04/09</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Zenaida Frank</td>
							<td>Software Engineer</td>
							<td>New York</td>
							<td>63</td>
							<td>2010/01/04</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Zorita Serrano</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>56</td>
							<td>2012/06/01</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jennifer Acosta</td>
							<td>Junior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>43</td>
							<td>2013/02/01</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Cara Stevens</td>
							<td>Sales Assistant</td>
							<td>New York</td>
							<td>46</td>
							<td>2011/12/06</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Hermione Butler</td>
							<td>Regional Director</td>
							<td>London</td>
							<td>47</td>
							<td>2011/03/21</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Lael Greer</td>
							<td>Systems Administrator</td>
							<td>London</td>
							<td>21</td>
							<td>2009/02/27</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Jonas Alexander</td>
							<td>Developer</td>
							<td>San Francisco</td>
							<td>30</td>
							<td>2010/07/14</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Shad Decker</td>
							<td>Regional Director</td>
							<td>Edinburgh</td>
							<td>51</td>
							<td>2008/11/13</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Michael Bruce</td>
							<td>Javascript Developer</td>
							<td>Singapore</td>
							<td>29</td>
							<td>2011/06/27</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Donna Snider</td>
							<td>Customer Support</td>
							<td>New York</td>
							<td>27</td>
							<td>2011/01/25</td>
							<td style="width: 280px" class="py-0">
								<div class="btn-group m-0 p-0 justify-content-center" role="group">
									<button type="button" class="btn btn-labeled btn-danger m-0" style="margin-right:2px !important">
										<span class="btn-label"><i class="fa fa-trash"></i></span> Supprimer
									</button>
									<button type="button" class="btn btn-labeled btn-warning m-0" style="margin-left:2px !important">
										<span class="btn-label text-light"><i class="fa fa-edit"></i></span> Modifier
									</button>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script>$(document).ready(() => { $('#myTable').DataTable() })</script>
</body>

</html>
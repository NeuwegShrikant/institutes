
<?php

	$package = '';
	$module = '';
	$route = '';
	$controller = '';
	$model = '';
	$view = '';

	if( isset($_REQUEST['package']) && $_REQUEST['package'] ) {

		$package = $_REQUEST['package'];
		$module = $_REQUEST['module'];
		$routes = $_REQUEST['routes'];
		$model = $_REQUEST['model'];
		$controller = $_REQUEST['controller'];
		$view = $model;

		$folders = [

			$package,

			implode('/', [ $package, $module ]),

			implode('/', [ $package, $module, 'src' ]),

			implode('/', [ $package, $module, 'src', 'app' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Basecode' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes', 'Repositories' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes', 'Permissions' ]),
			// This added For Query
			implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes', 'Queries' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Http' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Http', 'Controllers' ]),
			implode('/', [ $package, $module, 'src', 'app', 'Http', 'Controllers', 'Admin' ]),

			implode('/', [ $package, $module, 'src', 'database' ]),
			implode('/', [ $package, $module, 'src', 'database', 'migrations' ]),
			
			implode('/', [ $package, $module, 'src', 'resources' ]),
			implode('/', [ $package, $module, 'src', 'resources', 'views' ]),
			implode('/', [ $package, $module, 'src', 'resources', 'views', 'admin' ]),
			implode('/', [ $package, $module, 'src', 'resources', 'views', 'admin', $view ]),
			
			implode('/', [ $package, $module, 'src', 'routes' ]),

		];

		foreach ($folders as $folder) mkdir($folder);
		
		$files = [

			implode('/', [ 'test', 'composer.json' ]) => implode('/', [ $package, $module, 'composer.json' ]),
			implode('/', [ 'test', 'src', 'TestServiceProvider.php' ]) => implode('/', [ $package, $module, 'src', $module.'ServiceProvider.php' ]),
			implode('/', [ 'test', 'src', 'app', 'Test.php' ]) => implode('/', [ $package, $module, 'src', 'app', $model.'.php' ]),
			implode('/', [ 'test', 'src', 'app', 'Basecode', 'Classes', 'Repositories', 'TestRepository.php' ]) => implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes', 'Repositories', $module. 'Repository.php' ]),
			implode('/', [ 'test', 'src', 'app', 'Basecode', 'Classes', 'Permissions', 'TestPermission.php' ]) => implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes', 'Permissions', $module. 'Permission.php' ]),
			// This added For Query
			implode('/', [ 'test', 'src', 'app', 'Basecode', 'Classes', 'Queries', 'TestQuery.php' ]) => implode('/', [ $package, $module, 'src', 'app', 'Basecode', 'Classes', 'Queries', $module. 'Query.php' ]),
			implode('/', [ 'test', 'src', 'app', 'Http', 'Controllers', 'Admin', 'TestController.php' ]) => implode('/', [ $package, $module, 'src', 'app', 'Http', 'Controllers', 'Admin', $controller. '.php' ]),
			implode('/', [ 'test', 'src', 'resources', 'views', 'admin', 'Test', 'index.blade.php' ]) => implode('/', [ $package, $module, 'src', 'resources', 'views', 'admin', $view, 'index.blade.php' ]),
			implode('/', [ 'test', 'src', 'resources', 'views', 'admin', 'Test', 'create.blade.php' ]) => implode('/', [ $package, $module, 'src', 'resources', 'views', 'admin', $view, 'create.blade.php' ]),
			implode('/', [ 'test', 'src', 'resources', 'views', 'admin', 'Test', 'form.blade.php' ]) => implode('/', [ $package, $module, 'src', 'resources', 'views', 'admin', $view, 'form.blade.php' ]),
			implode('/', [ 'test', 'src', 'resources', 'views', 'admin', 'Test', 'edit.blade.php' ]) => implode('/', [ $package, $module, 'src', 'resources', 'views', 'admin', $view, 'edit.blade.php' ]),

			implode('/', [ 'test', 'src', 'routes', 'web.php' ]) => implode('/', [ $package, $module, 'src', 'routes', 'web.php' ]),
			implode('/', [ 'test', 'src', 'routes', 'api.php' ]) => implode('/', [ $package, $module, 'src', 'routes', 'api.php' ]),

		];


		foreach ($files as $key => $file) {

			copy( $key, $file );

			file_put_contents($file,str_replace('{PACKAGE}', $package, file_get_contents($file)));
			file_put_contents($file,str_replace('{MODULE}', $module, file_get_contents($file)));
			file_put_contents($file,str_replace('{ROUTE}', $routes, file_get_contents($file)));
			file_put_contents($file,str_replace('{CONTROLLER}', $controller, file_get_contents($file)));
			file_put_contents($file,str_replace('{MODEL}', $model, file_get_contents($file)));
			file_put_contents($file,str_replace('{VIEW}', $view, file_get_contents($file)));

		}

	}

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gen</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

	<div class="row">
		<form style="margin: 2%" class="col-md-3" method="GET">
			
			<fieldset class="form-group">
				<label for="package">Package</label>
				<input type="text" class="form-control" name="package" id="package"  />
			</fieldset>

			<fieldset class="form-group">
				<label for="module">Module</label>
				<input type="text" class="form-control" name="module" id="module" />
			</fieldset>

			<fieldset class="form-group">
				<label for="controller">Controller</label>
				<input type="text" class="form-control" name="controller" id="controller" />
			</fieldset>

			<fieldset class="form-group">
				<label for="model">Model</label>
				<input type="text" class="form-control" name="model" id="model" />
			</fieldset>

			<fieldset class="form-group">
				<label for="routes">Routes</label>
				<input type="text" class="form-control" name="routes" id="routes" />
			</fieldset>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#module').on('input', function(){

				$('#controller').val( $(this).val() + 'Controller' );
				$('#model').val( $(this).val() );
				$('#routes').val( $(this).val() );

			});

		});
	</script>

</body>
</html>
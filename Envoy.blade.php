@servers(['aws' => 'ubuntu@52.15.111.131'])

@include('vendor/autoload.php')

@setup
    $origin = 'git@bitbucket.org:krisjavaprogammer/curso-envoy-aws.git';
    $branch = isset($branch) ? $branch : 'master';
    $app_dir = '/var/www/html/';

    if( !isset($on)) {
        throw new Exception('La variable --on no está defiinida');
    }
@endsetup

@task('test')
    echo "tarea test ejecutada"
    ls {{ $app_dir }}
@endtask

@task('ls',['on' => 'aws'])
    echo "tarea test ejecutada"
    ls {{ $app_dir }}
@endtask
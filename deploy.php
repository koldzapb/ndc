<?php
namespace Deployer;

require 'recipe/symfony4.php';
require 'recipe/cachetool.php';

// Project name
set('application', 'nodepositcasino');
set('git_tty', true);
set('keep_releases', 2);


set('cachetool', '/run/php/php7.2-fpm.sock');

// Project repository
set('repository', 'git@bitbucket.org:zuga81/ndc_new.git');

// Shared files/dirs between deploys 
add('shared_files', ['public/robots.txt']);
add('shared_files', ['public/.htaccess']);
add('shared_files', ['public/googleeb8a28891c5b8be6.html']);
add('shared_dirs', ['public/uploads']);

// Writable dirs by web server 
add('writable_dirs', ['public/uploads']);
set('allow_anonymous_stats', false);

// Binaries

set('bin/npm', function () {
    return locateBinaryPath('npm');
});

set('bin/yarn', function () {
    return locateBinaryPath('yarn');
});

// Hosts

host('nodepositcasino.org')
    ->stage('live')
    ->user('ndc')
    ->set('branch', 'master')
    ->set('deploy_path', '/home/ndc/www');

host('staging.nodepositcasino.org')
    ->stage('staging')
    ->user('ndc')
    ->set('branch', 'master')
    ->set('deploy_path', '/home/ndc/www/staging');

host('dev.nodepositcasino.org')
    ->stage('development')
    ->user('ndc')
    ->set('branch', 'develop')
    ->set('composer_options', '{{composer_action}} --verbose --prefer-dist --no-progress --no-interaction')
    ->set('deploy_path', '/home/ndc/www/development');

localhost()
    ->stage('local')
    ->set('branch', 'develop')
    ->set('deploy_path', '/var/www/{{application}}');
// Tasks

desc('Install CKEditor');
task('deploy:ckeditor:install', function () {
    run('{{bin/console}} ckeditor:install --clear=skip');
});

desc('Install assets');
task('deploy:assets:install', function () {
    run('{{bin/console}} assets:install public');
});

desc('Install npm libraries');
task('deploy:npm', function () {
    within('{{release_path}}', function () {
        run('{{bin/npm}} install');
    });
});

desc('Build assets');
task('deploy:encore', function () {
    within('{{release_path}}', function () {
        run('{{bin/yarn}} encore production');
    });
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'database:migrate');
before('deploy:symlink', 'deploy:ckeditor:install');
after('deploy:ckeditor:install', 'deploy:assets:install');
after('deploy:assets:install', 'deploy:npm');
after('deploy:npm', 'deploy:encore');
//after('deploy:symlink', 'cachetool:clear:opcache');
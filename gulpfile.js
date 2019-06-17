'use strict';

global.$ = {
	gulp: require('gulp'),
	gp: require('gulp-load-plugins')(),
	bs: require('browser-sync').create(),
	del: require('del'),
	uncss: require('uncss'),
	gcmq: require('gulp-group-css-media-queries'),
	path: {
		tasks: require('./gulp/config/tasks.js')
	}
};

$.path.tasks.forEach(function(taskPath){
	require(taskPath)();
});

$.gulp.task('default',$.gulp.series(
	'clean',
	$.gulp.parallel('html', 'php', 'sass:dev', 'scripts', 'img:dev', 'svg'),
	$.gulp.parallel('watch', 'serve'),

	));

$.gulp.task('build',$.gulp.series(
	'clean',
	$.gulp.parallel('html', 'php', 'sass:build', 'scripts', 'img:build'),
	$.gulp.parallel('watch', 'serve'),
	));


$.gulp.task('dev', $.gulp.series(
	'clean',
	$.gulp.parallel('sass:dev', 'html', 'php', 'scripts', 'fonts', 'svg', 'img:dev')));

$.gulp.task('build', $.gulp.series(
	'clean',
	$.gulp.parallel('sass:build', 'html', 'php', 'scripts', 'fonts', 'svg', 'img:build')));

$.gulp.task('default', $.gulp.series(
	'dev',
	$.gulp.parallel(
		'watch',
		'serve'
		),
	));
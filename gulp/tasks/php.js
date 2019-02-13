module.exports = function(){
	$.gulp.task('php', function(){
		return $.gulp.src('src/**/*.php')
		.pipe($.gulp.dest('build'))
		.on('end', $.bs.reload);
	});
}
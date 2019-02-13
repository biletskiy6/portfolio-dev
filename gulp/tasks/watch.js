module.exports = function(){
	$.gulp.task('watch', function(){
		$.gulp.watch('src/*.html', $.gulp.series('html'));
		$.gulp.watch('src/**/*.php', $.gulp.series('php'));
		$.gulp.watch('src/static/sass/**/*.sass', $.gulp.series('sass:dev'));
		$.gulp.watch('src/static/js/**/*.js', $.gulp.series('scripts'));
		$.gulp.watch('src/static/img/svg/*.svg', $.gulp.series('svg'));
		$.gulp.watch('src/static/img/**/*', $.gulp.series('img:dev'));
	});
}
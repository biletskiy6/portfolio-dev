module.exports = function(){
	$.gulp.task('uncss', function(){
		return $.gulp.src('build/static/css/main.css')
		.pipe($.gp.uncss({
			html: ['http://localhost:3000/build']
		}))
		.pipe($.gulp.dest('build/static/css/uncss/'))
	});
}
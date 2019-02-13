module.exports = function(){
	$.gulp.task('serve', function(){
		$.bs.init({
			proxy: "http://localhost:8888/portfolio/build"
		});
		//bs.watch('build', bs.reload)
	});
}
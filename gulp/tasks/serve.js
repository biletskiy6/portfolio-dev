module.exports = function(){
	$.gulp.task('serve', function(){
		$.bs.init({
			proxy: "http://portfolio/build"
		});
		//bs.watch('build', bs.reload)
	});
}
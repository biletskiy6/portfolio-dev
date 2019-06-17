'use strict';

module.exports = function() {
		$.gulp.task('svg', function() {
		return $.gulp.src('./src/static/img/svg/*.svg')
		.pipe($.gp.svgstore({
			inlineSvg: true
		}))
		 .pipe($.gp.cheerio({
            run: function ($) {
                //$('[fill]').removeAttr('fill');
            },
            parserOptions: { xmlMode: true }
        }))
		.pipe($.gp.rename("sprite.svg"))
		.pipe($.gulp.dest('./build/static/img/svg/'))
	});
	
	
}
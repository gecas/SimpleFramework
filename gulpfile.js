var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');

gulp.task('default', function() {
	return gulp.src('scss/app.scss')
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		//.pipe(minifyCss())
		.pipe(gulp.dest('./css/'));
});

gulp.task('watch', function () {
  gulp.watch(['scss/*.scss'], ['default']);
});
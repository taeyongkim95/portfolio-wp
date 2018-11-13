var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');
var minifyjs = require('gulp-js-minify');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var babel = require('gulp-babel');

var browserify  = require('browserify');
var babelify    = require('babelify');
var source      = require('vinyl-source-stream');
var buffer      = require('vinyl-buffer');
var uglify      = require('gulp-uglify');
var livereload  = require('gulp-livereload');

gulp.task('css', function() {
	return gulp.src('src/scss/main.scss')
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(autoprefixer('last 1 version'))
		.pipe(cssnano())
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('public/css'))
		// .pipe(notify({ message: 'CSS Compiled'}));
});


gulp.task('js', function () {
    // app.js is your main JS file with all your module inclusions
    return browserify({entries: 'src/js/main.js', debug: true})
        .transform("babelify", { presets: ["env"] })
        .bundle()
        .pipe(source('main.js'))
        .pipe(buffer())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('public/js'))
        .pipe(livereload());
});



gulp.task('img', function() {
	return gulp.src('src/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('public/images'));
});
gulp.task('default', [ 'css', 'js', 'img' ]);

gulp.task('watch', function(){
  gulp.watch('src/scss/**/*.scss', ['css']);
  gulp.watch('src/js/**/*.js', ['js']);
  gulp.watch('src/images/**/*', ['img']);
})
gulp.task('default', function() {
	gulp.run('css');
	gulp.run('js');
	gulp.run('img');

	gulp.watch('src/scss/**/*.scss', function() {
		gulp.run('css');
	})
	gulp.watch('src/js/**/*.js', function() {
		gulp.run('js');
	})
	gulp.watch('src/images/**/*', function() {
		gulp.run('img');
	})
});

var gulp   = require('gulp'),
    sass   = require('gulp-sass'),
    less   = require('gulp-less'),
    minify = require('gulp-cssnano'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');

var paths = {
	css   : [
		'bower_components/semantic/dist/semantic.min.css'
	],
	js    : [
		'bower_components/jquery/dist/jquery.min.js',
		'bower_components/semantic/dist/semantic.min.js'
	],
	themes: [
		'bower_components/semantic/dist/themes/**/*'
	]
};

/*
 |--------------------------------------------------------------------------
 | Vendor tasks
 |--------------------------------------------------------------------------
 */

gulp.task('vendor-js', function () {
	return gulp.src(paths.js)
		.pipe(concat('vendor.min.js'))
		.pipe(gulp.dest('public/js'))
});

gulp.task('vendor-css', function () {
	return gulp.src(paths.css)
		.pipe(concat('vendor.min.css'))
		.pipe(gulp.dest('public/css'))
});

gulp.task('vendor-js-min', function () {
	return gulp.src(paths.js)
		.pipe(concat('vendor.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('public/js'))
});

gulp.task('vendor-css-min', function () {
	return gulp.src(paths.css)
		.pipe(concat('vendor.min.css'))
		.pipe(minify())
		.pipe(gulp.dest('public/css'))
});

/*
 |--------------------------------------------------------------------------
 | Master tasks
 |--------------------------------------------------------------------------
 */

gulp.task('master-js', function () {
	return gulp.src('resources/assets/js/**/*.js')
		.pipe(concat('master.min.js'))
		.pipe(gulp.dest('public/js'))
});

gulp.task('master-css', function () {
	return gulp.src('resources/assets/sass/**/*.sass')
		.pipe(sass({onError: console.error.bind(console, 'SASS ERROR')}))
		.pipe(concat('master.min.css'))
		.pipe(gulp.dest('public/css'))
});

gulp.task('master-js-min', function () {
	return gulp.src('resources/assets/js/**/*.js')
		.pipe(uglify())
		.pipe(concat('master.min.js'))
		.pipe(gulp.dest('public/js'))
});

gulp.task('master-css-min', function () {
	return gulp.src('resources/assets/sass/**/*.sass')
		.pipe(sass({onError: console.error.bind(console, 'SASS ERROR')}))
		.pipe(minify())
		.pipe(concat('master.min.css'))
		.pipe(gulp.dest('public/css'))
});

/*
 |--------------------------------------------------------------------------
 | Themes tasks
 |--------------------------------------------------------------------------
 */

gulp.task('themes', function () {
	return gulp.src(paths.themes)
		.pipe(gulp.dest('public/css/themes'));
});

/*
 |--------------------------------------------------------------------------
 | Watch tasks
 |--------------------------------------------------------------------------
 */

gulp.task('watch', function () {
	gulp.watch('resources/assets/js/**/*.js', ['master-js']);
	gulp.watch('resources/assets/sass/**/*.sass', ['master-css']);
});

/*
 |--------------------------------------------------------------------------
 | Default tasks
 |--------------------------------------------------------------------------
 */

gulp.task('default', ['vendor-js', 'vendor-css', 'master-js', 'master-css', 'themes']);
gulp.task('prod', ['vendor-js-min', 'vendor-css-min', 'master-js-min', 'master-css-min', 'themes']);

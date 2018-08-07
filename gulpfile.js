var gulp = require('gulp'),
    sass = require('gulp-sass'),
    jsmin = require('gulp-jsmin'),
    watch = require('gulp-watch'),
    cssmin = require('gulp-cssmin'),
    postCSS = require( 'gulp-postcss' ),
    uglify = require('gulp-uglify'),
    rename       = require( 'gulp-rename' ),
    autoprefixer = require('autoprefixer');

gulp.task('default', ['watch']);

gulp.task( 'build', [ 'sass:build'] );

gulp.task( 'watch', function () {
    watch( ['_src/sass/**/*.scss'],
        function () {
            gulp.start( 'sass' )
        } ),
    watch( ['_src/js/*.js'],
        function () {
            gulp.start( 'compressjs' )
        } );
});


gulp.task('sass', function () {
  return gulp.src('_src/sass/**/*.scss')
    .pipe( sass().on('error', sass.logError) )
    .pipe(
            postCSS( [ autoprefixer( { browsers: [ 'last 5 versions' ] } ) ] )
        )
    .pipe(gulp.dest('public/css'));
});

gulp.task('compressjs', function () {
    gulp.src('_src/js/*.js')
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/js'));
});


gulp.task( 'sass:build', function () {
    return gulp.src('_src/sass/**/*.scss')
        .pipe( sass( { outputStyle: 'compressed' } ).on( 'error', sass.logError ) )
        .pipe(
            postCSS( [ autoprefixer( { browsers: [ 'last 5 versions' ] } ) ] )
        )
        .pipe( gulp.dest('public/css') );
} );

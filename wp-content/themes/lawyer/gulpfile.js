'use strict';

var gulp          = require('gulp'),
	concatCss     = require('gulp-concat-css'),
	cleanCSS      = require('gulp-clean-css'),
	rename        = require('gulp-rename'),
	prefix        = require('gulp-autoprefixer'),
	concat        = require('gulp-concat'),
  	uglify        = require('gulp-uglifyjs'),
  	imagemin      = require('gulp-imagemin'),
  	pngquant      = require('imagemin-pngquant');


gulp.task('css', function(){
	return gulp.src([
		'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
		'src/libs/datapiker/bootstrap/css/bootstrap.min.css',
		'src/libs/datapiker/bootstrap/css/bootstrap-datetimepicker.min.css',
		'src/libs/owlcarousel/dist/assets/owl.carousel.min.css',
		'src/libs/owlcarousel/dist/assets/owl.theme.default.min.css',
		'src/css/custom-css.css',
		'src/css/main-style.css'
		])
	.pipe(concatCss('bundle.css'))
	.pipe(prefix(' last 15 version'))
	.pipe(cleanCSS(''))
	.pipe(rename('bundle.min.css'))
	.pipe(gulp.dest('./css'))
});

// scripts-all 
gulp.task('scripts', function(){
	 return gulp.src([
	  'src/libs/mask/jquery.mask.js',
	  'src//libs/owlcarousel/dist/owl.carousel.min.js',
	  'src/libs/topScroll/scrolls.js',
	  'src/libs/datapiker/bootstrap/js/moment-with-locales.min.js',
	  'src/libs/datapiker/bootstrap/js/bootstrap-datetimepicker.min.js',
	  'src/js/script.js'

	  ])
	  .pipe(concat('bundle.min.js'))
	  .pipe(uglify())
	  .pipe(gulp.dest('js'));

});

//image-png
gulp.task('img',function(){
	  return gulp.src([
	    'src/img/**/*.jpg',
	    'src/img/**/*.png',
	    'src/img/**/*.gif' 
	    ])
	    .pipe(imagemin({
	     interlaced : true,
	     progressive : true,
	     svgoPlugins : [{removeViewBox: false}],
	     une: [pngquant()]
	    }))
	    .pipe(gulp.dest('img'));
	  
});	
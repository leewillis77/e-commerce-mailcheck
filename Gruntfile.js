module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        files: {
			'js/edd.min.js': 'js/edd.js',
			'js/shopp.min.js': 'js/shopp.js',
			'js/woo.min.js': 'js/woo.js',
			'js/wpec.min.js': 'js/wpec.js'
        }
      }
    },
    cssmin: {
    	target: {
    		files: {
    			'css/wpcm.min.css': 'css/wpcm.css'
    		}
    	}
    },
    watch: {
    	files: [
			'js/edd.js',
			'js/shopp.js',
			'js/woo.js',
			'js/wpec.js',
			'css/wpcm.css'
		],
    	tasks: [ 'default' ]
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify','cssmin']);

};
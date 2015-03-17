module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    
    sass: {
        options: {
          style: 'compressed'
        },
        dist: {
            files: {
                '_site/assets/styles/screen.css': 'assets/scss/screen.scss'
            }
        }
    },

    // ------------------------------------
    // Shell Tasks
    //
    // Tasks the run terminal commands
    // ------------------------------------
    shell: {
        jekyllServe: {
            command: 'jekyll serve'
        },
        jekyllBuild: {
            command: 'jekyll build --config _config.yml'
        }
    },

    // ------------------------------------
    // Watch Tasks
    // ------------------------------------
    watch: {
        options: {
            livereload: true
        },
        site: {
            files: ['index.html', 'about.html', '_layouts/*.html', '_posts/*.md', '_projects/*.md', '_includes/*.html'],
            tasks: ['shell:jekyllBuild']
        },
        css: {
            files: ['assets/scss/*.scss'],
            tasks: ['sass', 'shell:jekyllBuild']
        }
    },

  });

  // Load in grunt plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-shell');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Grunt Tasks
  grunt.registerTask('serve', ['shell:jekyllServe']);
  grunt.registerTask('default', ['sass']);

};